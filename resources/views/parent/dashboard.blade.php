<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Parent Dashboard</title>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">Parent Dashboard</h2>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <!-- Total Requests -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">စုစုပေါင်း တောင်းဆိုမှုများ</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">5</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-blue-600 font-semibold">အားလုံး</span>
                        <span class="text-gray-500 ml-2">တောင်းဆိုမှုများ</span>
                    </div>
                </div>

                <!-- Matched Teachers -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">ကိုက်ညီသော ဆရာများ</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">12</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-green-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-green-600 font-semibold">ရရှိပြီး</span>
                        <span class="text-gray-500 ml-2">ဆရာများ</span>
                    </div>
                </div>

                <!-- Active Requests -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">ဆက်လက် လုပ်ဆောင်ဆဲ</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">2</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-yellow-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-yellow-600 font-semibold">စောင့်ဆိုင်းနေသည်</span>
                        <span class="text-gray-500 ml-2">အကြောင်းကြား</span>
                    </div>
                </div>

                <!-- Completed -->
                <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">ပြီးမြောက်ပြီး</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">3</p>
                        </div>
                        <div class="h-14 w-14 rounded-full bg-purple-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center text-sm">
                        <span class="text-purple-600 font-semibold">အောင်မြင်</span>
                        <span class="text-gray-500 ml-2">ဆက်သွယ်မှုများ</span>
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
                        <a href="/parent/search/teacher" class="flex items-center p-4 bg-green-50 rounded-xl hover:bg-green-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ဆရာ ရှာရန်</p>
                                <p class="text-xs text-gray-500">Search Teacher</p>
                            </div>
                        </a>
                        <a href="/parent/profile/settings" class="flex items-center p-4 bg-blue-50 rounded-xl hover:bg-blue-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ပရိုဖိုင်း</p>
                                <p class="text-xs text-gray-500">My Profile</p>
                            </div>
                        </a>
                        <a href="/parent/teacher_request" class="flex items-center p-4 bg-purple-50 rounded-xl hover:bg-purple-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">သင်တန်းယူရန်</p>
                                <p class="text-xs text-gray-500">Request Teacher</p>
                            </div>
                        </a>
                        <a href="{{ route('parent.teacher.acceptance.confirm') }}" class="flex items-center p-4 bg-red-50 rounded-xl hover:bg-red-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-red-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ဆရာ လက်ခံမှု</p>
                                <p class="text-xs text-gray-500">Acceptance Confirm</p>
                            </div>
                        </a>
                        <a href="/parent/teacher/rating" class="flex items-center p-4 bg-yellow-50 rounded-xl hover:bg-yellow-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-yellow-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118L2.077 10.11c-.783-.57-.38-1.81.588-1.81h4.915a1 1 0 00.95-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ဆရာ Rating</p>
                                <p class="text-xs text-gray-500">Rate Teacher</p>
                            </div>
                        </a>
                        <a href="/parent/periodic/feedback" class="flex items-center p-4 bg-indigo-50 rounded-xl hover:bg-indigo-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-indigo-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Feedback</p>
                                <p class="text-xs text-gray-500">Periodic Feedback</p>
                            </div>
                        </a>
                        <a href="/parent/attendance/tracking" class="flex items-center p-4 bg-gray-50 rounded-xl hover:bg-gray-100 transition-colors duration-200">
                            <div class="h-10 w-10 rounded-full bg-gray-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Attendance Teacher</p>
                                <p class="text-xs text-gray-500">Tracking</p>
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
                                <p class="text-sm text-gray-800">ဆရာ ဦးမင်းသူ နှင့် ဆက်သွယ်ပြီး</p>
                                <p class="text-xs text-gray-500">၅ မိနစ် အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ဆရာ တောင်းဆိုမှု ပြုလုပ်ပြီး</p>
                                <p class="text-xs text-gray-500">၁ နာရီ အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ဆရာ ရှာဖွေမှု ပြုလုပ်ပြီး</p>
                                <p class="text-xs text-gray-500">၃ နာရီ အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ပရိုဖိုင်း အချက်အလက် ပြင်ဆင်ပြီး</p>
                                <p class="text-xs text-gray-500">၁ ရက် အကြာက</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Requests Table -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4 flex items-center justify-between">
                    <h3 class="text-xl font-bold text-white">လတ်တလော တောင်းဆိုမှုများ</h3>
                    <a href="/parent/profile" class="text-white text-sm hover:underline">အသစ်ထပ်ထညပ်ရန် →</a>
                </div>
                <div class="p-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ဘာသာရပ်</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">မြို့နယ်</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">သင်ကြားမှုပုံစံ</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">အခြေအနေ</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ရူပဗေဒ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ကမာရွတ်</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">အိမ်တိုင်ရာရောက်</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        ✓ ဆက်သွယ်ပြီး
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">သင်္ချာ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ရန်ကင်း</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Online Class</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        စောင့်ဆိုင်းနေသည်
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">အင်္ဂလိပ်စာ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ဗဟန်း</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">နှစ်မျိုးလုံး</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        ပယ်ဖျက်ပြီး
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