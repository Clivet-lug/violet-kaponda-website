<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Violet Nswana Kaponda - Fintech Thought Leader & Speaker')</title>
    <meta name="description" content="@yield('description', 'Violet Nswana Kaponda is a leading voice in African fintech, digital transformation, and women in technology. Book her for speaking engagements and strategic consulting.')">
    <meta name="keywords" content="@yield('keywords', 'fintech, Africa, women in tech, digital transformation, speaker, consultant, Violet Kaponda')">
    <meta name="author" content="Violet Nswana Kaponda">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Violet Nswana Kaponda - Fintech Thought Leader')">
    <meta property="og:description" content="@yield('og_description', 'Leading voice in African fintech and digital transformation')">
    <meta property="og:image" content="@yield('og_image', asset('images/violet-og-image.jpg'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'Violet Nswana Kaponda - Fintech Thought Leader')">
    <meta property="twitter:description" content="@yield('twitter_description', 'Leading voice in African fintech and digital transformation')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('images/violet-twitter-image.jpg'))">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Tailwind CSS via CDN -->
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
                        'slide-up': 'slideUp 0.8s ease-out',
                        'bounce-soft': 'bounceSoft 2s infinite',
                        'gradient': 'gradient 3s ease infinite',
                    }
                }
            }
        }
    </script>

    <style>
        /* Custom Modern Styles */
        .gradient-text {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 50%, #f59e0b 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient 3s ease infinite;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 100%);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-primary:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover:before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 20px 40px rgba(234, 88, 12, 0.4);
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-shadow {
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px) rotate(2deg);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .text-shadow {
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .bg-gradient-animated {
            background: linear-gradient(-45deg, #ea580c, #dc2626, #f59e0b, #ea580c);
            background-size: 400% 400%;
            animation: gradient 4s ease infinite;
        }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Custom Keyframes */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceSoft {

            0%,
            100% {
                transform: translateY(-5px);
            }

            50% {
                transform: translateY(5px);
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

        /* Scroll indicator */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(to right, #ea580c, #dc2626, #f59e0b);
            z-index: 9999;
            transition: width 0.3s ease;
        }

        /* Modern scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #ea580c, #dc2626);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to bottom, #dc2626, #b91c1c);
        }

        /* Intersection Observer animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Enhanced mobile menu */
        .mobile-menu-enter {
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Pulse effect for CTA */
        .pulse-ring {
            content: '';
            width: 100%;
            height: 100%;
            border: 3px solid #ea580c;
            border-radius: 50%;
            position: absolute;
            left: 0;
            top: 0;
            animation: pulsate 2s ease-out infinite;
        }

        @keyframes pulsate {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(1.3);
                opacity: 0;
            }
        }
    </style>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Violet Nswana Kaponda",
        "jobTitle": "Fintech Thought Leader & Speaker",
        "description": "Leading voice in African fintech, digital transformation, and women in technology",
        "url": "{{ url('/') }}",
        "sameAs": [
            "https://linkedin.com/in/violetkaponda",
            "https://youtube.com/@elevateanddominate",
            "https://instagram.com/violetkaponda",
            "https://tiktok.com/@violetkaponda"
        ],
        "knowsAbout": [
            "Fintech",
            "Digital Transformation",
            "Women in Technology",
            "African Innovation",
            "Strategic Consulting"
        ]
    }
    </script>
</head>

<body class="font-sans antialiased bg-gray-50 overflow-x-hidden">
    <!-- Scroll Progress Indicator -->
    <div class="scroll-indicator" id="scrollIndicator"></div>

    <!-- Success Banner with enhanced design -->
    <div class="bg-gradient-animated text-white px-6 py-3 text-center font-semibold relative overflow-hidden">
        <div class="relative z-10 flex items-center justify-center space-x-2">
            <svg class="w-5 h-5 animate-bounce-soft" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="text-shadow">🚀 MODERN DESIGN SYSTEM ACTIVATED!</span>
            <svg class="w-5 h-5 animate-float" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                </path>
            </svg>
        </div>
    </div>

    <!-- Enhanced Navigation -->
    <nav class="glass-nav sticky top-0 z-50 nav-shadow transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Enhanced Logo -->
                <div class="flex items-center animate-fade-in">
                    <a href="/" class="flex items-center space-x-3 group">
                        <div class="relative">
                            <div
                                class="w-14 h-14 bg-gradient-to-br from-brand-orange via-brand-red to-brand-gold rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 transition-all duration-300 animate-float">
                                <span class="text-white font-bold text-xl font-display">V</span>
                            </div>
                            <div
                                class="absolute inset-0 w-14 h-14 rounded-2xl border-2 border-brand-orange opacity-0 group-hover:opacity-100 animate-pulse transition-opacity duration-300">
                            </div>
                        </div>
                        <div class="hidden sm:block">
                            <div
                                class="font-display font-bold text-xl text-gray-900 group-hover:text-brand-orange transition-colors duration-300">
                                Violet Kaponda</div>
                            <div
                                class="text-xs text-gray-600 -mt-1 group-hover:text-brand-red transition-colors duration-300">
                                Fintech Thought Leader</div>
                        </div>
                    </a>
                </div>

                <!-- Enhanced Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/"
                        class="px-5 py-3 rounded-xl text-gray-700 hover:text-brand-orange hover:bg-orange-50 transition-all duration-300 font-medium relative group">
                        Home
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/about"
                        class="px-5 py-3 rounded-xl text-gray-700 hover:text-brand-orange hover:bg-orange-50 transition-all duration-300 font-medium relative group">
                        About
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/speaking"
                        class="px-5 py-3 rounded-xl text-gray-700 hover:text-brand-orange hover:bg-orange-50 transition-all duration-300 font-medium relative group">
                        Speaking
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/media"
                        class="px-5 py-3 rounded-xl text-gray-700 hover:text-brand-orange hover:bg-orange-50 transition-all duration-300 font-medium relative group">
                        Media
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/blog"
                        class="px-5 py-3 rounded-xl text-gray-700 hover:text-brand-orange hover:bg-orange-50 transition-all duration-300 font-medium relative group">
                        Blog
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/contact"
                        class="ml-4 btn-primary text-white px-8 py-3 rounded-xl font-semibold shadow-lg relative overflow-hidden group">
                        <span class="relative z-10">Work With Me</span>
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-brand-red to-brand-orange opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </a>
                </div>

                <!-- Enhanced Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button"
                        class="p-3 rounded-xl text-gray-700 hover:text-brand-orange hover:bg-gray-100 transition-all duration-300 relative group">
                        <svg class="h-6 w-6 transition-transform duration-300 group-hover:scale-110" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Enhanced Mobile Navigation -->
            <div id="mobile-menu" class="md:hidden hidden mobile-menu-enter">
                <div class="px-4 pt-4 pb-6 space-y-2 glass-nav border-t border-gray-200 rounded-b-2xl shadow-xl">
                    <a href="/"
                        class="block px-6 py-4 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-xl transition-all duration-300 font-medium">Home</a>
                    <a href="/about"
                        class="block px-6 py-4 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-xl transition-all duration-300 font-medium">About</a>
                    <a href="/speaking"
                        class="block px-6 py-4 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-xl transition-all duration-300 font-medium">Speaking</a>
                    <a href="/media"
                        class="block px-6 py-4 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-xl transition-all duration-300 font-medium">Media</a>
                    <a href="/blog"
                        class="block px-6 py-4 text-gray-700 hover:text-brand-orange hover:bg-orange-50 rounded-xl transition-all duration-300 font-medium">Blog</a>
                    <a href="/contact"
                        class="block mx-4 my-4 btn-primary text-white px-8 py-4 rounded-xl text-center font-semibold shadow-lg">Work
                        With Me</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Enhanced Footer -->
    <footer class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white overflow-hidden">
        <!-- Animated background pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px; animation: float 20s linear infinite;">
            </div>
        </div>

        <!-- Gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <!-- Enhanced Brand Section -->
                <div class="md:col-span-2 animate-on-scroll">
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="relative">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-brand-orange via-brand-red to-brand-gold rounded-3xl flex items-center justify-center shadow-2xl animate-float">
                                <span class="text-white font-bold text-3xl font-display">V</span>
                            </div>
                            <div class="absolute inset-0 w-20 h-20 rounded-3xl pulse-ring"></div>
                        </div>
                        <div>
                            <div class="font-display font-bold text-3xl gradient-text">Violet Kaponda</div>
                            <div class="text-gray-400 text-sm mt-1">Fintech Thought Leader & Speaker</div>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-10 max-w-lg text-lg leading-relaxed">
                        Empowering the future of African fintech through thought leadership,
                        strategic consulting, and inspiring speaking engagements that drive meaningful change.
                    </p>

                    <!-- Enhanced Social Links -->
                    <div class="flex space-x-4">
                        <a href="https://linkedin.com/in/violetkaponda"
                            class="group p-4 bg-gray-800/50 rounded-2xl text-gray-400 hover:text-white hover:bg-blue-600 transition-all duration-300 card-hover">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="https://youtube.com/@elevateanddominate"
                            class="group p-4 bg-gray-800/50 rounded-2xl text-gray-400 hover:text-white hover:bg-red-600 transition-all duration-300 card-hover">
                            <span class="sr-only">YouTube</span>
                            <svg class="h-6 w-6 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/violetkaponda"
                            class="group p-4 bg-gray-800/50 rounded-2xl text-gray-400 hover:text-white hover:bg-pink-600 transition-all duration-300 card-hover">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C8.396 0 7.989.013 7.041.048 6.094.082 5.52.204 5.036.388a5.918 5.918 0 0 0-2.14 1.394A5.918 5.918 0 0 0 .48 4.126C.294 4.61.172 5.184.139 6.131.103 7.08.09 7.487.09 11.108c0 3.62.013 4.027.048 4.975.034.948.156 1.521.34 2.006a5.918 5.918 0 0 0 1.394 2.14 5.918 5.918 0 0 0 2.14 1.394c.485.184 1.058.306 2.006.34.948.035 1.355.048 4.976.048 3.62 0 4.027-.013 4.975-.048.948-.034 1.521-.156 2.006-.34a5.918 5.918 0 0 0 2.14-1.394 5.918 5.918 0 0 0 1.394-2.14c.184-.485.306-1.058.34-2.006.035-.948.048-1.355.048-4.976 0-3.62-.013-4.027-.048-4.975-.034-.948-.156-1.521-.34-2.006a5.918 5.918 0 0 0-1.394-2.14A5.918 5.918 0 0 0 16.986.388C16.501.204 15.928.082 14.98.048 14.031.013 13.624 0 10.003 0h2.014zm-.24 5.4a6.6 6.6 0 1 1 0 13.2 6.6 6.6 0 0 1 0-13.2zm0 2.16a4.44 4.44 0 1 0 0 8.88 4.44 4.44 0 0 0 0-8.88zm6.406-2.845a1.44 1.44 0 1 1 0 2.88 1.44 1.44 0 0 1 0-2.88z" />
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@violetkaponda"
                            class="group p-4 bg-gray-800/50 rounded-2xl text-gray-400 hover:text-white hover:bg-black transition-all duration-300 card-hover">
                            <span class="sr-only">TikTok</span>
                            <svg class="h-6 w-6 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Enhanced Quick Links -->
                <div class="animate-on-scroll">
                    <h3 class="font-display font-semibold text-xl mb-6 text-white relative">
                        Quick Links
                        <div
                            class="absolute bottom-0 left-0 w-12 h-0.5 bg-gradient-to-r from-brand-orange to-brand-gold">
                        </div>
                    </h3>
                    <ul class="space-y-4">
                        <li><a href="/about"
                                class="group flex items-center text-gray-400 hover:text-brand-orange transition-all duration-300">
                                <div
                                    class="w-2 h-2 bg-brand-orange rounded-full mr-4 group-hover:scale-150 transition-transform duration-300">
                                </div>
                                <span class="group-hover:translate-x-2 transition-transform duration-300">About</span>
                            </a></li>
                        <li><a href="/speaking"
                                class="group flex items-center text-gray-400 hover:text-brand-orange transition-all duration-300">
                                <div
                                    class="w-2 h-2 bg-brand-orange rounded-full mr-4 group-hover:scale-150 transition-transform duration-300">
                                </div>
                                <span class="group-hover:translate-x-2 transition-transform duration-300">Speaking
                                    Topics</span>
                            </a></li>
                        <li><a href="/media"
                                class="group flex items-center text-gray-400 hover:text-brand-orange transition-all duration-300">
                                <div
                                    class="w-2 h-2 bg-brand-orange rounded-full mr-4 group-hover:scale-150 transition-transform duration-300">
                                </div>
                                <span
                                    class="group-hover:translate-x-2 transition-transform duration-300">Podcast</span>
                            </a></li>
                        <li><a href="/blog"
                                class="group flex items-center text-gray-400 hover:text-brand-orange transition-all duration-300">
                                <div
                                    class="w-2 h-2 bg-brand-orange rounded-full mr-4 group-hover:scale-150 transition-transform duration-300">
                                </div>
                                <span class="group-hover:translate-x-2 transition-transform duration-300">Blog</span>
                            </a></li>
                        <li><a href="/contact"
                                class="group flex items-center text-gray-400 hover:text-brand-orange transition-all duration-300">
                                <div
                                    class="w-2 h-2 bg-brand-orange rounded-full mr-4 group-hover:scale-150 transition-transform duration-300">
                                </div>
                                <span
                                    class="group-hover:translate-x-2 transition-transform duration-300">Contact</span>
                            </a></li>
                    </ul>
                </div>

                <!-- Enhanced Newsletter -->
                <div class="animate-on-scroll">
                    <h3 class="font-display font-semibold text-xl mb-6 text-white relative">
                        Stay Connected
                        <div
                            class="absolute bottom-0 left-0 w-12 h-0.5 bg-gradient-to-r from-brand-orange to-brand-gold">
                        </div>
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">Get exclusive insights on fintech and
                        leadership delivered to your inbox.</p>
                    <form class="space-y-4" id="newsletter-form">
                        <div class="relative group">
                            <input type="email" placeholder="Your email address"
                                class="w-full px-6 py-4 bg-gray-800/50 border border-gray-700 rounded-2xl text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent transition-all duration-300 group-hover:bg-gray-800/70"
                                required>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                <svg class="h-5 w-5 text-gray-400 group-hover:text-brand-orange transition-colors duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full btn-primary text-white px-8 py-4 rounded-2xl font-semibold shadow-xl relative overflow-hidden group">
                            <span class="relative z-10 flex items-center justify-center space-x-2">
                                <span>Subscribe Now</span>
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </span>
                        </button>
                    </form>
                    <p class="text-gray-500 text-xs mt-4 flex items-center space-x-2">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>No spam, ever. Unsubscribe anytime.</span>
                    </p>
                </div>
            </div>

            <!-- Enhanced Copyright Section -->
            <div class="border-t border-gray-700/50 mt-16 pt-8 animate-on-scroll">
                <div class="flex flex-col lg:flex-row justify-between items-center space-y-4 lg:space-y-0">
                    <p class="text-gray-400 text-sm flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>&copy; {{ date('Y') }} Violet Nswana Kaponda. All rights reserved.</span>
                    </p>
                    <div class="flex space-x-8 text-sm text-gray-400">
                        <a href="/privacy"
                            class="hover:text-brand-orange transition-colors duration-300 relative group">
                            Privacy Policy
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange group-hover:w-full transition-all duration-300"></span>
                        </a>
                        <a href="/terms"
                            class="hover:text-brand-orange transition-colors duration-300 relative group">
                            Terms of Service
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange group-hover:w-full transition-all duration-300"></span>
                        </a>
                        <a href="/sitemap"
                            class="hover:text-brand-orange transition-colors duration-300 relative group">
                            Sitemap
                            <span
                                class="absolute bottom-0 left-0 w-0 h-0.5 bg-brand-orange group-hover:w-full transition-all duration-300"></span>
                        </a>
                    </div>
                </div>

                <!-- Made with love indicator -->
                <div class="text-center mt-8 pt-4 border-t border-gray-800/50">
                    <p class="text-gray-500 text-xs flex items-center justify-center space-x-2">
                        <span>Made with</span>
                        <svg class="w-4 h-4 text-red-500 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>for African fintech innovation</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Enhanced JavaScript -->
    <script>
        // Enhanced Mobile Menu with animations
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            // Add animation class
            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('mobile-menu-enter');
            }
        });

        // Enhanced Newsletter Form with feedback
        document.getElementById('newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const button = this.querySelector('button');
            const originalHTML = button.innerHTML;

            // Loading state
            button.innerHTML =
                '<span class="flex items-center justify-center space-x-2"><svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25"></circle><path fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" class="opacity-75"></path></svg><span>Subscribing...</span></span>';
            button.disabled = true;

            // Simulate API call
            setTimeout(() => {
                button.innerHTML =
                    '<span class="flex items-center justify-center space-x-2"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg><span>Subscribed!</span></span>';
                button.classList.add('bg-green-600');

                setTimeout(() => {
                    button.innerHTML = originalHTML;
                    button.disabled = false;
                    button.classList.remove('bg-green-600');
                    this.reset();
                }, 2000);
            }, 1500);
        });

        // Scroll Progress Indicator
        window.addEventListener('scroll', function() {
            const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
            document.getElementById('scrollIndicator').style.width = scrolled + '%';
        });

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Enhanced navbar scroll effect
        let lastScrollTop = 0;
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 100) {
                navbar.classList.add('shadow-2xl');
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                navbar.classList.remove('shadow-2xl');
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            }

            // Hide/show navbar on scroll
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                navbar.style.transform = 'translateY(-100%)';
            } else {
                navbar.style.transform = 'translateY(0)';
            }

            lastScrollTop = scrollTop;
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add loading animation to page
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });

        // Enhanced CTA button effects
        document.querySelectorAll('.btn-primary').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.05)';
            });

            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>

</html>
