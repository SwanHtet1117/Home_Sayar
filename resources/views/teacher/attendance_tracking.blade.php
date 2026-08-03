<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Attendance Tracking</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')

    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
                <div class="flex items-center">
                    <div class="h-12 w-12 rounded-2xl bg-green-600 flex items-center justify-center mr-3 shadow-md">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Student Attendance Tracking</h2>
                        <p class="text-sm text-gray-500">ကျောင်းသားများ၏ နေ့စဉ်တက်ရောက်မှုကို မှတ်တမ်းတင်ရန်</p>
                    </div>
                </div>
                <a href="{{ route('teacher.dashboard') }}" class="rounded-lg border border-green-300 bg-white px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">
                    Teacher Dashboard
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-5">
                    <p class="text-sm font-medium text-gray-500">Today's Class</p>
                    <p class="text-xl font-bold text-gray-800 mt-1">Mathematics - Grade 8</p>
                </div>
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-5">
                    <p class="text-sm font-medium text-gray-500">Date</p>
                    <p class="text-xl font-bold text-gray-800 mt-1">{{ now()->format('d M Y') }}</p>
                </div>
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-5">
                    <p class="text-sm font-medium text-gray-500">Summary</p>
                    <p class="text-xl font-bold text-gray-800 mt-1">5 Present / 1 Late / 1 Absent</p>
                </div>
            </div>

            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Attendance Register</h3>
                </div>

                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Select Student Group</label>
                            <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200">
                                <option value="">ရွေးချယ်ပါ</option>
                                <option value="group1">Group A - Grade 8</option>
                                <option value="group2">Group B - Grade 8</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Attendance Date</label>
                            <input type="date" value="{{ now()->toDateString() }}" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200">
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Student</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Status</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Note</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-green-50">
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="font-medium text-gray-900">Aye Chan</div>
                                        <div class="text-sm text-gray-500">Roll No. 12</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex flex-wrap gap-2">
                                            <label class="inline-flex items-center rounded-full border border-green-200 bg-green-50 px-3 py-1 text-sm text-green-700">
                                                <input type="radio" name="student_1" value="present" class="mr-2 text-green-600" checked>
                                                Present
                                            </label>
                                            <label class="inline-flex items-center rounded-full border border-yellow-200 bg-yellow-50 px-3 py-1 text-sm text-yellow-700">
                                                <input type="radio" name="student_1" value="late" class="mr-2 text-yellow-600">
                                                Late
                                            </label>
                                            <label class="inline-flex items-center rounded-full border border-red-200 bg-red-50 px-3 py-1 text-sm text-red-700">
                                                <input type="radio" name="student_1" value="absent" class="mr-2 text-red-600">
                                                Absent
                                            </label>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        <input type="text" placeholder="Optional note" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                    </td>
                                </tr>
                                <tr class="hover:bg-green-50">
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="font-medium text-gray-900">Khin Aye</div>
                                        <div class="text-sm text-gray-500">Roll No. 14</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex flex-wrap gap-2">
                                            <label class="inline-flex items-center rounded-full border border-green-200 bg-green-50 px-3 py-1 text-sm text-green-700">
                                                <input type="radio" name="student_2" value="present" class="mr-2 text-green-600" checked>
                                                Present
                                            </label>
                                            <label class="inline-flex items-center rounded-full border border-yellow-200 bg-yellow-50 px-3 py-1 text-sm text-yellow-700">
                                                <input type="radio" name="student_2" value="late" class="mr-2 text-yellow-600">
                                                Late
                                            </label>
                                            <label class="inline-flex items-center rounded-full border border-red-200 bg-red-50 px-3 py-1 text-sm text-red-700">
                                                <input type="radio" name="student_2" value="absent" class="mr-2 text-red-600">
                                                Absent
                                            </label>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        <input type="text" placeholder="Optional note" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                    </td>
                                </tr>
                                <tr class="hover:bg-green-50">
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="font-medium text-gray-900">Moe Thant</div>
                                        <div class="text-sm text-gray-500">Roll No. 18</div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex flex-wrap gap-2">
                                            <label class="inline-flex items-center rounded-full border border-green-200 bg-green-50 px-3 py-1 text-sm text-green-700">
                                                <input type="radio" name="student_3" value="present" class="mr-2 text-green-600">
                                                Present
                                            </label>
                                            <label class="inline-flex items-center rounded-full border border-yellow-200 bg-yellow-50 px-3 py-1 text-sm text-yellow-700">
                                                <input type="radio" name="student_3" value="late" class="mr-2 text-yellow-600">
                                                Late
                                            </label>
                                            <label class="inline-flex items-center rounded-full border border-red-200 bg-red-50 px-3 py-1 text-sm text-red-700">
                                                <input type="radio" name="student_3" value="absent" class="mr-2 text-red-600" checked>
                                                Absent
                                            </label>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        <input type="text" placeholder="Optional note" class="w-full rounded-lg border border-gray-300 px-3 py-2 focus:ring-2 focus:ring-green-500 focus:border-green-500">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 shadow-md hover:shadow-lg">
                            Save Attendance
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
