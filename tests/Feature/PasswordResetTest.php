<?php

namespace Tests\Feature;

use App\Models\User;
use App\Notifications\EmailOtpNotification;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_password_reset_link_can_be_requested(): void
    {
        Notification::fake();
        $user = User::factory()->create(['email' => 'reset@example.com']);

        $response = $this->post('/password/reset', [
            'email' => $user->email,
        ]);

        $response->assertRedirect(route('password.reset.email.verify'));
        Notification::assertSentTo($user, ResetPassword::class);
        Notification::assertNotSentTo($user, EmailOtpNotification::class);
    }

    public function test_password_reset_request_does_not_disclose_unknown_emails(): void
    {
        Notification::fake();

        $response = $this->post('/password/reset', [
            'email' => 'unknown@example.com',
        ]);

        $response->assertRedirect(route('password.reset.email.verify'));
        $response->assertSessionHas('status', 'If the email is registered, a password reset link has been sent.');
        Notification::assertNothingSent();
    }

    public function test_user_can_reset_password_using_the_reset_link_without_an_otp(): void
    {
        $user = User::factory()->create([
            'email' => 'reset@example.com',
            'password' => 'old-password',
        ]);
        $token = Password::broker()->createToken($user);

        $response = $this->post('/password/reset/update', [
            'token' => $token,
            'email' => $user->email,
            'password' => 'NewPassword1!',
            'password_confirmation' => 'NewPassword1!',
        ]);

        $response->assertRedirect(route('home'));
        $response->assertSessionHas('success', 'Your password has been reset.');
        $this->assertAuthenticatedAs($user);
        $this->assertTrue(Hash::check('NewPassword1!', $user->fresh()->password));
    }

    public function test_password_reset_rejects_an_invalid_token(): void
    {
        $user = User::factory()->create(['email' => 'reset@example.com']);

        $response = $this->from('/password/reset/invalid')->post('/password/reset/update', [
            'token' => 'invalid-token',
            'email' => $user->email,
            'password' => 'NewPassword1!',
            'password_confirmation' => 'NewPassword1!',
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
        $this->assertFalse(Hash::check('NewPassword1!', $user->fresh()->password));
    }
}
