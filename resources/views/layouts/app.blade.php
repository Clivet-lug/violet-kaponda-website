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

    <!-- Enhanced Tailwind Config -->
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
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in': 'fadeIn 0.8s ease-out',
                    }
                }
            }
        }
    </script>

    <style>
        /* Ultimate Desktop Experience */
        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(25px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .glass-nav.scrolled {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(30px);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            padding: 0.75rem 1.25rem;
            border-radius: 0.75rem;
            color: #374151;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: #ea580c;
            background-color: #fed7aa;
            transform: translateY(-2px);
        }

        .nav-underline {
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: #ea580c;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover .nav-underline {
            width: 80%;
        }

        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(to right, #ea580c, #dc2626, #f59e0b);
            z-index: 9999;
            transition: width 0.3s ease;
            box-shadow: 0 2px 10px rgba(234, 88, 12, 0.3);
        }

        .btn-primary {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(234, 88, 12, 0.3);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 20px 40px rgba(234, 88, 12, 0.4);
        }

        .gradient-text {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 50%, #f59e0b 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient 3s ease infinite;
        }

        .mobile-menu {
            transform: translateY(-100%);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            max-height: 0;
            overflow: hidden;
        }

        .mobile-menu.open {
            transform: translateY(0);
            opacity: 1;
            max-height: 500px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(2deg);
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.9);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #ea580c, #dc2626);
            border-radius: 6px;
            box-shadow: 0 2px 10px rgba(234, 88, 12, 0.3);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #dc2626, #b91c1c);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            -webkit-text-size-adjust: 100%;
            -webkit-font-smoothing: antialiased;
        }

        @media (max-width: 768px) {
            .btn-primary {
                min-height: 44px;
                font-size: 16px;
            }

            input[type="email"] {
                font-size: 16px;
                min-height: 44px;
            }
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50 overflow-x-hidden">
    <!-- Scroll Progress Indicator -->
    <div class="scroll-indicator" id="scrollIndicator"></div>

    <!-- Glass Navigation -->
    <nav class="glass-nav sticky top-0 z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3 group">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-brand-orange to-brand-red rounded-xl flex items-center justify-center animate-float group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-white font-bold text-xl font-display">V</span>
                        </div>
                        <div>
                            <div
                                class="font-display font-bold text-xl text-gray-900 group-hover:text-brand-orange transition-colors duration-300">
                                Violet Kaponda</div>
                            <div class="text-xs text-gray-600">Fintech Thought Leader</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link">Home<span class="nav-underline"></span></a>
                    <a href="/about" class="nav-link">About<span class="nav-underline"></span></a>
                    <a href="/speaking" class="nav-link">Speaking<span class="nav-underline"></span></a>
                    <a href="/media" class="nav-link">Media<span class="nav-underline"></span></a>
                    <a href="/blog" class="nav-link">Blog<span class="nav-underline"></span></a>
                    <a href="/contact" class="btn-primary text-white px-8 py-3 rounded-xl font-semibold shadow-lg ml-4">
                        Work With Me
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="p-3 rounded-xl text-gray-700 hover:text-brand-orange hover:bg-orange-50 transition-all duration-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden mobile-menu">
                <div class="px-4 pt-4 pb-6 space-y-2 glass-nav border-t border-gray-100 shadow-xl rounded-b-2xl">
                    <a href="/contact"
                        class="block mx-2 mb-4 btn-primary text-white px-6 py-4 rounded-xl text-center font-semibold shadow-lg">
                        Work With Me
                    </a>
                    <a href="/"
                        class="block px-4 py-3 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-lg transition-colors duration-300 font-medium">Home</a>
                    <a href="/about"
                        class="block px-4 py-3 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-lg transition-colors duration-300 font-medium">About</a>
                    <a href="/speaking"
                        class="block px-4 py-3 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-lg transition-colors duration-300 font-medium">Speaking</a>
                    <a href="/media"
                        class="block px-4 py-3 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-lg transition-colors duration-300 font-medium">Media</a>
                    <a href="/blog"
                        class="block px-4 py-3 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-lg transition-colors duration-300 font-medium">Blog</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-8 right-8 w-14 h-14 bg-gradient-to-br from-brand-orange to-brand-red text-white rounded-full shadow-xl opacity-0 invisible transition-all duration-300 hover:scale-110 hover:shadow-2xl z-50 group"
        aria-label="Back to top">
        <svg class="w-6 h-6 mx-auto group-hover:animate-bounce" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Brand Section -->
                <div class="md:col-span-1">
                    <div class="flex items-center space-x-4 mb-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-brand-orange to-brand-red rounded-2xl flex items-center justify-center animate-float shadow-xl">
                            <span class="text-white font-bold text-2xl font-display">V</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-2xl gradient-text">Violet Kaponda</div>
                            <div class="text-gray-400 text-sm">Fintech Thought Leader</div>
                        </div>
                    </div>
                    <p class="text-gray-300 text-base leading-relaxed mb-8">
                        Empowering the future of African fintech through thought leadership and strategic consulting.
                    </p>

                    <!-- Social Links -->
                    <div class="flex space-x-4">
                        <a href="https://linkedin.com/in/violetkaponda"
                            class="p-3 bg-blue-600 hover:bg-blue-700 rounded-lg transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286z" />
                            </svg>
                        </a>
                        <a href="https://youtube.com/@elevateanddominate"
                            class="p-3 bg-red-600 hover:bg-red-700 rounded-lg transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/violetkaponda"
                            class="p-3 bg-pink-600 hover:bg-pink-700 rounded-lg transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C8.396 0 7.989.013 7.041.048 6.094.082 5.52.204 5.036.388a5.918 5.918 0 0 0-2.14 1.394A5.918 5.918 0 0 0 .48 4.126C.294 4.61.172 5.184.139 6.131.103 7.08.09 7.487.09 11.108c0 3.62.013 4.027.048 4.975.034.948.156 1.521.34 2.006a5.918 5.918 0 0 0 1.394 2.14 5.918 5.918 0 0 0 2.14 1.394c.485.184 1.058.306 2.006.34.948.035 1.355.048 4.975.048 3.621 0 4.028-.013 4.976-.048.948-.034 1.52-.156 2.005-.34a5.918 5.918 0 0 0 2.14-1.394 5.918 5.918 0 0 0 1.394-2.14c.184-.485.306-1.058.34-2.006.035-.947.048-1.355.048-4.976 0-3.62-.013-4.027-.048-4.975-.034-.948-.156-1.521-.34-2.006a5.918 5.918 0 0 0-1.394-2.14A5.918 5.918 0 0 0 19.063.388C18.578.204 18.005.082 17.057.048 16.108.013 15.701 0 12.08 0h-.063z" />
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@violetkaponda"
                            class="p-3 bg-black hover:bg-gray-800 rounded-lg transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="font-semibold text-lg mb-6 text-white">Quick Links</h3>
                    <ul class="space-y-4">
                        <li><a href="/about"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300 text-base hover:translate-x-2 inline-block">About
                                Me</a></li>
                        <li><a href="/speaking"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300 text-base hover:translate-x-2 inline-block">Speaking
                                Engagements</a></li>
                        <li><a href="/media"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300 text-base hover:translate-x-2 inline-block">Media
                                Kit</a></li>
                        <li><a href="/blog"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300 text-base hover:translate-x-2 inline-block">Blog
                                & Insights</a></li>
                        <li><a href="/contact"
                                class="text-gray-400 hover:text-brand-orange transition-colors duration-300 text-base hover:translate-x-2 inline-block">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="font-semibold text-lg mb-4 text-white">Stay Connected</h3>
                    <p class="text-gray-400 text-base mb-6">Get exclusive fintech insights delivered to your inbox.</p>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Your email address"
                            class="flex-1 px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-orange transition-all duration-300">
                        <button class="btn-primary px-6 py-3 rounded-lg font-semibold whitespace-nowrap">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="border-t border-gray-700 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="text-gray-400 text-sm text-center md:text-left">
                        <p>&copy; 2025 Violet Nswana Kaponda. All rights reserved.</p>
                        <p class="text-xs mt-1">Empowering Africa's Fintech Future 🌍</p>
                    </div>
                    <div class="flex space-x-6 text-sm">
                        <a href="/privacy"
                            class="text-gray-400 hover:text-brand-orange transition-colors duration-300">Privacy
                            Policy</a>
                        <a href="/terms"
                            class="text-gray-400 hover:text-brand-orange transition-colors duration-300">Terms of
                            Service</a>
                        <a href="/sitemap"
                            class="text-gray-400 hover:text-brand-orange transition-colors duration-300">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('open');
                    menuIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                });
            }
        });

        // Glass Navigation Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Scroll Progress Indicator
        window.addEventListener('scroll', function() {
            const scrollIndicator = document.getElementById('scrollIndicator');
            const totalHeight = document.body.scrollHeight - window.innerHeight;
            const progress = (window.scrollY / totalHeight) * 100;
            scrollIndicator.style.width = progress + '%';
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 500) {
                backToTopButton.style.opacity = '1';
                backToTopButton.style.visibility = 'visible';
            } else {
                backToTopButton.style.opacity = '0';
                backToTopButton.style.visibility = 'hidden';
            }
        });

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Keyboard navigation (ESC closes mobile menu)
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const mobileMenu = document.getElementById('mobile-menu');
                const menuIcon = document.getElementById('menu-icon');
                const closeIcon = document.getElementById('close-icon');

                if (mobileMenu && mobileMenu.classList.contains('open')) {
                    mobileMenu.classList.remove('open');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            }
        });
    </script>
</body>

</html>
