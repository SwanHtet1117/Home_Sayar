<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Periodic Feedback</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <div class="mb-6 flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="mr-3 h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16h6M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z"></path>
                    </svg>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800">Periodic Feedback</h2>
                        <p class="text-sm text-gray-500">Share your feedback for the platform and experience.</p>
                    </div>
                </div>
                <a href="/parent/dashboard" class="rounded-lg border border-green-300 bg-green-50 px-4 py-2 text-sm font-semibold text-green-700 transition hover:bg-green-100">
                    Dashboard
                </a>
            </div>

            <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-xl">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">System Feedback Form</h3>
                </div>

                <div class="space-y-6 p-6">
                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Feedback Type</label>
                        <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">Select one</option>
                            <option value="bug">System Bug</option>
                            <option value="feature">Feature Request</option>
                            <option value="performance">Performance</option>
                            <option value="support">Support Experience</option>
                        </select>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Period</label>
                        <select class="w-full rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option value="">Select one</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="quarterly">Quarterly</option>
                        </select>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Your Feedback</label>
                        <textarea rows="6" placeholder="Share what is working, what is not, and any suggestions..." class="w-full resize-none rounded-lg border border-green-300 bg-white px-4 py-3 shadow-sm transition-all duration-200 hover:border-green-400 focus:border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    </div>

                    <div class="rounded-xl bg-gray-50 p-4">
                        <label class="mb-3 block text-sm font-semibold text-gray-700">Rating</label>
                        <div class="flex space-x-3 text-3xl text-yellow-400">
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>☆</span>
                            <span>☆</span>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="rounded-lg bg-green-600 px-8 py-3 font-semibold text-white transition-all duration-200 hover:bg-green-700 hover:shadow-lg">
                            Submit Feedback
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
