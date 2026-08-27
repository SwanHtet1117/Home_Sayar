<?php

namespace App\Http\Controllers;

use App\Models\ParentProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ParentProfileController extends Controller
{
    public function edit(Request $request): View
    {
        abort_unless($request->user()->role === 'parent', 403);

        $profile = $request->user()->parentProfile;

        return view('parent.profile_settings', compact('profile'));
    }

    public function update(Request $request): RedirectResponse
    {
        $user = $request->user();

        abort_unless($user->role === 'parent', 403);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'address' => ['required', 'string'],
            'region' => ['required', 'string', 'max:255'],
            'township' => ['required', 'string', 'max:255'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'google_map_location' => ['nullable', 'url', 'max:255'],
            'profile_photo' => ['nullable', 'image', 'max:2048'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        $profile = $user->parentProfile ?? new ParentProfile(['user_id' => $user->id]);
        $profile->fill([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'address' => $validated['address'],
            'region' => $validated['region'],
            'township' => $validated['township'],
            'latitude' => $validated['latitude'] ?? null,
            'longitude' => $validated['longitude'] ?? null,
            'google_map_location' => $validated['google_map_location'] ?? null,
        ]);

        if ($request->hasFile('profile_photo')) {
            if ($profile->profile_photo) {
                Storage::disk('public')->delete($profile->profile_photo);
            }

            $profile->profile_photo = $request->file('profile_photo')->store('parent-profiles', 'public');
        }

        $profile->save();

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if (! empty($validated['password'])) {
            $user->password = $validated['password'];
        }

        $user->save();

        return redirect()->route('parent.dashboard')->with('success', 'Parent profile updated successfully.');
    }
}
