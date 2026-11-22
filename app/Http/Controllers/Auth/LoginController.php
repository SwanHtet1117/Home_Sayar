<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\EmailOtpService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function store(Request $request, EmailOtpService $otpService): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::guard()->validate($credentials)) {
            return back()
                ->withErrors(['email' => 'The provided credentials do not match our records.'])
                ->onlyInput('email');
        }

        $user = User::query()->where('email', $credentials['email'])->firstOrFail();
        $otpService->issue($user, EmailOtpService::LOGIN);

        $request->session()->put([
            'auth.login_otp.user_id' => $user->getKey(),
            'auth.login_otp.remember' => $request->boolean('remember_me'),
        ]);

        return redirect()->route('login.otp');
    }

    public function showOtpForm(Request $request): View|RedirectResponse
    {
        $userId = $request->session()->get('auth.login_otp.user_id');
        $user = $userId ? User::query()->find($userId) : null;

        if (! $user) {
            return redirect()->route('login');
        }

        return view('authentication.login_otp', ['email' => $user->email]);
    }

    public function verifyOtp(Request $request, EmailOtpService $otpService): RedirectResponse
    {
        $validated = $request->validate([
            'code' => ['required', 'digits:6'],
        ]);

        $userId = $request->session()->get('auth.login_otp.user_id');
        $user = $userId ? User::query()->find($userId) : null;

        if (! $user) {
            return redirect()->route('login');
        }

        if (! $otpService->verify($user, EmailOtpService::LOGIN, $validated['code'])) {
            throw ValidationException::withMessages([
                'code' => 'The code is invalid or expired. Request a new code and try again.',
            ]);
        }

        $remember = $request->session()->pull('auth.login_otp.remember', false);
        $request->session()->forget('auth.login_otp.user_id');
        Auth::login($user, $remember);
        $request->session()->regenerate();

        return redirect()
            ->intended(route('home'))
            ->with('success', 'Login successful. Welcome back!');
    }

    public function resendOtp(Request $request, EmailOtpService $otpService): RedirectResponse
    {
        $userId = $request->session()->get('auth.login_otp.user_id');
        $user = $userId ? User::query()->find($userId) : null;

        if (! $user) {
            return redirect()->route('login');
        }

        $otpService->issue($user, EmailOtpService::LOGIN);

        return redirect()
            ->route('login.otp')
            ->with('status', 'A new verification code has been sent.');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
