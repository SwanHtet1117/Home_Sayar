<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Verify Email</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <main class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-6 text-center">
            <h1 class="text-3xl font-extrabold text-gray-900">Verify your email address</h1>
            <p class="text-sm text-gray-600">We sent a verification link to your email address. Open it to finish creating your account.</p>

            @if (session('status') === 'verification-link-sent')
                <p class="text-sm text-green-600">A new verification link has been sent.</p>
            @endif

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="w-full rounded-md bg-green-600 px-4 py-3 text-sm font-semibold text-white hover:bg-green-700">
                    Resend verification email
                </button>
            </form>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>