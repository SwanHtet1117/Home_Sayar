<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher List</title>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <h2 class="text-2xl font-bold text-gray-800">Teacher List (ရန်ကုန်တိုင်း)</h2>
            </div>

            <!-- Search Bar -->
            <div class="bg-white p-4 rounded-2xl shadow-md border border-gray-100 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
                    <div class="md:col-span-1 flex items-center">
                        <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" placeholder="ဆရာအမည် သို့မဟုတ် ဖုန်းနံပါတ်..." class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
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
                        <select class="w-full px-4 py-2 rounded-lg border border-gray-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200 hover:border-green-400 shadow-sm">
                            <option value="">အခြေအနေ အားလုံး</option>
                            <option value="verified">Verified</option>
                            <option value="pending">Pending</option>
                            <option value="banned">Banned</option>
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
                            <th class="px-6 py-4 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">ဆရာအမည်</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ဘာသာရပ် / မြို့နယ်</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">သင်ကြားမှုပုံစံ</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">အခြေအနေ</th>
                            <th class="px-6 py-4 text-cemter text-xs font-semibold text-gray-700 uppercase tracking-wider">လုပ်ဆောင်ချက်</th>
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
                                        <div class="text-sm font-medium text-gray-900">ဦးမင်းသူ</div>
                                        <div class="text-sm text-gray-500">09-777777777</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">ဆယ်တန်း ရူပဗေဒ (Physics)</div>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">ကမာရွတ်၊ လှိုင်</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-green-100 text-green-700">On-site</span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-blue-100 text-blue-700">Online</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    ✓ Verified
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('teacher.profile.detail', ['id' => 1]) }}" class="inline-flex items-center px-3 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    View
                                </a>
                                <button class="inline-flex items-center px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Ban
                                </button>
                                <button class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Delete
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
                                        <div class="text-sm font-medium text-gray-900">ဒေါ်သီရိမောင်</div>
                                        <div class="text-sm text-gray-500">09-888888888</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">ဆယ်တန်း အင်္ဂလိပ်စာ (English)</div>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">ရန်ကင်း၊ ဗဟန်း</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-green-100 text-green-700">On-site</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('teacher.profile.detail', ['id' => 2]) }}" class="inline-flex items-center px-3 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    View
                                </a>
                                <button class="inline-flex items-center px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Ban
                                </button>
                                <button class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Delete
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
                                        <div class="text-sm font-medium text-gray-900">ဦးထွန်းအောင်</div>
                                        <div class="text-sm text-gray-500">09-999999999</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">သင်္ချာ (Mathematics)</div>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">မရမ်းကုန်း</span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-green-100 text-green-700">On-site</span>
                                    <span class="px-2 py-1 text-xs font-medium rounded-md bg-blue-100 text-blue-700">Online</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    X Banned
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                                <a href="{{ route('teacher.profile.detail', ['id' => 3]) }}" class="inline-flex items-center px-3 py-2 bg-green-600 hover:bg-green-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    View
                                </a>
                                <button class="inline-flex items-center px-3 py-2 bg-yellow-500 hover:bg-yellow-600 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Ban
                                </button>
                                <button class="inline-flex items-center px-3 py-2 bg-red-600 hover:bg-red-700 text-white text-xs font-semibold rounded-lg transition-all duration-200 transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Delete
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