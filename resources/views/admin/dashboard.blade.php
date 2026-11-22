<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Admin Dashboard</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .admin-dashboard {
            background:
                radial-gradient(ellipse at 4% 0%, rgba(16, 185, 129, 0.13), transparent 34rem),
                linear-gradient(135deg, #f8fbf9 0%, #f1f7f4 52%, #f8fafc 100%);
        }

        .dashboard-titlebar {
            background: linear-gradient(120deg, #064e3b 0%, #047857 58%, #0f766e 100%);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 18px 38px rgba(6, 78, 59, 0.18);
        }

        .dashboard-stat-card {
            position: relative;
            overflow: hidden;
            border-radius: 1.25rem;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
            transition: transform 180ms ease, box-shadow 180ms ease;
        }

        .dashboard-stat-card::before {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #10b981, #6ee7b7);
            content: "";
        }

        .dashboard-stat-card:nth-child(2)::before {
            background: linear-gradient(90deg, #059669, #6ee7b7);
        }

        .dashboard-stat-card:nth-child(3)::before {
            background: linear-gradient(90deg, #d97706, #fcd34d);
        }

        .dashboard-stat-card:nth-child(4)::before {
            background: linear-gradient(90deg, #7c3aed, #c4b5fd);
        }

        .dashboard-stat-card:nth-child(5)::before {
            background: linear-gradient(90deg, #0f766e, #5eead4);
        }

        .dashboard-stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 32px rgba(15, 23, 42, 0.1);
        }

        .dashboard-panel,
        .dashboard-table {
            border: 1px solid rgba(226, 232, 240, 0.9);
            border-radius: 1.25rem;
            box-shadow: 0 10px 28px rgba(15, 23, 42, 0.06);
        }

        .dashboard-action {
            border: 1px solid #e8efeb;
            background: rgba(255, 255, 255, 0.88);
            box-shadow: 0 3px 10px rgba(15, 23, 42, 0.03);
            transition: transform 160ms ease, box-shadow 160ms ease, border-color 160ms ease;
        }

        .dashboard-action:hover {
            transform: translateY(-2px);
            border-color: #a7f3d0;
            background: #fff;
            box-shadow: 0 10px 20px rgba(6, 78, 59, 0.08);
        }

        .dashboard-activity-list > div {
            padding-bottom: 1rem;
            border-bottom: 1px solid #eef2f0;
        }

        .dashboard-activity-list > div:last-child {
            padding-bottom: 0;
            border-bottom: 0;
        }

        .dashboard-table-wrap {
            overflow-x: auto;
        }

        .dashboard-table thead {
            background: #f5faf7;
        }

        @media (prefers-reduced-motion: reduce) {
            .dashboard-stat-card,
            .dashboard-action {
                transition: none;
            }

            .dashboard-stat-card:hover,
            .dashboard-action:hover {
                transform: none;
            }
        }
    </style>
</head>
<body>
    @include('partials.navigation')
    <div class="admin-dashboard min-h-screen p-4 sm:p-6">
        <div class="max-w-7xl mx-auto">
            <div class="dashboard-titlebar mb-6 flex flex-col gap-4 rounded-2xl px-5 py-5 text-white sm:flex-row sm:items-center sm:justify-between sm:px-7">
                <div class="flex items-center">
                    <div class="mr-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-xl bg-white bg-opacity-10">
                        <svg class="h-7 w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-1 text-xs font-semibold uppercase tracking-widest text-green-100">HomeSayar • Admin</p>
                        <h2 class="text-2xl font-bold leading-tight sm:text-3xl">Admin Dashboard</h2>
                        <p class="mt-1 text-sm text-green-100">Platform overview and daily operations</p>
                    </div>
                </div>
                <div class="flex items-center self-start rounded-xl border border-white border-opacity-20 bg-white bg-opacity-10 px-4 py-3 text-sm font-medium sm:self-auto">
                    <svg class="mr-2 h-5 w-5 text-green-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    {{ now()->format('F j, Y') }}
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="dashboard-stats mb-8 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                <!-- Total Teachers -->
                <div class="dashboard-stat-card bg-white p-4 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">စုစုပေါင်း ဆရာများ</p>
                            <p class="text-2xl font-bold text-gray-800 mt-2">156</p>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center text-sm">
                        <span class="text-green-600 font-semibold">+12%</span>
                        <span class="text-gray-500 ml-2">ယခင်လမှ</span>
                    </div>
                </div>

                <!-- Total Parents -->
                <div class="dashboard-stat-card bg-white p-4 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">စုစုပေါင်း မိဘများ</p>
                            <p class="text-2xl font-bold text-gray-800 mt-2">342</p>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-green-100 flex items-center justify-center">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center text-sm">
                        <span class="text-green-600 font-semibold">+8%</span>
                        <span class="text-gray-500 ml-2">ယခင်လမှ</span>
                    </div>
                </div>

                <!-- Pending Verifications -->
                <div class="dashboard-stat-card bg-white p-4 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">စစ်ဆေးရန် လိုအပ်သည်</p>
                            <p class="text-2xl font-bold text-gray-800 mt-2">23</p>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-yellow-100 flex items-center justify-center">
                            <svg class="w-7 h-7 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center text-sm">
                        <span class="text-yellow-600 font-semibold">အရေးကြီး</span>
                        <span class="text-gray-500 ml-2">လုပ်ဆောင်ရန် လိုအပ်သည်</span>
                    </div>
                </div>

                <!-- Teacher Requests -->
                <div class="dashboard-stat-card bg-white p-4 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">ဆရာ တောင်းဆိုမှုများ</p>
                            <p class="text-2xl font-bold text-gray-800 mt-2">45</p>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-purple-100 flex items-center justify-center">
                            <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center text-sm">
                        <span class="text-purple-600 font-semibold">+5</span>
                        <span class="text-gray-500 ml-2">ယနေ့</span>
                    </div>
                </div>

                <!-- Currently Online -->
                <div class="dashboard-stat-card bg-white p-4 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-500">လက်ရှိ အွန်လိုင်း</p>
                            <p class="text-2xl font-bold text-gray-800 mt-2">28</p>
                        </div>
                        <div class="h-12 w-12 rounded-full bg-teal-100 flex items-center justify-center">
                            <svg class="w-7 h-7 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-3 flex items-center text-sm">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                        <span class="text-teal-600 font-semibold">အသက်သွင်း</span>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                <!-- Quick Actions -->
                <div class="dashboard-panel bg-white p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        လျင်မြန်သော လုပ်ဆောင်ချက်များ
                    </h3>
                    <div class="grid grid-cols-2 gap-4">
                        <a href="/admin/teacher_list" class="dashboard-action flex items-center p-4 rounded-xl">
                            <div class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ဆရာ စာရင်း</p>
                                <p class="text-xs text-gray-500">Teacher List</p>
                            </div>
                        </a>
                        <a href="/admin/teacher_verification" class="dashboard-action flex items-center p-4 rounded-xl">
                            <div class="h-10 w-10 rounded-full bg-yellow-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ဆရာ စစ်ဆေးရန်</p>
                                <p class="text-xs text-gray-500">Verification</p>
                            </div>
                        </a>
                        <a href="/admin/teacher_request_list" class="dashboard-action flex items-center p-4 rounded-xl">
                            <div class="h-10 w-10 rounded-full bg-purple-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">တောင်းဆိုမှုများ</p>
                                <p class="text-xs text-gray-500">Requests</p>
                            </div>
                        </a>
                        <a href="/admin/payment-verification-list" class="dashboard-action flex items-center p-4 rounded-xl">
                            <div class="h-10 w-10 rounded-full bg-blue-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3v1H7a2 2 0 00-2 2v4a2 2 0 002 2h10a2 2 0 002-2v-4a2 2 0 00-2-2h-2v-1c0-1.657-1.343-3-3-3zm0 0V5m0 0a2 2 0 100 4 2 2 0 000-4z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">ငွေပေးချေမှု စစ်ဆေးမှု</p>
                                <p class="text-xs text-gray-500">Payments</p>
                            </div>
                        </a>
                        <a href="/admin/attendance-verification" class="dashboard-action flex items-center p-4 rounded-xl">
                            <div class="h-10 w-10 rounded-full bg-red-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Attendance စစ်ဆေးရန်</p>
                                <p class="text-xs text-gray-500">Attendances</p>
                            </div>
                        </a>
                        <a href="/admin/teacher/rating/list" class="dashboard-action flex items-center p-4 rounded-xl">
                            <div class="h-10 w-10 rounded-full bg-yellow-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Rating စစ်ဆေးရန်</p>
                                <p class="text-xs text-gray-500">Verify Rating</p>
                            </div>
                        </a>
                        <a href="/admin/feedback/list" class="dashboard-action flex items-center p-4 rounded-xl">
                            <div class="h-10 w-10 rounded-full bg-indigo-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">Feedback စစ်ဆေးရန်</p>
                                <p class="text-xs text-gray-500">Verify Feedback</p>
                            </div>
                        </a>
                        <!-- User Management -->
                        <a href="/admin/users" class="dashboard-action flex items-center p-4 rounded-xl">
                            <div class="h-10 w-10 rounded-full bg-gray-500 flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-gray-800">အသုံးပြုသူ စီမံခန့်ခွဲမှု</p>
                                <p class="text-xs text-gray-500">User Management</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="dashboard-panel bg-white p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        လတ်တလော လုပ်ဆောင်ချက်များ
                    </h3>
                    <div class="dashboard-activity-list space-y-4">
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ဆရာ ဦးမင်းသူ အတည်ပြုပြီး</p>
                                <p class="text-xs text-gray-500">၅ မိနစ် အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">မိဘ ဦးခင်မောင် ပရိုဖိုင်းဖန်တီးပြီး</p>
                                <p class="text-xs text-gray-500">၁၅ မိနစ် အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ဆရာ ဒေါ်သီရိမောင် စစ်ဆေးရန် လိုအပ်</p>
                                <p class="text-xs text-gray-500">၃၀ မိနစ် အကြာက</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="h-8 w-8 rounded-full bg-purple-100 flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm text-gray-800">ဆရာ တောင်းဆိုမှု ရရှိပြီး</p>
                                <p class="text-xs text-gray-500">၁ နာရီ အကြာက</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    

            <!-- Recent Teachers Table -->
            <div class="dashboard-table overflow-hidden bg-white">
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-6 py-4 flex items-center justify-between">
                    <h3 class="text-xl font-bold text-white">လတ်တလော ဆရာများ</h3>
                    <a href="/admin/teacher_list" class="text-white text-sm hover:underline">အားလုံးကြည့်ရန် →</a>
                </div>
                <div class="dashboard-table-wrap p-4 sm:p-6">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ဆရာအမည်</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">ဘာသာရပ်</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">မြို့နယ်</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">အခြေအနေ</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">ဦးမင်းသူ</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ရူပဗေဒ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ကမာရွတ်</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        ✓ Verified
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center text-green-600 font-bold text-sm">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">ဒေါ်သီရိမောင်</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">အင်္ဂလိပ်စာ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ရန်ကင်း</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                        Pending
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-green-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-sm">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-sm font-medium text-gray-900">ဦးထွန်းအောင်</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">သင်္ချာ</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">မရမ်းကုန်း</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        X Banned
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>
</html>