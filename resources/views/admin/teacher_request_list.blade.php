<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Request List</title>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">Teacher Request List (မိဘများ တောင်းဆိုမှု)</h2>
            </div>

            <!-- Search Bar -->
            <div class="bg-white p-4 rounded-2xl shadow-md border border-gray-100 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    <div class="md:col-span-1 flex items-center">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" placeholder="မိဘအမည် သို့မဟုတ် ဖုန်းနံပါတ်..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                    </div>
                    <div>
                        <select class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 hover:border-green-400 shadow-sm">
                            <option value="">ဘာသာရပ်အားလုံး</option>
                            <option value="physics">ရူပဗေဒ (Physics)</option>
                            <option value="mathematics">သင်္ချာ (Mathematics)</option>
                            <option value="english">အင်္ဂလိပ်စာ (English)</option>
                            <option value="chemistry">ဓာတုဗေဒ (Chemistry)</option>
                            <option value="biology">ဇီဝဗေဒ (Biology)</option>
                        </select>
                    </div>
                    <div>
                        <select class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 hover:border-green-400 shadow-sm">
                            <option value="">မြို့နယ်အားလုံး</option>
                            <option value="kamaryut">ကမာရွတ်</option>
                            <option value="hlaing">လှိုင်</option>
                            <option value="bahan">ဗဟန်း</option>
                            <option value="yankin">ရန်ကင်း</option>
                            <option value="mayangone">မရမ်းကုန်း</option>
                            <option value="thingangyun">သင်္ဃန်းကျွန်း</option>
                        </select>
                    </div>
                    <div>
                        <select class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 hover:border-green-400 shadow-sm">
                            <option value="">သင်ကြားမှုပုံစံ အားလုံး</option>
                            <option value="onsite">အိမ်တိုင်ရာရောက် (On-site)</option>
                            <option value="online">Online Class</option>
                            <option value="both">နှစ်မျိုးလုံး</option>
                        </select>
                    </div>
                    <div>
                        <button class="w-full px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                            ရှာဖွေရန်
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-2xl overflow-hidden border border-gray-100">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">မိဘအမည်</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">လိုအပ်သည့် ဘာသာရပ် / မြို့နယ်</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">သင်ကြားမှုပုံစံ</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">တောင်းဆိုသည့်ရက်စွဲ</th>
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">လုပ်ဆောင်ချက်</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-green-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-lg shadow-sm">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">ဦးခင်မောင်</div>
                                        <div class="text-sm text-gray-500">09-123456789</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">ဆယ်တန်း ရူပဗေဒ (Physics)</div>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">ကမာရွတ်</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-green-100 text-green-700">အိမ်တိုင်ရာရောက်</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                2024-07-10
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('parent.teacher_request', ['id' => 1]) }}" class="inline-flex items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    View
                                </a>
                                <button wire:click="approve(1)" class="inline-flex items-center px-3 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Approve
                                </button>
                                <button wire:click="reject(1)" class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-green-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold text-lg shadow-sm">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">ဒေါ်မြင့်ကြည်</div>
                                        <div class="text-sm text-gray-500">09-987654321</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">ဆယ်တန်း သင်္ချာ (Mathematics)</div>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">ရန်ကင်း</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-blue-100 text-blue-700">Online Class</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                2024-07-09
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('parent.teacher_request', ['id' => 2]) }}" class="inline-flex items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    View
                                </a>
                                <button wire:click="approve(2)" class="inline-flex items-center px-3 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Approve
                                </button>
                                <button wire:click="reject(2)" class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Reject
                                </button>
                            </td>
                        </tr>
                        <tr class="hover:bg-green-50 transition-colors duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-lg shadow-sm">
                                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">ဦးဇော်ဝင်း</div>
                                        <div class="text-sm text-gray-500">09-555555555</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">ဆယ်တန်း အင်္ဂလိပ်စာ (English)</div>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">ဗဟန်း</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-green-100 text-green-700">အိမ်တိုင်ရာရောက်</span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-blue-100 text-blue-700">Online Class</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                2024-07-08
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('parent.teacher_request', ['id' => 3]) }}" class="inline-flex items-center px-3 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    View
                                </a>
                                <button wire:click="approve(3)" class="inline-flex items-center px-3 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Approve
                                </button>
                                <button wire:click="reject(3)" class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Reject
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>