@extends('layouts.app')

@section('title', 'Media & Press - Violet Nswana Kaponda | Fintech Queen & Digital Transformation Expert')
@section('description', 'Access Violet Nswana Kaponda\'s media kit, press coverage, podcast interviews, and speaking
    engagements. Available for interviews, panels, and thought leadership opportunities.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-brand-gradient text-white overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="container-brand relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="animate-on-scroll">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-white bg-opacity-20 backdrop-blur-sm text-white rounded-full text-sm font-medium mb-6">
                        🎙️ Media & Press Center
                    </div>

                    <h1 class="hero-text text-white mb-6">
                        Voice of Change in
                        <span class="text-yellow-400">African Fintech</span>
                    </h1>

                    <p class="text-xl text-gray-100 mb-8 leading-relaxed max-w-3xl mx-auto">
                        Available for interviews, panels, and thought leadership opportunities.
                        Bringing insights on fintech innovation, digital transformation, and
                        women's leadership across emerging markets.
                    </p>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8">
                        <div class="text-center p-4 bg-white bg-opacity-10 backdrop-blur-sm rounded-lg">
                            <div class="text-2xl font-bold text-yellow-400 mb-1">11+</div>
                            <div class="text-sm text-gray-200">Podcast Episodes</div>
                        </div>
                        <div class="text-center p-4 bg-white bg-opacity-10 backdrop-blur-sm rounded-lg">
                            <div class="text-2xl font-bold text-yellow-400 mb-1">1.4K+</div>
                            <div class="text-sm text-gray-200">LinkedIn Followers</div>
                        </div>
                        <div class="text-center p-4 bg-white bg-opacity-10 backdrop-blur-sm rounded-lg">
                            <div class="text-2xl font-bold text-yellow-400 mb-1">6+</div>
                            <div class="text-sm text-gray-200">Years Leadership</div>
                        </div>
                        <div class="text-center p-4 bg-white bg-opacity-10 backdrop-blur-sm rounded-lg">
                            <div class="text-2xl font-bold text-yellow-400 mb-1">Global</div>
                            <div class="text-sm text-gray-200">Speaking Reach</div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#media-kit" class="btn-primary-white">
                            Download Media Kit
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 10v6m0 0l-4-4m4 4l4-4m-6 4V4"></path>
                            </svg>
                        </a>
                        <a href="{{ route('contact') }}" class="btn-secondary-white">
                            Request Interview
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Podcast Section -->
    <section class="section-padding bg-white">
        <div class="container-brand">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">Elevate & Dominate Podcast</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Inspiring conversations on mindset, tech, and wellness where professionals
                        learn to step into their power and build limitless careers.
                    </p>
                </div>

                <!-- Featured Episode -->
                <div class="mb-16 animate-on-scroll">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                        <div>
                            <div
                                class="inline-flex items-center px-3 py-1 bg-brand-red-50 text-brand-red-700 rounded-full text-sm font-medium mb-4">
                                🎧 Featured Episode
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">
                                Building Limitless Careers in African Tech
                            </h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                In this powerful episode, I share insights on breaking through traditional
                                career limitations, leveraging technology for growth, and building a
                                personal brand that opens doors across the African tech ecosystem.
                            </p>

                            <!-- Episode Stats -->
                            <div class="flex space-x-6 mb-6">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-brand-red-900">45 min</div>
                                    <div class="text-sm text-gray-600">Duration</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-brand-red-900">Episode 1</div>
                                    <div class="text-sm text-gray-600">Latest</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-lg font-bold text-brand-red-900">2024</div>
                                    <div class="text-sm text-gray-600">Released</div>
                                </div>
                            </div>

                            <!-- Listen Buttons -->
                            <div class="flex flex-wrap gap-3">
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.42 1.56-.299.421-1.02.599-1.559.3z" />
                                    </svg>
                                    Spotify
                                </a>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg transition duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 4.54 3.2 8.79 7.52 10.13v-9.21c-.26-.81-1-1.39-1.85-1.39-.26 0-.53.04-.79.11L7.01 6C8.81 5.5 10.8 5.5 12.04 5.5s3.23 0 5.03.5l0 5.55c-.26-.07-.53-.11-.79-.11-.85 0-1.59.58-1.85 1.39v9.21c4.32-1.34 7.52-5.59 7.52-10.13C21.95 6.45 17.5 2 12.04 2z" />
                                    </svg>
                                    Apple Podcasts
                                </a>
                                <a href="#"
                                    class="inline-flex items-center px-4 py-2 bg-orange-600 hover:bg-orange-700 text-white rounded-lg transition duration-200">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.568 8.16c-.169-.3-.48-.5-.832-.5h-1.125v1.68h1.125c.351 0 .663.2.832.5.169.301.169.699 0 1l-1.714 2.967c-.169.3-.48.5-.832.5H12v1.68h3.022c.351 0 .663-.2.832-.5L17.57 12c.338-.585.338-1.415 0-2z" />
                                    </svg>
                                    Google Podcasts
                                </a>
                            </div>
                        </div>

                        <!-- Podcast Cover Art -->
                        <div class="lg:order-first">
                            <div class="relative">
                                <img src="{{ asset('images/podcast/elevate-dominate-cover.jpg') }}"
                                    alt="Elevate & Dominate Podcast Cover"
                                    class="rounded-xl shadow-brand-lg w-full max-w-md mx-auto">

                                <!-- Play Button Overlay -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <button
                                        class="w-20 h-20 bg-white bg-opacity-90 hover:bg-opacity-100 rounded-full flex items-center justify-center shadow-lg transition duration-200 group">
                                        <svg class="w-8 h-8 text-brand-red-600 ml-1 group-hover:scale-110 transition transform"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Episodes -->
                <div class="animate-on-scroll">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Recent Episodes</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Episode 1 -->
                        <div class="card hover:shadow-lg transition duration-200">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm font-medium text-brand-red-600">Episode 11</span>
                                    <span class="text-sm text-gray-500">Dec 2024</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2 line-clamp-2">
                                    The Future of Fintech in Emerging Markets
                                </h4>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    Exploring how financial technology is revolutionizing access to
                                    financial services across Africa and beyond.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">42 min</span>
                                    <button class="text-brand-red-600 hover:text-brand-red-700 transition duration-200">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Episode 2 -->
                        <div class="card hover:shadow-lg transition duration-200">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm font-medium text-brand-red-600">Episode 10</span>
                                    <span class="text-sm text-gray-500">Nov 2024</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2 line-clamp-2">
                                    Women Breaking Barriers in Tech Leadership
                                </h4>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    Strategies for women to overcome challenges and thrive in
                                    technology leadership roles across the continent.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">38 min</span>
                                    <button class="text-brand-red-600 hover:text-brand-red-700 transition duration-200">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Episode 3 -->
                        <div class="card hover:shadow-lg transition duration-200">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="text-sm font-medium text-brand-red-600">Episode 9</span>
                                    <span class="text-sm text-gray-500">Oct 2024</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2 line-clamp-2">
                                    Digital Transformation: From Strategy to Execution
                                </h4>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                    A deep dive into successful digital transformation
                                    methodologies and real-world implementation strategies.
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-500">45 min</span>
                                    <button class="text-brand-red-600 hover:text-brand-red-700 transition duration-200">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- View All Episodes -->
                    <div class="text-center mt-8">
                        <a href="#" class="btn-primary">
                            View All Episodes
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Speaking Engagements -->
    <section class="section-padding bg-gray-50">
        <div class="container-brand">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">Speaking Engagements</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Available for conferences, panels, workshops, and corporate events.
                        Bringing insights on fintech, digital transformation, and women's leadership.
                    </p>
                </div>

                <!-- Speaking Topics -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                    <!-- Topic 1 -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Fintech Innovation</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                The future of financial services in emerging markets, digital payment
                                solutions, and bridging the financial inclusion gap.
                            </p>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li>• Mobile money ecosystem development</li>
                                <li>• Digital lending and credit scoring</li>
                                <li>• Regulatory frameworks for fintech</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Topic 2 -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Digital Transformation</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Strategic approaches to digital evolution, change management,
                                and building technology-driven competitive advantages.
                            </p>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li>• Enterprise digital strategy</li>
                                <li>• Technology adoption frameworks</li>
                                <li>• Cultural change management</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Topic 3 -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Women's Leadership</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Empowering women in technology, breaking through barriers,
                                and building inclusive tech ecosystems across Africa.
                            </p>
                            <ul class="text-sm text-gray-600 space-y-2">
                                <li>• Career advancement strategies</li>
                                <li>• Building confidence and presence</li>
                                <li>• Mentorship and sponsorship</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaking Format Options -->
                <div class="animate-on-scroll">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Available Formats</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Keynote -->
                        <div class="text-center p-6 bg-white rounded-lg shadow-sm">
                            <div
                                class="w-12 h-12 bg-brand-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-brand-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Keynote Speeches</h4>
                            <p class="text-sm text-gray-600">45-60 minute inspiring presentations</p>
                        </div>

                        <!-- Panel -->
                        <div class="text-center p-6 bg-white rounded-lg shadow-sm">
                            <div
                                class="w-12 h-12 bg-brand-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-brand-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Panel Discussions</h4>
                            <p class="text-sm text-gray-600">Expert insights in group settings</p>
                        </div>

                        <!-- Workshop -->
                        <div class="text-center p-6 bg-white rounded-lg shadow-sm">
                            <div
                                class="w-12 h-12 bg-brand-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-brand-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Workshops</h4>
                            <p class="text-sm text-gray-600">Interactive learning experiences</p>
                        </div>

                        <!-- Fireside Chat -->
                        <div class="text-center p-6 bg-white rounded-lg shadow-sm">
                            <div
                                class="w-12 h-12 bg-brand-red-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-brand-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-2">Fireside Chats</h4>
                            <p class="text-sm text-gray-600">Intimate conversation formats</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Press Coverage & Features -->
    <section class="section-padding bg-white">
        <div class="container-brand">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">Press Coverage</h2>
                    <p class="text-xl text-gray-600">
                        Recent features, interviews, and mentions across leading publications and platforms.
                    </p>
                </div>

                <!-- Featured Coverage -->
                <div class="mb-16 animate-on-scroll">
                    <div class="card-elevated">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 p-8">
                            <div>
                                <div
                                    class="inline-flex items-center px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium mb-4">
                                    📰 Featured Article
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                                    "The Rise of African Fintech Queens"
                                </h3>
                                <p class="text-gray-600 mb-4 leading-relaxed">
                                    Tech Africa Today explores how women leaders like Violet Nswana Kaponda
                                    are reshaping the financial technology landscape across the continent,
                                    driving innovation and creating inclusive solutions for emerging markets.
                                </p>
                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex items-center space-x-4">
                                        <span class="text-sm font-medium text-gray-700">Tech Africa Today</span>
                                        <span class="text-sm text-gray-500">•</span>
                                        <span class="text-sm text-gray-500">December 2024</span>
                                    </div>
                                    <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">Featured</span>
                                </div>
                                <a href="#" class="btn-primary">
                                    Read Full Article
                                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="lg:order-first">
                                <img src="{{ asset('images/press/tech-africa-today-feature.jpg') }}"
                                    alt="Tech Africa Today Feature" class="rounded-lg shadow-lg w-full h-64 object-cover">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Press Coverage Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Press Item 1 -->
                    <div class="card hover:shadow-lg transition duration-200 animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-blue-600">African Business Weekly</span>
                                <span class="text-sm text-gray-500">Nov 2024</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 line-clamp-2">
                                "Digital Transformation Leaders to Watch in 2025"
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Violet Nswana Kaponda named among top 20 digital transformation
                                leaders driving change across African markets.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs">Recognition</span>
                                <a href="#" class="text-blue-600 hover:text-blue-700 text-sm font-medium">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Press Item 2 -->
                    <div class="card hover:shadow-lg transition duration-200 animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-purple-600">Fintech Focus Africa</span>
                                <span class="text-sm text-gray-500">Oct 2024</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 line-clamp-2">
                                "Podcast Interview: Building Limitless Careers"
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                In-depth conversation about career development, women's leadership,
                                and the future of fintech in emerging markets.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-xs">Interview</span>
                                <a href="#"
                                    class="text-purple-600 hover:text-purple-700 text-sm font-medium">Listen</a>
                            </div>
                        </div>
                    </div>

                    <!-- Press Item 3 -->
                    <div class="card hover:shadow-lg transition duration-200 animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-green-600">Women in Tech ZM</span>
                                <span class="text-sm text-gray-500">Sep 2024</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 line-clamp-2">
                                "Speaking Spotlight: Zambia Tech Summit 2024"
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Keynote highlights from Violet's presentation on fintech innovation
                                and financial inclusion strategies.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-xs">Speaking</span>
                                <a href="#"
                                    class="text-green-600 hover:text-green-700 text-sm font-medium">Watch</a>
                            </div>
                        </div>
                    </div>

                    <!-- Press Item 4 -->
                    <div class="card hover:shadow-lg transition duration-200 animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-red-600">Business Daily Africa</span>
                                <span class="text-sm text-gray-500">Aug 2024</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 line-clamp-2">
                                "Opinion: The Future of African Digital Payments"
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Expert analysis on mobile money ecosystems and the path
                                to universal financial inclusion across the continent.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-red-50 text-red-700 rounded-full text-xs">Opinion</span>
                                <a href="#" class="text-red-600 hover:text-red-700 text-sm font-medium">Read</a>
                            </div>
                        </div>
                    </div>

                    <!-- Press Item 5 -->
                    <div class="card hover:shadow-lg transition duration-200 animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-yellow-600">LinkedIn Today</span>
                                <span class="text-sm text-gray-500">Jul 2024</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 line-clamp-2">
                                "Thought Leader Spotlight: Violet Nswana Kaponda"
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Profile feature highlighting Violet's journey from IT Project
                                Manager to recognized fintech thought leader.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-yellow-50 text-yellow-700 rounded-full text-xs">Profile</span>
                                <a href="#"
                                    class="text-yellow-600 hover:text-yellow-700 text-sm font-medium">View</a>
                            </div>
                        </div>
                    </div>

                    <!-- Press Item 6 -->
                    <div class="card hover:shadow-lg transition duration-200 animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="text-sm font-medium text-indigo-600">Tech Innovation Hub</span>
                                <span class="text-sm text-gray-500">Jun 2024</span>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-3 line-clamp-2">
                                "Podcast Guest: Elevating African Tech Talent"
                            </h4>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                                Guest appearance discussing strategies for developing
                                and retaining top tech talent across African markets.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-xs">Podcast</span>
                                <a href="#"
                                    class="text-indigo-600 hover:text-indigo-700 text-sm font-medium">Listen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Kit Section -->
    <section id="media-kit" class="section-padding bg-gray-50">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">Media Kit</h2>
                    <p class="text-xl text-gray-600">
                        Everything you need for interviews, features, and event promotion.
                    </p>
                </div>

                <!-- Media Kit Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <!-- Professional Photos -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Photos</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                High-resolution headshots, speaking photos, and lifestyle images
                                available in various formats and resolutions.
                            </p>
                            <ul class="text-sm text-gray-600 space-y-2 mb-6">
                                <li>• Professional headshots (300 DPI)</li>
                                <li>• Speaking event photos</li>
                                <li>• Lifestyle and workplace images</li>
                                <li>• Multiple formats (JPG, PNG, TIFF)</li>
                            </ul>
                            <a href="#" class="btn-secondary">
                                Download Photos
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 10v6m0 0l-4-4m4 4l4-4m-6 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Biography & Fact Sheet -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Biography & Facts</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Professional biography, key achievements, quick facts,
                                and notable quotes for easy reference.
                            </p>
                            <ul class="text-sm text-gray-600 space-y-2 mb-6">
                                <li>• Long-form biography (500+ words)</li>
                                <li>• Short bio (100 words)</li>
                                <li>• Key achievements and milestones</li>
                                <li>• Notable quotes and sound bites</li>
                            </ul>
                            <a href="#" class="btn-secondary">
                                Download Bio Kit
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 10v6m0 0l-4-4m4 4l4-4m-6 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Speaking Topics -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Speaking Topics</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Detailed speaking topic outlines, key points, and customizable
                                presentations for various audience types.
                            </p>
                            <ul class="text-sm text-gray-600 space-y-2 mb-6">
                                <li>• Topic descriptions and objectives</li>
                                <li>• Key takeaways for audiences</li>
                                <li>• Customizable presentation formats</li>
                                <li>• Speaking requirements and logistics</li>
                            </ul>
                            <a href="#" class="btn-secondary">
                                View Topics
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Brand Assets -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Brand Assets</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Logo variations, brand colors, typography guidelines,
                                and visual identity elements for co-branded materials.
                            </p>
                            <ul class="text-sm text-gray-600 space-y-2 mb-6">
                                <li>• Logo files (SVG, PNG, AI)</li>
                                <li>• Brand color palette (HEX, RGB, CMYK)</li>
                                <li>• Typography specifications</li>
                                <li>• Usage guidelines and examples</li>
                            </ul>
                            <a href="#" class="btn-secondary">
                                Download Assets
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 10v6m0 0l-4-4m4 4l4-4m-6 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Complete Media Kit Download -->
                <div class="text-center animate-on-scroll">
                    <div class="bg-brand-gradient rounded-xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">Complete Media Kit</h3>
                        <p class="text-gray-100 mb-6 max-w-2xl mx-auto">
                            Download the complete media kit with all assets, biographies, photos,
                            and brand guidelines in one convenient package.
                        </p>
                        <a href="#" class="btn-primary-white">
                            Download Complete Kit (ZIP)
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 10v6m0 0l-4-4m4 4l4-4m-6 4V4"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact for Media -->
    <section class="section-padding bg-white">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto text-center">
                <div class="animate-on-scroll">
                    <h2 class="display-text mb-6">Media Inquiries</h2>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Ready to feature Violet in your publication, podcast, or event?
                        Let's discuss how we can create valuable content for your audience.
                    </p>

                    <!-- Contact Options -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                        <!-- Interview Requests -->
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Interview Requests</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Print, podcast, video interviews and expert commentary
                            </p>
                            <a href="{{ route('contact') }}"
                                class="text-blue-600 hover:text-blue-700 font-medium text-sm">
                                Request Interview →
                            </a>
                        </div>

                        <!-- Speaking Invitations -->
                        <div class="text-center">
                            <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Speaking Events</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Conferences, panels, workshops, and corporate events
                            </p>
                            <a href="{{ route('speaking') }}"
                                class="text-green-600 hover:text-green-700 font-medium text-sm">
                                Book Speaker →
                            </a>
                        </div>

                        <!-- Press & PR -->
                        <div class="text-center">
                            <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Press & PR</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                Press releases, feature stories, and media partnerships
                            </p>
                            <a href="{{ route('contact') }}"
                                class="text-purple-600 hover:text-purple-700 font-medium text-sm">
                                Media Inquiry →
                            </a>
                        </div>
                    </div>

                    <!-- Primary CTA -->
                    <div class="bg-gray-50 rounded-xl p-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Quick Response Guarantee</h3>
                        <p class="text-gray-600 mb-6">
                            All media inquiries receive a response within 24 hours.
                            Emergency or time-sensitive requests can be accommodated with advance notice.
                        </p>
                        <a href="{{ route('contact') }}" class="btn-primary">
                            Get in Touch
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe all elements with animate-on-scroll class
        document.addEventListener('DOMContentLoaded', () => {
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            animateElements.forEach(el => observer.observe(el));
        });

        // Smooth scrolling for anchor links
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

        // Podcast play button functionality
        document.querySelectorAll('.podcast-play-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Add your podcast player integration here
                console.log('Playing podcast episode');
            });
        });

        // Media kit download tracking
        document.querySelectorAll('a[href*="download"]').forEach(link => {
            link.addEventListener('click', function() {
                // Add your download tracking here
                console.log('Media kit download:', this.textContent);
            });
        });
    </script>
@endpush
