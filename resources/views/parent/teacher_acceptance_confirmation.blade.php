<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher Acceptance Confirmation</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50">
    @include('partials.navigation')
    <div class="mx-auto max-w-6xl px-6 py-10">
        <div class="mb-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div class="flex items-center">
                <div class="mr-3 flex h-12 w-12 items-center justify-center rounded-full bg-green-100 text-green-600">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">Teacher Acceptance Confirmation</h2>
                    <p class="text-sm text-gray-600">This page confirms the teacher acceptance request made by the parent.</p>
                </div>
            </div>
            <a href="{{ route('parent.dashboard') }}" class="inline-flex items-center justify-center rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                Parent Dashboard
            </a>
        </div>

        <div class="grid gap-6 lg:grid-cols-[1.3fr_0.7fr]">
            <div class="rounded-3xl border border-green-100 bg-white p-8 shadow-xl">
                <div class="flex items-center">
                    <div class="flex h-14 w-14 items-center justify-center rounded-full bg-green-100 text-green-600">
                        <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-semibold uppercase tracking-wide text-green-600">Parent Confirmation</p>
                        <h3 class="text-2xl font-bold text-gray-800">Teacher accepted successfully</h3>
                    </div>
                </div>

                <div class="mt-6 rounded-2xl bg-green-50 p-5">
                    <p class="text-lg font-semibold text-gray-800">
                        Your request has been accepted by <span class="text-green-700">U Thein Aung</span>.
                    </p>
                    <p class="mt-2 text-sm text-gray-600">
                        The lesson arrangement can now proceed and the teacher will be notified of the parent confirmation.
                    </p>
                </div>

                <div class="mt-6 grid gap-4 md:grid-cols-2">
                    <div class="rounded-2xl border border-gray-200 p-4">
                        <p class="text-sm font-semibold text-gray-500">Teacher Name</p>
                        <p class="mt-1 text-lg font-semibold text-gray-800">U Thein Aung</p>
                    </div>
                    <div class="rounded-2xl border border-gray-200 p-4">
                        <p class="text-sm font-semibold text-gray-500">Subject</p>
                        <p class="mt-1 text-lg font-semibold text-gray-800">Physics</p>
                    </div>
                    <div class="rounded-2xl border border-gray-200 p-4">
                        <p class="text-sm font-semibold text-gray-500">Schedule</p>
                        <p class="mt-1 text-lg font-semibold text-gray-800">Evening · 6:00 PM</p>
                    </div>
                    <div class="rounded-2xl border border-gray-200 p-4">
                        <p class="text-sm font-semibold text-gray-500">Status</p>
                        <p class="mt-1 text-lg font-semibold text-green-700">Accepted</p>
                    </div>
                </div>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('parent.dashboard') }}" class="inline-flex items-center justify-center rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">
                        Confirm Class
                    </a>
                    <a href="{{ route('parent.teacher_request') }}" class="inline-flex items-center justify-center rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">
                        Create Another Request
                    </a>
                </div>
            </div>

            <div class="rounded-3xl bg-gradient-to-br from-emerald-600 to-green-700 p-8 text-dark shadow-xl">
                <h4 class="text-xl font-semibold">Next steps</h4>
                <ul class="mt-4 space-y-3 text-sm text-emerald-50">
                    <li class="flex items-start">
                        <span class="mr-2 mt-1 h-2.5 w-2.5 rounded-full bg-green-500"></span>
                        Keep the agreed lesson time and location ready.
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2 mt-1 h-2.5 w-2.5 rounded-full bg-green-500"></span>
                        Contact the teacher if there are any schedule changes.
                    </li>
                    <li class="flex items-start">
                        <span class="mr-2 mt-1 h-2.5 w-2.5 rounded-full bg-green-500"></span>
                        Review progress and share feedback after the first lesson.
                    </li>
                </ul>

                <div class="mt-6 rounded-2xl bg-white/20 p-4 backdrop-blur">
                    <p class="text-sm font-semibold">Confirmation Reference</p>
                    <p class="mt-1 text-2xl font-bold">#HT-2048</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
