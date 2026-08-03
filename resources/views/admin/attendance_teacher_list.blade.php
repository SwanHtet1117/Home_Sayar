<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Attendance Teacher List</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Attendance Teacher List</h2>
                    <p class="text-sm text-gray-500">Admin can review teacher attendance records</p>
                </div>
                <a href="{{ route('admin.dashboard') }}" class="rounded-lg border border-green-300 bg-white px-4 py-2 text-sm font-semibold text-green-700 hover:bg-green-50">
                    Back to Dashboard
                </a>
            </div>

            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Teacher Attendance Records</h3>
                </div>
                <div class="p-6">
                    <div class="mb-4 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
                        <div class="text-sm text-gray-500">Showing latest attendance submissions</div>
                        <select class="rounded-lg border border-green-300 px-3 py-2 text-sm focus:ring-2 focus:ring-green-500">
                            <option>All Teachers</option>
                            <option>Verified</option>
                            <option>Pending</option>
                        </select>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Teacher</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Date</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Status</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Note</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-green-50">
                                    <td class="px-4 py-4">
                                        <div class="font-medium text-gray-900">U Mg Mg</div>
                                        <div class="text-sm text-gray-500">Mathematics</div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-600">2026-08-01</td>
                                    <td class="px-4 py-4"><span class="px-2 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Present</span></td>
                                    <td class="px-4 py-4 text-sm text-gray-500">On time</td>
                                </tr>
                                <tr class="hover:bg-green-50">
                                    <td class="px-4 py-4">
                                        <div class="font-medium text-gray-900">Daw Thiri</div>
                                        <div class="text-sm text-gray-500">English</div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-600">2026-08-01</td>
                                    <td class="px-4 py-4"><span class="px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">Late</span></td>
                                    <td class="px-4 py-4 text-sm text-gray-500">Arrived 15 mins late</td>
                                </tr>
                                <tr class="hover:bg-green-50">
                                    <td class="px-4 py-4">
                                        <div class="font-medium text-gray-900">U Aung</div>
                                        <div class="text-sm text-gray-500">Science</div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-600">2026-08-01</td>
                                    <td class="px-4 py-4"><span class="px-2 py-1 rounded-full bg-red-100 text-red-700 text-xs font-semibold">Absent</span></td>
                                    <td class="px-4 py-4 text-sm text-gray-500">No attendance submitted</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
