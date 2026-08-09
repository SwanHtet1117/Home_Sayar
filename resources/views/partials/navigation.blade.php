<nav class="sticky top-0 z-50 border-b border-green-600 bg-white shadow-md backdrop-blur">
    <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-between px-4 py-3 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-2">
            <img src="{{ asset('images/home_sayar_logo.png') }}" alt="HomeSayar logo" class="h-10 w-auto rounded-lg" />
            <span class="text-lg font-bold text-green-700">HomeSayar</span>
        </a>

        <div class="flex flex-wrap items-center gap-2 text-bold text-gray-900">
            <a href="{{ route('home') }}" class="rounded-full px-3 py-1 transition {{ request()->routeIs('home') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }}">Home</a>
            <a href="{{ route('about.us') }}" class="rounded-full px-3 py-1 transition {{ request()->routeIs('about.us') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }}">About Us</a>
         
            <div class="group relative">
                <button type="button" class="flex items-center rounded-full px-3 py-1 transition {{ request()->routeIs('teacher.profile.submit', 'teachers.faq') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }} focus:outline-none" onclick="this.nextElementSibling.classList.toggle('hidden'); positionDropdown(this, this.nextElementSibling)">
                    Teachers
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 26 26">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="fixed z-50 mt-1 hidden min-w-[400px] rounded-2xl border border-green-200 bg-white p-1 shadow-xl group-hover:block group-focus-within:block">
                    <a href="{{ route('teacher.profile.submit') }}" class="block rounded-lg px-2 py-1 text-sm transition {{ request()->routeIs('teacher.profile.submit') ? 'bg-green-100 text-green-700' : 'hover:bg-green-50 hover:text-green-700' }}">Teacher Application Form</a>
                    <a href="{{ route('teachers.faq') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition {{ request()->routeIs('teachers.faq') ? 'bg-green-100 text-green-700' : 'hover:bg-green-50 hover:text-green-700' }}">FAQs for Teacher</a>
                    <a href="{{ route('teacher.feedback') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition {{ request()->routeIs('teacher.feedback') ? 'bg-green-100 text-green-700' : 'hover:bg-green-50 hover:text-green-700' }}">Feedback</a>
                </div>
            </div>
            <div class="group relative">
                <button type="button" class="flex items-center rounded-full px-3 py-1 transition {{ request()->routeIs('parent.profile.create', 'parent.search_teacher', 'parents.faq') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }} focus:outline-none" onclick="this.nextElementSibling.classList.toggle('hidden'); positionDropdown(this, this.nextElementSibling)">
                    Parents
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 26 26">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="fixed z-50 mt-1 hidden min-w-[400px] rounded-2xl border border-green-200 bg-white p-1 shadow-xl group-hover:block group-focus-within:block">
                    <a href="{{ route('parent.profile.create') }}" class="block rounded-lg px-2 py-1 text-sm transition {{ request()->routeIs('parent.profile.create') ? 'bg-green-100 text-green-700' : 'hover:bg-green-50 hover:text-green-700' }}">Parent Application Form</a>
                    <a href="{{ route('parent.search_teacher') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition {{ request()->routeIs('parent.search_teacher') ? 'bg-green-100 text-green-700' : 'hover:bg-green-50 hover:text-green-700' }}">Search Teachers</a>
                    <a href="{{ route('parent.teacher_request') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition {{ request()->routeIs('parent.teacher_request') ? 'bg-green-100 text-green-700' : 'hover:bg-green-50 hover:text-green-700' }}">Request Training</a>
                    <a href="{{ route('parents.faq') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition {{ request()->routeIs('parents.faq') ? 'bg-green-100 text-green-700' : 'hover:bg-green-50 hover:text-green-700' }}">FAQs for Parents</a>
                    <a href="{{ route('parent.feedback') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition {{ request()->routeIs('parent.feedback') ? 'bg-green-100 text-green-700' : 'hover:bg-green-50 hover:text-green-700' }}">Feedback</a>
                </div>
            </div>
            <a href="{{ route('marketplace') }}" class="rounded-full px-3 py-1 transition {{ request()->routeIs('marketplace') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }}">Marketplace</a>
            <a href="{{ route('events') }}" class="rounded-full px-3 py-1 transition {{ request()->routeIs('events') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }}">Events</a>
            <a href="{{ route('blogs') }}" class="rounded-full px-3 py-1 transition {{ request()->routeIs('blogs') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }}">Blogs</a>
            <a href="{{ route('jobs') }}" class="rounded-full px-3 py-1 transition {{ request()->routeIs('jobs') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }}">Jobs</a>            
            <a href="{{ route('contact.us') }}" class="rounded-full px-3 py-1 transition {{ request()->routeIs('contact.us') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }}">Contact Us</a>
             
            @guest
                <a href="{{ route('login') }}" class="rounded-full px-3 py-1 transition {{ request()->routeIs('login') ? 'bg-green-500 text-white' : 'hover:bg-green-100 hover:text-green-700' }}">Login</a>
            @else
                <!-- notification dropdown -->
                <div class="group relative">
                    <button type="button" class="relative flex items-center rounded-full px-3 py-1 transition hover:bg-green-100 hover:text-green-700 focus:outline-none" onclick="openNotificationModal()">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                        <span class="absolute -top-1 -right-1 flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-xs font-bold text-white">3</span>
                    </button>
                </div>
                <!-- account dropdown -->
                <div class="group relative">
                    <button type="button" class="flex items-center rounded-full px-3 py-1 transition bg-green-500 text-white hover:bg-green-600 focus:outline-none" onclick="this.nextElementSibling.classList.toggle('hidden'); positionDropdown(this, this.nextElementSibling)">
                        <span class="mr-2">{{ auth()->user()->name ?? 'Account' }}</span>
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 26 26">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="fixed z-50 mt-1 hidden min-w-[200px] rounded-2xl border border-green-200 bg-white p-1 shadow-xl group-hover:block group-focus-within:block">
                        @if(auth()->user()->role === 'teacher')
                            <a href="{{ route('teacher.dashboard') }}" class="block rounded-lg px-2 py-1 text-sm transition hover:bg-green-50 hover:text-green-700">Dashboard</a>
                            <a href="{{ route('teacher.profile.detail') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition hover:bg-green-50 hover:text-green-700">Profile</a>
                        @elseif(auth()->user()->role === 'parent')
                            <a href="{{ route('parent.dashboard') }}" class="block rounded-lg px-2 py-1 text-sm transition hover:bg-green-50 hover:text-green-700">Dashboard</a>
                            <a href="{{ route('parent.profile.settings') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition hover:bg-green-50 hover:text-green-700">Profile</a>
                        @elseif(auth()->user()->role === 'admin')
                            <a href="{{ route('admin.dashboard') }}" class="block rounded-lg px-2 py-1 text-sm transition hover:bg-green-50 hover:text-green-700">Dashboard</a>
                            <a href="{{ route('admin.users') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition hover:bg-green-50 hover:text-green-700">Manage Users</a>
                            <a href="{{ route('admin.reports') }}" class="mt-1 block rounded-lg px-2 py-1 text-sm transition hover:bg-green-50 hover:text-green-700">Reports</a>
                        @endif
                        <hr class="my-1 border-gray-200">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left rounded-lg px-2 py-1 text-sm text-red-600 transition hover:bg-red-50">Logout</button>
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>
</nav>

<script>
    function positionDropdown(button, dropdown) {
        const buttonRect = button.getBoundingClientRect();
        dropdown.style.left = buttonRect.left + 'px';
        dropdown.style.top = (buttonRect.bottom + 8) + 'px';
    }

    document.addEventListener('click', function(event) {
        const dropdowns = document.querySelectorAll('.group > div.fixed');
        dropdowns.forEach(dropdown => {
            const button = dropdown.previousElementSibling;
            if (!button.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });

    // Move modal to body immediately to avoid stacking context issues
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('notificationModal');
        if (modal) {
            document.body.appendChild(modal);
        }
    });

    function openNotificationModal() {
        const modal = document.getElementById('notificationModal');
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeNotificationModal() {
        const modal = document.getElementById('notificationModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close modal with Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeNotificationModal();
        }
    });
</script>

<!-- Notification Modal -->
<div id="notificationModal" class="hidden" style="position: fixed; inset: 0; z-index: 2147483647 !important;" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black bg-opacity-50" onclick="closeNotificationModal()" style="z-index: 2147483646 !important;"></div>
    
    <!-- Modal Content -->
    <div class="fixed inset-0 flex items-center justify-center p-4 pointer-events-none" style="z-index: 2147483647 !important;">
        <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all w-full max-w-lg pointer-events-auto">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-xl font-semibold text-gray-900" id="modal-title">Notifications</h3>
                    <button type="button" onclick="closeNotificationModal()" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <div class="max-h-96 overflow-y-auto">
                    <a href="#" class="block border-b border-gray-100 px-4 py-3 hover:bg-green-50 transition">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-green-100">
                                    <svg class="h-5 w-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-3 flex-1">
                                <p class="text-sm font-medium text-gray-900">New Teacher Request</p>
                                <p class="text-xs text-gray-500">Parent requested your services for Math tutoring</p>
                                <p class="text-xs text-gray-400 mt-1">2 minutes ago</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block border-b border-gray-100 px-4 py-3 hover:bg-green-50 transition">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-100">
                                    <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-3 flex-1">
                                <p class="text-sm font-medium text-gray-900">Payment Received</p>
                                <p class="text-xs text-gray-500">You received payment for Physics lessons</p>
                                <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="block border-b border-gray-100 px-4 py-3 hover:bg-green-50 transition">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex h-10 w-10 items-center justify-center rounded-full bg-yellow-100">
                                    <svg class="h-5 w-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-3 flex-1">
                                <p class="text-sm font-medium text-gray-900">Lesson Reminder</p>
                                <p class="text-xs text-gray-500">Upcoming lesson with Student A at 3:00 PM</p>
                                <p class="text-xs text-gray-400 mt-1">3 hours ago</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" onclick="closeNotificationModal()" class="inline-flex w-full justify-center rounded-lg bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 sm:ml-3 sm:w-auto">
                    Close
                </button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-lg bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                    View All Notifications
                </button>
            </div>
        </div>
    </div>
</div>
