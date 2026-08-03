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
        <div class="max-w-3xl mx-auto">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118L2.077 10.11c-.783-.57-.38-1.81.588-1.81h4.915a1 1 0 00.95-.69l1.519-4.674z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">ဆရာကို Rating ပေးရန်</h2>
                        <p class="text-sm text-gray-500">သင်တန်းပြီးဆုံးပြီးနောက် ဆရာအတွက်အကြံပြုချက်ပေးပါ</p>
                    </div>
                </div>
                <a href="{{ route('parent.dashboard') }}" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Parent Dashboard
                </a>
            </div>

            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">ဆရာ၏ စွမ်းဆောင်မှုကို အကဲဖြတ်ရန်</h3>
                </div>

                <div class="p-6 space-y-6">
                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">ဆရာရွေးပါ</label>
                        <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            <option value="">ဆရာရွေးချယ်ပါ</option>
                            <option value="teacher1">ဦးမင်းသူ</option>
                            <option value="teacher2">ဒေါ်သီရိ</option>
                            <option value="teacher3">ဦးအောင်မင်း</option>
                        </select>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Rating</label>
                        <div class="flex space-x-3 text-3xl text-yellow-400">
                            <button type="button">★</button>
                            <button type="button">★</button>
                            <button type="button">★</button>
                            <button type="button">☆</button>
                            <button type="button">☆</button>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">၅ ကွက်မှ ၃ ကွက်ရွေးထားသည်</p>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Feedback</label>
                        <textarea rows="5" placeholder="ဆရာ၏ သင်ကြားမှု၊ အချိန်စီမံမှု၊ ဂရုစိုက်မှု အကြောင်းရေးပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-[1.02] shadow-md hover:shadow-lg">
                            Submit Rating
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
