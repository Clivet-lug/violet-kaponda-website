@extends('layouts.app')

@section('title', 'Violet Nswana Kaponda - Fintech Thought Leader & Speaker')
@section('description',
    'Violet Nswana Kaponda is a leading voice in African fintech, digital transformation, and women
    in technology. Book her for speaking engagements and strategic consulting.')

@section('content')
    <!-- Enhanced Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-orange-900 to-red-900"></div>
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Animated Particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute w-96 h-96 bg-orange-500 rounded-full opacity-10 animate-float" style="top: 10%; left: 80%;">
            </div>
            <div class="absolute w-64 h-64 bg-red-500 rounded-full opacity-15 animate-float"
                style="top: 70%; left: 10%; animation-delay: 2s;"></div>
            <div class="absolute w-32 h-32 bg-yellow-500 rounded-full opacity-20 animate-float"
                style="top: 40%; left: 70%; animation-delay: 4s;"></div>
        </div>

        <!-- Hero Image with Modern Overlay -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero/violet-hero-main.jpg') }}" alt="Violet Nswana Kaponda - Fintech Thought Leader"
                class="w-full h-full object-cover object-center opacity-70">
            <!-- Modern gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-70"></div>
        </div>

        <!-- Enhanced Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <div class="max-w-5xl mx-auto animate-on-scroll">
                <!-- Modern Badge -->
                <div
                    class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-md rounded-full border border-white/20 mb-8 animate-fade-in">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-3 animate-pulse"></span>
                    <span class="text-sm font-medium">Available for Speaking Engagements</span>
                </div>

                <!-- Enhanced Main Headline -->
                <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-bold leading-tight mb-8 text-shadow-xl">
                    Empowering Africa's
                    <span
                        class="gradient-text bg-gradient-to-r from-orange-400 via-red-400 to-yellow-400 bg-clip-text text-transparent animate-gradient">
                        Fintech Future
                    </span>
                </h1>

                <!-- Enhanced Subheadline -->
                <p
                    class="text-xl md:text-2xl lg:text-3xl mb-12 text-gray-200 max-w-4xl mx-auto leading-relaxed text-shadow">
                    I'm <span class="font-semibold text-white">Violet Nswana Kaponda</span>, a thought leader driving
                    digital transformation
                    across Africa through strategic consulting, inspiring speaking, and empowering women in technology.
                </p>

                <!-- Enhanced CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="#speaking"
                        class="group btn-primary text-lg px-10 py-5 shadow-2xl hover:shadow-orange-500/25 transform hover:-translate-y-2 hover:scale-105 transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10 flex items-center space-x-2">
                            <span>Book Me to Speak</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#podcast"
                        class="group text-lg px-10 py-5 bg-white/10 backdrop-blur-md border-2 border-white/30 text-white rounded-xl hover:bg-white hover:text-gray-900 transition-all duration-300 font-semibold shadow-xl">
                        <span class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                            <span>Listen to My Podcast</span>
                        </span>
                    </a>
                </div>

                <!-- Enhanced Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                    <div class="animate-on-scroll group">
                        <div
                            class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 card-hover">
                            <div class="text-4xl lg:text-5xl font-bold gradient-text mb-3">11+</div>
                            <div class="text-gray-300 text-lg">Podcast Episodes</div>
                        </div>
                    </div>
                    <div class="animate-on-scroll group">
                        <div
                            class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 card-hover">
                            <div class="text-4xl lg:text-5xl font-bold gradient-text mb-3">5</div>
                            <div class="text-gray-300 text-lg">Speaking Topics</div>
                        </div>
                    </div>
                    <div class="animate-on-scroll group">
                        <div
                            class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 card-hover">
                            <div class="text-4xl lg:text-5xl font-bold gradient-text mb-3">100%</div>
                            <div class="text-gray-300 text-lg">Passion for Impact</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce cursor-pointer"
            onclick="document.getElementById('about-preview').scrollIntoView({behavior: 'smooth'})">
            <div class="flex flex-col items-center space-y-2">
                <span class="text-sm font-medium">Scroll to explore</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </div>
        </div>
    </section>

    <!-- Enhanced About Preview Section -->
    <section id="about-preview" class="py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Enhanced Content -->
                <div class="animate-on-scroll">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-orange-100 text-orange-800 rounded-full text-sm font-medium mb-6">
                        <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>
                        About Violet
                    </div>
                    <h2 class="font-display text-4xl lg:text-5xl font-bold mb-8 text-gray-900">
                        Leading Africa's
                        <span class="gradient-text">Digital Revolution</span>
                    </h2>
                    <div class="prose prose-lg prose-gray max-w-none">
                        <p class="text-xl text-gray-700 mb-6 leading-relaxed">
                            As a fintech thought leader and strategic consultant, I'm passionate about
                            driving digital transformation across Africa. Through my work, speaking engagements,
                            and the <strong>"Elevate & Dominate"</strong> podcast, I empower organizations and individuals
                            to harness the power of technology for sustainable growth.
                        </p>
                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            My mission is to amplify African voices in technology, create pathways for
                            women in fintech, and build bridges between innovation and practical implementation.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/about" class="btn-primary text-lg px-8 py-4">
                            Learn More About My Journey
                        </a>
                        <a href="/contact"
                            class="text-lg px-8 py-4 border-2 border-gray-300 text-gray-700 rounded-xl hover:border-orange-500 hover:text-orange-600 transition-all duration-300 font-semibold text-center">
                            Get In Touch
                        </a>
                    </div>
                </div>

                <!-- Enhanced Image -->
                <div class="animate-on-scroll lg:order-first">
                    <div class="relative">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl card-hover">
                            <img src="{{ asset('images/gallery/violet-professional-1.jpg') }}"
                                alt="Violet Nswana Kaponda - Professional Portrait" class="w-full h-auto object-cover">
                            <!-- Modern overlay gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent">
                            </div>
                        </div>
                        <!-- Floating decorative elements -->
                        <div
                            class="absolute -top-6 -left-6 w-24 h-24 bg-gradient-to-br from-orange-400 to-red-500 rounded-full opacity-20 animate-float">
                        </div>
                        <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full opacity-15 animate-float"
                            style="animation-delay: 2s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Speaking Topics Section -->
    <section id="speaking" class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Enhanced Section Header -->
            <div class="text-center mb-20 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-red-100 text-red-800 rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                    Speaking Topics
                </div>
                <h2 class="font-display text-4xl lg:text-5xl font-bold mb-6 text-gray-900">Speaking Topics That <span
                        class="gradient-text">Transform</span></h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From fintech innovation to women's leadership, I deliver powerful insights
                    that inspire action and drive meaningful change.
                </p>
            </div>

            <!-- Enhanced Topics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Topic 1: Fintech & AI -->
                <div class="animate-on-scroll group">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3
                            class="font-display text-2xl font-semibold mb-4 text-gray-900 group-hover:text-orange-600 transition-colors duration-300">
                            Fintech & AI in Africa
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Exploring how artificial intelligence and fintech innovations are
                            reshaping Africa's financial landscape and creating new opportunities.
                        </p>
                    </div>
                </div>

                <!-- Topic 2: Women in Technology -->
                <div class="animate-on-scroll group">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3
                            class="font-display text-2xl font-semibold mb-4 text-gray-900 group-hover:text-pink-600 transition-colors duration-300">
                            Women in Technology & Leadership
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Empowering women to break barriers, claim their space in tech,
                            and become leaders who drive organizational transformation.
                        </p>
                    </div>
                </div>

                <!-- Topic 3: Digital Transformation -->
                <div class="animate-on-scroll group">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3
                            class="font-display text-2xl font-semibold mb-4 text-gray-900 group-hover:text-blue-600 transition-colors duration-300">
                            Digital Inclusion & Transformation
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Strategic approaches to digital transformation that ensure
                            inclusive growth and sustainable technology adoption across Africa.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Enhanced CTA -->
            <div class="text-center mt-16 animate-on-scroll">
                <a href="/speaking" class="btn-primary text-lg px-10 py-5 shadow-xl hover:shadow-orange-500/25">
                    View All Speaking Topics
                </a>
            </div>
        </div>
    </section>

    <!-- Enhanced Newsletter Section -->
    <section id="newsletter"
        class="py-20 lg:py-32 bg-gradient-to-br from-red-600 via-red-700 to-orange-600 text-white relative overflow-hidden">
        <!-- Animated background -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute w-96 h-96 bg-white rounded-full opacity-20 animate-float"
                style="top: -10%; right: -10%;"></div>
            <div class="absolute w-64 h-64 bg-yellow-300 rounded-full opacity-15 animate-float"
                style="bottom: -10%; left: -10%; animation-delay: 2s;"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
            <div
                class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                Newsletter
            </div>
            <h2 class="font-display text-4xl lg:text-5xl font-bold text-white mb-6">
                Stay Ahead of the <span class="text-yellow-300">Curve</span>
            </h2>
            <p class="text-xl text-red-100 mb-12 leading-relaxed max-w-3xl mx-auto">
                Get exclusive insights on fintech trends, leadership strategies, and opportunities
                shaping Africa's digital future. Join thousands of forward-thinking professionals.
            </p>

            <!-- Enhanced Newsletter Form -->
            <div class="max-w-md mx-auto">
                <form class="flex flex-col sm:flex-row gap-4 mb-6" id="newsletter-form-home">
                    <div class="flex-1 relative">
                        <input type="email" placeholder="Enter your email address"
                            class="w-full px-6 py-4 rounded-xl text-gray-900 bg-white/95 backdrop-blur-md focus:outline-none focus:ring-4 focus:ring-white/50 transition-all duration-300 text-lg"
                            required>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <button type="submit"
                        class="bg-white text-red-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105 text-lg whitespace-nowrap">
                        Subscribe Now
                    </button>
                </form>

                <p class="text-red-200 text-sm flex items-center justify-center space-x-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>No spam, ever. Unsubscribe anytime with just one click.</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Additional Custom Styles and JavaScript for this page -->
    <style>
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

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }

        /* Custom hover effects for cards */
        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
        }

        /* Enhanced scroll animations */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <script>
        // Enhanced newsletter form functionality
        document.getElementById('newsletter-form-home').addEventListener('submit', function(e) {
            e.preventDefault();
            const button = this.querySelector('button');
            const input = this.querySelector('input');
            const originalText = button.textContent;

            // Loading state
            button.textContent = 'Subscribing...';
            button.disabled = true;
            button.classList.add('opacity-50');

            // Simulate API call
            setTimeout(() => {
                button.textContent = 'Subscribed! ✓';
                button.classList.remove('opacity-50');
                button.classList.add('bg-green-500', 'text-white');

                setTimeout(() => {
                    button.textContent = originalText;
                    button.disabled = false;
                    button.classList.remove('bg-green-500', 'text-white');
                    input.value = '';
                }, 2000);
            }, 1500);
        });

        // Smooth scroll for hero CTA
        document.querySelector('a[href="#speaking"]').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('speaking').scrollIntoView({
                behavior: 'smooth'
            });
        });

        document.querySelector('a[href="#podcast"]').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('podcast').scrollIntoView({
                behavior: 'smooth'
            });
        });

        // Intersection Observer for animations (if not already defined in layout)
        if (typeof observer === 'undefined') {
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
        }
    </script>
@endsection
