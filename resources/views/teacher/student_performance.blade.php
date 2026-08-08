<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Student Performance Report</title>
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
                    <h2 class="text-2xl font-bold text-gray-800">Student Performance Report (ကျောင်းသား အမှတ်တင်ရန်)</h2>
                </div>
                <a href="{{ route('teacher.dashboard') }}" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Teacher Dashboard
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
                            <option value="3">မောင်ကျော်သူ</option>
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

            <!-- Performance Report Form -->
            <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    အမှတ်တင်ရန်
                </h3>
                <form class="space-y-6">
                    <!-- Attendance -->
                    <div class="bg-gray-50 rounded-xl p-4">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">တက်ရောက်မှု (Attendance)</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">စုစုပေါင်း နေ့ရက်</label>
                                <input type="number" value="30" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">တက်ရောက်ခဲ့သည့် နေ့ရက်</label>
                                <input type="number" value="28" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">ခွင့်ရခဲ့သည့် နေ့ရက်</label>
                                <input type="number" value="2" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">မတက်ရောက်ခဲ့သည့် နေ့ရက်</label>
                                <input type="number" value="0" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Assessment Scores -->
                    <div class="bg-gray-50 rounded-xl p-4">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">စစ်ဆေးမှု အမှတ်များ (Assessment Scores)</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">ပထမစစ်ဆေးမှု (First Assessment)</label>
                                <input type="number" placeholder="0-100" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">ဒုတိယစစ်ဆေးမှု (Second Assessment)</label>
                                <input type="number" placeholder="0-100" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">တတိယစစ်ဆေးမှု (Third Assessment)</label>
                                <input type="number" placeholder="0-100" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">နောက်ဆုံးစစ်ဆေးမှု (Final Assessment)</label>
                                <input type="number" placeholder="0-100" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Overall Performance -->
                    <div class="bg-gray-50 rounded-xl p-4">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">စုစုပေါင်း အဆင့် (Overall Performance)</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">ပျမ်းမျှ အမှတ် (Average Score)</label>
                                <input type="number" placeholder="0-100" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">အဆင့် (Grade)</label>
                                <select class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                    <option value="">အဆင့်ရွေးပါ</option>
                                    <option value="A">A (အလွန်ကောင်း)</option>
                                    <option value="B">B (ကောင်း)</option>
                                    <option value="C">C (အသင့်အတင့်)</option>
                                    <option value="D">D (လိုအပ်သေး)</option>
                                    <option value="F">F (မအောင်မြင်)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Comments -->
                    <div class="bg-gray-50 rounded-xl p-4">
                        <h4 class="text-sm font-semibold text-gray-700 mb-3">မှတ်ချက်များ (Comments)</h4>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">ကောင်းသောအချက်များ (Strengths)</label>
                                <textarea rows="3" placeholder="ကျောင်းသား၏ ကောင်းသောအချက်များကို ဖော်ပြပါ" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">တိုးတက်ရန်လိုအပ်သောအချက်များ (Areas for Improvement)</label>
                                <textarea rows="3" placeholder="တိုးတက်ရန်လိုအပ်သောအချက်များကို ဖော်ပါ" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                            </div>
                            <div>
                                <label class="block text-xs text-gray-600 mb-1">ဆရာ၏အကြံပြုချက် (Teacher's Recommendations)</label>
                                <textarea rows="3" placeholder="ကျောင်းသားအတွက် အကြံပြုချက်များကို ဖော်ပါ" class="w-full px-3 py-2 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end space-x-3">
                        <button type="button" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-all duration-200">
                            ပြန်ခေါ်ရန်
                        </button>
                        <button type="submit" class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] shadow-md hover:shadow-lg">
                            အမှတ်တင်မည်
                        </button>
                    </div>
                </form>
            </div>

            <!-- Recent Reports -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    မကြာသေးမီက တင်ခဲ့သော အမှတ်တင်မှုများ (Recent Reports)
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">ကျောင်းသားအမည်</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">ဘာသာရပ်</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">ပျမ်းမျှ အမှတ်</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">အဆင့်</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">ရက်စွဲ</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600">လုပ်ဆောင်ချက်</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-700">မောင်သူရိန်</td>
                                <td class="px-4 py-3 text-sm text-gray-700">ရူပဗေဒ</td>
                                <td class="px-4 py-3 text-sm text-gray-700">85</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">A</span></td>
                                <td class="px-4 py-3 text-sm text-gray-500">2026-08-01</td>
                                <td class="px-4 py-3">
                                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">ကြည့်ရန်</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-700">မသီတာ</td>
                                <td class="px-4 py-3 text-sm text-gray-700">သင်္ချာ</td>
                                <td class="px-4 py-3 text-sm text-gray-700">78</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">B</span></td>
                                <td class="px-4 py-3 text-sm text-gray-500">2026-08-02</td>
                                <td class="px-4 py-3">
                                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">ကြည့်ရန်</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-sm text-gray-700">မောင်ကျော်သူ</td>
                                <td class="px-4 py-3 text-sm text-gray-700">ဓာတုဗေဒ</td>
                                <td class="px-4 py-3 text-sm text-gray-700">92</td>
                                <td class="px-4 py-3"><span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-medium">A</span></td>
                                <td class="px-4 py-3 text-sm text-gray-500">2026-08-03</td>
                                <td class="px-4 py-3">
                                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">ကြည့်ရန်</button>
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
