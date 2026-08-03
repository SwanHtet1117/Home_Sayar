<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | About Us</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 text-gray-800">
    @include('partials.navigation')

    <main class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="rounded-3xl border border-green-100 bg-white p-8 shadow-xl sm:p-10 lg:p-12">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-center">
                <div class="flex h-25 w-25 items-center justify-center rounded-2xl bg-green-50 p-3 shadow-sm">
                    <img src="{{ asset('images/home_sayar_logo.png') }}" alt="HomeSayar logo" class="h-full w-full object-contain" />
                </div>
                <div class="max-w-3xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-green-600">About HomeSayar</p>
                    <h1 class="mt-3 text-4xl font-bold text-gray-900 sm:text-5xl">We connect learners, families, and teachers with clarity and care.</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        HomeSayar is a modern education platform built to make collaboration between parents, teachers, and administrators effortless.
                        From lesson requests to progress updates, we help every stakeholder stay informed and supported.
                    </p>
                </div>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-3">                
                <div class="rounded-2xl border border-emerald-100 bg-emerald-50 p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Our Vision</h2>
                    <p class="mt-3 text-sm leading-6 text-gray-600">Bring transparency and convenience to every learning journey.</p>
                </div>
                <div class="rounded-2xl border border-green-100 bg-green-50 p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Our Mission</h2>
                    <p class="mt-3 text-sm leading-6 text-gray-600">Create a trusted, simple space where education partnerships can thrive.</p>
                </div>
                <div class="rounded-2xl border border-teal-100 bg-teal-50 p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Our Promise</h2>
                    <p class="mt-3 text-sm leading-6 text-gray-600">Support students with better communication, stronger organization, and smarter decisions.</p>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
