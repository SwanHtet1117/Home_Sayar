<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Parent Requests for Teacher</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navigation')
    <div class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 px-4 py-8 md:px-8">
        <div class="mx-auto max-w-6xl">
            <div class="mb-8 rounded-2xl border border-gray-100 bg-white p-8 shadow-lg">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <h2 class="flex items-center text-2xl font-bold text-gray-800">
                            <svg class="mr-2 h-7 w-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                            Parent Requests for This Teacher
                        </h2>
                        <p class="mt-2 text-sm text-slate-600">All parent requests assigned to this teacher are listed below.</p>
                    </div>
                    <a href="{{ route('teacher.dashboard') }}" class="inline-flex items-center justify-center rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">
                        Teacher Dashboard
                    </a>
                </div>
            </div>

            <div class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-lg">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4">
                    <h3 class="text-xl font-bold text-white">Request List</h3>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="flex flex-col gap-4 rounded-xl border border-gray-200 p-5 md:flex-row md:items-center md:justify-between">
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800">ဦးခင်မောင်</h4>
                                <p class="text-sm text-gray-600">Subject: Physics • Township: Kamaryut • Child: Aung Thiha</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700">Accepted</span>
                                <button class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">View</button>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 rounded-xl border border-gray-200 p-5 md:flex-row md:items-center md:justify-between">
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800">ဒေါ်မြင့်ကြည်</h4>
                                <p class="text-sm text-gray-600">Subject: Mathematics • Township: Yankin • Child: Nandar</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="rounded-full bg-yellow-100 px-3 py-1 text-sm font-semibold text-yellow-700">Pending</span>
                                <button class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">View</button>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 rounded-xl border border-gray-200 p-5 md:flex-row md:items-center md:justify-between">
                            <div>
                                <h4 class="text-lg font-semibold text-gray-800">ဦးဇော်ဝင်း</h4>
                                <p class="text-sm text-gray-600">Subject: English • Township: Bahan • Child: Min Khant</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="rounded-full bg-gray-100 px-3 py-1 text-sm font-semibold text-gray-700">Cancelled</span>
                                <button class="rounded-lg border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-700 transition hover:bg-gray-50">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>
