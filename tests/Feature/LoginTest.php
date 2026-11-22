<?php

namespace Tests\Feature;

use App\Models\User;
use App\Notifications\EmailOtpNotification;
use App\Services\EmailOtpService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_log_in_with_valid_credentials(): void
    {
        Notification::fake();
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        $response = $this->post('/login', [
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('login.otp'));
        $this->assertGuest();

        $code = null;
        Notification::assertSentTo($user, EmailOtpNotification::class, function (EmailOtpNotification $notification) use (&$code): bool {
            $code = $notification->code;

            return $notification->purpose === EmailOtpService::LOGIN;
        });

        $response = $this->post(route('login.otp.verify'), ['code' => $code]);

        $response->assertRedirect(route('home'));
        $response->assertSessionHas('success', 'Login successful. Welcome back!');
        $this->assertAuthenticatedAs($user);
    }

    public function test_login_requires_a_valid_email_otp(): void
    {
        Notification::fake();
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ])->assertRedirect(route('login.otp'));

        $response = $this->from(route('login.otp'))->post(route('login.otp.verify'), [
            'code' => '000000',
        ]);

        $response->assertRedirect(route('login.otp'));
        $response->assertSessionHasErrors('code');
        $this->assertGuest();
    }

    public function test_login_rejects_invalid_credentials(): void
    {
        User::factory()->create([
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        $response = $this->from('/login')->post('/login', [
            'email' => 'user@example.com',
            'password' => 'incorrect-password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_a_user_can_log_out(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/logout');

        $response->assertRedirect(route('login'));
        $this->assertGuest();
    }

    public function test_account_menu_contains_password_settings(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('home'));

        $response->assertOk();
        $response->assertSee('Settings');
        $response->assertSee('Change password');
        $response->assertSee(route('account.password.edit'));
    }

    public function test_authenticated_user_can_change_their_password(): void
    {
        $user = User::factory()->create(['password' => 'old-password']);

        $response = $this->actingAs($user)->put(route('account.password.update'), [
            'current_password' => 'old-password',
            'password' => 'NewPassword1!',
            'password_confirmation' => 'NewPassword1!',
        ]);

        $response->assertRedirect(route('account.password.edit'));
        $response->assertSessionHas('success', 'Your password has been changed.');
        $this->assertTrue(Hash::check('NewPassword1!', $user->fresh()->password));
    }

    public function test_password_change_requires_the_correct_current_password(): void
    {
        $user = User::factory()->create(['password' => 'old-password']);

        $response = $this->actingAs($user)->from(route('account.password.edit'))->put(route('account.password.update'), [
            'current_password' => 'incorrect-password',
            'password' => 'NewPassword1!',
            'password_confirmation' => 'NewPassword1!',
        ]);

        $response->assertRedirect(route('account.password.edit'));
        $response->assertSessionHasErrors('current_password');
        $this->assertTrue(Hash::check('old-password', $user->fresh()->password));
    }

    public function test_password_settings_are_only_available_to_authenticated_users(): void
    {
        $response = $this->get(route('account.password.edit'));

        $response->assertRedirect(route('login'));
    }
}
