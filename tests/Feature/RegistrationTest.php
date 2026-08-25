<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_register(): void
    {
        Notification::fake();

        $response = $this->post('/register', [
            'name' => 'New User',
            'email' => 'new-user@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect(route('verification.notice'));
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'name' => 'New User',
            'email' => 'new-user@example.com',
        ]);
        $this->assertSame('parent', User::query()->firstOrFail()->role);
        $this->assertNull(User::query()->firstOrFail()->email_verified_at);
        $this->assertTrue(Hash::check('password', User::query()->firstOrFail()->password));
        Notification::assertSentTo(User::query()->firstOrFail(), VerifyEmail::class);
    }

    public function test_a_user_can_verify_their_email_with_a_signed_link(): void
    {
        $user = User::factory()->create();

        $url = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $user->getKey(), 'hash' => sha1($user->getEmailForVerification())],
        );

        $response = $this->get($url);

        $response->assertRedirect(route('home'));
        $response->assertSessionHas('verified', true);
        $this->assertNotNull($user->fresh()->email_verified_at);
    }

    public function test_an_unverified_user_does_not_see_account_navigation_controls(): void
    {
        $user = User::factory()->unverified()->create(['name' => 'Waiting User']);

        $response = $this->actingAs($user)->get(route('home'));

        $response->assertDontSee('aria-label="Open account menu for Waiting User"');
        $response->assertDontSee('onclick="openNotificationModal()"');
    }

    public function test_registration_rejects_an_existing_email(): void
    {
        User::factory()->create(['email' => 'existing@example.com']);

        $response = $this->from('/register')->post('/register', [
            'name' => 'Another User',
            'email' => 'existing@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/register');
        $response->assertSessionHasErrors(['email']);
    }
}
