<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Payment Verification List</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="mb-6 flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="mr-3 h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3v1H7a2 2 0 00-2 2v5a2 2 0 002 2h10a2 2 0 002-2v-5a2 2 0 00-2-2h-2v-1c0-1.657-1.343-3-3-3zm-1 3a1 1 0 112 0v1h-2v-1z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Payment Verification List</h2>
                        <p class="text-sm text-gray-500">Review and verify deposits for both parents and teachers.</p>
                    </div>
                </div>
                <a href="/admin/dashboard" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Admin Dashboard
                </a>
            </div>

            <div class="mb-6 flex flex-wrap gap-3 rounded-2xl border border-gray-100 bg-white p-4 shadow-md">
                <button type="button" id="showParentsBtn" class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">Parent Payments</button>
                <button type="button" id="showTeachersBtn" class="rounded-lg border border-green-300 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">Teacher Payments</button>
            </div>
            <!-- Parent's Payment Verification List Sections -->
            <div id="parentsSection" class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Parent Deposit Verification List</h3>
                </div>
                <div class="space-y-6 p-6">
                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Search & Filter</label>
                        <div class="grid gap-4 md:grid-cols-4">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Parent / Reference</label>
                                <input type="text" placeholder="Search parent or reference..." class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Payment Method</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Payment Types</option>
                                    <option value="bank">Bank Transfer</option>
                                    <option value="card">Card</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Status</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                            <div class="flex items-end">
                                <button class="w-full rounded-lg bg-green-600 px-4 py-3 font-semibold text-white transition-all duration-200 hover:bg-green-700">Search</button>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-xl border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Parent</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Reference</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Amount</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Method</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Status</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Ms. Aye Aye</div>
                                        <div class="text-sm text-gray-500">Parent ID: P-1042</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">TXN-10234</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$250</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Bank Transfer</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">Pending</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex gap-2">
                                            <button type="button" class="view-payment-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-user-type="Parent" data-user-name="Ms. Aye Aye" data-user-id="P-1042" data-reference="TXN-10234" data-amount="$250" data-method="Bank Transfer" data-status="Pending" data-notes="Deposit submitted through KPay with transaction reference TXN-10234. Waiting for admin confirmation.">View</button>
                                            <button class="rounded-lg bg-green-600 px-3 py-2 text-white transition hover:bg-green-700">Approve</button>
                                            <button class="rounded-lg bg-red-600 px-3 py-2 text-white transition hover:bg-red-700">Reject</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Mr. Kyaw Kyaw</div>
                                        <div class="text-sm text-gray-500">Parent ID: P-1047</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">TXN-10241</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$180</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Card</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Approved</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-payment-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-user-type="Parent" data-user-name="Mr. Kyaw Kyaw" data-user-id="P-1047" data-reference="TXN-10241" data-amount="$180" data-method="Card" data-status="Approved" data-notes="Payment was approved and matched the submitted card transaction.">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Teacher's Payment Verification List Sections -->
            <div id="teachersSection" class="hidden overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-yellow-600 to-teal-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Teacher Deposit Verification List</h3>
                </div>
                <div class="space-y-6 p-6">
                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Search & Filter</label>
                        <div class="grid gap-4 md:grid-cols-4">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Teacher / Reference</label>
                                <input type="text" placeholder="Search teacher or reference..." class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Payment Method</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Payment Types</option>
                                    <option value="bank">Bank Transfer</option>
                                    <option value="card">Card</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Status</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                            <div class="flex items-end">
                                <button class="w-full rounded-lg bg-green-600 px-4 py-3 font-semibold text-white transition-all duration-200 hover:bg-green-700">Search</button>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden rounded-xl border border-gray-200">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Teacher</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Reference</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Amount</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Method</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Status</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Ms. Thin Thin</div>
                                        <div class="text-sm text-gray-500">Teacher ID: T-201</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">TCH-10021</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$300</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Bank Transfer</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">Pending</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex gap-2">
                                            <button type="button" class="view-payment-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-user-type="Teacher" data-user-name="Ms. Thin Thin" data-user-id="T-201" data-reference="TCH-10021" data-amount="$300" data-method="Bank Transfer" data-status="Pending" data-notes="Teacher payment submitted for monthly hosting and lesson fee verification.">View</button>
                                            <button class="rounded-lg bg-green-600 px-3 py-2 text-white transition hover:bg-green-700">Approve</button>
                                            <button class="rounded-lg bg-red-600 px-3 py-2 text-white transition hover:bg-red-700">Reject</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Mr. Zaw Zaw</div>
                                        <div class="text-sm text-gray-500">Teacher ID: T-204</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">TCH-10037</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">$220</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Card</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Approved</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-payment-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-user-type="Teacher" data-user-name="Mr. Zaw Zaw" data-user-id="T-204" data-reference="TCH-10037" data-amount="$220" data-method="Card" data-status="Approved" data-notes="Teacher payment was successfully verified and approved.">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="paymentDetailModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4">
        <div class="w-full max-w-2xl rounded-2xl border border-gray-200 bg-white p-6 shadow-2xl">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Payment Details</h3>
                    <p class="text-sm text-gray-500">Full payment information</p>
                </div>
                <button id="closePaymentModal" class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">Close</button>
            </div>

            <div class="mt-6 space-y-4 rounded-xl bg-gray-50 p-4">
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">User Type</p>
                        <p id="modalUserType" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">User Name</p>
                        <p id="modalUserName" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">User ID</p>
                        <p id="modalUserId" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Reference</p>
                        <p id="modalReference" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Amount</p>
                        <p id="modalAmount" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Payment Method</p>
                        <p id="modalMethod" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Status</p>
                        <p id="modalStatus" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Notes</p>
                        <p id="modalNotes" class="mt-1 text-base text-gray-700">-</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script>
        const parentSection = document.getElementById('parentsSection');
        const teacherSection = document.getElementById('teachersSection');
        const showParentsBtn = document.getElementById('showParentsBtn');
        const showTeachersBtn = document.getElementById('showTeachersBtn');

        showParentsBtn.addEventListener('click', function () {
            parentSection.classList.remove('hidden');
            teacherSection.classList.add('hidden');
            showParentsBtn.classList.add('bg-green-600', 'text-white');
            showParentsBtn.classList.remove('border-green-300', 'text-green-700', 'bg-white');
            showTeachersBtn.classList.remove('bg-green-600', 'text-white');
            showTeachersBtn.classList.add('border-green-300', 'text-green-700');
        });

        showTeachersBtn.addEventListener('click', function () {
            teacherSection.classList.remove('hidden');
            parentSection.classList.add('hidden');
            showTeachersBtn.classList.add('bg-green-600', 'text-white');
            showTeachersBtn.classList.remove('border-green-300', 'text-green-700');
            showParentsBtn.classList.remove('bg-green-600', 'text-white');
            showParentsBtn.classList.add('border-green-300', 'text-green-700');
        });

        const modal = document.getElementById('paymentDetailModal');
        const closeButton = document.getElementById('closePaymentModal');
        const modalUserType = document.getElementById('modalUserType');
        const modalUserName = document.getElementById('modalUserName');
        const modalUserId = document.getElementById('modalUserId');
        const modalReference = document.getElementById('modalReference');
        const modalAmount = document.getElementById('modalAmount');
        const modalMethod = document.getElementById('modalMethod');
        const modalStatus = document.getElementById('modalStatus');
        const modalNotes = document.getElementById('modalNotes');

        document.querySelectorAll('.view-payment-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                modalUserType.textContent = this.dataset.userType || '-';
                modalUserName.textContent = this.dataset.userName || '-';
                modalUserId.textContent = this.dataset.userId || '-';
                modalReference.textContent = this.dataset.reference || '-';
                modalAmount.textContent = this.dataset.amount || '-';
                modalMethod.textContent = this.dataset.method || '-';
                modalStatus.textContent = this.dataset.status || '-';
                modalNotes.textContent = this.dataset.notes || '-';
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });
        });

        function closeModal() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        closeButton.addEventListener('click', closeModal);
        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                closeModal();
            }
        });
    </script>
</body>
</html>
