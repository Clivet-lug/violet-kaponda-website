@extends('layouts.app')

@section('title', 'Book Violet Nswana Kaponda for Speaking Engagements - CEO, AVEC Technologies')
@section('description',
    'Book Violet Nswana Kaponda for your next conference or corporate event. Expert speaker on
    AI and digital infrastructure, government digital transformation, and African technology leadership.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-violet-500/20 to-blue-500/20 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-violet-500/20 to-blue-500/20 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Content -->
                <div class="animate-on-scroll space-y-8">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-medium shadow-lg">
                        🎤 International Speaker Available
                    </div>

                    <div class="space-y-4">
                        <h1 class="text-4xl md:text-6xl font-display font-bold text-white leading-tight">
                            Transformational
                            <span class="bg-gradient-to-r from-violet-400 to-cyan-400 bg-clip-text text-transparent">
                                Speaking
                            </span>
                        </h1>
                        <h2 class="text-2xl md:text-3xl text-violet-300 font-semibold">
                            That Drives Real Change
                        </h2>
                    </div>

                    <p class="text-xl text-gray-300 leading-relaxed">
                        Book Violet Nswana Kaponda for powerful insights on AI and digital infrastructure, government
                        digital transformation, and technology leadership that inspire action and drive meaningful results
                        across Africa's tech ecosystem.
                    </p>

                    <!-- Key Stats -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10">
                            <div class="text-2xl font-bold text-violet-400 mb-1">5+</div>
                            <div class="text-xs text-gray-400">Core Topics</div>
                        </div>
                        <div class="text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10">
                            <div class="text-2xl font-bold text-violet-400 mb-1">45-90</div>
                            <div class="text-xs text-gray-400">Minutes</div>
                        </div>
                        <div class="text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10">
                            <div class="text-2xl font-bold text-violet-400 mb-1">Global</div>
                            <div class="text-xs text-gray-400">Availability</div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="#book-now"
                            class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-violet-500 to-blue-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <span>Book Now</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#topics"
                            class="group inline-flex items-center px-8 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <span>View Topics</span>
                        </a>
                    </div>
                </div>

                <!-- Speaking Image -->
                <div class="animate-on-scroll lg:order-2">
                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/speaking/violet-speaking-event-1.jpg') }}"
                                alt="Violet Nswana Kaponda Speaking at Conference" class="w-full h-auto object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent">
                            </div>
                        </div>

                        <div
                            class="absolute -top-6 -left-6 bg-white/95 backdrop-blur-md rounded-xl p-4 shadow-xl border border-white/20 max-w-xs">
                            <div class="flex items-center space-x-2 mb-1">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-gray-800">PMI Zambia 2025</span>
                            </div>
                            <p class="text-xs text-gray-600">Featured Speaker</p>
                        </div>

                        <div
                            class="absolute -bottom-6 -right-6 bg-gradient-to-r from-violet-600 to-blue-600 rounded-xl p-4 shadow-xl text-white max-w-xs">
                            <div class="flex items-center space-x-1 mb-1">
                                <svg class="w-4 h-4 text-cyan-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="text-sm font-bold">Rated Excellence</span>
                            </div>
                            <div class="text-xs opacity-90">Transformational Impact</div>
                        </div>

                        <div
                            class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-r from-violet-400 to-cyan-400 rounded-full opacity-20 blur-xl animate-float">
                        </div>
                        <div
                            class="absolute -bottom-8 -left-8 w-32 h-32 bg-gradient-to-r from-cyan-400 to-violet-400 rounded-full opacity-15 blur-xl animate-float delay-1000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Speaking Topics -->
    <section id="topics" class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-violet-100 to-blue-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-cyan-100 to-violet-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    🎯 Core Speaking Topics
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Expertise That <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Transforms</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Choose from five transformational topics designed to inspire action and drive meaningful change in your
                    organization.
                </p>
            </div>

            <!-- Topics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Topic 1: AI & Digital Infrastructure -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-700 transition-colors duration-300">
                        AI & Digital Infrastructure in Africa
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Why Africa cannot afford to be a consumer of AI — exploring how sovereign, continent-first digital
                        infrastructure creates unprecedented opportunities for economic growth, institutional power, and
                        technological advancement.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            AI adoption across institutions
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Digital infrastructure sovereignty
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Regulatory frameworks and compliance
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-green-600 font-medium">⏱️ 45-60 minutes</span>
                        <span class="text-gray-500">Interactive Q&A included</span>
                    </div>
                </div>

                <!-- Topic 2: Women in Technology -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-700 transition-colors duration-300">
                        Women in Technology & Leadership
                    </h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Empowering women to break barriers, claim their space in tech, and become leaders who drive
                        organizational transformation and innovation across the African continent and beyond.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Breaking barriers in tech leadership
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Building inclusive tech organizations
                        </div>
                        <div class="flex items-center text-sm text-gray-700">
                            <svg class="w-4 h-4 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Mentorship and career advancement
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-purple-600 font-medium">👥 All genders welcome</span>
                        <span class="text-gray-500">45-60 minutes</span>
                    </div>
                </div>
            </div>

            <!-- Additional Topics Row -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">

                <!-- Topic 3: Government Digital Transformation -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-lg font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition-colors duration-300">
                        Government Digital Transformation
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        How African governments can leap from fragmented legacy systems to intelligent, citizen-centric
                        digital platforms that improve accountability and efficiency.
                    </p>
                    <div class="text-xs text-blue-600 font-medium">45-90 minutes • Workshop format available</div>
                </div>

                <!-- Topic 4: Digital Identity & Inclusion -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-violet-500 to-blue-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-lg font-bold text-gray-900 mb-3 group-hover:text-amber-700 transition-colors duration-300">
                        Digital Identity & Inclusion
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Building the digital identity rails that unlock financial services, healthcare, and civic
                        participation for millions of underserved Africans.
                    </p>
                    <div class="text-xs text-amber-600 font-medium">60-90 minutes • Case studies included</div>
                </div>

                <!-- Topic 5: Mindset & Performance -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3
                        class="text-lg font-bold text-gray-900 mb-3 group-hover:text-red-700 transition-colors duration-300">
                        Mindset & Performance Coaching
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed mb-4">
                        Empowering professionals and founders to step into their power, build limitless careers, and achieve
                        peak performance in today's digital economy.
                    </p>
                    <div class="text-xs text-red-600 font-medium">45-75 minutes • Interactive exercises</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Speaking Formats & Logistics -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <div
            class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-violet-200/30 to-blue-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-cyan-200/30 to-violet-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    📋 Speaking Formats & Logistics
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Flexible <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Formats</span>
                    for Every Event
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Choose the format that best fits your event needs and audience size.
                </p>
            </div>

            <!-- Formats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">

                <div
                    class="bg-white/80 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 text-center animate-on-scroll">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Keynote</h3>
                    <p class="text-sm text-gray-600 mb-2">45-60 minutes</p>
                    <p class="text-xs text-gray-500">Opening/closing presentations</p>
                </div>

                <div
                    class="bg-white/80 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 text-center animate-on-scroll">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Panel Discussion</h3>
                    <p class="text-sm text-gray-600 mb-2">60-90 minutes</p>
                    <p class="text-xs text-gray-500">Expert discussions & Q&A</p>
                </div>

                <div
                    class="bg-white/80 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 text-center animate-on-scroll">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Workshop</h3>
                    <p class="text-sm text-gray-600 mb-2">2-4 hours</p>
                    <p class="text-xs text-gray-500">Interactive & hands-on</p>
                </div>

                <div
                    class="bg-white/80 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 text-center animate-on-scroll">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-violet-500 to-blue-500 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Fireside Chat</h3>
                    <p class="text-sm text-gray-600 mb-2">30-45 minutes</p>
                    <p class="text-xs text-gray-500">Intimate conversations</p>
                </div>
            </div>

            <!-- Logistics Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 animate-on-scroll">

                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Global Availability</h3>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Based in Lusaka, Zambia
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Available for international travel
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Virtual presentations available
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Flexible scheduling options
                        </li>
                    </ul>
                </div>

                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-500 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Tech Requirements</h3>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Projector & screen/LED wall
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Wireless microphone
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Laptop connection (HDMI/USB-C)
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Stage lighting (if applicable)
                        </li>
                    </ul>
                </div>

                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-violet-500 to-blue-500 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900">Customization</h3>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Tailored to your audience
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Industry-specific examples
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Interactive elements available
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Pre-event consultation included
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Testimonials -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-violet-100 to-blue-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tl from-cyan-100 to-violet-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    ⭐ Event Organizer Reviews
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    What Event <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Organizers
                        Say</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Real feedback from conferences, corporate events, and summits across Africa.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Testimonial 1 -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <span class="ml-2 text-sm text-gray-600">5.0 Rating</span>
                    </div>
                    <blockquote
                        class="text-gray-700 mb-6 leading-relaxed text-lg group-hover:text-gray-900 transition-colors duration-300">
                        "Violet delivered transformational insights on AI and digital infrastructure that completely shifted
                        how our team approaches technology adoption. Her expertise and engaging delivery style made complex
                        topics accessible to everyone."
                    </blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                            CM</div>
                        <div>
                            <div class="font-semibold text-gray-900">Chongo Mutale</div>
                            <div class="text-sm text-gray-600">Innovation and partnerships specialist, ABSA</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                        <span class="ml-2 text-sm text-gray-600">5.0 Rating</span>
                    </div>
                    <blockquote
                        class="text-gray-700 mb-6 leading-relaxed text-lg group-hover:text-gray-900 transition-colors duration-300">
                        "Outstanding keynote on technology! Violet's authenticity and powerful message inspired our entire
                        audience. We received incredibly positive feedback and requests for her return."
                    </blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                            BM</div>
                        <div>
                            <div class="font-semibold text-gray-900">Billy Mwape</div>
                            <div class="text-sm text-gray-600">FNB CIO Zambia</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Process & Contact -->
    <section id="book-now"
        class="py-20 bg-gradient-to-br from-violet-600 via-violet-600 to-blue-600 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Content -->
                <div class="animate-on-scroll space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-4xl md:text-5xl font-display font-bold text-white leading-tight">
                            Ready to <span class="text-cyan-200">Transform</span> Your Event?
                        </h2>
                        <p class="text-xl text-violet-100 leading-relaxed">
                            Book Violet for your next conference, corporate event, or strategic session. Deliver powerful
                            insights that inspire action and drive meaningful results.
                        </p>
                    </div>

                    <!-- Booking Process -->
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-cyan-200 mb-4">Simple Booking Process:</h3>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-8 h-8 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-sm font-bold">
                                    1</div>
                                <span class="text-violet-100">Send inquiry with event details</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-8 h-8 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-sm font-bold">
                                    2</div>
                                <span class="text-violet-100">Receive proposal within 24-48 hours</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-8 h-8 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-sm font-bold">
                                    3</div>
                                <span class="text-violet-100">Pre-event consultation & customization</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-8 h-8 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-sm font-bold">
                                    4</div>
                                <span class="text-violet-100">Deliver transformational presentation</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="bg-white/10 backdrop-blur-md rounded-xl p-6 border border-white/20">
                        <h3 class="text-lg font-bold text-white mb-4">Speaking Inquiries:</h3>
                        <div class="space-y-2">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <a href="mailto:violet@violetnswanakaponda.com"
                                    class="text-cyan-200 hover:text-yellow-100 transition-colors duration-300">
                                    violet@violetnswanakaponda.com
                                </a>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-violet-100">Response within 24-48 hours</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-cyan-300" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="text-violet-100">Based in Lusaka, Zambia</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="animate-on-scroll">
                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-xl">
                        <h3 class="text-2xl font-bold text-white mb-6">Send Speaking Inquiry</h3>

                        <form id="speaking-inquiry-form" action="{{ route('contact.submit') }}" method="POST"
                            class="space-y-6">
                            @csrf
                            <input type="hidden" name="inquiry_type" value="speaking">

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-violet-100 mb-2">Your Name</label>
                                    <input type="text" name="name"
                                        class="w-full px-4 py-3 bg-white/20 backdrop-blur-md border border-white/30 rounded-lg text-white placeholder-violet-200 focus:outline-none focus:ring-2 focus:ring-violet-400 transition-all duration-300"
                                        placeholder="Full Name" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-violet-100 mb-2">Email Address</label>
                                    <input type="email" name="email"
                                        class="w-full px-4 py-3 bg-white/20 backdrop-blur-md border border-white/30 rounded-lg text-white placeholder-violet-200 focus:outline-none focus:ring-2 focus:ring-violet-400 transition-all duration-300"
                                        placeholder="email@company.com" required>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-violet-100 mb-2">Organization</label>
                                    <input type="text" name="organization"
                                        class="w-full px-4 py-3 bg-white/20 backdrop-blur-md border border-white/30 rounded-lg text-white placeholder-violet-200 focus:outline-none focus:ring-2 focus:ring-violet-400 transition-all duration-300"
                                        placeholder="Company/Organization">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-violet-100 mb-2">Event Date</label>
                                    <input type="date" name="event_date"
                                        class="w-full px-4 py-3 bg-white/20 backdrop-blur-md border border-white/30 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-violet-400 transition-all duration-300">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-violet-100 mb-2">Speaking Topic
                                        Interest</label>
                                    <select name="speaking_topic"
                                        class="w-full px-4 py-3 bg-white/20 backdrop-blur-md border border-white/30 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-violet-400 transition-all duration-300">
                                        <option value="">Select a topic</option>
                                        <option value="ai-infrastructure">AI & Digital Infrastructure in Africa</option>
                                        <option value="women-tech">Women in Technology & Leadership</option>
                                        <option value="government-transformation">Government Digital Transformation
                                        </option>
                                        <option value="digital-identity">Digital Identity & Inclusion</option>
                                        <option value="mindset-coaching">Mindset & Performance Coaching</option>
                                        <option value="custom">Custom Topic</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-violet-100 mb-2">Expected Audience
                                        Size</label>
                                    <select name="audience_size"
                                        class="w-full px-4 py-3 bg-white/20 backdrop-blur-md border border-white/30 rounded-lg text-black focus:outline-none focus:ring-2 focus:ring-violet-400 transition-all duration-300">
                                        <option value="">Select size</option>
                                        <option value="1-50">1-50 people</option>
                                        <option value="51-200">51-200 people</option>
                                        <option value="201-500">201-500 people</option>
                                        <option value="500+">500+ people</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-violet-100 mb-2">Event Details</label>
                                <textarea rows="4" name="message"
                                    class="w-full px-4 py-3 bg-white/20 backdrop-blur-md border border-white/30 rounded-lg text-white placeholder-violet-200 focus:outline-none focus:ring-2 focus:ring-violet-400 transition-all duration-300"
                                    placeholder="Tell us about your event: format preference, key objectives, budget considerations, etc." required></textarea>
                            </div>

                            <button type="submit" id="speaking-submit-btn"
                                class="w-full bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                Send Speaking Inquiry
                            </button>
                        </form>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const speakingForm = document.getElementById('speaking-inquiry-form');
                        if (speakingForm) {
                            speakingForm.addEventListener('submit', function(e) {
                                e.preventDefault();
                                const submitBtn = document.getElementById('speaking-submit-btn');
                                const originalText = submitBtn.textContent;
                                const formData = new FormData(this);
                                submitBtn.innerHTML =
                                    `<div class="flex items-center justify-center"><svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Sending...</div>`;
                                submitBtn.disabled = true;
                                fetch(this.action, {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                            .getAttribute('content')
                                    }
                                }).then(response => response.json()).then(data => {
                                    if (data.success) {
                                        submitBtn.innerHTML =
                                            `<div class="flex items-center justify-center"><svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>Speaking Inquiry Sent!</div>`;
                                        submitBtn.classList.remove('bg-gradient-to-r', 'from-cyan-500',
                                            'to-blue-500');
                                        submitBtn.classList.add('bg-green-600');
                                        showSpeakingNotification('success',
                                            'Thank you! Your speaking inquiry has been sent. Violet will respond within 24-48 hours.'
                                            );
                                        setTimeout(() => {
                                            speakingForm.reset();
                                            submitBtn.innerHTML = originalText;
                                            submitBtn.disabled = false;
                                            submitBtn.classList.remove('bg-green-600');
                                            submitBtn.classList.add('bg-gradient-to-r', 'from-cyan-500',
                                                'to-blue-500');
                                        }, 3000);
                                    } else {
                                        submitBtn.innerHTML = 'Error - Try Again';
                                        submitBtn.classList.remove('bg-gradient-to-r', 'from-cyan-500',
                                            'to-blue-500');
                                        submitBtn.classList.add('bg-red-600');
                                        showSpeakingNotification('error', data.message ||
                                            'Something went wrong. Please try again.');
                                        setTimeout(() => {
                                            submitBtn.innerHTML = originalText;
                                            submitBtn.disabled = false;
                                            submitBtn.classList.remove('bg-red-600');
                                            submitBtn.classList.add('bg-gradient-to-r', 'from-cyan-500',
                                                'to-blue-500');
                                        }, 3000);
                                    }
                                }).catch(error => {
                                    submitBtn.innerHTML = 'Network Error';
                                    submitBtn.classList.remove('bg-gradient-to-r', 'from-cyan-500',
                                        'to-blue-500');
                                    submitBtn.classList.add('bg-red-600');
                                    showSpeakingNotification('error',
                                        'Network error. Please check your connection and try again.');
                                    setTimeout(() => {
                                        submitBtn.innerHTML = originalText;
                                        submitBtn.disabled = false;
                                        submitBtn.classList.remove('bg-red-600');
                                        submitBtn.classList.add('bg-gradient-to-r', 'from-cyan-500',
                                            'to-blue-500');
                                    }, 3000);
                                });
                            });
                        }
                    });

                    function showSpeakingNotification(type, message) {
                        const existingNotification = document.querySelector('.speaking-notification');
                        if (existingNotification) existingNotification.remove();
                        const notification = document.createElement('div');
                        notification.className =
                            `speaking-notification fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 max-w-md`;
                        if (type === 'success') {
                            notification.classList.add('bg-green-600', 'text-white');
                            notification.innerHTML =
                                `<div class="flex items-center"><svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><div><div class="font-semibold">Success!</div><div class="text-sm opacity-90">${message}</div></div></div>`;
                        } else {
                            notification.classList.add('bg-red-600', 'text-white');
                            notification.innerHTML =
                                `<div class="flex items-center"><svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg><div><div class="font-semibold">Error</div><div class="text-sm opacity-90">${message}</div></div></div>`;
                        }
                        document.body.appendChild(notification);
                        setTimeout(() => {
                            if (notification.parentNode) {
                                notification.style.opacity = '0';
                                notification.style.transform = 'translateX(100%)';
                                setTimeout(() => notification.remove(), 300);
                            }
                        }, 5000);
                    }
                </script>
            </div>
        </div>
    </section>
@endsection
