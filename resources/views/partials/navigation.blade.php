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
</script>
