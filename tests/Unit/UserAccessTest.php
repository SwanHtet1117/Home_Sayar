<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\Attributes\Test;

class UserAccessTest extends \PHPUnit\Framework\TestCase
{
    #[Test]
    public function verified_user_without_role_can_still_access_application_forms(): void
    {
        $user = new class extends User {
            public ?string $roleOverride = null;
            public bool $verified = true;

            public function hasVerifiedEmail(): bool
            {
                return $this->verified;
            }

            public function getRoleAttribute(): ?string
            {
                return $this->roleOverride;
            }
        };

        $this->assertTrue($user->canApplyForRole('parent'));
        $this->assertTrue($user->canApplyForRole('teacher'));
        $this->assertFalse($user->canAccessRoleFeature('parent'));
        $this->assertFalse($user->canAccessRoleFeature('teacher'));
    }

    #[Test]
    public function verified_parent_user_can_access_parent_role_feature(): void
    {
        $user = new class extends User {
            public string $roleOverride = 'parent';
            public bool $verified = true;

            public function hasVerifiedEmail(): bool
            {
                return $this->verified;
            }

            public function getRoleAttribute(): ?string
            {
                return $this->roleOverride;
            }
        };

        $this->assertTrue($user->canApplyForRole('parent'));
        $this->assertTrue($user->canAccessRoleFeature('parent'));
        $this->assertFalse($user->canAccessRoleFeature('teacher'));
    }

    #[Test]
    public function verified_teacher_user_can_access_teacher_role_feature(): void
    {
        $user = new class extends User {
            public string $roleOverride = 'teacher';
            public bool $verified = true;

            public function hasVerifiedEmail(): bool
            {
                return $this->verified;
            }

            public function getRoleAttribute(): ?string
            {
                return $this->roleOverride;
            }
        };

        $this->assertTrue($user->canApplyForRole('teacher'));
        $this->assertTrue($user->canAccessRoleFeature('teacher'));
        $this->assertFalse($user->canAccessRoleFeature('parent'));
    }

    #[Test]
    public function unverified_user_cannot_access_application_or_role_features(): void
    {
        $unverifiedUser = new class extends User {
            public string $roleOverride = 'parent';
            public bool $verified = false;

            public function hasVerifiedEmail(): bool
            {
                return $this->verified;
            }

            public function getRoleAttribute(): ?string
            {
                return $this->roleOverride;
            }
        };

        $this->assertFalse($unverifiedUser->canApplyForRole('parent'));
        $this->assertFalse($unverifiedUser->canApplyForRole('teacher'));
        $this->assertFalse($unverifiedUser->canAccessRoleFeature('parent'));
        $this->assertFalse($unverifiedUser->canAccessRoleFeature('teacher'));
    }
}
