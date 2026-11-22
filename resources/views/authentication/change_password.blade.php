<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Change Password</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <main class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-emerald-50 to-teal-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full">
            <section class="bg-white rounded-2xl shadow-xl p-8 space-y-6">
                <div>
                    <h1 class="text-center text-3xl font-extrabold text-gray-900">Change password</h1>
                    <p class="mt-2 text-center text-sm text-gray-600">Enter your current password and choose a new one.</p>
                </div>

                @if (session('success'))
                    <div class="rounded-lg bg-green-50 p-4 text-sm text-green-700" role="status">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="rounded-lg bg-red-50 p-4 text-sm text-red-700" role="alert">
                        <ul class="list-disc space-y-1 pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('account.password.update') }}" method="POST" class="space-y-5">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">Current password</label>
                        <input id="current_password" name="current_password" type="password" autocomplete="current-password" required class="block w-full rounded-lg border border-green-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New password</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" minlength="8" required class="block w-full rounded-lg border border-green-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500">
                        <p class="mt-1 text-xs text-gray-500">Use at least 8 characters, including an uppercase letter, a lowercase letter, a number, and a special character.</p>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm new password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" minlength="8" required class="block w-full rounded-lg border border-green-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>

                    <button type="submit" class="w-full rounded-lg bg-green-600 px-4 py-3 text-sm font-semibold text-white hover:bg-green-700">
                        Update password
                    </button>
                </form>
            </section>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>
