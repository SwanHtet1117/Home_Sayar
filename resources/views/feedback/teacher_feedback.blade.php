<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Feedback</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <div class="mb-6 flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="mr-3 h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Teacher Feedback (ဆရာ မှတ်ချက်)</h2>
                        <p class="text-sm text-gray-500">Share your feedback about parents and students.</p>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Teacher Feedback Form</h3>
                </div>

                <div class="space-y-6 p-6">
                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">မိဘအမည် (Parent Name)</label>
                        <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">မိဘရွေးပါ</option>
                            <option value="1">ဦးခင်မောင်</option>
                            <option value="2">ဒေါ်မြင့်ကြည်</option>
                            <option value="3">ဦးဇော်ဝင်း</option>
                        </select>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">ကျောင်းသားအမည် (Student Name)</label>
                        <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">ကျောင်းသားရွေးပါ</option>
                            <option value="1">မောင်သူရိန်</option>
                            <option value="2">မသီတာ</option>
                            <option value="3">မောင်ကျော်ဇော်</option>
                        </select>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">ဘာသာရပ် (Subject)</label>
                        <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">ဘာသာရပ်ရွေးပါ</option>
                            <option value="physics">ရူပဗေဒ</option>
                            <option value="math">သင်္ချာ</option>
                            <option value="chemistry">ဓာတုဗေဒ</option>
                            <option value="biology">ဇီဝဗေဒ</option>
                            <option value="english">အင်္ဂလိပ်စာ</option>
                        </select>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">ကာလ (Period)</label>
                        <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">ကာလရွေးပါ</option>
                            <option value="weekly">အပတ်စဉ် (Weekly)</option>
                            <option value="monthly">လစဉ် (Monthly)</option>
                            <option value="quarterly">သုံးလစဉ် (Quarterly)</option>
                        </select>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">ကောင်းသောအချက်များ (Strengths)</label>
                        <textarea rows="3" placeholder="ကျောင်းသား၏ ကောင်းသောအချက်များ ဖော်ပြပါ..." class="w-full resize-none rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">တိုးတက်ရန်လိုအပ်သောအချက်များ (Areas for Improvement)</label>
                        <textarea rows="3" placeholder="ကျောင်းသား တိုးတက်ရန် လိုအပ်သောအချက်များ ဖော်ပြပါ..." class="w-full resize-none rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">မိဘနှင့် ပူးပေါင်းဆောင်ရွက်မှု (Parent Cooperation)</label>
                        <div class="flex space-x-3 text-3xl text-yellow-400">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>☆</span>
                        </div>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">ဆရာ၏ အကြံပြုချက် (Teacher's Recommendations)</label>
                        <textarea rows="3" placeholder="မိဘနှင့် ကျောင်းသားအား အကြံပြုချက်များ ပေးပါ..." class="w-full resize-none rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    </div>

                    <div class="flex justify-end space-x-3">
                        <button type="button" class="rounded-lg border border-green-300 bg-white px-6 py-3 font-semibold text-green-700 transition-all duration-200 hover:bg-green-50">
                            Cancel
                        </button>
                        <button type="submit" class="rounded-lg bg-green-600 px-8 py-3 font-semibold text-white transition-all duration-200 hover:bg-green-700 hover:shadow-lg">
                            Submit Feedback
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
