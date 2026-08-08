<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Marketplace</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Education Marketplace</h1>
                <p class="text-lg text-gray-600">ပညာရေးဆိုင်ရာ ထုတ်ကုန်များ၊ ဝန်ဆောင်မှုများနှင့် သင်တန်းများကို ရှာဖွေဝယ်ယူပါ</p>
            </div>

            <!-- Category Tabs -->
            <div class="flex justify-center mb-8">
                <div class="bg-white rounded-full p-1 shadow-md">
                    <button class="px-6 py-2 rounded-full bg-green-600 text-white font-semibold transition-all duration-200" onclick="showCategory('products')">Products</button>
                    <button class="px-6 py-2 rounded-full text-gray-600 font-semibold hover:bg-green-100 transition-all duration-200" onclick="showCategory('services')">Services</button>
                    <button class="px-6 py-2 rounded-full text-gray-600 font-semibold hover:bg-green-100 transition-all duration-200" onclick="showCategory('trainings')">Trainings</button>
                </div>
            </div>

            <!-- Products Section -->
            <div id="products-section" class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    Education Products
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-green-100 to-emerald-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">သင်္ချာစာအုပ်များ</h3>
                            <p class="text-sm text-gray-600 mb-4">ဆယ်တန်းအဆင့် သင်္ချာဘာသာရပ်အတွက် စာအုပ်များ</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">၁၅,၀၀၀ ကျပ်</span>
                                <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">ဝယ်ယူမည်</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-blue-100 to-indigo-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">အင်္ဂလိပ်စာ လေ့ကျင့်စာအုပ်</h3>
                            <p class="text-sm text-gray-600 mb-4">အင်္ဂလိပ်စာ လေ့လာရန် လေ့ကျင့်စာအုပ်များ</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">၂၀,၀၀၀ ကျပ်</span>
                                <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">ဝယ်ယူမည်</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-purple-100 to-pink-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">ဓာတ်ပုံလက်ကိုင်များ</h3>
                            <p class="text-sm text-gray-600 mb-4">ဓာတ်ပုံဗေဒ လက်ကိုင်များ</p>
                            <div class="flex justify-between items-center">
                                <span class="text-xl font-bold text-green-600">၁၀,၀၀၀ ကျပ်</span>
                                <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">ဝယ်ယူမည်</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div id="services-section" class="mb-12 hidden">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Education Services
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Service Card 1 -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">အွန်လိုင်းသင်ကြားမှု</h3>
                        <p class="text-sm text-gray-600 mb-4">အိမ်မှနေ၍ အွန်လိုင်းဖြင့် သင်ကြားနိုင်ပါသည်</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-green-600">၅၀,၀၀၀ ကျပ်/လ</span>
                            <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">မှာယူမည်</button>
                        </div>
                    </div>

                    <!-- Service Card 2 -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">အိမ်တိုင်ရာသင်ကြားမှု</h3>
                        <p class="text-sm text-gray-600 mb-4">ဆရာများ အိမ်သို့လာပြီး သင်ကြားပေးမှု</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-green-600">၁၀၀,၀၀၀ ကျပ်/လ</span>
                            <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">မှာယူမည်</button>
                        </div>
                    </div>

                    <!-- Service Card 3 -->
                    <div class="bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">စာစစ်ဝန်ဆောင်မှု</h3>
                        <p class="text-sm text-gray-600 mb-4">စာမေးပွဲများအတွက် စာစစ်ပေးခြင်း</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-bold text-green-600">၂၅,၀၀၀ ကျပ်/ကြိမ်</span>
                            <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">မှာယူမည်</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trainings Section -->
            <div id="trainings-section" class="mb-12 hidden">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    Training Programs
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Training Card 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-orange-100 to-red-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">အင်္ဂလိပ်စာ သင်တန်း</h3>
                            <p class="text-sm text-gray-600 mb-4">အခြေခံမှ အဆင့်မြင့်အထိ သင်ကြားပေးမည်</p>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-green-600">၁၅၀,၀၀၀ ကျပ်</span>
                                <span class="text-sm text-gray-500">၃ လ</span>
                            </div>
                            <button class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">စာရင်းသွင်းမည်</button>
                        </div>
                    </div>

                    <!-- Training Card 2 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-teal-100 to-cyan-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">ကွန်ပျူတာ သင်တန်း</h3>
                            <p class="text-sm text-gray-600 mb-4">ကွန်ပျူတာအခြေခံမှ ပရိုဂရမ်းအထိ</p>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-green-600">၂၀၀,၀၀၀ ကျပ်</span>
                                <span class="text-sm text-gray-500">၆ လ</span>
                            </div>
                            <button class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">စာရင်းသွင်းမည်</button>
                        </div>
                    </div>

                    <!-- Training Card 3 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-yellow-100 to-amber-200 flex items-center justify-center">
                            <svg class="w-16 h-16 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">စီးပွားရေး သင်တန်း</h3>
                            <p class="text-sm text-gray-600 mb-4">စီးပွားရေးအခြေခံနှင့် စီမံခန့်ခွဲမှု</p>
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-xl font-bold text-green-600">၁၈၀,၀၀၀ ကျပ်</span>
                                <span class="text-sm text-gray-500">၄ လ</span>
                            </div>
                            <button class="w-full px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">စာရင်းသွင်းမည်</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Become Seller CTA -->
            <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl p-8 text-center text-white">
                <h3 class="text-2xl font-bold mb-2">သင်လည်း ရောင်းသူဖြစ်လိုပါသလား?</h3>
                <p class="mb-6 text-green-100">ပညာရေးဆိုင်ရာ ထုတ်ကုန်များ၊ ဝန်ဆောင်မှုများနှင့် သင်တန်းများကို ရောင်းချပါ</p>
                <button class="px-8 py-3 bg-white text-green-600 font-semibold rounded-lg hover:bg-green-50 transition-colors">
                    ရောင်းသူအဖြစ် စာရင်းသွင်းမည်
                </button>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <script>
        function showCategory(category) {
            // Hide all sections
            document.getElementById('products-section').classList.add('hidden');
            document.getElementById('services-section').classList.add('hidden');
            document.getElementById('trainings-section').classList.add('hidden');
            
            // Show selected section
            document.getElementById(category + '-section').classList.remove('hidden');
            
            // Update button styles
            const buttons = document.querySelectorAll('.rounded-full');
            buttons.forEach(btn => {
                btn.classList.remove('bg-green-600', 'text-white');
                btn.classList.add('text-gray-600');
            });
            
            event.target.classList.add('bg-green-600', 'text-white');
            event.target.classList.remove('text-gray-600');
        }
    </script>
</body>
</html>
