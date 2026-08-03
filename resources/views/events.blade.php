<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Events</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 text-gray-800">
    @include('partials.navigation')

    <main class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="rounded-3xl border border-green-100 bg-white p-8 shadow-xl sm:p-10">
            <div class="max-w-3xl">
                <div class="mb-4 inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">
                    Upcoming Events
                </div>
                <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">Discover meaningful events for parents, teachers, and students</h1>
                <p class="mt-4 text-lg leading-8 text-gray-600">
                    Join workshops, school community gatherings, and learning sessions designed to bring everyone together.
                </p>
            </div>

            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                <article class="rounded-2xl border border-green-100 bg-green-50 p-6">
                    <p class="text-sm font-semibold text-green-700">August 15, 2026</p>
                    <h2 class="mt-2 text-xl font-semibold text-gray-900">Parent-Teacher Connect Session</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-600">A friendly evening event focused on collaboration, student support, and helpful communication strategies.</p>
                </article>

                <article class="rounded-2xl border border-emerald-100 bg-emerald-50 p-6">
                    <p class="text-sm font-semibold text-emerald-700">September 5, 2026</p>
                    <h2 class="mt-2 text-xl font-semibold text-gray-900">Student Learning Workshop</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-600">A hands-on session with practical tips for improving focus, confidence, and study habits.</p>
                </article>

                <article class="rounded-2xl border border-teal-100 bg-teal-50 p-6">
                    <p class="text-sm font-semibold text-teal-700">October 10, 2026</p>
                    <h2 class="mt-2 text-xl font-semibold text-gray-900">Community Education Fair</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-600">Meet educators, explore learning resources, and discover new opportunities for growth.</p>
                </article>

                <article class="rounded-2xl border border-lime-100 bg-lime-50 p-6">
                    <p class="text-sm font-semibold text-lime-700">November 20, 2026</p>
                    <h2 class="mt-2 text-xl font-semibold text-gray-900">Online Q&A for Parents</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-600">A live session where families can ask questions and learn more about available support services.</p>
                </article>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
