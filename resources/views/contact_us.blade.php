<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar | Contact Us</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 text-gray-800">
    @include('partials.navigation')

    <main class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
        <div class="rounded-3xl border border-green-100 bg-white p-8 shadow-xl sm:p-10">
            <div class="grid gap-10 lg:grid-cols-[1.1fr_0.9fr]">
                <div>
                    <div class="mb-4 flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-green-50 p-2 shadow-sm">
                            <img src="{{ asset('images/home_sayar_logo.png') }}" alt="HomeSayar logo" class="h-full w-full object-contain" />
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-green-600">Contact Us</p>
                            <h1 class="mt-1 text-3xl font-bold text-gray-900">We would love to hear from you.</h1>
                        </div>
                    </div>
                    <p class="mt-4 text-lg leading-8 text-gray-600">
                        Share your questions, feedback, or partnership ideas and our team will get back to you soon.
                    </p>

                    <form class="mt-8 space-y-5">
                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">Name</label>
                                <input type="text" class="w-full rounded-xl border border-green-200 px-4 py-3 focus:border-green-500 focus:outline-none" placeholder="Your name" />
                            </div>
                            <div>
                                <label class="mb-2 block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" class="w-full rounded-xl border border-green-200 px-4 py-3 focus:border-green-500 focus:outline-none" placeholder="you@example.com" />
                            </div>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Subject</label>
                            <input type="text" class="w-full rounded-xl border border-green-200 px-4 py-3 focus:border-green-500 focus:outline-none" placeholder="How can we help?" />
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-gray-700">Message</label>
                            <textarea rows="5" class="w-full rounded-xl border border-green-200 px-4 py-3 focus:border-green-500 focus:outline-none" placeholder="Write your message..."></textarea>
                        </div>

                        <button type="submit" class="rounded-xl bg-green-600 px-5 py-3 font-semibold text-white transition hover:bg-green-700">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="rounded-3xl border border-green-100 bg-green-50 p-6">
                    <h2 class="text-2xl font-semibold text-gray-900">Visit Our Office</h2>
                    <p class="mt-3 text-sm leading-7 text-gray-600">
                        123 Education Street, Yangon, Myanmar<br />
                        Email: info@homesayar.com<br />
                        Phone: +95 9 1234 5678
                    </p>

                    <div class="mt-6 overflow-hidden rounded-2xl border border-green-200">
                        <iframe
                            src="https://www.google.com/maps?q=Yangon%20Myanmar&z=13&output=embed"
                            class="h-72 w-full"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Map to HomeSayar office"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')
</body>
</html>
