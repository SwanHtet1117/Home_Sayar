<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Feedback List</title>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Feedback List</h2>
                        <p class="text-sm text-gray-500">View feedback from teachers and parents.</p>
                    </div>
                </div>
                <a href="/admin/dashboard" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Admin Dashboard
                </a>
            </div>

            <div class="mb-6 flex flex-wrap gap-3 rounded-2xl border border-gray-100 bg-white p-4 shadow-md">
                <button type="button" id="showTeachersBtn" class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">Teacher Feedback</button>
                <button type="button" id="showParentsBtn" class="rounded-lg border border-green-300 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">Parent Feedback</button>
            </div>

            <!-- Teacher Feedback Section -->
            <div id="teachersSection" class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Teacher Feedback</h3>
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
                                <label class="mb-1 block text-sm font-medium text-gray-600">Date</label>
                                <input type="date" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
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
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Feedback</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Date</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Ms. Thin Thin</div>
                                        <div class="text-sm text-gray-500">Teacher ID: T-201</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">ရူပဗေဒ</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 max-w-xs truncate">ကျောင်းသား တို့ အတွက် သင်ကြားရာမှာ အလွန် ကောင်းပါတယ်။ အခက်အခဲ တွေကို ဖြေရှင်းပေးဖို့ ကောင်းတယ်။</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-teacher-feedback-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-teacher="Ms. Thin Thin" data-teacher-id="T-201" data-subject="ရူပဗေဒ" data-feedback="ကျောင်းသား တို့ အတွက် သင်ကြားရာမှာ အလွန် ကောင်းပါတယ်။ အခက်အခဲ တွေကို ဖြေရှင်းပေးဖို့ ကောင်းတယ်။" data-date="2026-08-01">View</button>
                                    </td>
                                </tr>
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">Mr. Zaw Zaw</div>
                                        <div class="text-sm text-gray-500">Teacher ID: T-204</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">သင်္ချာ</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 max-w-xs truncate">သင်ကြားမှု ပုံစံ ကောင်းပါတယ်။ ကျောင်းသား တို့ နားလည်လွယ်ပါတယ်။</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-teacher-feedback-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-teacher="Mr. Zaw Zaw" data-teacher-id="T-204" data-subject="သင်္ချာ" data-feedback="သင်ကြားမှု ပုံစံ ကောင်းပါတယ်။ ကျောင်းသား တို့ နားလည်လွယ်ပါတယ်။" data-date="2026-08-01">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Parent Feedback Section -->
            <div id="parentsSection" class="hidden overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-yellow-600 to-teal-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Parent Feedback</h3>
                </div>
                <div class="space-y-6 p-6">
                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Search & Filter</label>
                        <div class="grid gap-4 md:grid-cols-4">
                            <div>
                                <label class="mb-1 block text-sm font-medium text-gray-600">Parent Name</label>
                                <input type="text" placeholder="Search parent..." class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
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
                                <label class="mb-1 block text-sm font-medium text-gray-600">Date</label>
                                <input type="date" class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
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
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Teacher</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Subject</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Feedback</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Date</th>
                                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider text-gray-700">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">ဦးမောင်မောင်</div>
                                        <div class="text-sm text-gray-500">Parent ID: P-1042</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Ms. Thin Thin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">ရူပဗေဒ</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 max-w-xs truncate">ဆရာမ က အလွန် ကောင်းမွန်စွာ သင်ကြားပေးတယ်။ ကျောင်းသား တိုက်ဖွိုက် ကောင်းတယ်။</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-parent-feedback-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-parent="ဦးမောင်မောင်" data-parent-id="P-1042" data-teacher="Ms. Thin Thin" data-subject="ရူပဗေဒ" data-feedback="ဆရာမ က အလွန် ကောင်းမွန်စွာ သင်ကြားပေးတယ်။ ကျောင်းသား တိုက်ဖွိုက် ကောင်းတယ်။" data-date="2026-08-01">View</button>
                                    </td>
                                </tr>
                                <tr class="transition-colors duration-200 hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-semibold text-gray-900">ဒေါ်ခင်ခင်</div>
                                        <div class="text-sm text-gray-500">Parent ID: P-1047</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Mr. Zaw Zaw</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">သင်္ချာ</td>
                                    <td class="px-6 py-4 text-sm text-gray-700 max-w-xs truncate">ဆရာ က သင်ကြားမှု ကောင်းပါတယ်။ ကျောင်းသား တို့ စိတ်ဝင်စားဖို့ ကောင်းတယ်။</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">2026-08-01</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button type="button" class="view-parent-feedback-btn rounded-lg border border-gray-300 px-3 py-2 text-gray-700 transition hover:bg-gray-50" data-parent="ဒေါ်ခင်ခင်" data-parent-id="P-1047" data-teacher="Mr. Zaw Zaw" data-subject="သင်္ချာ" data-feedback="ဆရာ က သင်ကြားမှု ကောင်းပါတယ်။ ကျောင်းသား တို့ စိတ်ဝင်စားဖို့ ကောင်းတယ်။" data-date="2026-08-01">View</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Teacher Feedback Modal -->
    <div id="teacherFeedbackModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4">
        <div class="w-full max-w-2xl rounded-2xl border border-gray-200 bg-white p-6 shadow-2xl">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Teacher Feedback Details</h3>
                    <p class="text-sm text-gray-500">Full feedback information</p>
                </div>
                <button id="closeTeacherFeedbackModal" class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">Close</button>
            </div>

            <div class="mt-6 space-y-4 rounded-xl bg-gray-50 p-4">
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Teacher Name</p>
                        <p id="teacherModalTeacher" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Teacher ID</p>
                        <p id="teacherModalTeacherId" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Subject</p>
                        <p id="teacherModalSubject" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Date</p>
                        <p id="teacherModalDate" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-600">Feedback</p>
                    <p id="teacherModalFeedback" class="mt-1 text-base text-gray-700">-</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Parent Feedback Modal -->
    <div id="parentFeedbackModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 px-4">
        <div class="w-full max-w-2xl rounded-2xl border border-gray-200 bg-white p-6 shadow-2xl">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-xl font-bold text-gray-800">Parent Feedback Details</h3>
                    <p class="text-sm text-gray-500">Full feedback information</p>
                </div>
                <button id="closeParentFeedbackModal" class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">Close</button>
            </div>

            <div class="mt-6 space-y-4 rounded-xl bg-gray-50 p-4">
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Parent Name</p>
                        <p id="parentModalParent" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Parent ID</p>
                        <p id="parentModalParentId" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div class="grid gap-4 md:grid-cols-2">
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Teacher</p>
                        <p id="parentModalTeacher" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-600">Subject</p>
                        <p id="parentModalSubject" class="mt-1 text-base font-medium text-gray-900">-</p>
                    </div>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-600">Date</p>
                    <p id="parentModalDate" class="mt-1 text-base font-medium text-gray-900">-</p>
                </div>
                <div>
                    <p class="text-sm font-semibold text-gray-600">Feedback</p>
                    <p id="parentModalFeedback" class="mt-1 text-base text-gray-700">-</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script>
        const teacherSection = document.getElementById('teachersSection');
        const parentSection = document.getElementById('parentsSection');
        const showTeachersBtn = document.getElementById('showTeachersBtn');
        const showParentsBtn = document.getElementById('showParentsBtn');

        showTeachersBtn.addEventListener('click', function () {
            teacherSection.classList.remove('hidden');
            parentSection.classList.add('hidden');
            showTeachersBtn.classList.add('bg-green-600', 'text-white');
            showTeachersBtn.classList.remove('border-green-300', 'text-green-700', 'bg-white');
            showParentsBtn.classList.remove('bg-green-600', 'text-white');
            showParentsBtn.classList.add('border-green-300', 'text-green-700');
        });

        showParentsBtn.addEventListener('click', function () {
            parentSection.classList.remove('hidden');
            teacherSection.classList.add('hidden');
            showParentsBtn.classList.add('bg-green-600', 'text-white');
            showParentsBtn.classList.remove('border-green-300', 'text-green-700');
            showTeachersBtn.classList.remove('bg-green-600', 'text-white');
            showTeachersBtn.classList.add('border-green-300', 'text-green-700');
        });

        // Teacher Feedback Modal
        const teacherModal = document.getElementById('teacherFeedbackModal');
        const closeTeacherModal = document.getElementById('closeTeacherFeedbackModal');
        const teacherModalTeacher = document.getElementById('teacherModalTeacher');
        const teacherModalTeacherId = document.getElementById('teacherModalTeacherId');
        const teacherModalSubject = document.getElementById('teacherModalSubject');
        const teacherModalDate = document.getElementById('teacherModalDate');
        const teacherModalFeedback = document.getElementById('teacherModalFeedback');

        document.querySelectorAll('.view-teacher-feedback-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                teacherModalTeacher.textContent = this.dataset.teacher || '-';
                teacherModalTeacherId.textContent = this.dataset.teacherId || '-';
                teacherModalSubject.textContent = this.dataset.subject || '-';
                teacherModalDate.textContent = this.dataset.date || '-';
                teacherModalFeedback.textContent = this.dataset.feedback || '-';

                teacherModal.classList.remove('hidden');
                teacherModal.classList.add('flex');
            });
        });

        function closeTeacherModalFn() {
            teacherModal.classList.add('hidden');
            teacherModal.classList.remove('flex');
        }

        closeTeacherModal.addEventListener('click', closeTeacherModalFn);
        teacherModal.addEventListener('click', function (event) {
            if (event.target === teacherModal) {
                closeTeacherModalFn();
            }
        });

        // Parent Feedback Modal
        const parentModal = document.getElementById('parentFeedbackModal');
        const closeParentModal = document.getElementById('closeParentFeedbackModal');
        const parentModalParent = document.getElementById('parentModalParent');
        const parentModalParentId = document.getElementById('parentModalParentId');
        const parentModalTeacher = document.getElementById('parentModalTeacher');
        const parentModalSubject = document.getElementById('parentModalSubject');
        const parentModalDate = document.getElementById('parentModalDate');
        const parentModalFeedback = document.getElementById('parentModalFeedback');

        document.querySelectorAll('.view-parent-feedback-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                parentModalParent.textContent = this.dataset.parent || '-';
                parentModalParentId.textContent = this.dataset.parentId || '-';
                parentModalTeacher.textContent = this.dataset.teacher || '-';
                parentModalSubject.textContent = this.dataset.subject || '-';
                parentModalDate.textContent = this.dataset.date || '-';
                parentModalFeedback.textContent = this.dataset.feedback || '-';

                parentModal.classList.remove('hidden');
                parentModal.classList.add('flex');
            });
        });

        function closeParentModalFn() {
            parentModal.classList.add('hidden');
            parentModal.classList.remove('flex');
        }

        closeParentModal.addEventListener('click', closeParentModalFn);
        parentModal.addEventListener('click', function (event) {
            if (event.target === parentModal) {
                closeParentModalFn();
            }
        });
    </script>
</body>
</html>
