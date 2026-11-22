<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>HomeSayar|Password Reset</title>
     <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <main class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-emerald-50 to-teal-100 px-4 py-16 sm:px-6 lg:px-8">
        <section class="w-full max-w-lg overflow-hidden rounded-3xl bg-white shadow-2xl">
            <div class="h-2 bg-gradient-to-r from-green-500 via-emerald-500 to-teal-500"></div>
            <div class="p-8 text-center sm:p-10">
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-green-100 ring-8 ring-green-50">
                    <svg class="h-10 w-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 7.5A2.5 2.5 0 015.5 5h13A2.5 2.5 0 0121 7.5v9a2.5 2.5 0 01-2.5 2.5h-13A2.5 2.5 0 013 16.5v-9z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m4 7 8 6 8-6"></path>
                    </svg>
                </div>

                <p class="mt-8 text-xs font-bold uppercase tracking-widest text-green-700">Password recovery</p>
                <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Check your email</h1>
                <p class="mx-auto mt-4 max-w-sm text-base leading-relaxed text-gray-600">
                    Follow the password reset link in your email to choose a new password.
                </p>

                @if (session('status'))
                    <div class="mt-8 flex items-start rounded-xl border border-green-200 bg-green-50 p-4 text-left" role="status">
                        <svg class="mr-3 mt-0.5 h-5 w-5 flex-shrink-0 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 13 4 4L19 7"></path>
                        </svg>
                        <p class="text-sm leading-relaxed text-green-800">{{ session('status') }}</p>
                    </div>
                @endif

                <div class="mt-6 rounded-xl bg-gray-50 p-4 text-left">
                    <h2 class="text-sm font-semibold text-gray-800">What to do next</h2>
                    <p class="mt-1 text-sm leading-relaxed text-gray-600">
                        Open the reset link to set your new password. The link expires after {{ config('auth.passwords.users.expire') }} minutes.
                    </p>
                </div>

                <div class="mt-8 flex flex-col-reverse justify-center gap-3 sm:flex-row">
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-lg border border-gray-300 px-5 py-3 text-sm font-semibold text-gray-700 transition hover:border-green-500 hover:text-green-700">
                        Back to login
                    </a>
                    <a href="{{ route('password.request') }}" class="inline-flex items-center justify-center rounded-lg bg-green-600 px-5 py-3 text-sm font-semibold text-white shadow-md transition hover:bg-green-700 hover:shadow-lg">
                        Request another link
                    </a>
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>