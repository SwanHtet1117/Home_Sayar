<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Parent FAQ</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')

    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 px-4 py-8 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-5xl">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800">FAQ for Parents</h2>
                <p class="text-sm text-gray-500">Common questions and answers for parents using HomeSayar</p>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <h3 class="font-semibold text-gray-800">How do I find the right teacher?</h3>
                    <p class="mt-2 text-sm text-gray-600">Use the Search Teachers option from the Parents menu to browse available teachers and send a request.</p>
                </div>

                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <h3 class="font-semibold text-gray-800">How can I track my child’s attendance?</h3>
                    <p class="mt-2 text-sm text-gray-600">Visit the Parent Dashboard and open the attendance section to review regular updates.</p>
                </div>

                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <h3 class="font-semibold text-gray-800">Can I make a payment for services?</h3>
                    <p class="mt-2 text-sm text-gray-600">Yes, you can complete the payment setup from your parent dashboard and follow the guided steps.</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>
</html>
