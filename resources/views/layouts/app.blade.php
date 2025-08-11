<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Violet Nswana Kaponda - Fintech Thought Leader & Speaker')</title>
    <meta name="description" content="@yield('description', 'Violet Nswana Kaponda is a leading voice in African fintech, digital transformation, and women in technology.')">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Basic Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'display': ['Playfair Display', 'serif'],
                        'sans': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'brand': {
                            'orange': '#ea580c',
                            'red': '#dc2626',
                            'gold': '#f59e0b',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .btn-primary {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(234, 88, 12, 0.3);
        }

        .gradient-text {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 50%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Success Banner -->
    <div class="bg-gradient-to-r from-green-500 to-blue-600 text-white px-6 py-3 text-center font-semibold">
        🎉 STEP 1: BASIC STYLING ADDED! 🎉
    </div>

    <!-- Simple Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-brand-orange to-brand-red rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl font-display">V</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-xl text-gray-900">Violet Kaponda</div>
                            <div class="text-xs text-gray-600">Fintech Thought Leader</div>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/"
                        class="text-gray-700 hover:text-brand-orange font-medium transition-colors duration-300">Home</a>
                    <a href="/about"
                        class="text-gray-700 hover:text-brand-orange font-medium transition-colors duration-300">About</a>
                    <a href="/speaking"
                        class="text-gray-700 hover:text-brand-orange font-medium transition-colors duration-300">Speaking</a>
                    <a href="/media"
                        class="text-gray-700 hover:text-brand-orange font-medium transition-colors duration-300">Media</a>
                    <a href="/blog"
                        class="text-gray-700 hover:text-brand-orange font-medium transition-colors duration-300">Blog</a>
                    <a href="/contact" class="btn-primary text-white px-6 py-2 rounded-lg font-semibold">
                        Work With Me
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Simple Footer -->
    <footer class="bg-gray-900 text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Brand -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-brand-orange to-brand-red rounded-xl flex items-center justify-center">
                            <span class="text-white font-bold text-xl font-display">V</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-xl gradient-text">Violet Kaponda</div>
                            <div class="text-gray-400 text-sm">Fintech Thought Leader</div>
                        </div>
                    </div>
                    <p class="text-gray-300">
                        Empowering the future of African fintech through thought leadership and strategic consulting.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/about"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300">About</a>
                        </li>
                        <li><a href="/speaking"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300">Speaking</a>
                        </li>
                        <li><a href="/media"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300">Podcast</a>
                        </li>
                        <li><a href="/contact"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Stay Connected</h3>
                    <p class="text-gray-400 text-sm mb-4">Get insights delivered to your inbox.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email"
                            class="flex-1 px-4 py-2 rounded-l-lg text-gray-900">
                        <button class="btn-primary px-4 py-2 rounded-r-lg">Subscribe</button>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Violet Nswana Kaponda. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
