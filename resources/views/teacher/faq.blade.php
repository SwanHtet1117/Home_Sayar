<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Teacher FAQ</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800">FAQ for Teacher</h2>
                <p class="text-sm text-gray-500">Common questions and answers for teachers using HomeSayar</p>
            </div>

            <div class="space-y-4">
                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <h3 class="font-semibold text-gray-800">How do I apply as a teacher?</h3>
                    <p class="mt-2 text-sm text-gray-600">Use the Teacher Application Form from the Teachers menu and submit your profile details.</p>
                </div>
                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <h3 class="font-semibold text-gray-800">How can I view payment requests?</h3>
                    <p class="mt-2 text-sm text-gray-600">Visit your teacher dashboard and open the Payment Verify section to review parent requests.</p>
                </div>
                <div class="rounded-2xl border border-green-200 bg-white p-5 shadow-sm">
                    <h3 class="font-semibold text-gray-800">Can I track student attendance?</h3>
                    <p class="mt-2 text-sm text-gray-600">Yes, the Attendance section on the teacher dashboard allows you to record and review attendance.</p>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
