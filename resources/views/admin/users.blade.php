<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeSayar|Manage Users</title>
    <link rel="icon" type="image/png" href="{{ asset('images/home_sayar_logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    @include('partials.navigation')

    <main class="min-h-screen bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 px-4 py-8 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="mb-6 flex flex-wrap items-center justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Manage User Accounts</h1>
                    <p class="mt-1 text-sm text-gray-600">Review accounts and assign their roles.</p>
                </div>
                <span class="rounded-full bg-green-100 px-4 py-2 text-sm font-semibold text-green-800">{{ $users->count() }} accounts</span>
            </div>

            @if (session('success'))
                <div class="mb-4 flex items-center gap-3 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-800 shadow-sm" role="status">
                    <span class="flex h-6 w-6 items-center justify-center rounded-full bg-green-600 text-xs font-bold text-white">✓</span>
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif
            @if ($errors->has('user'))
                <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800" role="alert">{{ $errors->first('user') }}</div>
            @endif

            <div class="overflow-x-auto rounded-2xl border border-gray-200 bg-white shadow-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Verification</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">Role</th>
                            <th class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-500">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($users as $user)
                            <tr class="hover:bg-green-50">
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">{{ $user->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">{{ $user->email }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm">
                                    @if ($user->hasVerifiedEmail())
                                        <span class="font-semibold text-green-700">Verified</span>
                                    @else
                                        <span class="font-semibold text-yellow-700">Pending</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <form method="POST" action="{{ route('admin.users.role', $user) }}" class="flex items-center gap-2">
                                        @csrf
                                        @method('PATCH')
                                        <select name="user_role_id" class="rounded-lg border border-gray-300 px-3 py-2 text-sm focus:border-green-500 focus:ring-green-500">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}" @selected($user->user_role_id === $role->id)>{{ ucfirst($role->role) }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="rounded-lg bg-green-600 px-3 py-2 text-sm font-semibold text-white hover:bg-green-700">Save</button>
                                    </form>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-right">
                                    @if (!$user->is(auth()->user()))
                                        <form method="POST" action="{{ route('admin.users.destroy', $user) }}" onsubmit="return confirm('Delete this user account?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded-lg px-3 py-2 text-sm font-semibold text-red-600 hover:bg-red-50">Delete</button>
                                        </form>
                                    @else
                                        <span class="text-sm text-gray-400">Current account</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="px-6 py-8 text-center text-sm text-gray-500">No user accounts found.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>
