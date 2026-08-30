<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Restricted</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">
    @include('partials.navigation')

    <main class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 px-4 py-12 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-xl">
            <div class="overflow-hidden rounded-3xl border border-emerald-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-red-600 to-green-600 px-6 py-5 text-center text-white">
                    <h1 class="mt-2 text-3xl font-bold">Access Restricted</h1>
                </div>

                <div class="space-y-6 px-6 py-8 text-center sm:px-10">
                    <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-red-100 text-3xl shadow-inner">
                        ⚠️
                    </div>

                    <div class="space-y-3">
                        <p class="text-lg font-semibold text-gray-900">This page is for Parent or Teacher accounts only.</p>
                        <p class="text-sm leading-6 text-gray-600">
                            Your current account does not have permission to access this section. Please apply the correct role-based account as <span class="font-bold">Teacher</span> or <span class="font-bold">Parent</span>.
                        </p>
                    </div>

                    <div class="flex flex-col items-center justify-center gap-3 pt-3 sm:flex-row">
                        <a href="{{ route('teacher.profile.submit') }}" class="inline-flex items-center justify-center rounded-lg bg-green-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-emerald-700">
                            Apply Teacher Account
                        </a>

                        <a href="{{ route('parent.profile.create') }}" class="inline-flex items-center justify-center rounded-lg bg-gray-100 px-5 py-3 text-sm font-semibold text-gray-700 transition hover:bg-gray-200">
                            Apply Parent Account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
