<?php

namespace App\Http\Controllers;

use App\Models\TeacherProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherProfileController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['nullable', 'in:male,female'],
            'dob' => ['nullable', 'date'],
            'nationality' => ['nullable', 'string', 'max:255'],
            'nrc' => ['nullable', 'string', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:255'],
            'social_media_link' => ['nullable', 'url', 'max:255'],
            'city' => ['nullable', 'exists:cities,id'],
            'township' => ['nullable', 'exists:townships,id'],
            'detail_add' => ['nullable', 'string', 'max:500'],
            'degree' => ['nullable', 'string', 'max:255'],
            'graduated_year' => ['nullable', 'date'],
            'university_school' => ['nullable', 'string', 'max:255'],
            'career_level' => ['nullable', 'string', 'max:255'],
            'experience_year' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'string'],
            'teaching_video' => ['nullable', 'url', 'max:255'],
            'modes' => ['nullable', 'array'],
            'modes.*' => ['in:onsite,online'],
            'selectedClasses' => ['nullable', 'array'],
            'selectedClasses.*' => ['exists:classes,id'],
            'selectedTownships' => ['nullable', 'array'],
            'selectedTownships.*' => ['exists:townships,id'],
            'selectedSubjects' => ['nullable', 'array'],
            'selectedSubjects.*' => ['exists:subjects,id'],
            'fees' => ['nullable', 'string', 'max:255'],
            'nrc_file' => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:5120'],
            'degree_file' => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:5120'],
            'other_files' => ['nullable', 'array'],
            'other_files.*' => ['file', 'mimes:jpg,jpeg,png,pdf', 'max:5120'],
        ]);

        $profile = $request->user()?->teacherProfile()->firstOrNew() ?? new TeacherProfile();

        if ($request->hasFile('nrc_file')) {
            if ($profile->nrc_file && Storage::disk('public')->exists($profile->nrc_file)) {
                Storage::disk('public')->delete($profile->nrc_file);
            }
            $validated['nrc_file'] = $request->file('nrc_file')->store('teacher-profiles', 'public');
        } elseif (! array_key_exists('nrc_file', $validated)) {
            $validated['nrc_file'] = $profile->nrc_file;
        }

        if ($request->hasFile('degree_file')) {
            if ($profile->degree_file && Storage::disk('public')->exists($profile->degree_file)) {
                Storage::disk('public')->delete($profile->degree_file);
            }
            $validated['degree_file'] = $request->file('degree_file')->store('teacher-profiles', 'public');
        } elseif (! array_key_exists('degree_file', $validated)) {
            $validated['degree_file'] = $profile->degree_file;
        }

        $otherFiles = [];
        if ($request->hasFile('other_files')) {
            foreach ($request->file('other_files') as $file) {
                $otherFiles[] = $file->store('teacher-profiles', 'public');
            }
            $validated['other_files'] = $otherFiles;
        } else {
            $validated['other_files'] = $profile->other_files ?? [];
        }

        $profile->fill([
            'user_id' => $request->user()?->id ?? $profile->user_id,
            'name' => $validated['name'],
            'gender' => $validated['gender'] ?? null,
            'dob' => $validated['dob'] ?? null,
            'nationality' => $validated['nationality'] ?? null,
            'nrc' => $validated['nrc'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'email' => $validated['email'] ?? null,
            'social_media_link' => $validated['social_media_link'] ?? null,
            'city_id' => $validated['city'] ?? null,
            'township_id' => $validated['township'] ?? null,
            'detail_address' => $validated['detail_add'] ?? null,
            'degree' => $validated['degree'] ?? null,
            'graduated_at' => $validated['graduated_year'] ?? null,
            'university_school' => $validated['university_school'] ?? null,
            'career_level' => $validated['career_level'] ?? null,
            'experience_year' => $validated['experience_year'] ?? null,
            'preferred_subject_ids' => $validated['selectedSubjects'] ?? [],
            'preferred_class_ids' => $validated['selectedClasses'] ?? [],
            'preferred_township_ids' => $validated['selectedTownships'] ?? [],
            'experience' => $validated['experience'] ?? null,
            'teaching_video' => $validated['teaching_video'] ?? null,
            'teaching_modes' => $validated['modes'] ?? [],
            'fees' => $validated['fees'] ?? null,
            'nrc_file' => $validated['nrc_file'] ?? null,
            'degree_file' => $validated['degree_file'] ?? null,
            'other_files' => $validated['other_files'] ?? [],
            'status' => 'pending',
        ]);

        $profile->save();

        return redirect()->back()->with('success', 'Your teacher profile has been submitted successfully.');
    }
}
