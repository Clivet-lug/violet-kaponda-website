<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login - Violet Kaponda</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                        'display': ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        .input-focus:focus {
            border-color: #dc2626;
            box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(220, 38, 38, 0.4);
        }

        .image-overlay {
            background: linear-gradient(45deg, rgba(0, 0, 0, 0.3) 0%, rgba(220, 38, 38, 0.1) 100%);
        }

        @media (max-width: 768px) {
            .mobile-layout {
                flex-direction: column;
            }

            .image-section {
                height: 40vh;
                min-height: 250px;
            }

            .form-section {
                height: 60vh;
                overflow-y: auto;
            }
        }

        .full-height {
            height: 100vh;
            max-height: 100vh;
            overflow: hidden;
        }
    </style>
</head>

<body class="full-height bg-black flex mobile-layout">
    <!-- Left Side - Image Section -->
    <div class="flex-1 relative image-section bg-cover bg-center bg-no-repeat"
        style="background-image: url('/images/admin/violet-admin.jpg');">
        <div class="absolute inset-0 image-overlay"></div>
        <div class="relative z-10 flex flex-col justify-end h-full p-8 text-white">
            <div class="mb-8">
                <h1 class="text-4xl md:text-5xl font-display font-bold mb-4">
                    Welcome Back
                </h1>
                <p class="text-xl md:text-2xl font-light opacity-90">
                    Your digital empire awaits
                </p>
                <div class="w-20 h-1 bg-red-600 mt-4"></div>
            </div>
        </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="flex-1 flex items-center justify-center p-4 bg-black form-section">
        <div class="w-full max-w-md">
            <!-- Logo Section -->
            <div class="text-center mb-6">
                <div class="flex justify-center mb-4">
                    <div class="w-14 h-14 bg-red-600 rounded-xl flex items-center justify-center shadow-xl">
                        <span class="text-xl font-bold font-display text-white">V</span>
                    </div>
                </div>
                <h2 class="text-xl font-bold text-white font-display mb-2">Admin Dashboard</h2>
                <p class="text-gray-400 text-sm">Sign in to manage your website</p>
            </div>

            <!-- Login Form -->
            <div class="bg-gray-900 rounded-2xl shadow-2xl p-6 border border-gray-800">
                <form method="POST" action="{{ route('admin.login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                            Email Address
                        </label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus
                            class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none input-focus transition-all duration-200 text-white placeholder-gray-500 @error('email') border-red-500 @enderror"
                            placeholder="violet@violetnswanakaponda.com">
                        @error('email')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <input type="password" id="password" name="password" required
                                autocomplete="current-password"
                                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none input-focus transition-all duration-200 text-white placeholder-gray-500 @error('password') border-red-500 @enderror"
                                placeholder="Enter your password">
                            <button type="button" onclick="togglePassword()"
                                class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-red-400 transition-colors">
                                <svg id="eye-open" class="h-5 w-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <svg id="eye-closed" class="h-5 w-5 hidden" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21" />
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember" name="remember"
                                class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-600 bg-gray-800 rounded">
                            <label for="remember" class="ml-2 block text-sm text-gray-300">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full btn-primary text-white py-3 px-4 rounded-lg font-semibold text-lg shadow-lg">
                        Sign In to Dashboard
                    </button>
                </form>

                <!-- Footer Links -->
                <div class="mt-4 text-center">
                    <a href="{{ route('home') }}" class="text-sm text-gray-400 hover:text-red-400 transition-colors">
                        ← Back to Main Website
                    </a>
                </div>
            </div>

            <!-- Success/Error Messages -->
            @if (session('success'))
                <div
                    class="mt-3 bg-green-900 border border-green-700 text-green-300 px-4 py-2 rounded-lg text-center text-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div
                    class="mt-3 bg-red-900 border border-red-700 text-red-300 px-4 py-2 rounded-lg text-center text-sm">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeOpen = document.getElementById('eye-open');
            const eyeClosed = document.getElementById('eye-closed');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeOpen.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            } else {
                passwordInput.type = 'password';
                eyeOpen.classList.remove('hidden');
                eyeClosed.classList.add('hidden');
            }
        }

        // Auto-focus on email field
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('email').focus();
        });

        // Add some visual feedback on form submission
        document.querySelector('form').addEventListener('submit', function() {
            const submitBtn = document.querySelector('button[type="submit"]');
            submitBtn.innerHTML = `
                <div class="flex items-center justify-center">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Signing in...
                </div>
            `;
            submitBtn.disabled = true;
        });
    </script>
</body>

</html>
