<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Attendance Tracking</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <svg class="w-8 h-8 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Attendance Tracking</h2>
                        <p class="text-sm text-gray-500">ဆရာသင်ကြားမှုအဝင်အထွက်ကို စောင့်ကြည့်ရန်</p>
                    </div>
                </div>
                <a href="{{ route('parent.dashboard') }}" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Parent Dashboard
                </a>
            </div>

            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Teaching Attendance Record</h3>
                </div>

                <div class="p-6 space-y-6">
                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Teacher / Student</label>
                        <select class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                            <option value="">ရွေးချယ်ပါ</option>
                            <option value="teacher1">ဦးမင်းသူ - သင်္ချာ</option>
                            <option value="teacher2">ဒေါ်သီရိ - အင်္ဂလိပ်စာ</option>
                            <option value="teacher3">ဦးအောင်မင်း - ရူပဗေဒ</option>
                        </select>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Attendance Date</label>
                        <input type="date" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm">
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Status</label>
                        <div class="flex flex-wrap gap-4">
                            <label class="inline-flex items-center">
                                <input type="radio" name="attendance_status" value="present" class="h-5 w-5 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                <span class="ml-2 text-sm text-gray-700">Present</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="attendance_status" value="absent" class="h-5 w-5 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                <span class="ml-2 text-sm text-gray-700">Absent</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="attendance_status" value="late" class="h-5 w-5 rounded-full text-green-600 focus:ring-green-500 cursor-pointer">
                                <span class="ml-2 text-sm text-gray-700">Late</span>
                            </label>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Notes</label>
                        <textarea rows="4" placeholder="အချိန်နှောင်း၊ ပြန်လည်ကျောင်းတက်မှု စသည်ဖြင့် မှတ်ချက်ရေးပါ" class="w-full px-4 py-3 rounded-lg border border-green-300 bg-white focus:ring-2 focus:ring-green-500 focus:border-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400 shadow-sm resize-none"></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-8 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-all duration-200 transform hover:scale-[1.02] shadow-md hover:shadow-lg">
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
