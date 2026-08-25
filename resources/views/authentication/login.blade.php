<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|User Login</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-purple-50 to-pink-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="bg-white rounded-2xl shadow-xl p-8 space-y-8">
                <div>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Welcome Back!</h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        Please sign in to your account
                    </p>
                </div>
                <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="rounded-lg bg-red-50 p-4 text-sm text-red-700" role="alert">
                            <ul class="list-disc space-y-1 pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                            <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required class="appearance-none relative block w-full px-4 py-3 border border-green-300 placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400" placeholder="Email address">
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none relative block w-full px-4 py-3 border border-green-300 placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 hover:border-green-400" placeholder="Password">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-green-600 focus:ring-green-500 border-green-300 rounded cursor-pointer">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700 cursor-pointer hover:text-green-600 transition-colors">Remember me</label>
                        </div>

                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="font-medium text-green-600 hover:text-green-500 transition-colors">Forgot your password?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] shadow-md hover:shadow-lg">
                            Sign in
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="text-sm text-gray-600">
                            Don't have an account?
                            <a href="{{ route('register') }}" class="font-medium text-green-600 hover:text-green-500 transition-colors">Register here</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>