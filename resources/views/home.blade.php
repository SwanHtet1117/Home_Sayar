<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Home</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 text-gray-800">
    @include('partials.navigation')
    <div class="mx-auto flex min-h-screen max-w-7xl flex-col justify-center px-6 py-10 lg:px-8">
        <div class="mb-8 overflow-hidden rounded-3xl border border-green-100 bg-white shadow-xl">
            <div class="relative min-h-[420px] overflow-hidden bg-gray-100 lg:min-h-[500px]">                
                <div class="hero-slide absolute inset-0 h-full w-full opacity-0 transition-opacity duration-1000">
                    <img src="{{ asset('images/hero_image_01.png') }}" alt="Teacher guiding a classroom" class="h-full w-full object-cover"/>                    
                </div>
                <div class="hero-slide absolute inset-0 h-full w-full opacity-0 transition-opacity duration-1000">
                    <img src="{{ asset('images/hero_image_02.png') }}" alt="Parents and students reviewing school plans" class="h-full w-full object-cover"/>
                </div>
                <div class="hero-slide absolute inset-0 h-full w-full opacity-0 transition-opacity duration-1000">
                    <img src="{{ asset('images/hero_image_03.png') }}" alt="Parents and students reviewing school plans" class="h-full w-full object-cover"/>
                </div>

                <div class="relative z-10 flex h-full items-center">
                    <div class="max-w-2xl p-8 text-white sm:p-10 lg:p-12">
                        <div class="mb-4 flex h-16 w-16 items-center justify-center overflow-hidden rounded-2xl bg-white/90 shadow-lg">
                        <img src="{{ asset('images/home_sayar_logo.png') }}" alt="HomeSayar logo" class="h-full w-full object-contain p-2"/>
                    </div>
                        <h1 class="text-3xl font-bold sm:text-4xl text-dark">Welcome to HomeSayar</h1>
                        <p class="mt-4 max-w-xl text-sm leading-6 text-dark-100 sm:text-base">
                            A trusted education platform connecting parents, teachers, and administrators through smart collaboration and clear communication.
                        </p>
                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="{{ route('login') }}" class="rounded-lg bg-white px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-600 hover:text-white">Login</a>
                            <a href="{{ route('register') }}" class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white hover:text-green-600">Register</a>
                        </div>
                    </div>
                </div>

                <div class="absolute bottom-4 left-1/2 z-10 flex -translate-x-1/2 gap-2">
                    <button class="hero-dot h-2.5 w-2.5 rounded-full bg-white transition-all duration-300" aria-label="Show slide 1"></button>
                    <button class="hero-dot h-2.5 w-2.5 rounded-full bg-white/50 transition-all duration-300" aria-label="Show slide 2"></button>
                    <button class="hero-dot h-2.5 w-2.5 rounded-full bg-white/50 transition-all duration-300" aria-label="Show slide 3"></button>
                </div>
            </div>
        </div>

        <div class="mb-10 text-center">
            <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-600 text-white shadow-lg">
                <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2"></path>
                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
            </div>
            <h2 class="text-1xl font-bold text-gray-900 sm:text-4xl">Choose your role</h2>
            <p class="mx-auto mt-3 max-w-2xl text-lg text-gray-600">
                A simple education platform for parents, teachers, and administrators to connect, manage requests, and support students.
            </p>
        </div>

        <div class="mb-8 grid gap-12 lg:grid-cols-2 mx-auto max-w-4xl">
            <!-- Parent Section -->
            <div class="rounded-3xl border border-green-100 bg-white p-6 shadow-xl transition hover:-translate-y-1 hover:shadow-2xl">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-green-500 to-emerald-600 text-white shadow-lg">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold text-gray-900">Parent</h2>
                <p class="mt-3 text-sm leading-6 text-gray-600">
                    Search for teachers, submit learning requests, track progress, and confirm accepted lessons.
                </p>
                <p class="mt-3 text-md leading-6 text-dark-600">
                    ဆရာရှာရန် (သို့မဟုတ်) သင်တန်းယူရန်
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="/parent/search/teacher" class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">Search Teachers</a>
                    <a href="/parent/teacher_request" class="rounded-lg border border-green-300 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">Request Training</a>
                </div>
            </div>
            <!-- Teacher Section -->
            <div class="rounded-3xl border border-emerald-100 bg-white p-6 shadow-xl transition hover:-translate-y-1 hover:shadow-2xl">
                <div class="mb-4 flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-green-500 to-emerald-600 text-white shadow-lg">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold text-gray-900">Teacher</h2>
                <p class="mt-3 text-sm leading-6 text-gray-600">
                    Apply as a teacher and keep your teaching profile updated.
                </p>
                <p class="mt-3 text-md leading-6 text-dark-600">
                    ဆရာအဖြစ် လျှောက်ထားရန်
                </p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="/teacher/dashboard" class="rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-emerald-700">Open Dashboard</a>
                    <a href="/teacher/profile/submit" class="rounded-lg border border-green-300 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-50">Apply Now</a>
                </div>
            </div>            
        </div>

        <div class="mb-8 rounded-3xl border border-green-100 bg-white/90 p-8 shadow-xl backdrop-blur">
            <div class="mb-6 text-center">
                <div class="mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-700">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900">Our Services</h3>
                <p class="mx-auto mt-2 max-w-2xl text-sm text-gray-600">Everything parents and teachers need to stay connected, organized, and supported in one place.</p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                <div class="rounded-2xl border border-gray-300 bg-emerald-50 p-5 shadow-sm">
                    <h4 class="text-lg font-semibold text-gray-900">Find the right teacher</h4>
                    <p class="mt-2 text-sm leading-6 text-gray-600">Browse trusted professionals and send requests that match your child’s learning goals.</p>
                    <p class="mt-3 text-md leading-6 text-dark-600">
                        ယုံကြည်စိတ်ချရပြီး၊ အရည်အချင်းပြဝသော ဆရာများကို သင့်ကလေး၏ သင်ယူမှုရည်မှန်းချက်များနှင့် ကိုက်ညီအောင် ရှာဖွေပေးပါသည်။
                    </p>
                </div>
                <div class="rounded-2xl border border-gray-300 bg-emerald-50 p-5 shadow-sm">
                    <h4 class="text-lg font-semibold text-gray-900">Track progress easily</h4>
                    <p class="mt-2 text-sm leading-6 text-gray-600">Stay updated with attendance, feedback, and lesson activity through simple dashboards.</p>
                    <p class="mt-3 text-md leading-6 text-dark-600">
                        သင်ကြားမှုအချိန်များကိုညှိုနှိုင်ခြင်း၊ သင်ယူမှုအနေအထားများကို အလွယ်တကူသိရှိနိုင်ပါသည်။
                    </p>
                </div>
                <div class="rounded-2xl border border-gray-300 bg-emerald-50 p-5 shadow-sm">
                    <h4 class="text-lg font-semibold text-gray-900">Manage payments securely</h4>
                    <p class="mt-2 text-sm leading-6 text-gray-600">Handle verification and payment steps in a clear workflow built for families and educators.</p>
                    <p class="mt-3 text-md leading-6 text-dark-600">
                        အသုံးပြရလွယ်ကူစေပြီး၊ သင်တန်းကြေးပေးဆောင်မှုများကို လုံခြုံစွာဖြင့် အလွယ်တကူစီမံနိုင်ပါသည်။
                    </p>
                </div>
            </div>
        </div>

        <div class="mb-8 rounded-3xl border border-emerald-100 bg-gradient-to-r from-green-50 to-emerald-50 p-8 shadow-lg">
            <div class="flex flex-col gap-4 lg:flex-row lg:items-end lg:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-green-700">Parents recommend</p>
                    <h3 class="mt-2 text-2xl font-semibold text-gray-900">Trusted by families who want clarity and confidence</h3>
                </div>
                <a href="{{ route('parent.dashboard') }}" class="inline-flex rounded-full bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">Explore parent features</a>
            </div>
            <!-- Parent Recommendations -->
            <div class="mt-8 grid gap-6 lg:grid-cols-3">
                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-green-100 text-green-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <p class="text-sm leading-7 text-gray-600">“It feels so much easier to connect with teachers and understand what my child needs.”</p>
                    <p class="mt-4 font-semibold text-gray-900">— Amina, Parent</p>
                </div>
                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-green-100 text-green-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <p class="text-sm leading-7 text-gray-600">“The dashboards make communication simple, and I always know what is happening next.”</p>
                    <p class="mt-4 font-semibold text-gray-900">— Daniel, Parent</p>
                </div>
                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-green-100 text-green-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <p class="text-sm leading-7 text-gray-600">“I can follow progress and manage requests without any confusion or delays.”</p>
                    <p class="mt-4 font-semibold text-gray-900">— Sara, Parent</p>
                </div>
            </div>
        </div>
        <!-- Latest Education Posts/Events -->
        <div class="mt-8 grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
            <div class="rounded-3xl border border-gray-200 bg-white/80 p-6 shadow-lg backdrop-blur">
                <div class="mb-5 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Latest Education Posts/Events</h3>
                        <p class="mt-1 text-sm text-gray-600">Helpful updates for students, parents, and teachers.</p>
                    </div>
                    <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">Events</span>
                </div>
                <div class="space-y-4">
                    <div class="flex gap-4 rounded-2xl border border-green-100 bg-green-50 p-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-green-200">
                            <img src="{{ asset('images/teaching_event_03.png') }}" alt="Study Tips" class="h-full w-full object-cover" onerror="this.src='https://via.placeholder.com/80x80/22c55e/ffffff?text=Study'"/>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-green-700">Study Tips for Better Learning</p>
                            <p class="mt-1 text-sm text-gray-600">Practical ways to build a focused study routine and improve retention.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 rounded-2xl border border-teal-100 bg-teal-50 p-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-teal-200">
                            <img src="{{ asset('images/teaching_event_01.jpg') }}" alt="Digital Learning Resources" class="h-full w-full object-cover" onerror="this.src='https://via.placeholder.com/80x80/14b8a6/ffffff?text=Digital'"/>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-teal-700">Digital Learning Resources</p>
                            <p class="mt-1 text-sm text-gray-600">Recommended tools for online classes, practice sessions, and revision plans.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 rounded-2xl border border-green-100 bg-green-50 p-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-green-200">
                            <img src="{{ asset('images/teaching_event_02.jpg') }}" alt="Parent-Teacher Collaboration" class="h-full w-full object-cover" onerror="this.src='https://via.placeholder.com/80x80/22c55e/ffffff?text=Collab'"/>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-green-700">Parent-Teacher Collaboration</p>
                            <p class="mt-1 text-sm text-gray-600">How regular communication can create a stronger support system for children.</p>
                        </div>
                    </div>                    
                </div>
            </div>
            <!-- Recent Blogs -->
            <div class="rounded-3xl border border-gray-200 bg-white/80 p-6 shadow-lg backdrop-blur">
                <div class="mb-5 flex items-center justify-between">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">Recent Blogs</h3>
                        <p class="mt-1 text-sm text-gray-600">Announcements and platform updates.</p>
                    </div>
                    <span class="rounded-full bg-blue-100 px-3 py-1 text-sm font-semibold text-blue-700">News</span>
                </div>
                <div class="space-y-4">
                    <div class="flex gap-4 rounded-2xl border border-blue-100 bg-blue-50 p-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-blue-200">
                            <img src="{{ asset('images/homesayar_03.jpg') }}" alt="Teacher Verification" class="h-full w-full object-cover" onerror="this.src='https://via.placeholder.com/80x80/3b82f6/ffffff?text=Verify'"/>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-blue-700">New teacher verification panel launched</p>
                            <p class="mt-1 text-sm text-gray-600">Administrative staff can now review teacher applications more efficiently.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 rounded-2xl border border-slate-100 bg-slate-50 p-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-slate-200">
                            <img src="{{ asset('images/homesayar_01.jpg') }}" alt="Education Tips" class="h-full w-full object-cover" onerror="this.src='https://via.placeholder.com/80x80/64748b/ffffff?text=Tips'"/>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-slate-700">Weekly education tips are now live</p>
                            <p class="mt-1 text-sm text-gray-600">Fresh articles and practical advice are shared every week for all users.</p>
                        </div>
                    </div>
                    <div class="flex gap-4 rounded-2xl border border-indigo-100 bg-indigo-50 p-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-indigo-200">
                            <img src="{{ asset('images/homesayar_02.jpg') }}" alt="Request Tracking" class="h-full w-full object-cover" onerror="this.src='https://via.placeholder.com/80x80/6366f1/ffffff?text=Track'"/>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm font-semibold text-indigo-700">Parent request tracking improved</p>
                            <p class="mt-1 text-sm text-gray-600">Parents can now monitor request status and acceptance updates with ease.</p>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>

        <div class="mt-8 rounded-3xl border border-gray-200 bg-white/80 p-6 shadow-lg backdrop-blur">
            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <h3 class="text-xl font-semibold text-gray-900">Get started</h3>
                    <p class="mt-1 text-sm text-gray-600">Choose your role and enter your dashboard to continue.</p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('login') }}" class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-gray-700">Login</a>
                    <a href="{{ route('register') }}" class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">Register</a>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slides = Array.from(document.querySelectorAll('.hero-slide'));
            const dots = Array.from(document.querySelectorAll('.hero-dot'));
            let currentSlide = 0;

            function showSlide(index) {
                slides.forEach(function (slide, slideIndex) {
                    const isActive = slideIndex === index;
                    slide.style.opacity = isActive ? '1' : '0';
                    slide.style.visibility = isActive ? 'visible' : 'hidden';
                    slide.style.zIndex = isActive ? '10' : '0';
                });

                dots.forEach(function (dot, dotIndex) {
                    dot.classList.toggle('bg-white', dotIndex === index);
                    dot.classList.toggle('bg-white/50', dotIndex !== index);
                });

                currentSlide = index;
            }

            dots.forEach(function (dot, index) {
                dot.addEventListener('click', function () {
                    showSlide(index);
                });
            });

            if (slides.length > 1) {
                setInterval(function () {
                    const nextSlide = (currentSlide + 1) % slides.length;
                    showSlide(nextSlide);
                }, 5000);
            }

            showSlide(0);
        });
    </script>
</body>
</html>
