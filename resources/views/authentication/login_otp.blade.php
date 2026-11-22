<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Verify Login</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <main class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-emerald-50 to-teal-100 px-4 py-16 sm:px-6 lg:px-8">
        <section class="w-full max-w-lg overflow-hidden rounded-3xl bg-white shadow-2xl">
            <div class="h-2 bg-gradient-to-r from-green-500 via-emerald-500 to-teal-500"></div>
            <div class="p-8 sm:p-10">
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-green-100 ring-8 ring-green-50">
                    <svg class="h-10 w-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-8V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>

                <div class="mt-8 text-center">
                    <p class="text-xs font-bold uppercase tracking-widest text-green-700">Account security</p>
                    <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Enter your one-time code</h1>
                    <p class="mx-auto mt-4 max-w-sm text-sm leading-relaxed text-gray-600">
                        We sent a six-digit sign-in code to <span class="font-semibold text-gray-800">{{ $email }}</span>.
                    </p>
                    <div class="mt-5 inline-flex items-center rounded-full border border-yellow-200 bg-yellow-50 px-4 py-2 text-sm font-medium text-yellow-800">
                        <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Code expires in 10 minutes
                    </div>
                </div>

                <div class="mt-7 flex items-start rounded-xl border border-green-200 bg-green-50 p-4" role="status">
                    <svg class="mr-3 mt-0.5 h-5 w-5 flex-shrink-0 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 13 4 4L19 7"></path>
                    </svg>
                    <p class="text-sm leading-relaxed text-green-800">{{ session('status', 'A one-time sign-in code has been sent to your email.') }}</p>
                </div>

                @if ($errors->any())
                    <div class="mt-5 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700" role="alert">
                        <ul class="list-disc space-y-1 pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login.otp.verify') }}" method="POST" class="mt-7 space-y-4">
                    @csrf
                    <div>
                        <label for="code" class="mb-2 block text-sm font-semibold text-gray-700">Six-digit code</label>
                        <div class="relative">
                            <svg class="pointer-events-none absolute left-4 top-1/2 h-5 w-5 -translate-y-1/2 transform text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a3 3 0 11-5.83 1H3v4h3v3h3v-3h1.17A3 3 0 0015 7z"></path>
                                <circle cx="12" cy="7" r="1"></circle>
                            </svg>
                            <input id="code" name="code" type="text" inputmode="numeric" autocomplete="one-time-code" pattern="[0-9]{6}" maxlength="6" required placeholder="Enter your code" class="block w-full rounded-lg border border-green-300 bg-white py-3 pl-12 pr-4 text-gray-900 transition focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-200" aria-describedby="otp-help">
                        </div>
                        <p id="otp-help" class="mt-2 text-xs text-gray-500">Enter the code exactly as it appears in the email.</p>
                    </div>

                    <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-gradient-to-r from-green-600 to-teal-600 px-4 py-3 text-sm font-bold text-white shadow-md transition hover:from-green-700 hover:to-teal-700 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        Verify and sign in
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7 7 7-7 7"></path>
                        </svg>
                    </button>
                </form>

                <form action="{{ route('login.otp.resend') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="flex w-full items-center justify-center rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm font-semibold text-green-700 transition hover:border-green-300 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                        <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Send a new code
                    </button>
                </form>

                <div class="mt-7 border-t border-gray-100 pt-5 text-center">
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-green-700 transition hover:text-green-800">
                        Return to login
                    </a>
                </div>
            </div>
        </section>
    </main>
    @include('partials.footer')
</body>
</html>
