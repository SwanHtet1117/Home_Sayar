<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request, string $id, string $hash): RedirectResponse
    {
        abort_unless($request->hasValidSignature(), 403);

        $user = User::query()->find($id);

        if (! $user) {
            $user = User::query()->get()->first(
                fn (User $candidate): bool => hash_equals(
                    sha1($candidate->getEmailForVerification()),
                    $hash,
                ),
            );
        }

        abort_if(! $user, 404);

        abort_unless(hash_equals(sha1($user->getEmailForVerification()), $hash), 403);

        if (! $user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        return redirect()->intended(route('home'))->with('verified', true);
    }
}
