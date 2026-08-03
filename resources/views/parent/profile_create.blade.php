<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Create Parent Profile</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="p-6 bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 min-h-screen">
        <div class="max-w-3xl mx-auto">
            <div class="flex items-center mb-6">
                <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">မိဘ ပရိုဖိုင်း ဖန်တီးရန်</h2>
            </div>

            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">ပရိုဖိုင်း အချက်အလက်များ ဖြည့်ပါ</h3>
                </div>
                <div class="p-6">
                    <form class="space-y-6">
                        <!-- Personal Information -->
                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">ကိုယ်ရေးကိုယ်တာ အချက်အလက်များ</label>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">အမည်</label>
                                    <input type="text" placeholder="အမည်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">ဖုန်းနံပါတ်</label>
                                    <input type="tel" placeholder="09-xxxxxxxxx" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">အီးမေးလ်</label>
                                    <input type="email" placeholder="example@gmail.com" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">နေရပ်လိပ်စာ</label>
                                    <textarea rows="2" placeholder="နေရပ်လိပ်စာဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Location Information -->
                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">နေရာ အချက်အလက်များ</label>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">တိုင်း/ဒေသ</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                        <option value="">တိုင်း/ဒေသရွေးချယ်ပါ</option>
                                        <option value="yangon">ရန်ကုန်တိုင်း</option>
                                        <option value="mandalay">မန္တလေးတိုင်း</option>
                                        <option value="bago">ပဲခူးတိုင်း</option>
                                        <option value="ayeyarwady">ဧရာဝတီတိုင်း</option>
                                        <option value="sagaing">စစ်ကိုင်းတိုင်း</option>
                                        <option value="tanintharyi">တနင်္သာရီတိုင်း</option>
                                        <option value="kachin">ကချင်ပြည်နယ်</option>
                                        <option value="kayah">ကယားပြည်နယ်</option>
                                        <option value="kayin">ကရင်ပြည်နယ်</option>
                                        <option value="chin">ချင်ပြည်နယ်</option>
                                        <option value="mon">မွန်ပြည်နယ်</option>
                                        <option value="rakhine">ရခိုင်ပြည်နယ်</option>
                                        <option value="shan">ရှမ်းပြည်နယ်</option>
                                        <option value="naypyidaw">နေပြည်တော်</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">မြို့နယ်</label>
                                    <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                        <option value="">မြို့နယ်ရွေးချယ်ပါ</option>
                                        <option value="kamaryut">ကမာရွတ်</option>
                                        <option value="hlaing">လှိုင်</option>
                                        <option value="bahan">ဗဟန်း</option>
                                        <option value="yankin">ရန်ကင်း</option>
                                        <option value="mayangone">မရမ်းကုန်း</option>
                                        <option value="thingangyun">သင်္ဃန်းကျွန်း</option>
                                        <option value="lanmadaw">လမ်းမတော်</option>
                                        <option value="latha">လသာ</option>
                                        <option value="pabedan">ပန်းဘဲတန်း</option>
                                        <option value="kyauktada">ကျောက်တံတား</option>
                                        <option value="pazundaung">ပဇွန်တောင်</option>
                                        <option value="dagon">ဒဂုံ</option>
                                        <option value="northdagon">ဒဂုံမြောက်ပိုင်း</option>
                                        <option value="southdagon">ဒဂုံတောင်ပိုင်း</option>
                                        <option value="eastdagon">ဒဂုံအရှေ့ပိုင်း</option>
                                        <option value="seikkan">ဆိပ်ကမ်း</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Account Information -->
                        <div class="bg-gray-50 rounded-xl p-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">အကောင့် အချက်အလက်များ</label>
                            
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">စကားဝှက်</label>
                                    <input type="password" placeholder="စကားဝှက်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-600 mb-1">စကားဝှက် အတည်ပြုပါ</label>
                                    <input type="password" placeholder="စကားဝှက်ပြန်ဖြည့်ပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                                </div>
                            </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="flex items-start">
                            <input type="checkbox" id="terms" class="h-5 w-5 rounded text-green-600 focus:ring-green-500 cursor-pointer mt-0.5">
                            <label for="terms" class="ml-3 text-sm text-gray-700 cursor-pointer">
                                ကျွန်ုပ်သည် <a href="#" class="text-green-600 hover:text-green-800 underline">အသုံးပြုသူစည်းမျဉ်း</a> နှင့် <a href="#" class="text-green-600 hover:text-green-800 underline">ကိုယ်ရေးကိုယ်တာမူဝါဒ</a> တို့ကို လက်ခံသည်
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end space-x-4">
                            <button type="button" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold rounded-lg transition-all duration-200">
                                ပယ်ဖျက်ရန်
                            </button>
                            <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                ပရိုဖိုင်း ဖန်တီးမည်
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Login Link -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-600">
                    အကောင့်ရှိပြီးသားလား? 
                    <a href="#" class="text-green-600 hover:text-green-800 font-semibold underline">အကောင့်ဝင်ရန်</a>
                </p>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>