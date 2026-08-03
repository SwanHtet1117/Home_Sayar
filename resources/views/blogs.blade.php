<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | News</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 text-gray-800">
    @include('partials.navigation')

    <main class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="rounded-3xl border border-green-100 bg-white p-8 shadow-xl sm:p-10">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-2xl">
                    <div class="mb-4 flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-green-50 p-2 shadow-sm">
                            <img src="{{ asset('images/home_sayar_logo.png') }}" alt="HomeSayar logo" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-green-600">News</p>
                            <h1 class="mt-1 text-3xl font-bold text-gray-900">Latest updates and announcements for parents, teachers, and learning communities.</h1>
                        </div>
                    </div>
                    <p class="mt-4 text-lg leading-8 text-gray-600">
                        Stay informed about new resources, events, and initiatives that can enhance your educational journey.
                    </p>
                </div>

                <div class="w-full max-w-md">
                    <label class="mb-2 block text-sm font-medium text-gray-700">Search articles</label>
                    <input type="text" placeholder="Search topics..." class="w-full rounded-xl border border-green-200 px-4 py-3 focus:border-green-500 focus:outline-none" />
                </div>
            </div>

            <div class="mt-8 flex flex-wrap gap-2">
                <a href="#" class="rounded-full bg-green-600 px-4 py-2 text-sm font-semibold text-white">All</a>
                <a href="#" class="rounded-full border border-green-200 px-4 py-2 text-sm text-gray-700 transition hover:bg-green-50">Parents</a>
                <a href="#" class="rounded-full border border-green-200 px-4 py-2 text-sm text-gray-700 transition hover:bg-green-50">Teachers</a>
                <a href="#" class="rounded-full border border-green-200 px-4 py-2 text-sm text-gray-700 transition hover:bg-green-50">Students</a>
                <a href="#" class="rounded-full border border-green-200 px-4 py-2 text-sm text-gray-700 transition hover:bg-green-50">Tips</a>
            </div>

            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                <article class="overflow-hidden rounded-2xl border border-green-100 bg-green-50">
                    <div class="h-40 bg-gradient-to-r from-green-500 to-emerald-500"></div>
                    <div class="p-6">
                        <p class="text-sm font-semibold text-green-700">Parents • 5 min read</p>
                        <h2 class="mt-2 text-xl font-semibold text-gray-900">How to build a calm and productive homework routine</h2>
                        <p class="mt-3 text-sm leading-7 text-gray-600">Simple ways to support children with a balanced study schedule and positive motivation.</p>
                    </div>
                </article>

                <article class="overflow-hidden rounded-2xl border border-emerald-100 bg-emerald-50">
                    <div class="h-40 bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                    <div class="p-6">
                        <p class="text-sm font-semibold text-emerald-700">Teachers • 7 min read</p>
                        <h2 class="mt-2 text-xl font-semibold text-gray-900">Creating engaging lessons that encourage participation</h2>
                        <p class="mt-3 text-sm leading-7 text-gray-600">Practical ideas for making classrooms more interactive and inclusive for every learner.</p>
                    </div>
                </article>

                <article class="overflow-hidden rounded-2xl border border-teal-100 bg-teal-50">
                    <div class="h-40 bg-gradient-to-r from-teal-500 to-cyan-500"></div>
                    <div class="p-6">
                        <p class="text-sm font-semibold text-teal-700">Students • 4 min read</p>
                        <h2 class="mt-2 text-xl font-semibold text-gray-900">Three study habits that make revision easier</h2>
                        <p class="mt-3 text-sm leading-7 text-gray-600">A beginner-friendly approach to planning, focus, and remembering what you learn.</p>
                    </div>
                </article>

                <article class="overflow-hidden rounded-2xl border border-lime-100 bg-lime-50">
                    <div class="h-40 bg-gradient-to-r from-lime-500 to-green-500"></div>
                    <div class="p-6">
                        <p class="text-sm font-semibold text-lime-700">Tips • 6 min read</p>
                        <h2 class="mt-2 text-xl font-semibold text-gray-900">How to stay organized during a busy school term</h2>
                        <p class="mt-3 text-sm leading-7 text-gray-600">Useful habits for managing schedules, assignments, and learning goals without feeling overwhelmed.</p>
                    </div>
                </article>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
