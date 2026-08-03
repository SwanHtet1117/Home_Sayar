<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Profile Edit</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <h2 class="text-2xl font-bold text-gray-800">သင်ကြားမှုပရိုဖိုင်း ပြင်ဆင်ရန်</h2>
                </div>
                <a href="{{ route('teacher.dashboard') }}" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Teacher Dashboard
                </a>
            </div>

            <form class="space-y-6">
                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">ဆက်သွယ်ရန် အချက်အလက်များ</label>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">အမည်</label>
                            <input type="text" value="ဒေါ်သီရိမောင်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">ဆရာ/ဆရာမ</label>
                            <div class="flex space-x-6">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="male" class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                    <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">ဆရာ (Male)</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="gender" value="female" checked class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                    <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">ဆရာမ (Female)</span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">ဖုန်းနံပါတ်</label>
                            <input type="tel" value="09-765432100" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">အီးမေးလ်</label>
                            <input type="email" value="teacher@example.com" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">နေရပ်လိပ်စာ</label>
                            <input type="text" value="လှိုင်မြို့" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">သင်ကြားမည့် ပုံစံ</label>
                    <div class="flex space-x-6">
                        <label class="inline-flex items-center">
                            <input type="checkbox" checked class="h-5 w-5 rounded text-green-600 focus:ring-green-500 cursor-pointer">
                            <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">အိမ်တိုင်ရာရောက် (On-site)</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" checked class="h-5 w-5 rounded text-green-600 focus:ring-green-500 cursor-pointer">
                            <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">အွန်လိုင်း (Online Class)</span>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">သင်ကြားနိုင်သည့် ရန်ကုန်မြို့နယ်များ</label>
                    <p class="text-xs text-gray-500 mb-3">* အိမ်တိုင်ရာရောက်သင်လျှင် သွားလာနိုင်မည့် မြို့နယ်များကို ပြန်ရွေးပါ</p>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
                        <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-2 mb-1 border-b border-green-200 pb-1">ဗဟိုပိုင်းနှင့် မြို့လယ်ခေါင်</div>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">လသာ (Latha)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">လမ်းမတော် (Lanmadaw)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ပန်းဘဲတန်း (Pabedan)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ကျောက်တံတား (Kyauktada)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဗိုလ်တထောင် (Botahtaung)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဗဟန်း (Bahan)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဒဂုံ (Dagon)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">စမ်းချောင်း (Sanchaung)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">အလုံ (Ahlone)</span>
                        </label>

                        <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">မြောက်ပိုင်းခရိုင်</div>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ကမာရွတ် (Kamaryut)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">လှိုင် (Hlaing)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">မရမ်းကုန်း (Mayangone)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">အင်းစိန် (Insein)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">မင်္ဂလာဒုံ (Mingaladon)</span>
                        </label>

                        <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">အရှေ့ပိုင်းခရိုင်</div>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">သင်္ဃန်းကျွန်း (Thingangyun)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ရန်ကင်း (Yankin)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">တာမွေ (Tamwe)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">သာကေတ (Thaketa)</span>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">အဓိကသင်မည့် ဘာသာရပ်များ</label>
                    <p class="text-xs text-gray-500 mb-3">* သင်ကြားနိုင်သည့် ဘာသာရပ်များကို ပြန်ရွေးပါ</p>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 max-h-64 overflow-y-auto pr-2 custom-scrollbar">
                        <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-2 mb-1 border-b border-green-200 pb-1">အခြေခံပညာ (ကျောင်းသင်ခန်းစာ)</div>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">မြန်မာစာ (Myanmar)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">အင်္ဂလိပ်စာ (English)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">သင်္ချာ (Mathematics)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဓာတုဗေဒ (Chemistry)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" checked class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ရူပဗေဒ (Physics)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဇီဝဗေဒ (Biology)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဘောဂဗေဒ (Economics)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ပထဝီဝင် (Geography)</span>
                        </label>

                        <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">မူလတန်းအဆင့် (Grade 1 - 5)</div>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဘာသာစုံ (All Subjects)</span>
                        </label>

                        <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">International Curriculum</div>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">IGCSE</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">GED</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">SAT</span>
                        </label>

                        <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">ဘာသာစကား (Languages)</div>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">General English / 4 Skills</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">ဂျပန်စာ (Japanese - N5 to N1)</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">တရုတ်စာ (Chinese - HSK)</span>
                        </label>

                        <div class="col-span-2 md:col-span-3 text-xs font-semibold text-green-700 mt-3 mb-1 border-b border-green-200 pb-1">နည်းပညာနှင့် ကွန်ပျူတာ</div>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">Computer Basic & Office Use</span>
                        </label>
                        <label class="flex items-center p-2 rounded-lg hover:bg-green-50 cursor-pointer transition-colors">
                            <input type="checkbox" class="h-4 w-4 rounded text-green-600 focus:ring-green-500 border-gray-300">
                            <span class="ml-2 text-sm text-gray-700">Coding & Web Development</span>
                        </label>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">သင်ကြားမှုအတွေ့အကြုံ</label>
                    <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none">ရူပဗေဒနှင့် သင်္ချာဘာသာရပ်များကို ၅ နှစ်အကြာ သင်ကြားခဲ့ပါသည်။ ကျောင်းသားများကို ဥပမာများနဲ့ အလွယ်တကူ နားလည်အောင် ရှင်းပြပေးပါသည်။</textarea>
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">မျှော်မှန်းသင်တန်းကြေး (လစာ / နှုန်းထား)</label>
                    <input type="text" value="၁ လ ၁၅၀,၀၀၀ ကျပ်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                </div>

                <div class="bg-gray-50 rounded-xl p-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">မှန်ကန်ကိုးကားစာရွက်များ တင်ပါ</label>
                    <p class="text-xs text-gray-500 mb-3">* NRC ကတ်ပြား၊ ဘွဲ့လက်မှတ်နှင့် အခြားသက်သေခံစာရွက်များ တင်ပေးပါ</p>

                    <div class="space-y-4">
                        <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                            <label class="block text-sm font-medium text-gray-700 mb-2">NRC ကတ်ပြား</label>
                            <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                        </div>
                        <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                            <label class="block text-sm font-medium text-gray-700 mb-2">ဘွဲ့လက်မှတ်များ</label>
                            <input type="file" multiple class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                        </div>
                    </div>
                </div>

                <div class="pt-6 border-t border-gray-200 flex justify-end">
                    <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98]">
                        Profile ပြင်ဆင်မည်
                    </button>
                </div>
            </form>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
