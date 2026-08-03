<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Admin Dashboard</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="p-6 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center mb-6">
                <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">Admin Dashboard</h2>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
                <!-- Total Teachers -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">စုစုပေါင်း ဆရာများ</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">156</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-600 font-semibold">+12%</span>
                        <span class="text-gray-500 ml-2">ယခင်လမှ</span>
                    </div>
                </div>

                <!-- Total Parents -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">စုစုပေါင်း မိဘများ</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">342</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-green-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-600 font-semibold">+8%</span>
                        <span class="text-gray-500 ml-2">ယခင်လမှ</span>
                    </div>
                </div>

                <!-- Pending Verifications -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">စစ်ဆေးရန် လိုအပ်သည်</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">23</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-yellow-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-yellow-600 font-semibold">အရေးကြီး</span>
                        <span class="text-gray-500 ml-2">လုပ်ဆောင်ရန် လိုအပ်သည်</span>
                    </div>
                </div>

                <!-- Teacher Requests -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">ဆရာ တောင်းဆိုမှုများ</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">45</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-purple-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-purple-600 font-semibold">+5</span>
                        <span class="text-gray-500 ml-2">ယနေ့</span>
                    </div>
                </div>

                <!-- Currently Online -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">လက်ရှိ အွန်လိုင်း</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">28</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-teal-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                        <span class="text-teal-600 font-semibold">အသက်သွင်း</span>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Quick Actions -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        လျင်မြန်သော လုပ်ဆောင်ချက်များ
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <a href="/admin/teacher_list" class="flex items-center p-4 bg-green-50 rounded-xl hover:bg-green-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ဆရာ စာရင်း</p>
                                <p class="text-xs text-gray-500">Teacher List</p>
                            </div>
                        </a>
                        <a href="/admin/teacher_verification" class="flex items-center p-4 bg-yellow-50 rounded-xl hover:bg-yellow-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-yellow-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ဆရာ စစ်ဆေးရန်</p>
                                <p class="text-xs text-gray-500">Verification</p>
                            </div>
                        </a>
                        <a href="/admin/teacher_request_list" class="flex items-center p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">တောင်းဆိုမှုများ</p>
                                <p class="text-xs text-gray-500">Requests</p>
                            </div>
                        </a>
                        <a href="/admin/payment-verification-list" class="flex items-center p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3v1H7a2 2 0 00-2 2v4a2 2 0 002 2h10a2 2 0 002-2v-4a2 2 0 00-2-2h-2v-1c0-1.657-1.343-3-3-3zm0 0V5m0 0a2 2 0 100 4 2 2 0 000-4z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ငွေပေးချေမှု စစ်ဆေးမှု</p>
                                <p class="text-xs text-gray-500">Payments</p>
                            </div>
                        </a>
                        <a href="/admin/attendance-verification" class="flex items-center p-4 bg-red-50 rounded-xl hover:bg-red-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-red-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Attendance စစ်ဆေးရန်</p>
                                <p class="text-xs text-gray-500">Attendances</p>
                            </div>
                        </a>
                        <a href="/admin/teacher/rating/list" class="flex items-center p-4 bg-yellow-50 rounded-xl hover:bg-yellow-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-yellow-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Rating စစ်ဆေးရန်</p>
                                <p class="text-xs text-gray-500">Verify Rating</p>
                            </div>
                        </a>
                        <a href="/admin/feedback/list" class="flex items-center p-4 bg-indigo-50 rounded-xl hover:bg-indigo-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-indigo-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Feedback စစ်ဆေးရန်</p>
                                <p class="text-xs text-gray-500">Verify Feedback</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        လတ်တလော လုပ်ဆောင်ချက်များ
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ဆရာ ဦးမင်းသူ အတည်ပြုပြီး</p>
                                <p class="text-xs text-gray-500">၅ မိနစ် အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">မိဘ ဦးခင်မောင် ပရိုဖိုင်းဖန်တီးပြီး</p>
                                <p class="text-xs text-gray-500">၁၅ မိနစ် အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ဆရာ ဒေါ်သီရိမောင် စစ်ဆေးရန် လိုအပ်</p>
                                <p class="text-xs text-gray-500">၃၀ မိနစ် အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ဆရာ တောင်းဆိုမှု ရရှိပြီး</p>
                                <p class="text-xs text-gray-500">၁ နာရီ အကြာက</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Teachers Table -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4 flex items-center justify-between">
                    <h3 class="text-xl font-bold text-white">လတ်တလော ဆရာများ</h3>
                    <a href="/admin/teacher_list" class="text-white text-sm hover:underline">အားလုံးကြည့်ရန် →</a>
                </div>
                <div class="p-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ဆရာအမည်</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ဘာသာရပ်</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">မြို့နယ်</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">အခြေအနေ</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">ဦးမင်းသူ</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ရူပဗေဒ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ကမာရွတ်</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        ✓ Verified
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold text-sm">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">ဒေါ်သီရိမောင်</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">အင်္ဂလိပ်စာ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ရန်ကင်း</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        Pending
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">ဦးထွန်းအောင်</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">သင်္ချာ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">မရမ်းကုန်း</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        X Banned
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>