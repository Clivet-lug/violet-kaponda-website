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

    {{-- Favicon Links - Multiple formats for browser compatibility --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}?v=2">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-chrome-192x192.png') }}?v=2">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicon/android-chrome-512x512.png') }}?v=2">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}?v=2">
    <meta name="theme-color" content="#991b1b">

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
        /* Enhanced Glass Navigation */
        .glass-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(25px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .glass-nav.scrolled {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(30px);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            /* padding-top: 0.75rem;
            padding-bottom: 0.75rem; */
        }

        /* Enhanced Logo */
        .logo-container:hover .logo-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 15px 35px rgba(234, 88, 12, 0.4);
        }

        .logo-icon {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Enhanced Nav Links */
        .nav-link {
            padding: 0.75rem 1.25rem;
            border-radius: 0.75rem;
            color: #374151;
            font-weight: 500;
            position: relative;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(234, 88, 12, 0.1), transparent);
            transition: left 0.6s ease;
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link:hover {
            color: #ea580c;
            background-color: rgba(254, 215, 170, 0.5);
            transform: translateY(-2px);
        }

        /* Active Nav Link Styles */
        .nav-link.active {
            color: #ea580c;
            background: linear-gradient(135deg, rgba(234, 88, 12, 0.15), rgba(220, 38, 38, 0.1));
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(234, 88, 12, 0.2);
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 60%;
            height: 3px;
            background: linear-gradient(to right, #ea580c, #dc2626);
            border-radius: 2px;
            transform: translateX(-50%);
            box-shadow: 0 2px 8px rgba(234, 88, 12, 0.4);
        }

        /* Mobile Navigation */
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

        .mobile-nav-link {
            display: block;
            padding: 0.875rem 1rem;
            color: #374151;
            font-weight: 500;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .mobile-nav-link:hover {
            color: #ea580c;
            background-color: rgba(254, 215, 170, 0.7);
            transform: translateX(8px);
        }

        /* Active Mobile Nav Link */
        .mobile-nav-link.active {
            color: #ea580c;
            background: linear-gradient(135deg, rgba(234, 88, 12, 0.2), rgba(220, 38, 38, 0.1));
            font-weight: 600;
            transform: translateX(8px);
            border-left: 4px solid #ea580c;
            box-shadow: 0 4px 12px rgba(234, 88, 12, 0.2);
        }

        /* Scroll Progress */
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: linear-gradient(to right, #ea580c, #dc2626, #f59e0b);
            z-index: 9999;
            transition: width 0.1s ease;
            box-shadow: 0 2px 10px rgba(234, 88, 12, 0.3);
        }

        /* Enhanced Button */
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
            transition: left 0.6s ease;
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

        /* Animations */
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

        /* Responsive */
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

    <!-- Enhanced Glass Navigation -->
    <nav class="glass-nav sticky top-0 z-50" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">

                <!-- Enhanced Logo with Full Name -->
                <div class="flex items-center min-w-0 flex-1 lg:flex-none">
                    <a href="/" class="logo-container flex items-center space-x-3 group min-w-0">
                        <div
                            class="logo-icon w-12 h-12 bg-gradient-to-br from-brand-orange to-brand-red rounded-xl flex items-center justify-center animate-float shadow-lg flex-shrink-0">
                            <span class="text-white font-bold text-xl font-display">V</span>
                        </div>
                        <!-- Desktop: Full Name -->
                        <div class="min-w-0 hidden sm:block">
                            <div
                                class="font-display font-bold text-xl text-gray-900 group-hover:text-brand-orange transition-colors duration-300 whitespace-nowrap">
                                Violet Nswana Kaponda
                            </div>
                            <div class="text-xs text-gray-600">African Fintech Queen</div>
                        </div>
                        <!-- Mobile: Shorter Version -->
                        <div class="min-w-0 sm:hidden">
                            <div
                                class="font-display font-bold text-lg text-gray-900 group-hover:text-brand-orange transition-colors duration-300">
                                Violet Nswana Kaponda
                            </div>
                            <div class="text-xs text-gray-600">African Fintech Queen</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    <a href="/speaking" class="nav-link {{ request()->is('speaking') ? 'active' : '' }}">Speaking</a>
                    <a href="/media" class="nav-link {{ request()->is('media') ? 'active' : '' }}">Media</a>
                    <a href="/blog" class="nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
                    <a href="/contact"
                        class="btn-primary text-white px-6 py-3 rounded-xl font-semibold shadow-lg ml-4 flex-shrink-0">
                        Work With Me ->
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex-shrink-0">
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
            <div id="mobile-menu" class="lg:hidden mobile-menu">
                <div class="px-4 pt-4 pb-6 space-y-3 glass-nav border-t border-gray-100 shadow-xl rounded-b-2xl">
                    <a href="/contact"
                        class="block mx-2 mb-4 btn-primary text-white px-6 py-4 rounded-xl text-center font-semibold shadow-lg">
                        Work With Me ->
                    </a>
                    <a href="/" class="mobile-nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="/about" class="mobile-nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                    <a href="/speaking"
                        class="mobile-nav-link {{ request()->is('speaking') ? 'active' : '' }}">Speaking</a>
                    <a href="/media" class="mobile-nav-link {{ request()->is('media') ? 'active' : '' }}">Media</a>
                    <a href="/blog" class="mobile-nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a>
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
                            <div class="font-display font-bold text-2xl gradient-text">Violet Nswana Kaponda</div>
                            <div class="text-gray-400 text-sm">African Fintech Queen</div>
                        </div>
                    </div>
                    <p class="text-gray-300 text-base leading-relaxed mb-8">
                        Driving Africa’s fintech revolution through bold leadership, digital inclusion,
                        and transformation.
                    </p>

                    <!-- Social Links -->
                    <div class="flex space-x-4">
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153"
                            class="p-3 bg-blue-600 hover:bg-blue-700 rounded-lg transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20.451 20.451H16.9v-5.569c0-1.327-.027-3.037-1.85-3.037-1.85 0-2.134 1.445-2.134 2.939v5.667H9.365V9h3.414v1.561h.046c.476-.9 1.636-1.85 3.368-1.85 3.6 0 4.258 2.37 4.258 5.455v6.285zM5.337 7.433a2.06 2.06 0 110-4.119 2.06 2.06 0 010 4.119zM6.952 20.451H3.723V9h3.229v11.451z" />
                            </svg>
                        </a>

                        <!-- YouTube -->
                        <a href="https://youtu.be/xtmlZ5w70uE"
                            class="p-3 bg-red-600 hover:bg-red-700 rounded-lg transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.498 6.186a2.99 2.99 0 00-2.122-2.121C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.376.52A2.99 2.99 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a2.99 2.99 0 002.122 2.121c1.871.52 9.376.52 9.376.52s7.505 0 9.376-.52a2.99 2.99 0 002.122-2.121C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.75 15.568V8.432L15.818 12 9.75 15.568z" />
                            </svg>
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/thee_goddess_nswanah"
                            class="p-3 bg-pink-600 hover:bg-pink-700 rounded-lg transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5zm4.25 4a5.25 5.25 0 110 10.5 5.25 5.25 0 010-10.5zm0 1.5a3.75 3.75 0 100 7.5 3.75 3.75 0 000-7.5zm5.5-.75a1 1 0 110 2 1 1 0 010-2z" />
                            </svg>
                        </a>

                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@theegoddessnwanah"
                            class="p-3 bg-black hover:bg-gray-800 rounded-lg transition-all duration-300 hover:scale-110 shadow-lg">
                            <svg class="h-5 w-5" viewBox="0 0 48 48" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M41,15.5c-3.4,0-6.4-1.1-8.9-3.1V30c0,8.3-6.7,15-15,15S2,38.3,2,30s6.7-15,15-15c1.1,0,2.1,0.1,3.1,0.4v7.8
            C19.1,23,18.6,23,18,23c-3.9,0-7,3.1-7,7s3.1,7,7,7s7-3.1,7-7V0h7c0,0.5,0,1,0.1,1.5C34.5,9,37.5,12,41,12V15.5z" />
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

                    <form id="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST"
                        class="flex flex-col sm:flex-row gap-3">
                        @csrf
                        <input type="email" name="email" placeholder="Your email address" required
                            class="flex-1 px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-brand-orange transition-all duration-300">
                        <button type="submit" id="newsletter-btn"
                            class="btn-primary px-6 py-3 rounded-lg font-semibold whitespace-nowrap">
                            Subscribe
                        </button>
                    </form>
                </div>

                <script>
                    // Newsletter form submission handling
                    document.addEventListener('DOMContentLoaded', function() {
                        const newsletterForm = document.getElementById('newsletter-form');

                        if (newsletterForm) {
                            newsletterForm.addEventListener('submit', function(e) {
                                e.preventDefault();

                                const submitBtn = document.getElementById('newsletter-btn');
                                const originalText = submitBtn.textContent;
                                const formData = new FormData(this);

                                // Show loading state
                                submitBtn.innerHTML = `
                <div class="flex items-center justify-center">
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Joining...
                </div>
            `;
                                submitBtn.disabled = true;

                                // Send form data
                                fetch(this.action, {
                                        method: 'POST',
                                        body: formData,
                                        headers: {
                                            'X-Requested-With': 'XMLHttpRequest',
                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                                .getAttribute('content')
                                        }
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.success) {
                                            // Show success state
                                            submitBtn.innerHTML = '✓ Subscribed!';
                                            submitBtn.style.background =
                                                'linear-gradient(to right, #10b981, #059669)';

                                            // Show success notification
                                            showNewsletterNotification('success',
                                                'Welcome! You\'ve successfully subscribed to our newsletter.');

                                            // Reset form after delay
                                            setTimeout(() => {
                                                newsletterForm.reset();
                                                submitBtn.innerHTML = originalText;
                                                submitBtn.disabled = false;
                                                submitBtn.style.background = '';
                                            }, 3000);
                                        } else {
                                            // Show error state
                                            submitBtn.innerHTML = 'Error';
                                            submitBtn.style.background = '#dc2626';

                                            showNewsletterNotification('error', data.message ||
                                                'Subscription failed. Please try again.');

                                            // Reset button after delay
                                            setTimeout(() => {
                                                submitBtn.innerHTML = originalText;
                                                submitBtn.disabled = false;
                                                submitBtn.style.background = '';
                                            }, 3000);
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);

                                        submitBtn.innerHTML = 'Error';
                                        submitBtn.style.background = '#dc2626';

                                        showNewsletterNotification('error', 'Network error. Please try again.');

                                        setTimeout(() => {
                                            submitBtn.innerHTML = originalText;
                                            submitBtn.disabled = false;
                                            submitBtn.style.background = '';
                                        }, 3000);
                                    });
                            });
                        }
                    });

                    // Notification function for newsletter
                    function showNewsletterNotification(type, message) {
                        // Remove existing notifications
                        const existingNotification = document.querySelector('.newsletter-notification');
                        if (existingNotification) {
                            existingNotification.remove();
                        }

                        const notification = document.createElement('div');
                        notification.className =
                            `newsletter-notification fixed bottom-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 max-w-md`;

                        if (type === 'success') {
                            notification.classList.add('bg-green-600', 'text-white');
                            notification.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <div>
                    <div class="font-semibold">Subscribed!</div>
                    <div class="text-sm opacity-90">${message}</div>
                </div>
            </div>
        `;
                        } else {
                            notification.classList.add('bg-red-600', 'text-white');
                            notification.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <div>
                    <div class="font-semibold">Error</div>
                    <div class="text-sm opacity-90">${message}</div>
                </div>
            </div>
        `;
                        }

                        document.body.appendChild(notification);

                        // Auto-remove after 5 seconds
                        setTimeout(() => {
                            if (notification.parentNode) {
                                notification.style.opacity = '0';
                                notification.style.transform = 'translateY(100%)';
                                setTimeout(() => notification.remove(), 300);
                            }
                        }, 5000);
                    }
                </script>
            </div>

            <!-- Copyright Section -->
            <div class="border-t border-gray-700 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <div class="text-gray-400 text-sm text-center md:text-left">
                        <p>&copy; {{ date('Y') }} Violet Nswana Kaponda. All rights reserved.</p>
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
            // Mobile Menu Toggle
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
