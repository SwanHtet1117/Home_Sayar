<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Payment Verification List</title>
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
                    <h2 class="text-2xl font-bold text-gray-800">Payment Verification List</h2>
                    <p class="text-sm text-gray-500">Review and confirm payment requests from parents</p>
                </div>
                <a href="{{ route('teacher.dashboard') }}" class="rounded-lg border border-green-300 bg-white px-4 py-2 text-sm font-semibold text-green-700 hover:bg-green-50">
                    Back to Dashboard
                </a>
            </div>

            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Payment Verification Requests</h3>
                </div>
                <div class="p-6">
                    <div class="mb-4 text-sm text-gray-500">Pending and approved payment requests</div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Parent</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Subject</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Amount</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Status</th>
                                    <th class="px-4 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-green-50">
                                    <td class="px-4 py-4">
                                        <div class="font-medium text-gray-900">U Aye</div>
                                        <div class="text-sm text-gray-500">Student: Aye Chan</div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-600">Mathematics</td>
                                    <td class="px-4 py-4 text-sm font-semibold text-gray-900">300,000 MMK</td>
                                    <td class="px-4 py-4"><span class="px-2 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-semibold">Pending</span></td>
                                    <td class="px-4 py-4 flex flex-wrap gap-2">
                                        <button type="button" onclick="openModal('payment-detail-1')" class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-50">View</button>
                                        <button class="rounded-lg bg-green-600 px-3 py-2 text-sm font-semibold text-white hover:bg-green-700">Verify</button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-green-50">
                                    <td class="px-4 py-4">
                                        <div class="font-medium text-gray-900">Daw Mya</div>
                                        <div class="text-sm text-gray-500">Student: Khin Aye</div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-600">English</td>
                                    <td class="px-4 py-4 text-sm font-semibold text-gray-900">250,000 MMK</td>
                                    <td class="px-4 py-4"><span class="px-2 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">Approved</span></td>
                                    <td class="px-4 py-4">
                                        <button type="button" onclick="openModal('payment-detail-1')" class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-600 hover:bg-gray-50">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="payment-detail-1" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 px-4">
        <div class="w-full max-w-lg rounded-2xl bg-white p-6 shadow-2xl">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold text-gray-800">Payment Details</h3>
                <button type="button" onclick="closeModal('payment-detail-1')" class="text-gray-500 hover:text-gray-700 text-xl">×</button>
            </div>
            <div class="space-y-3 text-sm text-gray-700">
                <div class="flex justify-between border-b pb-2">
                    <span class="font-semibold">Parent</span>
                    <span>Daw Mya</span>
                </div>
                <div class="flex justify-between border-b pb-2">
                    <span class="font-semibold">Student</span>
                    <span>Khin Aye</span>
                </div>
                <div class="flex justify-between border-b pb-2">
                    <span class="font-semibold">Subject</span>
                    <span>English</span>
                </div>
                <div class="flex justify-between border-b pb-2">
                    <span class="font-semibold">Amount</span>
                    <span>250,000 MMK</span>
                </div>
                <div class="flex justify-between border-b pb-2">
                    <span class="font-semibold">Date</span>
                    <span>2026-08-01</span>
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold">Status</span>
                    <span class="text-green-600">Approved</span>
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button type="button" onclick="closeModal('payment-detail-1')" class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white hover:bg-green-700">Close</button>
            </div>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.getElementById(id).classList.add('flex');
        }

        function closeModal(id) {
            document.getElementById(id).classList.remove('flex');
            document.getElementById(id).classList.add('hidden');
        }
    </script>

    @include('partials.footer')
</body>
</html>
