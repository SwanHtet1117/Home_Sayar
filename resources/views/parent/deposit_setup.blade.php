<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Parent Deposit Setup</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3v1H7a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2h-2v-1c0-1.657-1.343-3-3-3zm-1 3a1 1 0 112 0v1h-2v-1z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Parent Deposit Setup</h2>
                        <p class="text-sm text-gray-500">KPay slip ဖြင့် ငွေဖြည့်သွင်းရန် ဆက်တင်တင်ပါ</p>
                    </div>
                </div>
                <a href="{{ route('parent.dashboard') }}" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Parent Dashboard
                </a>
            </div>

            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">KPay Slip Deposit</h3>
                </div>

                <div class="p-6 space-y-6">
                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">ငွေပမာဏ</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">ပမာဏ</label>
                                <input type="text" placeholder="ဥပမာ - 50,000 ကျပ်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">ငွေဖြည့်သွင်းမည့် ရက်စွဲ</label>
                                <input type="date" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">KPay Slip Details</label>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">KPay နံပါတ် / အကောင့်</label>
                                <input type="text" placeholder="KPay account number" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-600 mb-1">အတည်ပြုကုဒ်</label>
                                <input type="text" placeholder="Transaction code" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">KPay Slip Upload</label>
                        <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                            <input type="file" accept="image/*,.pdf" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                            <p class="text-xs text-gray-400 mt-2">JPG, PNG, PDF ဖိုင်များ ပေါင်းခံနိုင်ပါသည်</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">မှတ်ချက်</label>
                        <textarea rows="4" placeholder="ထည့်သွင်းမှုအကြောင်း၊ ပိုမိုအချက်အလက် စသည်တို့ကို ရေးပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                    </div>

                    <div class="flex justify-end space-x-4">
                        <button type="button" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-all duration-200">
                            ပယ်ဖျက်ရန်
                        </button>
                        <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-[1.02] shadow-md hover:shadow-lg">
                            Submit Deposit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
