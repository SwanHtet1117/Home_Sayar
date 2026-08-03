<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Request Post</title>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.5-9.5a2.5 2.5 0 113.536 3.536L11 15l-4 1 1-4 8.5-8.5z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">ဆရာ တောင်းဆိုမှု</h2>
                        <p class="text-sm text-gray-500">မိဘများ သင်ကြားရေးလိုအပ်ချက်ကို တောင်းဆိုရန်</p>
                    </div>
                </div>
                <a href="{{ route('parent.dashboard') }}" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Parent Dashboard
                </a>
            </div>

            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">သင်တန်းလိုအပ်ချက် အချက်အလက်များ</h3>
                </div>

                <div class="p-6">
                    <form class="space-y-6">
                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">အခြေခံအချက်အလက်များ</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">ဘာသာရပ်</label>
                                            <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                                <option value="">ဘာသာရပ်ရွေးချယ်ပါ</option>
                                                <option value="physics">ရူပဗေဒ (Physics)</option>
                                                <option value="mathematics">သင်္ချာ (Mathematics)</option>
                                                <option value="english">အင်္ဂလိပ်စာ (English)</option>
                                                <option value="chemistry">ဓာတုဗေဒ (Chemistry)</option>
                                                <option value="biology">ဇီဝဗေဒ (Biology)</option>
                                                <option value="myanmar">မြန်မာစာ</option>
                                                <option value="history">သမိုင်း</option>
                                                <option value="geography">ပထဝီဝေါ</option>
                                                <option value="economics">စီးပွားရေး</option>
                                            </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">ကျောင်းသား/အတန်းအဆင့်</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                                <option value="">အတန်းရွေးချယ်ပါ</option>
                                                <option value="kg">KG</option>
                                                <option value="grade1">Grade 1</option>
                                                <option value="grade2">Grade 2</option>
                                                <option value="grade3">Grade 3</option>
                                                <option value="grade4">Grade 4</option>
                                                <option value="grade5">Grade 5</option>
                                                <option value="grade6">Grade 6</option>
                                                <option value="grade7">Grade 7</option>
                                                <option value="grade8">Grade 8</option>
                                                <option value="grade9">Grade 9</option>
                                                <option value="grade10">Grade 10</option>
                                                <option value="grade11">Grade 11 (Matriculation)</option>
                                            </select>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-600 mb-2">သင်ကြားပေးရမည့်သူ</label>
                                    <div class="flex space-x-6">
                                        <label class="inline-flex items-center">
                                        <input type="radio" name="gender" wire:model="gender" value="male" class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                        <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">ကျောင်းသား (Male)</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                        <input type="radio" name="gender" wire:model="gender" value="female" class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                        <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">ကျောင်းသူ (Female)</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                        <input type="radio" name="gender" wire:model="gender" value="other" class="h-4 w-4 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                        <span class="ml-2 text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">အခြား(Other)</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">သင်ကြားမည့် ကျောင်းသားအရေအတွက်</label>
                                    <input type="number" name="student_count" placeholder="1" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">လိုအပ်သော သင်ကြားပုံစံ</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                        <option value="">ရွေးချယ်ပါ</option>
                                        <option value="onsite">အိမ်တိုင်ရာရောက်</option>
                                        <option value="online">အွန်လိုင်း</option>
                                        <option value="both">နှစ်ခုလုံး</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">လိုအပ်သော မြို့နယ်</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                        <option value="">ရွေးချယ်ပါ</option>
                                        <option value="kamaryut">ကမာရွတ်</option>
                                        <option value="hlaing">လှိုင်</option>
                                        <option value="bahan">ဗဟန်း</option>
                                        <option value="yankin">ရန်ကင်း</option>
                                        <option value="dagon">ဒဂုံ</option>
                                        <option value="thingangyun">သင်္ဃန်းကျွန်း</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">ဆက်သွယ်ရန် အချက်အလက်များ</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">အမည်</label>
                                    <input type="text" placeholder="မိဘအမည်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">ဖုန်းနံပါတ်</label>
                                    <input type="tel" placeholder="09-xxxxxxxxx" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-600 mb-1">နေရပ်လိပ်စာ</label>
                                    <textarea rows="2" placeholder="နေရပ်လိပ်စာ/သင်ကြားမည့်နေရာ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">လိုအပ်ချက်နှင့် အကြောင်းအရာ</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">ကြိုက်နှစ်သက်သော ဆရာ/ဆရာမအမျိုးအစား</label>
                                    <input type="text" placeholder="ဥပမာ - အတွေ့အကြုံရှိ ဆရာမ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">သင်တန်းကြေး/လစာ ခန့်မှန်းချက်</label>
                                    <input type="text" placeholder="ဥပမာ - ၁ လ ၁၅၀,၀၀၀ ကျပ်" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">သင်ကြားပေးရမည့် ရက်</label>
                                    <input type="text" placeholder="ဥပမာ - Monday, Tuesday and Friday" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">သင်ကြားပေးရမည့် အချိန်</label>
                                    <input type="text" placeholder="ဥပမာ - ညနေ ၅ နာရီမှ ၇ နာရီထိ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium text-gray-600 mb-1">အရေးကြီးသော မှတ်ချက်များ</label>
                                    <textarea rows="4" placeholder="သင်ကြားမှုလိုအပ်ချက်၊ စာကြည့်ပုံ၊ အားလပ်ချိန် စသည်တို့ကို ရေးပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Addition Note ပူးတွဲဖိုင်</label>
                            <div class="border-2 border-dashed border-green-300 rounded-lg p-4 hover:border-green-500 transition-colors">
                                <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition-colors">
                                <p class="text-xs text-gray-400 mt-2">အကယ်၍ ရှိလျှင် စာရွက်စာတမ်း / ဓာတ်ပုံတင်နိုင်ပါသည်</p>
                            </div>
                        </div>

                        <div class="flex justify-end space-x-4">
                            <button type="button" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-all duration-200">
                                Cancel
                            </button>
                            <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-[1.02] shadow-md hover:shadow-lg">
                                Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
