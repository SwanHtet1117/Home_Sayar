<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Tests\TestCase;

class PasswordPolicyTest extends TestCase
{
    public function test_default_password_policy_requires_eight_characters_mixed_case_a_number_and_a_symbol(): void
    {
        $this->assertTrue($this->isValidPassword('Password1!'));

        foreach ([
            'Aa1!' => 'minimum length',
            'lowercase1!' => 'uppercase letter',
            'UPPERCASE1!' => 'lowercase letter',
            'Password!' => 'number',
            'Password1' => 'symbol',
        ] as $password => $missingRequirement) {
            $this->assertFalse(
                $this->isValidPassword($password),
                "The policy should reject a password missing its {$missingRequirement} requirement.",
            );
        }
    }

    private function isValidPassword(string $password): bool
    {
        return Validator::make(
            ['password' => $password],
            ['password' => ['required', Password::defaults()]],
        )->passes();
    }
}
