<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Student Performance View</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="p-6 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    <h2 class="text-2xl font-bold text-gray-800">Student Performance (ကျောင်းသား အမှတ်များ)</h2>
                </div>
                <a href="{{ route('parent.dashboard') }}" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Parent Dashboard
                </a>
            </div>

            <!-- Student Selection -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    ကျောင်းသားရွေးချယ်ရန်
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">ကျောင်းသားအမည်</label>
                        <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            <option value="">ကျောင်းသားရွေးပါ</option>
                            <option value="1">မောင်သူရိန်</option>
                            <option value="2">မသီတာ</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">ဘာသာရပ်</label>
                        <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            <option value="">ဘာသာရပ်ရွေးပါ</option>
                            <option value="physics">ရူပဗေဒ</option>
                            <option value="math">သင်္ချာ</option>
                            <option value="chemistry">ဓာတုဗေဒ</option>
                            <option value="biology">ဇီဝဗေဒ</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Performance Report Display -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    အမှတ်တင်ရန်
                </h3>
                
                <!-- Attendance -->
                <div class="bg-gray-50 rounded-xl p-4 mb-4">
                    <h4 class="text-sm font-semibold text-gray-700 mb-3">တက်ရောက်မှု (Attendance)</h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">စုစုပေါင်း နေ့ရက်</p>
                            <p class="text-xl font-bold text-gray-800">30</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">တက်ရောက်ခဲ့သည့် နေ့ရက်</p>
                            <p class="text-xl font-bold text-green-600">28</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">ခွင့်ရခဲ့သည့် နေ့ရက်</p>
                            <p class="text-xl font-bold text-yellow-600">2</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">မတက်ရောက်ခဲ့သည့် နေ့ရက်</p>
                            <p class="text-xl font-bold text-red-600">0</p>
                        </div>
                    </div>
                </div>

                <!-- Assessment Scores -->
                <div class="bg-gray-50 rounded-xl p-4 mb-4">
                    <h4 class="text-sm font-semibold text-gray-700 mb-3">စစ်ဆေးမှု အမှတ်များ (Assessment Scores)</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">ပထမစစ်ဆေးမှု (First Assessment)</p>
                            <p class="text-xl font-bold text-gray-800">85/100</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">ဒုတိယစစ်ဆေးမှု (Second Assessment)</p>
                            <p class="text-xl font-bold text-gray-800">78/100</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">တတိယစစ်ဆေးမှု (Third Assessment)</p>
                            <p class="text-xl font-bold text-gray-800">82/100</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">နောက်ဆုံးစစ်ဆေးမှု (Final Assessment)</p>
                            <p class="text-xl font-bold text-gray-800">90/100</p>
                        </div>
                    </div>
                </div>

                <!-- Overall Performance -->
                <div class="bg-gray-50 rounded-xl p-4 mb-4">
                    <h4 class="text-sm font-semibold text-gray-700 mb-3">စုစုပေါင်း အဆင့် (Overall Performance)</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">ပျမ်းမျှ အမှတ် (Average Score)</p>
                            <p class="text-2xl font-bold text-green-600">83.75</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg border border-gray-200">
                            <p class="text-xs text-gray-500">အဆင့် (Grade)</p>
                            <span class="inline-block px-4 py-2 bg-green-100 text-green-700 rounded-full text-lg font-bold">A</span>
                        </div>
                    </div>
                </div>

                <!-- Comments -->
                <div class="bg-gray-50 rounded-xl p-4">
                    <h4 class="text-sm font-semibold text-gray-700 mb-3">ဆရာ၏ မှတ်ချက်များ (Teacher's Comments)</h4>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="text-xs font-semibold text-green-600 mb-1">ကောင်းသောအချက်များ (Strengths)</p>
                            <p class="text-sm text-gray-700">ကျောင်းသားသည် သင်တန်းများတွင် ပါဝင်မှု ကောင်းမွန်ပြီး အိမ်စာလုပ်ကိုင်မှုလည်း စနစ်တကျ လုပ်ဆောင်သည်။</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="text-xs font-semibold text-yellow-600 mb-1">တိုးတက်ရန်လိုအပ်သောအချက်များ (Areas for Improvement)</p>
                            <p class="text-sm text-gray-700">သင်္ချာ ပုစ္ဆာများကို ပိုမို လေ့ကျက်သင့်ပါသည်။ အချိန်ပေးပြီး ပုစ္ဆာများ လေ့ကျက်ပါ။</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg border border-gray-200">
                            <p class="text-xs font-semibold text-blue-600 mb-1">ဆရာ၏အကြံပြုချက် (Teacher's Recommendations)</p>
                            <p class="text-sm text-gray-700">နောက်ထပ် သင်တန်းများတွင် ပါဝင်ဆင်နွှေးပါ။ အခက်အခဲ ရှိလျှင် ဆရာကို မေးမြန်းပါ။</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance History Table -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    အမှတ်တင်မှု မှတ်တမ်း (Performance History)
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">ဘာသာရပ်</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">ပျမ်းမျှ အမှတ်</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">အဆင့်</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">ရက်စွဲ</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">ဆရာ</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-700">ရူပဗေဒ</td>
                                <td class="px-4 py-3 text-sm text-gray-700">85</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">A</span></td>
                                <td class="px-4 py-3 text-sm text-gray-500">2026-08-01</td>
                                <td class="px-4 py-3 text-sm text-gray-700">ဦးမင်းသူ</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-700">သင်္ချာ</td>
                                <td class="px-4 py-3 text-sm text-gray-700">78</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">B</span></td>
                                <td class="px-4 py-3 text-sm text-gray-500">2026-08-02</td>
                                <td class="px-4 py-3 text-sm text-gray-700">ဒေါ်သီရိမောင်</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-700">ဓာတုဗေဒ</td>
                                <td class="px-4 py-3 text-sm text-gray-700">92</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">A</span></td>
                                <td class="px-4 py-3 text-sm text-gray-500">2026-08-03</td>
                                <td class="px-4 py-3 text-sm text-gray-700">ဦးကျော်ဇော်</td>
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
