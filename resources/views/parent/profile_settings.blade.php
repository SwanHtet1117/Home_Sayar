<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Parent Profile Settings</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 text-slate-800">
    @include('partials.navigation')
    <div class="min-h-screen px-4 py-8 md:px-8">
        <div class="mx-auto max-w-6xl">
            <div class="mb-8 rounded-2xl border border-gray-100 bg-white p-8 shadow-lg">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <h3 class="mb-2 flex items-center text-xl font-bold text-gray-800">
                            <svg class="mr-2 h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            မိဘပရိုဖိုင်းဆက်တင်
                        </h3>
                        <p class="text-sm text-slate-600">Update your details, manage communication preferences, and keep your child information current.</p>
                    </div>
                    <a href="{{ route('parent.dashboard') }}" class="inline-flex items-center justify-center rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">
                        Parent Dashboard
                    </a>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                <form class="space-y-6">
                    <section class="rounded-2xl border border-gray-100 bg-white p-6 shadow-md">
                        <div class="mb-4 flex items-center justify-between">
                            <div>
                                <h2 class="text-lg font-semibold text-slate-900">Personal Information</h2>
                                <p class="text-sm text-slate-500">This information helps teachers and staff reach you quickly.</p>
                            </div>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">Required</span>
                        </div>

                        <div class="grid gap-4 md:grid-cols-2">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-slate-700">Full Name</label>
                                <input type="text" value="Aye Aye Win" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-slate-700">Phone Number</label>
                                <input type="tel" value="09-123456789" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-slate-700">Email Address</label>
                                <input type="email" value="parent@example.com" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-slate-700">Preferred Language</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option>Myanmar</option>
                                    <option>English</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="mb-1 block text-sm font-medium text-slate-700">Home Address</label>
                            <textarea rows="3" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">No. 12, Hlaing Township, Yangon</textarea>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-gray-100 bg-white p-6 shadow-md">
                        <h2 class="text-lg font-semibold text-slate-900">Child & Family Details</h2>
                        <p class="mt-1 text-sm text-slate-500">Add the details you want teachers to see when coordinating lessons.</p>

                        <div class="mt-4 grid gap-4 md:grid-cols-2">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-slate-700">Child Name</label>
                                <input type="text" value="Moe Thant" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-slate-700">Grade / Level</label>
                                <input type="text" value="Grade 5" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                        </div>

                        <div class="mt-4">
                            <label class="mb-1 block text-sm font-medium text-slate-700">Special Notes</label>
                            <textarea rows="3" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">Needs extra support in mathematics and prefers calm learning environments.</textarea>
                        </div>
                    </section>

                    <section class="rounded-2xl border border-gray-100 bg-white p-6 shadow-md">
                        <h2 class="text-lg font-semibold text-slate-900">Communication Preferences</h2>
                        <div class="mt-4 space-y-3">
                            <label class="flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-4 py-3">
                                <input type="checkbox" checked class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                <span class="text-sm text-slate-700">Receive class updates by SMS</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-4 py-3">
                                <input type="checkbox" checked class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                <span class="text-sm text-slate-700">Receive weekly progress reports by email</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                <span class="text-sm text-slate-700">Allow reminders for lessons and appointments</span>
                            </label>
                        </div>
                    </section>

                    <div class="flex flex-col gap-3 sm:flex-row sm:justify-end">
                        <button type="button" class="rounded-lg border border-slate-300 bg-slate-50 px-5 py-3 font-semibold text-slate-700 transition hover:bg-slate-100">Cancel</button>
                        <button type="submit" class="rounded-lg bg-green-600 px-5 py-3 font-semibold text-white shadow-md transition-all duration-200 hover:bg-green-700 hover:shadow-lg">Save Changes</button>
                    </div>
                </form>

                <aside class="space-y-6">
                    <div class="rounded-2xl border border-gray-100 bg-gradient-to-br from-green-50 to-emerald-50 p-6 shadow-md">
                        <div class="flex items-center gap-3">
                            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-green-100 text-lg font-semibold text-green-700">AA</div>
                            <div>
                                <h3 class="font-semibold text-slate-900">Aye Aye Win</h3>
                                <p class="text-sm text-slate-600">Parent account</p>
                            </div>
                        </div>
                        <button type="button" class="mt-4 w-full rounded-lg border border-green-300 bg-white px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">Upload Profile Photo</button>
                    </div>

                    <div class="rounded-2xl border border-gray-100 bg-white p-6 shadow-md">
                        <h3 class="font-semibold text-slate-900">Quick Tips</h3>
                        <ul class="mt-3 space-y-2 text-sm text-slate-600">
                            <li>• Keep your phone number updated for urgent notifications.</li>
                            <li>• Add child details to improve lesson coordination.</li>
                            <li>• Review communication preferences regularly.</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
