<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|User Registration</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-emerald-50 to-teal-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="bg-white rounded-2xl shadow-xl p-8 space-y-8">
                <div>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create Your Account</h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        Please fill in the details to register
                    </p>
                </div>
                <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
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
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                        <input id="name" name="name" type="text" autocomplete="name" value="{{ old('name') }}" required @error('name') aria-invalid="true" aria-describedby="name-error" @enderror class="appearance-none relative block w-full px-4 py-3 border placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none transition-all duration-200 @error('name') border-red-500 focus:ring-2 focus:ring-red-500 hover:border-red-500 @else border-green-300 focus:ring-2 focus:ring-green-500 focus:border-transparent hover:border-green-400 @enderror" placeholder="Full Name">
                        @error('name')
                            <p id="name-error" class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required @error('email') aria-invalid="true" aria-describedby="email-error" @enderror class="appearance-none relative block w-full px-4 py-3 border placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none transition-all duration-200 @error('email') border-red-500 focus:ring-2 focus:ring-red-500 hover:border-red-500 @else border-green-300 focus:ring-2 focus:ring-green-500 focus:border-transparent hover:border-green-400 @enderror" placeholder="Email address">
                        @error('email')
                            <p id="email-error" class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" required @error('password') aria-invalid="true" aria-describedby="password-error" @enderror class="appearance-none relative block w-full px-4 py-3 border placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none transition-all duration-200 @error('password') border-red-500 focus:ring-2 focus:ring-red-500 hover:border-red-500 @else border-green-300 focus:ring-2 focus:ring-green-500 focus:border-transparent hover:border-green-400 @enderror" placeholder="Password">
                        @error('password')
                            <p id="password-error" class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required @error('password_confirmation') aria-invalid="true" aria-describedby="password-confirmation-error" @enderror class="appearance-none relative block w-full px-4 py-3 border placeholder-gray-400 text-gray-900 rounded-lg focus:outline-none transition-all duration-200 @error('password_confirmation') border-red-500 focus:ring-2 focus:ring-red-500 hover:border-red-500 @else border-green-300 focus:ring-2 focus:ring-green-500 focus:border-transparent hover:border-green-400 @enderror" placeholder="Confirm Password">
                        @error('password_confirmation')
                            <p id="password-confirmation-error" class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-lg text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] shadow-md hover:shadow-lg">
                        Register
                    </button>
                </div>

                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-medium text-green-600 hover:text-green-500 transition-colors">Login here</a>
                    </p>
                </div>
                </form> 
            </div> 
        </div>
    </div>
    @include('partials.footer')      
    <script>
        document.querySelectorAll('input[aria-invalid="true"]').forEach((input) => {
            input.addEventListener('input', () => {
                input.classList.remove('border-red-500', 'focus:ring-red-500', 'hover:border-red-500');
                input.classList.add('border-green-300', 'focus:ring-2', 'focus:ring-green-500', 'focus:border-transparent', 'hover:border-green-400');
                input.removeAttribute('aria-invalid');
                input.removeAttribute('aria-describedby');

                const errorMessage = document.getElementById(`${input.id}-error`) ?? document.getElementById('password-confirmation-error');
                errorMessage?.remove();
            });
        });
    </script>
</body>
</html>