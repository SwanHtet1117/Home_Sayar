<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Attendance Verification</title>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Attendance Verification</h2>
                        <p class="text-sm text-gray-500">Review and verify attendance for both teachers and students.</p>
                    </div>
                </div>
                <a href="/admin/dashboard" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Admin Dashboard
                </a>
            </div>

            <div class="mb-6 flex flex-wrap gap-3 rounded-2xl border border-gray-100 bg-white p-4 shadow-md">
                <button type="button" id="showTeachersBtn" class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">Teacher Attendance</button>
                <button type="button" id="showStudentsBtn" class="rounded-lg border border-green-300 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">Student Attendance</button>
            </div>

            <!-- Teacher Attendance Verification Section -->
            <div id="teachersSection" class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Teacher Attendance Verification</h3>
                </div>
                <div class="space-y-6 p-6">
                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Search & Filter</label>
                        <div class="grid gap-4 md:grid-cols-4">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Teacher Name</label>
                                <input type="text" placeholder="Search teacher..." class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Subject</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Subjects</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="physics">Physics</option>
                                    <option value="english">English</option>
                                    <option value="chemistry">Chemistry</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Status</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="verified">Verified</option>
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
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Subject</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Date</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Hours</th>
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
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Mathematics</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">8 hours</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">Pending</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex gap-2">
                                            <button type="button" class="view-attendance-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-user-type="Teacher" data-user-name="Ms. Thin Thin" data-user-id="T-201" data-subject="Mathematics" data-date="2026-08-01" data-hours="8 hours" data-status="Pending" data-notes="Teacher submitted attendance for 8 hours of teaching.">View</button>
                                            <button class="rounded-lg bg-green-600 px-3 py-2 text-white transition hover:bg-green-700">Verify</button>
                                            <button class="rounded-lg bg-red-600 px-3 py-2 text-white transition hover:bg-red-700">Reject</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Mr. Zaw Zaw</div>
                                        <div class="text-sm text-gray-500">Teacher ID: T-204</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Physics</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">6 hours</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Verified</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-attendance-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-user-type="Teacher" data-user-name="Mr. Zaw Zaw" data-user-id="T-204" data-subject="Physics" data-date="2026-08-01" data-hours="6 hours" data-status="Verified" data-notes="Attendance verified and confirmed.">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Student Attendance Verification Section -->
            <div id="studentsSection" class="hidden overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-yellow-600 to-teal-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Student Attendance Verification</h3>
                </div>
                <div class="space-y-6 p-6">
                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Search & Filter</label>
                        <div class="grid gap-4 md:grid-cols-4">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Student Name</label>
                                <input type="text" placeholder="Search student..." class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Subject</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Subjects</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="physics">Physics</option>
                                    <option value="english">English</option>
                                    <option value="chemistry">Chemistry</option>
                                </select>
                            </div>
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Status</label>
                                <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <option value="">All Status</option>
                                    <option value="pending">Pending</option>
                                    <option value="verified">Verified</option>
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
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Student</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Teacher</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Subject</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Date</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Status</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Aye Chan</div>
                                        <div class="text-sm text-gray-500">Student ID: S-301</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Ms. Thin Thin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Mathematics</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-700">Pending</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex gap-2">
                                            <button type="button" class="view-attendance-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-user-type="Student" data-user-name="Aye Chan" data-user-id="S-301" data-teacher="Ms. Thin Thin" data-subject="Mathematics" data-date="2026-08-01" data-status="Pending" data-notes="Student attendance submitted by teacher.">View</button>
                                            <button class="rounded-lg bg-green-600 px-3 py-2 text-white transition hover:bg-green-700">Verify</button>
                                            <button class="rounded-lg bg-red-600 px-3 py-2 text-white transition hover:bg-red-700">Reject</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Khin Aye</div>
                                        <div class="text-sm text-gray-500">Student ID: S-305</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Mr. Zaw Zaw</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Physics</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap"><span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">Verified</span></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-attendance-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-user-type="Student" data-user-name="Khin Aye" data-user-id="S-305" data-teacher="Mr. Zaw Zaw" data-subject="Physics" data-date="2026-08-01" data-status="Verified" data-notes="Student attendance verified and confirmed.">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="attendanceDetailModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4">
        <div class="w-full max-w-2xl rounded-2xl border border-gray-200 bg-white p-6 shadow-2xl">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Attendance Details</h3>
                    <p class="text-sm text-gray-500">Full attendance information</p>
                </div>
                <button id="closeAttendanceModal" class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">Close</button>
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
                    <div id="teacherField">
                        <p class="text-sm font-semibold text-gray-600">Teacher</p>
                        <p id="modalTeacher" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Subject</p>
                        <p id="modalSubject" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Date</p>
                        <p id="modalDate" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div id="hoursField">
                        <p class="text-sm font-semibold text-gray-600">Hours</p>
                        <p id="modalHours" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Status</p>
                        <p id="modalStatus" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-600">Notes</p>
                    <p id="modalNotes" class="mt-1 text-base text-gray-700">-</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script>
        const teacherSection = document.getElementById('teachersSection');
        const studentSection = document.getElementById('studentsSection');
        const showTeachersBtn = document.getElementById('showTeachersBtn');
        const showStudentsBtn = document.getElementById('showStudentsBtn');

        showTeachersBtn.addEventListener('click', function () {
            teacherSection.classList.remove('hidden');
            studentSection.classList.add('hidden');
            showTeachersBtn.classList.add('bg-green-600', 'text-white');
            showTeachersBtn.classList.remove('border-green-300', 'text-green-700', 'bg-white');
            showStudentsBtn.classList.remove('bg-green-600', 'text-white');
            showStudentsBtn.classList.add('border-green-300', 'text-green-700');
        });

        showStudentsBtn.addEventListener('click', function () {
            studentSection.classList.remove('hidden');
            teacherSection.classList.add('hidden');
            showStudentsBtn.classList.add('bg-green-600', 'text-white');
            showStudentsBtn.classList.remove('border-green-300', 'text-green-700');
            showTeachersBtn.classList.remove('bg-green-600', 'text-white');
            showTeachersBtn.classList.add('border-green-300', 'text-green-700');
        });

        const modal = document.getElementById('attendanceDetailModal');
        const closeButton = document.getElementById('closeAttendanceModal');
        const modalUserType = document.getElementById('modalUserType');
        const modalUserName = document.getElementById('modalUserName');
        const modalUserId = document.getElementById('modalUserId');
        const modalTeacher = document.getElementById('modalTeacher');
        const modalSubject = document.getElementById('modalSubject');
        const modalDate = document.getElementById('modalDate');
        const modalHours = document.getElementById('modalHours');
        const modalStatus = document.getElementById('modalStatus');
        const modalNotes = document.getElementById('modalNotes');
        const teacherField = document.getElementById('teacherField');
        const hoursField = document.getElementById('hoursField');

        document.querySelectorAll('.view-attendance-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                modalUserType.textContent = this.dataset.userType || '-';
                modalUserName.textContent = this.dataset.userName || '-';
                modalUserId.textContent = this.dataset.userId || '-';
                modalSubject.textContent = this.dataset.subject || '-';
                modalDate.textContent = this.dataset.date || '-';
                modalStatus.textContent = this.dataset.status || '-';
                modalNotes.textContent = this.dataset.notes || '-';

                if (this.dataset.userType === 'Student') {
                    modalTeacher.textContent = this.dataset.teacher || '-';
                    teacherField.classList.remove('hidden');
                    hoursField.classList.add('hidden');
                } else {
                    modalHours.textContent = this.dataset.hours || '-';
                    teacherField.classList.add('hidden');
                    hoursField.classList.remove('hidden');
                }

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
