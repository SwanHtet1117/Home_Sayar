<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class AccountProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_an_admin_can_open_their_profile_from_the_account_menu(): void
    {
        $adminRoleId = UserRole::query()->where('role', 'admin')->value('id');
        $user = User::factory()->create([
            'name' => 'Admin User',
            'user_role_id' => $adminRoleId,
        ]);

        $response = $this->actingAs($user)->get(route('account.profile.edit'));

        $response->assertOk()
            ->assertSee('Your profile')
            ->assertSee('Profile</a>', false)
            ->assertSee(route('account.profile.edit'))
            ->assertSee('value="Admin User"', false);
    }

    public function test_updating_the_account_email_sends_verification_and_requires_reverification(): void
    {
        Notification::fake();

        $user = User::factory()->create([
            'email' => 'admin@example.com',
        ]);

        $response = $this->actingAs($user)->put(route('account.profile.update'), [
            'name' => 'Updated Admin',
            'email' => 'updated-admin@example.com',
        ]);

        $response->assertRedirect(route('account.profile.edit'));
        $this->assertDatabaseHas('users', [
            'id' => $user->getKey(),
            'name' => 'Updated Admin',
            'email' => 'updated-admin@example.com',
            'email_verified_at' => null,
        ]);
        Notification::assertSentTo($user, VerifyEmail::class);
    }

    public function test_updating_only_the_name_keeps_the_existing_email_verification(): void
    {
        Notification::fake();

        $user = User::factory()->create([
            'email' => 'admin@example.com',
        ]);

        $this->actingAs($user)->put(route('account.profile.update'), [
            'name' => 'Updated Admin',
            'email' => 'admin@example.com',
        ])->assertRedirect(route('account.profile.edit'));

        $this->assertNotNull($user->fresh()->email_verified_at);
        Notification::assertNothingSent();
    }
}
