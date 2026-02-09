<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password | Arimala Hospital</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        :root {
            --heading-color: #0E4968;
            --accent-color: #107A7C;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-[#e6f2f6] to-[#f4f9fb] flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-2xl p-10 border border-gray-100">

        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('img/back-logo.png') }}" alt="Arimala Hospital Logo" class="h-20">
        </div>

        <!-- Title -->
        <h2 class="text-2xl font-semibold text-center mb-4"
            style="color: var(--heading-color);">
            Reset Your Password
        </h2>

        <p class="text-sm text-gray-600 text-center mb-8">
            Please enter your new password below to complete the reset process.
        </p>

        <!-- Reset Password Form -->
        <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <label class="block text-sm font-medium mb-1"
                       style="color: var(--heading-color);">
                    Email Address
                </label>

                <input type="email"
                       name="email"
                       value="{{ old('email', $request->email) }}"
                       required
                       autofocus
                       class="w-full px-4 py-2.5 border border-gray-300 rounded-lg
                              focus:outline-none focus:ring-2 focus:ring-[var(--accent-color)]
                              focus:border-[var(--accent-color)] transition duration-200">

                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- New Password -->
            <div>
                <label class="block text-sm font-medium mb-1"
                       style="color: var(--heading-color);">
                    New Password
                </label>

                <input type="password"
                       name="password"
                       required
                       class="w-full px-4 py-2.5 border border-gray-300 rounded-lg
                              focus:outline-none focus:ring-2 focus:ring-[var(--accent-color)]
                              focus:border-[var(--accent-color)] transition duration-200">

                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="block text-sm font-medium mb-1"
                       style="color: var(--heading-color);">
                    Confirm Password
                </label>

                <input type="password"
                       name="password_confirmation"
                       required
                       class="w-full px-4 py-2.5 border border-gray-300 rounded-lg
                              focus:outline-none focus:ring-2 focus:ring-[var(--accent-color)]
                              focus:border-[var(--accent-color)] transition duration-200">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full py-3 rounded-lg text-white font-medium
                       shadow-md hover:shadow-lg transition duration-300"
                style="background-color: var(--accent-color);">
                Reset Password
            </button>
        </form>

        <!-- Back to Login -->
        <p class="text-center text-sm text-gray-600 mt-8">
            Remember your password?
            <a href="{{ route('login') }}"
               class="font-medium hover:underline"
               style="color: var(--accent-color);">
                Back to Login
            </a>
        </p>

    </div>

</body>
</html>
