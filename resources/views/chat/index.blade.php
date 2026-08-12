<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Chat</title>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">Messages</h2>
            </div>

            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100">
                <div class="flex h-[calc(100vh-200px)]">
                    <!-- Chat List Sidebar -->
                    <div class="w-1/3 border-r border-gray-200 bg-gray-50">
                        <div class="p-4 border-b border-gray-200">
                            <div class="relative">
                                <input type="text" placeholder="Search conversations..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="overflow-y-auto h-full">
                            <!-- Chat Item 1 -->
                            <div class="p-4 border-b border-gray-100 hover:bg-green-50 cursor-pointer transition bg-green-100">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="h-12 w-12 rounded-full bg-green-200 flex items-center justify-center">
                                            <span class="text-green-700 font-semibold">မ</span>
                                        </div>
                                        <div class="absolute bottom-0 right-0 h-3 w-3 bg-green-500 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="text-sm font-semibold text-gray-900">မိဘ ဒေါ်သီရိမောင်</h3>
                                            <span class="text-xs text-gray-500">2m ago</span>
                                        </div>
                                        <p class="text-sm text-gray-600 truncate">ဆရာမရှင့် သင်တန်းအချိန်ကို ပြောင်းလို့ရပါသလား?</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat Item 2 -->
                            <div class="p-4 border-b border-gray-100 hover:bg-green-50 cursor-pointer transition">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="h-12 w-12 rounded-full bg-blue-200 flex items-center justify-center">
                                            <span class="text-blue-700 font-semibold">က</span>
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="text-sm font-semibold text-gray-900">မိဘ ဦးကျော်စိုး</h3>
                                            <span class="text-xs text-gray-500">1h ago</span>
                                        </div>
                                        <p class="text-sm text-gray-600 truncate">ကျောင်းသားရဲ့ ပြသနာများကို ပိုမိုတိုးတက်အောင် ကူညီပေးပါ</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Chat Item 3 -->
                            <div class="p-4 border-b border-gray-100 hover:bg-green-50 cursor-pointer transition">
                                <div class="flex items-center">
                                    <div class="relative">
                                        <div class="h-12 w-12 rounded-full bg-purple-200 flex items-center justify-center">
                                            <span class="text-purple-700 font-semibold">သ</span>
                                        </div>
                                    </div>
                                    <div class="ml-3 flex-1">
                                        <div class="flex justify-between items-center">
                                            <h3 class="text-sm font-semibold text-gray-900">မိဘ ဦးသန့်ဇင်</h3>
                                            <span class="text-xs text-gray-500">3h ago</span>
                                        </div>
                                        <p class="text-sm text-gray-600 truncate">နောက်လအတွက် သင်တန်းကြေးပေးပို့ပြီးပါပြီ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Messages Area -->
                    <div class="flex-1 flex flex-col">
                        <!-- Chat Header -->
                        <div class="p-4 border-b border-gray-200 bg-white">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <div class="h-10 w-10 rounded-full bg-green-200 flex items-center justify-center">
                                        <span class="text-green-700 font-semibold">မ</span>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-sm font-semibold text-gray-900">မိဘ ဒေါ်သီရိမောင်</h3>
                                        <p class="text-xs text-green-600">Online</p>
                                    </div>
                                </div>
                                <div class="flex space-x-2">
                                    <button class="p-2 rounded-full hover:bg-gray-100 transition">
                                        <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </button>
                                    <button class="p-2 rounded-full hover:bg-gray-100 transition">
                                        <svg class="h-5 w-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Messages -->
                        <div class="flex-1 overflow-y-auto p-4 bg-gray-50">
                            <div class="space-y-4">
                                <!-- Received Message -->
                                <div class="flex justify-start">
                                    <div class="max-w-xs lg:max-w-md">
                                        <div class="bg-white rounded-2xl rounded-tl-none p-3 shadow-sm">
                                            <p class="text-sm text-gray-800">မင်္ဂလာပါ ဆရာမ။ ကျွန်မက ကျောင်းသား သူရိန်ရဲ့ မိခင် ဖြစ်ပါတယ်။</p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">10:30 AM</p>
                                    </div>
                                </div>

                                <!-- Sent Message -->
                                <div class="flex justify-end">
                                    <div class="max-w-xs lg:max-w-md">
                                        <div class="bg-green-500 rounded-2xl rounded-tr-none p-3 shadow-sm">
                                            <p class="text-sm text-white">မင်္ဂလာပါ အမ။ ဘာများ ကူညီပေးရမလဲ?</p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1 text-right">10:32 AM</p>
                                    </div>
                                </div>

                                <!-- Received Message -->
                                <div class="flex justify-start">
                                    <div class="max-w-xs lg:max-w-md">
                                        <div class="bg-white rounded-2xl rounded-tl-none p-3 shadow-sm">
                                            <p class="text-sm text-gray-800">ဆရာမရှင့် သင်တန်းအချိန်ကို ပြောင်းလို့ရပါသလား? ကျွန်မသားမှာ အခြားအစီအစဉ် ရှိနေလို့ပါ။</p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">10:35 AM</p>
                                    </div>
                                </div>

                                <!-- Sent Message -->
                                <div class="flex justify-end">
                                    <div class="max-w-xs lg:max-w-md">
                                        <div class="bg-green-500 rounded-2xl rounded-tr-none p-3 shadow-sm">
                                            <p class="text-sm text-white">ဟုတ်ကဲ့ အမ။ ဘယ်အချိန်များ ပြောင်းလိုပါသလဲ?</p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1 text-right">10:36 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Message Input -->
                        <div class="p-4 border-t border-gray-200 bg-white">
                            <div class="flex items-center space-x-3">
                                <button class="p-2 rounded-full hover:bg-gray-100 transition">
                                    <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                                    </svg>
                                </button>
                                <input type="text" placeholder="Type a message..." class="flex-1 px-4 py-2 border border-gray-300 rounded-full focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <button class="p-2 rounded-full hover:bg-gray-100 transition">
                                    <svg class="h-6 w-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                                <button class="p-3 bg-green-500 rounded-full hover:bg-green-600 transition shadow-md">
                                    <svg class="h-5 w-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
