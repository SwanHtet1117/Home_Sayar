<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminUserController extends Controller
{
    public function index(): View
    {
        $this->ensureAdmin();

        return view('admin.users', [
            'users' => User::with('userRole')->latest()->get(),
            'roles' => UserRole::orderBy('role')->get(),
        ]);
    }

    public function updateRole(Request $request, User $user): RedirectResponse
    {
        $this->ensureAdmin();

        $validated = $request->validate([
            'user_role_id' => ['required', 'integer', 'exists:user_role,id'],
        ]);

        $user->update(['user_role_id' => $validated['user_role_id']]);

        return back()->with('success', 'User role updated successfully.');
    }

    public function destroy(User $user): RedirectResponse
    {
        $this->ensureAdmin();

        if ($user->is(auth()->user())) {
            return back()->withErrors(['user' => 'You cannot delete your own account.']);
        }

        $user->delete();

        return back()->with('success', 'User account deleted successfully.');
    }

    private function ensureAdmin(): void
    {
        abort_unless(auth()->check() && auth()->user()->role === 'admin', 403);
    }
}
