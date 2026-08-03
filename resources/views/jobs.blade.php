<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Jobs</title>
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
                    Careers
                </div>
                <h1 class="text-3xl font-bold text-gray-900 sm:text-4xl">Join HomeSayar and help shape the future of learning</h1>
                <p class="mt-4 text-lg leading-8 text-gray-600">
                    We are looking for passionate professionals who want to support students, parents, and teachers through meaningful educational experiences.
                </p>
            </div>

            <div class="mt-10 grid gap-6 lg:grid-cols-2">
                <article class="rounded-2xl border border-green-100 bg-green-50 p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Teacher / Tutor</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Guide learners, create engaging lesson plans, and contribute to a growing community of education-focused professionals.
                    </p>
                    <a href="{{ route('contact.us') }}" class="mt-5 inline-flex text-sm font-semibold text-green-700 hover:text-green-800">Apply now →</a>
                </article>

                <article class="rounded-2xl border border-emerald-100 bg-emerald-50 p-6">
                    <h2 class="text-xl font-semibold text-gray-900">Operations & Support</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        Support day-to-day platform operations, parent communication, and onboarding for new users and partners.
                    </p>
                    <a href="{{ route('contact.us') }}" class="mt-5 inline-flex text-sm font-semibold text-green-700 hover:text-green-800">Contact us →</a>
                </article>
            </div>

            <div class="mt-10 rounded-2xl border border-green-200 bg-gradient-to-r from-green-50 to-emerald-50 p-6">
                <h2 class="text-xl font-semibold text-gray-900">Interested in joining our team?</h2>
                <p class="mt-2 text-sm leading-7 text-gray-600">
                    Send us your details and tell us how you can contribute to the HomeSayar community.
                </p>
                <a href="{{ route('contact.us') }}" class="mt-4 inline-flex rounded-full bg-green-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                    Get in touch
                </a>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
