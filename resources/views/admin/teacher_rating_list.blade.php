<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Rating</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="mb-6 flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="mr-3 h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Rating Verification</h2>
                        <p class="text-sm text-gray-500">Review and verify teacher's rating from parents and students.</p>
                    </div>
                </div>
                <a href="/admin/dashboard" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Admin Dashboard
                </a>
            </div>

            <div class="mb-6 flex flex-wrap gap-3 rounded-2xl border border-gray-100 bg-white p-4 shadow-md">
                <button type="button" id="showPendingBtn" class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">Pending</button>
                <button type="button" id="showVerifiedBtn" class="rounded-lg border border-green-300 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">Verified</button>
                <button type="button" id="showAllBtn" class="rounded-lg border border-green-300 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">All Rating</button>
            </div>

            <!-- Feedback List Section -->
            <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Teacher Rating List</h3>
                </div>
                <div class="space-y-6 p-6">
                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Search & Filter</label>
                        <div class="grid gap-4 md:grid-cols-4">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Teacher Name</label>
                                <input type="text" placeholder="Search teacher..." class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Subject</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Subjects</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="physics">Physics</option>
                                    <option value="english">English</option>
                                    <option value="chemistry">Chemistry</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Rating</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Ratings</option>
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>
                            </div>
                            <div class="flex items-end">
                                <button class="w-full rounded-lg bg-green-600 px-4 py-3 font-semibold text-white transition-all duration-200 hover:bg-green-700">Search</button>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-xl border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Teacher</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Student/Parent</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Subject</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Rating</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Date</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Status</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Ms. Thin Thin</div>
                                        <div class="text-sm text-gray-500">Teacher ID: T-201</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">မေသန္တာ</div>
                                        <div class="text-sm text-gray-500">Student</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">ရူပဗေဒ</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex">
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                            <span class="ml-2 text-sm font-semibold text-gray-700">5.0</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">Pending</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex gap-2">
                                            <button type="button" class="view-feedback-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-teacher="Ms. Thin Thin" data-teacher-id="T-201" data-student="မေသန္တာ" data-student-type="Student" data-subject="ရူပဗေဒ" data-rating="5.0" data-date="2026-08-01" data-status="Pending" data-feedback="ဆရာမက အလွန် ကောင်းမွန်စွာ သင်ကြားပေးတယ်။ ကျောင်းသား နားလည်လွယ်ပြီး စိတ်ဝင်စားဖို့ ကောင်းတယ်။">View</button>
                                            <button class="rounded-lg bg-green-600 px-3 py-2 text-white transition hover:bg-green-700">Verify</button>
                                            <button class="rounded-lg bg-red-600 px-3 py-2 text-white transition hover:bg-red-700">Reject</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Mr. Zaw Zaw</div>
                                        <div class="text-sm text-gray-500">Teacher ID: T-204</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">ကျော်ဇော်</div>
                                        <div class="text-sm text-gray-500">Student</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">သင်္ချာ</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex">
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                            <span class="ml-2 text-sm font-semibold text-gray-700">4.0</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Verified</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-feedback-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-teacher="Mr. Zaw Zaw" data-teacher-id="T-204" data-student="ကျော်ဇော်" data-student-type="Student" data-subject="သင်္ချာ" data-rating="4.0" data-date="2026-08-01" data-status="Verified" data-feedback="သင်ကြားမှု ကောင်းပါတယ်။ အချိန် ပိုနေရင် ပိုကောင်းမှာ ပါ။">View</button>
                                    </td>
                                </tr>
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Ms. Su Su</div>
                                        <div class="text-sm text-gray-500">Teacher ID: T-210</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">သန်းထွန်း</div>
                                        <div class="text-sm text-gray-500">Student</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">အင်္ဂလိပ်စာ</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex">
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                            </div>
                                            <span class="ml-2 text-sm font-semibold text-gray-700">5.0</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-07-30</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">Pending</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex gap-2">
                                            <button type="button" class="view-feedback-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-teacher="Ms. Su Su" data-teacher-id="T-210" data-student="သန်းထွန်း" data-student-type="Student" data-subject="အင်္ဂလိပ်စာ" data-rating="5.0" data-date="2026-07-30" data-status="Pending" data-feedback="အလွန် ကောင်းပါတယ်။ ကျောင်းသား တို့ အတွက် အထောက်အကူ ပြုတဲ့ ဆရာမ ဖြစ်ပါတယ်။">View</button>
                                            <button class="rounded-lg bg-green-600 px-3 py-2 text-white transition hover:bg-green-700">Verify</button>
                                            <button class="rounded-lg bg-red-600 px-3 py-2 text-white transition hover:bg-red-700">Reject</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="feedbackDetailModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4">
        <div class="w-full max-w-2xl rounded-2xl border border-gray-200 bg-white p-6 shadow-2xl">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Feedback Details</h3>
                    <p class="text-sm text-gray-500">Full feedback information</p>
                </div>
                <button id="closeFeedbackModal" class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">Close</button>
            </div>

            <div class="mt-6 space-y-4 rounded-xl bg-gray-50 p-4">
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Teacher Name</p>
                        <p id="modalTeacher" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Teacher ID</p>
                        <p id="modalTeacherId" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Student/Parent Name</p>
                        <p id="modalStudent" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Type</p>
                        <p id="modalStudentType" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Subject</p>
                        <p id="modalSubject" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Rating</p>
                        <p id="modalRating" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Date</p>
                        <p id="modalDate" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Status</p>
                        <p id="modalStatus" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-600">Feedback</p>
                    <p id="modalFeedback" class="mt-1 text-base text-gray-700">-</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script>
        const modal = document.getElementById('feedbackDetailModal');
        const closeButton = document.getElementById('closeFeedbackModal');
        const modalTeacher = document.getElementById('modalTeacher');
        const modalTeacherId = document.getElementById('modalTeacherId');
        const modalStudent = document.getElementById('modalStudent');
        const modalStudentType = document.getElementById('modalStudentType');
        const modalSubject = document.getElementById('modalSubject');
        const modalRating = document.getElementById('modalRating');
        const modalDate = document.getElementById('modalDate');
        const modalStatus = document.getElementById('modalStatus');
        const modalFeedback = document.getElementById('modalFeedback');

        document.querySelectorAll('.view-feedback-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                modalTeacher.textContent = this.dataset.teacher || '-';
                modalTeacherId.textContent = this.dataset.teacherId || '-';
                modalStudent.textContent = this.dataset.student || '-';
                modalStudentType.textContent = this.dataset.studentType || '-';
                modalSubject.textContent = this.dataset.subject || '-';
                modalRating.textContent = this.dataset.rating || '-';
                modalDate.textContent = this.dataset.date || '-';
                modalStatus.textContent = this.dataset.status || '-';
                modalFeedback.textContent = this.dataset.feedback || '-';

                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });

        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        closeButton.addEventListener('click', closeModal);
        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    </script>
</body>
</html>
