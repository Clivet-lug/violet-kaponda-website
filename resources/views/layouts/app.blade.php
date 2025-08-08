<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
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
    <meta property="og:site_name" content="Violet Kaponda">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('twitter_title', 'Violet Nswana Kaponda - Fintech Thought Leader')">
    <meta property="twitter:description" content="@yield('twitter_description', 'Leading voice in African fintech and digital transformation')">
    <meta property="twitter:image" content="@yield('twitter_image', asset('images/violet-twitter-image.jpg'))">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    
    <!-- Preload Critical Resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800&display=swap" as="style">
    <link rel="preload" href="{{ mix('css/app.css') }}" as="style">
    <link rel="preload" href="{{ mix('js/app.js') }}" as="script">
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> -->
    
    <!-- Additional Head Content -->
    @stack('head')
    
    <!-- JSON-LD Structured Data -->
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
            "https://instagram.com/violetkaponda"
        ],
        "knowsAbout": [
            "Fintech",
            "Digital Transformation", 
            "Women in Technology",
            "African Innovation",
            "Strategic Consulting"
        ],
        "alumniOf": {
            "@type": "Organization",
            "name": "Various Leading Institutions"
        }
    }
    </script>
</head>

<body class="antialiased" x-data="scrollAnimations">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50 transition-all duration-300" x-data="navigation">
        <div class="container-brand">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-brand-gradient rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-xl">V</span>
                        </div>
                        <div class="hidden sm:block">
                            <div class="font-display font-bold text-xl text-brand-black">Violet Kaponda</div>
                            <div class="text-xs text-gray-600 -mt-1">Fintech Thought Leader</div>
                        </div>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                    <a href="{{ route('about') }}" class="nav-link">About</a>
                    <a href="{{ route('speaking') }}" class="nav-link">Speaking</a>
                    <a href="{{ route('media') }}" class="nav-link">Media</a>
                    <a href="{{ route('blog.index') }}" class="nav-link">Blog</a>
                    <a href="{{ route('contact') }}" class="btn-primary text-sm">Work With Me</a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="toggle()" class="text-gray-700 hover:text-brand-red-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Navigation -->
            <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t">
                    <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-brand-red-900">Home</a>
                    <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:text-brand-red-900">About</a>
                    <a href="{{ route('speaking') }}" class="block px-3 py-2 text-gray-700 hover:text-brand-red-900">Speaking</a>
                    <a href="{{ route('media') }}" class="block px-3 py-2 text-gray-700 hover:text-brand-red-900">Media</a>
                    <a href="{{ route('blog.index') }}" class="block px-3 py-2 text-gray-700 hover:text-brand-red-900">Blog</a>
                    <a href="{{ route('contact') }}" class="block mx-3 my-2 btn-primary text-center text-sm">Work With Me</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-brand-black text-white">
        <div class="container-brand section-padding">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-brand-gradient rounded-full flex items-center justify-center">
                            <span class="text-white font-bold text-xl">V</span>
                        </div>
                        <div>
                            <div class="font-display font-bold text-xl">Violet Kaponda</div>
                            <div class="text-gray-400 text-sm">Fintech Thought Leader</div>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 max-w-md">
                        Empowering the future of African fintech through thought leadership, 
                        strategic consulting, and inspiring speaking engagements.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://linkedin.com/in/violetkaponda" class="text-gray-400 hover:text-brand-amber-900 transition duration-200">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com/@elevateanddominate" class="text-gray-400 hover:text-brand-amber-900 transition duration-200">
                            <span class="sr-only">YouTube</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                        <a href="https://instagram.com/violetkaponda" class="text-gray-400 hover:text-brand-amber-900 transition duration-200">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C8.396 0 7.989.013 7.041.048 6.094.082 5.52.204 5.036.388a5.918 5.918 0 0 0-2.14 1.394A5.918 5.918 0 0 0 .48 4.126C.294 4.61.172 5.184.139 6.131.103 7.08.09 7.487.09 11.108c0 3.62.013 4.027.048 4.975.034.948.156 1.521.34 2.006a5.918 5.918 0 0 0 1.394 2.14 5.918 5.918 0 0 0 2.14 1.394c.485.184 1.058.306 2.006.34.948.035 1.355.048 4.976.048 3.62 0 4.027-.013 4.975-.048.948-.034 1.521-.156 2.006-.34a5.918 5.918 0 0 0 2.14-1.394 5.918 5.918 0 0 0 1.394-2.14c.184-.485.306-1.058.34-2.006.035-.948.048-1.355.048-4.976 0-3.62-.013-4.027-.048-4.975-.034-.948-.156-1.521-.34-2.006a5.918 5.918 0 0 0-1.394-2.14A5.918 5.918 0 0 0 16.986.388C16.501.204 15.928.082 14.98.048 14.031.013 13.624 0 10.003 0h2.014zm-.24 5.4a6.6 6.6 0 1 1 0 13.2 6.6 6.6 0 0 1 0-13.2zm0 2.16a4.44 4.44 0 1 0 0 8.88 4.44 4.44 0 0 0 0-8.88zm6.406-2.845a1.44 1.44 0 1 1 0 2.88 1.44 1.44 0 0 1 0-2.88z"/>
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@violetkaponda" class="text-gray-400 hover:text-brand-amber-900 transition duration-200">
                            <span class="sr-only">TikTok</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="font-display font-semibold text-lg mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('about') }}" class="hover:text-brand-amber-900 transition duration-200">About</a></li>
                        <li><a href="{{ route('speaking') }}" class="hover:text-brand-amber-900 transition duration-200">Speaking Topics</a></li>
                        <li><a href="{{ route('media') }}" class="hover:text-brand-amber-900 transition duration-200">Podcast</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-brand-amber-900 transition duration-200">Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-brand-amber-900 transition duration-200">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h3 class="font-display font-semibold text-lg mb-4">Stay Connected</h3>
                    <p class="text-gray-300 text-sm mb-4">Get insights on fintech and leadership delivered to your inbox.</p>
                    <div x-data="newsletter">
                        <form @submit.prevent="subscribe()" class="space-y-3">
                            <input 
                                type="email" 
                                x-model="email"
                                placeholder="Your email address"
                                class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-brand-amber-900 focus:border-transparent"
                                required
                            >
                            <button 
                                type="submit" 
                                :disabled="loading"
                                class="w-full btn-accent text-sm"
                                :class="{ 'opacity-50 cursor-not-allowed': loading }"
                            >
                                <span x-show="!loading">Subscribe</span>
                                <span x-show="loading">Subscribing...</span>
                            </button>
                        </form>
                        <div x-show="success" class="mt-2 text-green-400 text-sm">Thank you for subscribing!</div>
                        <div x-show="error" class="mt-2 text-red-400 text-sm" x-text="error"></div>
                    </div>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Violet Nswana Kaponda. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Additional Scripts -->
    <!-- @stack('scripts') -->
    
    <!-- Google Analytics (Replace with actual tracking ID) -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_TRACKING_ID');
    </script> -->
</body>
</html>