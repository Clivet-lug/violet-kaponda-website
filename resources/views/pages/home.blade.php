@extends('layouts.app')

@section('title', 'Violet Nswana Kaponda - CEO, AVEC Technologies | Building Africa\'s AI & Digital Infrastructure
    Future')
@section('description', 'Violet Nswana Kaponda is the Founder & CEO of AVEC Technologies, building Africa\'s AI and
    digital infrastructure future through enterprise systems, digital identity, and government technology solutions.')

@section('content')
    <!-- Hero Section -->
    <section id="hero"
        class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-brand-orange/20 to-brand-red/20 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-brand-red/20 to-yellow-400/20 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-orange-500/10 to-red-500/10 rounded-full blur-3xl animate-float">
            </div>
        </div>
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[80vh] py-12">

                <!-- Content Side -->
                <div class="text-white space-y-8 order-2 lg:order-1">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-sm font-medium border border-white/20 shadow-lg">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        Available for Speaking Engagements
                    </div>

                    <div class="space-y-4">
                        <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight">
                            <span class="block text-white">Violet Nswana</span>
                            <span
                                class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 bg-clip-text text-transparent animate-gradient">Kaponda</span>
                        </h1>
                        <div class="text-xl md:text-2xl text-gray-300 font-medium">CEO, AVEC Technologies</div>
                        <div class="text-lg md:text-xl text-orange-400 font-semibold tracking-wide">Building Africa's AI &
                            Digital Infrastructure Future</div>
                    </div>

                    <!-- Service Strip -->
                    <div class="flex flex-wrap gap-2 pt-2">
                        <span
                            class="px-3 py-1 bg-white/10 border border-white/20 rounded-full text-sm text-gray-200">Artificial
                            Intelligence</span>
                        <span
                            class="px-3 py-1 bg-white/10 border border-white/20 rounded-full text-sm text-gray-200">Digital
                            Identity</span>
                        <span
                            class="px-3 py-1 bg-white/10 border border-white/20 rounded-full text-sm text-gray-200">Enterprise
                            Systems</span>
                        <span
                            class="px-3 py-1 bg-white/10 border border-white/20 rounded-full text-sm text-gray-200">Government
                            Technology</span>
                        <span
                            class="px-3 py-1 bg-white/10 border border-white/20 rounded-full text-sm text-gray-200">Digital
                            Transformation</span>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="/avec"
                            class="group relative px-8 py-4 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-xl overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-orange-500/25">
                            <span class="relative z-10">Explore AVEC Technologies</span>
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-red-600 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>
                        <a href="{{ route('speaking') }}"
                            class="group px-8 py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-xl border border-white/20 transition-all duration-300 hover:bg-white/20 hover:scale-105">
                            <span class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                </svg>
                                <span>Book Violet To Speak</span>
                            </span>
                        </a>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8">
                        <div
                            class="group relative text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 transition-all duration-500 hover:bg-white/8 hover:border-white/20 hover:scale-105 cursor-pointer overflow-hidden">
                            <div
                                class="absolute top-0 left-[-100%] w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-600 ease-out group-hover:left-[100%]">
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-300 rounded-xl">
                            </div>
                            <div class="relative z-10">
                                <div
                                    class="text-2xl md:text-3xl font-bold text-yellow-400 mb-1 group-hover:text-yellow-300 transition-colors duration-300">
                                    10+</div>
                                <div class="text-sm text-gray-300 group-hover:text-white transition-colors duration-300">
                                    Years in Tech</div>
                            </div>
                        </div>
                        <div
                            class="group relative text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 transition-all duration-500 hover:bg-white/8 hover:border-white/20 hover:scale-105 cursor-pointer overflow-hidden">
                            <div
                                class="absolute top-0 left-[-100%] w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-600 ease-out group-hover:left-[100%]">
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-300 rounded-xl">
                            </div>
                            <div class="relative z-10">
                                <div
                                    class="text-2xl md:text-3xl font-bold text-yellow-400 mb-1 group-hover:text-yellow-300 transition-colors duration-300">
                                    3+</div>
                                <div class="text-sm text-gray-300 group-hover:text-white transition-colors duration-300">
                                    Tech Ventures</div>
                            </div>
                        </div>
                        <div
                            class="group relative text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 transition-all duration-500 hover:bg-white/8 hover:border-white/20 hover:scale-105 cursor-pointer overflow-hidden">
                            <div
                                class="absolute top-0 left-[-100%] w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-600 ease-out group-hover:left-[100%]">
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-300 rounded-xl">
                            </div>
                            <div class="relative z-10">
                                <div
                                    class="text-2xl md:text-3xl font-bold text-yellow-400 mb-1 group-hover:text-yellow-300 transition-colors duration-300">
                                    11+</div>
                                <div class="text-sm text-gray-300 group-hover:text-white transition-colors duration-300">
                                    Podcast Episodes</div>
                            </div>
                        </div>
                        <div
                            class="group relative text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 transition-all duration-500 hover:bg-white/8 hover:border-white/20 hover:scale-105 cursor-pointer overflow-hidden">
                            <div
                                class="absolute top-0 left-[-100%] w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-600 ease-out group-hover:left-[100%]">
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-300 rounded-xl">
                            </div>
                            <div class="relative z-10">
                                <div
                                    class="text-2xl md:text-3xl font-bold text-yellow-400 mb-1 group-hover:text-yellow-300 transition-colors duration-300">
                                    5000+</div>
                                <div class="text-sm text-gray-300 group-hover:text-white transition-colors duration-300">
                                    Followers</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Side -->
                <div class="animate-on-scroll lg:order-2 order-1 flex justify-center lg:justify-end">
                    <div class="relative">
                        <div
                            class="relative w-96 h-[500px] md:w-[450px] md:h-[580px] rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/hero/fintechQ2.webp') }}"
                                alt="Violet Nswana Kaponda - CEO, AVEC Technologies"
                                class="w-full h-full object-cover object-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent">
                            </div>
                        </div>
                        <div
                            class="absolute -top-6 -left-6 bg-white/90 backdrop-blur-md rounded-2xl p-4 shadow-xl border border-white/20 max-w-xs">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-gray-800">International Speaker</span>
                            </div>
                            <p class="text-xs text-gray-600 mt-1">Available for global events</p>
                        </div>
                        <div
                            class="absolute -bottom-6 -right-6 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl p-4 shadow-xl text-white max-w-xs">
                            <div class="text-lg font-bold">Founder & CEO</div>
                            <div class="text-sm opacity-90">AVEC Technologies</div>
                        </div>
                        <div
                            class="absolute -top-10 -right-10 w-32 h-32 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full opacity-20 blur-xl animate-float">
                        </div>
                        <div
                            class="absolute -bottom-10 -left-10 w-24 h-24 bg-gradient-to-r from-red-500 to-pink-500 rounded-full opacity-20 blur-xl animate-float delay-1000">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden md:flex absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/70 animate-bounce">
            <a href="#avec-building" class="block group">
                <div class="flex flex-col items-center space-y-2">
                    <span class="text-sm font-medium group-hover:text-yellow-400 transition-colors duration-300">Discover
                        More</span>
                    <svg class="w-6 h-6 group-hover:text-yellow-400 transition-colors duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </div>
            </a>
        </div>
    </section>

    <!-- ═══ What We Are Building At AVEC ═══ -->
    <section id="avec-building"
        class="py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-orange-500/15 to-red-500/15 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-red-500/15 to-pink-500/15 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-medium mb-6">
                    🏗️ AVEC Technologies</div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    What We Are <span
                        class="bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Building At
                        AVEC</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    End-to-end digital infrastructure and AI-powered systems designed to help African institutions operate
                    with speed, intelligence, and scale.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">

                <!-- DIMS -->
                <div
                    class="group bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        DIMS</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">Document & Institutional Management System —
                        intelligent digital records and workflow management for modern African institutions.</p>
                    <div class="mt-4"><span
                            class="px-2 py-1 bg-blue-500/20 text-blue-300 rounded-full text-xs font-medium">Flagship
                            Product</span></div>
                </div>

                <!-- AI Agents -->
                <div
                    class="group bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        AI Agents</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">Intelligent automation agents that learn, adapt, and
                        execute tasks — reducing manual workloads and driving operational efficiency across institutions.
                    </p>
                    <div class="mt-4"><span
                            class="px-2 py-1 bg-purple-500/20 text-purple-300 rounded-full text-xs font-medium">AI-Powered</span>
                    </div>
                </div>

                <!-- Digital Identity -->
                <div
                    class="group bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        Digital Identity</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">Secure, scalable digital identity solutions enabling
                        trusted authentication and seamless access management for individuals and institutions across
                        Africa.</p>
                    <div class="mt-4"><span
                            class="px-2 py-1 bg-orange-500/20 text-orange-300 rounded-full text-xs font-medium">Infrastructure</span>
                    </div>
                </div>

                <!-- IntelliHealth -->
                <div
                    class="group bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        IntelliHealth</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">AI-powered health intelligence platform transforming
                        how African healthcare institutions collect, manage, and act on patient and population data.</p>
                    <div class="mt-4"><span
                            class="px-2 py-1 bg-green-500/20 text-green-300 rounded-full text-xs font-medium">HealthTech</span>
                    </div>
                </div>

                <!-- Government Digital Transformation -->
                <div
                    class="group bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-amber-500 to-yellow-500 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        Government Digital Transformation</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">End-to-end digitization of government services,
                        enabling public institutions to deliver faster, more transparent, and citizen-centric services.</p>
                    <div class="mt-4"><span
                            class="px-2 py-1 bg-amber-500/20 text-amber-300 rounded-full text-xs font-medium">GovTech</span>
                    </div>
                </div>

                <!-- AI Capacity Building -->
                <div
                    class="group bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        AI Capacity Building</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">Training, tooling, and advisory programs that equip
                        African organizations and professionals with the knowledge to adopt and deploy AI responsibly.</p>
                    <div class="mt-4"><span
                            class="px-2 py-1 bg-cyan-500/20 text-cyan-300 rounded-full text-xs font-medium">Education</span>
                    </div>
                </div>

                <!-- Enterprise Systems -->
                <div
                    class="group bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 hover:border-white/20 transition-all duration-500 hover:-translate-y-2 md:col-span-2 lg:col-span-1">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors duration-300">
                        Enterprise Systems</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">Bespoke ERP, workflow automation, and institutional
                        platforms built specifically for the operational realities and regulatory environments of African
                        enterprises.</p>
                    <div class="mt-4"><span
                            class="px-2 py-1 bg-red-500/20 text-red-300 rounded-full text-xs font-medium">Enterprise</span>
                    </div>
                </div>
            </div>

            <div class="text-center animate-on-scroll">
                <a href="/avec"
                    class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <span>Explore AVEC Technologies</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section id="about-preview" class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-100 to-red-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-yellow-100 to-orange-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="lg:order-1 animate-on-scroll">
                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/gallery/violet-professional-1.jpg') }}"
                                alt="Violet Nswana Kaponda - Founder & CEO, AVEC Technologies"
                                class="w-full h-auto object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent">
                            </div>
                        </div>
                        <div
                            class="absolute -top-4 -right-4 bg-white/95 backdrop-blur-md rounded-xl p-3 shadow-xl border border-gray-100 max-w-xs">
                            <div class="flex items-center space-x-2 mb-1">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-xs font-semibold text-gray-800">MSc Project Management</span>
                            </div>
                            <p class="text-xs text-gray-600">University of Lusaka</p>
                        </div>
                        <div
                            class="absolute -bottom-4 -left-4 bg-gradient-to-r from-red-600 to-orange-600 rounded-xl p-3 shadow-xl text-white max-w-xs">
                            <div class="text-sm font-bold">10+ Years</div>
                            <div class="text-xs opacity-90">Tech Leadership Experience</div>
                        </div>
                        <div
                            class="absolute -top-8 -left-8 w-24 h-24 bg-gradient-to-r from-orange-400 to-red-400 rounded-full opacity-20 blur-xl">
                        </div>
                        <div
                            class="absolute -bottom-8 -right-8 w-32 h-32 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full opacity-15 blur-xl">
                        </div>
                    </div>
                </div>

                <div class="lg:order-2 animate-on-scroll space-y-6">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-50 to-orange-50 border border-red-200 text-red-800 rounded-full text-sm font-medium">
                        🚀 Technology Founder & AI Advocate
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 leading-tight">
                            Building Africa's <span
                                class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Digital
                                Future</span>
                            <br>Through AVEC
                        </h2>
                    </div>
                    <div class="space-y-4 text-lg text-gray-700 leading-relaxed">
                        <p>
                            I'm <strong class="text-gray-900">Violet Nswana Kaponda</strong>, Founder & CEO of AVEC
                            Technologies — a digital infrastructure and AI company building the systems that power modern
                            African institutions. With over a decade in technology, I lead the design and deployment of
                            enterprise platforms, AI agents, and digital identity solutions across the continent.
                        </p>
                        <p>
                            My work sits at the intersection of <strong class="text-red-600">AI, digital infrastructure,
                                and African institutional transformation</strong> — driven by the belief that Africa's next
                            era of growth must be built on strong, sovereign digital foundations.
                        </p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Founder &
                                CEO — AVEC Technologies</span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Co-Founder
                                & COO — Sunga Africa</span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Co-Founder
                                & Chief Strategy Officer — Uniplexity AI</span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">10+ Years
                                in Technology Leadership</span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Host of
                                "Elevate & Dominate" Podcast</span>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="{{ route('about') }}"
                            class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-600 to-red-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <span>Discover My Full Story</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section id="expertise" class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <div
            class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-orange-200/30 to-red-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-yellow-200/30 to-orange-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-md border border-gray-200 text-gray-800 rounded-full text-sm font-medium mb-6">
                    💼 Areas of Expertise</div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Technology <span
                        class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Leadership</span>
                    <br>for Africa's Digital Era
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Combining deep technical strategy with institutional expertise to drive Africa's digital transformation
                    at scale.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        AI & Digital Infrastructure</h3>
                    <p class="text-gray-600 leading-relaxed">Designing and deploying AI-powered systems and secure digital
                        infrastructure that help African institutions operate intelligently and at scale.</p>
                </div>

                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Digital Identity Solutions</h3>
                    <p class="text-gray-600 leading-relaxed">Building trusted digital identity frameworks that enable
                        secure access, reduce fraud, and expand financial and government service inclusion across Africa.
                    </p>
                </div>

                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Enterprise & Institutional Systems</h3>
                    <p class="text-gray-600 leading-relaxed">Delivering bespoke ERP platforms, workflow automation, and
                        institutional management systems tailored to the operational realities of African enterprises.</p>
                </div>

                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Government Digital Transformation</h3>
                    <p class="text-gray-600 leading-relaxed">End-to-end digital transformation of public sector operations,
                        enabling governments to deliver transparent, efficient, and citizen-centric services.</p>
                </div>

                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Technology Strategy & Leadership</h3>
                    <p class="text-gray-600 leading-relaxed">Strategic technology advisory and visionary leadership that
                        helps organizations define their digital roadmap and execute with precision in Africa's rapidly
                        evolving landscape.</p>
                </div>

                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-pink-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        AI Capacity Building</h3>
                    <p class="text-gray-600 leading-relaxed">Empowering African organizations and professionals with the
                        knowledge, frameworks, and tools to adopt AI responsibly and competitively.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Speaking Topics Preview -->
    <section id="speaking" class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-red-100 to-orange-100 rounded-full blur-3xl opacity-40">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-yellow-100 to-red-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-50 to-orange-50 border border-red-200 text-red-800 rounded-full text-sm font-medium mb-6">
                    🎤 Speaking Topics</div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Insights That <span
                        class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Shape the
                        Future</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    From AI sovereignty to government digital transformation, Violet delivers powerful keynotes that
                    challenge thinking and drive actionable change across Africa's technology landscape.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-xl border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        AI & Digital Infrastructure in Africa</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">Why Africa cannot afford to be a consumer of AI — and
                        what it takes to build sovereign, continent-first AI infrastructure that drives economic growth and
                        institutional power.</p>
                    <div class="text-sm text-red-600 font-medium">⏱️ Duration: 45-60 minutes • Interactive Q&A included
                    </div>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-xl border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-pink-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Government Digital Transformation</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">How African governments can leap from fragmented legacy
                        systems to intelligent, citizen-centric digital platforms that improve accountability, efficiency,
                        and public trust.</p>
                    <div class="text-sm text-red-600 font-medium">👥 Target: Governments, Policy Makers, Development
                        Partners</div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 border border-orange-200">
                    <h4 class="font-bold text-gray-900 mb-2">Digital Identity & Inclusion</h4>
                    <p class="text-sm text-gray-600">Building the digital identity rails that unlock financial services,
                        healthcare, and civic participation for millions.</p>
                </div>
                <div class="bg-gradient-to-br from-red-50 to-pink-50 rounded-xl p-6 border border-red-200">
                    <h4 class="font-bold text-gray-900 mb-2">Future of African Technology Companies</h4>
                    <p class="text-sm text-gray-600">How African tech companies can stop building for the West and start
                        building for the continent — and win globally.</p>
                </div>
                <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl p-6 border border-yellow-200">
                    <h4 class="font-bold text-gray-900 mb-2">The Future of Work & AI</h4>
                    <p class="text-sm text-gray-600">Preparing Africa's workforce for an AI-native economy — skills,
                        mindsets, and policy for the decade ahead.</p>
                </div>
            </div>

            <div class="text-center animate-on-scroll">
                <p class="text-lg text-gray-600 mb-6">Available for governments, corporates, universities, and development
                    partners.</p>
                <a href="{{ route('speaking') }}"
                    class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-600 to-red-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <span>View All Speaking Topics & Book Now</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Podcast Section -->
    <section id="podcast"
        class="py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-orange-500/20 to-red-500/20 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-red-500/20 to-pink-500/20 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-yellow-500/10 to-orange-500/10 rounded-full blur-3xl">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="animate-on-scroll space-y-8">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-medium shadow-lg">
                        🎙️ 11+ Episodes & Growing</div>
                    <div class="space-y-4">
                        <h2 class="text-4xl md:text-5xl font-display font-bold text-white leading-tight">
                            Elevate & Dominate
                            <span
                                class="block bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">Podcast</span>
                        </h2>
                    </div>
                    <div class="space-y-4">
                        <p class="text-xl text-gray-300 leading-relaxed">Join Violet for powerful conversations about AI,
                            tech entrepreneurship, leadership strategies, and the mindset shifts driving Africa's digital
                            revolution.</p>
                        <p class="text-lg text-gray-400 leading-relaxed">Through "Elevate & Dominate," Violet shares
                            insights on technology, mindset, and building high-impact ventures — inspiring professionals and
                            founders to step into their power across the African tech ecosystem.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10">
                            <div class="text-3xl font-bold text-yellow-400 mb-2">11+</div>
                            <div class="text-gray-400 text-sm">Episodes Available</div>
                        </div>
                        <div class="text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10">
                            <div class="text-3xl font-bold text-yellow-400 mb-2">Multi-Platform</div>
                            <div class="text-gray-400 text-sm">Distribution</div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://youtube.com/@elevate-and-dominat?si=fPZL9xmnmx-yn5lP" target="_blank"
                            class="group flex items-center space-x-2 bg-red-600 hover:bg-red-700 px-4 py-3 rounded-xl transition-all duration-300 text-white shadow-lg hover:shadow-xl hover:scale-105">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                            <span class="font-medium">YouTube</span>
                        </a>
                        <a href="https://www.tiktok.com/@theegoddessnwanah?_t=ZM-8yeSs5dzHxF&_r=1" target="_blank"
                            class="group flex items-center space-x-2 bg-gray-800 hover:bg-gray-700 px-4 py-3 rounded-xl transition-all duration-300 text-white shadow-lg hover:shadow-xl hover:scale-105">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72z" />
                            </svg>
                            <span class="font-medium">TikTok</span>
                        </a>
                        <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                            class="group flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 px-4 py-3 rounded-xl transition-all duration-300 text-white shadow-lg hover:shadow-xl hover:scale-105">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                            <span class="font-medium">LinkedIn</span>
                        </a>
                    </div>
                    <div class="pt-4">
                        <a href="{{ route('media') }}"
                            class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <span>Listen to All Episodes</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="animate-on-scroll lg:order-2">
                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/speaking/violet-speaking-event-1.jpg') }}"
                                alt="Violet Kaponda Speaking at Event" class="w-full h-auto object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent">
                            </div>
                        </div>

                        <div x-data="{
                            openVideo: false,
                            isHovered: false,
                            closeVideo() {
                                this.openVideo = false;
                                setTimeout(() => { const iframe = this.$refs.videoFrame; if (iframe) { iframe.src = iframe.src.replace('&autoplay=1', ''); } }, 300);
                            }
                        }" class="absolute inset-0 flex flex-col items-center justify-center">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>
                            <div
                                class="absolute bottom-4 right-4 bg-black/80 backdrop-blur-sm text-white text-sm px-2 py-1 rounded font-medium z-10">
                                12:45</div>
                            <button @click="openVideo = true" @mouseenter="isHovered = true"
                                @mouseleave="isHovered = false"
                                class="group/btn relative w-24 h-24 bg-gradient-to-br from-red-600 to-red-700 rounded-full flex items-center justify-center shadow-2xl hover:shadow-red-500/25 transition-all duration-500 border-2 border-white/20 hover:border-white/40 mb-4 z-10"
                                :class="{ 'scale-110 shadow-red-500/40': isHovered }">
                                <div class="absolute inset-0 rounded-full bg-red-600 animate-ping opacity-20"></div>
                                <div class="absolute inset-2 rounded-full bg-red-600 animate-pulse opacity-30"></div>
                                <svg class="relative z-10 w-10 h-10 text-white ml-1 transition-all duration-300"
                                    :class="{ 'scale-110': isHovered }" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                                <div
                                    class="absolute inset-0 rounded-full bg-gradient-to-r from-red-600 to-red-500 blur-lg opacity-0 group-hover/btn:opacity-30 transition-opacity duration-500">
                                </div>
                            </button>
                            <div
                                class="text-white font-medium text-lg tracking-wide opacity-90 hover:opacity-100 transition-opacity duration-300 z-10">
                                Watch Full Interview</div>

                            <div x-show="openVideo" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="fixed inset-0 bg-black/90 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                                @click.self="closeVideo()" @keydown.escape.window="closeVideo()">
                                <div x-show="openVideo" x-transition:enter="transition ease-out duration-300 delay-100"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="relative w-full max-w-5xl aspect-video">
                                    <div
                                        class="absolute inset-0 bg-gray-900 rounded-lg flex items-center justify-center z-0">
                                        <div
                                            class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent">
                                        </div>
                                    </div>
                                    <iframe x-ref="videoFrame" class="relative z-10 w-full h-full rounded-lg shadow-2xl"
                                        src="https://www.youtube.com/embed/xtmlZ5w70uE?autoplay=1&mute=1&rel=0&modestbranding=1&fs=1&cc_load_policy=1"
                                        title="Violet Kaponda Interview" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                    <button @click="closeVideo()" x-show="openVideo"
                                        x-transition:enter="transition ease-out duration-300 delay-200"
                                        x-transition:enter-start="opacity-0 scale-90"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        class="absolute -top-12 right-0 w-10 h-10 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-white/20 hover:text-red-400 transition-all duration-300 border border-white/20">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute bottom-4 left-4 right-4 bg-black/80 backdrop-blur-md rounded-xl p-4 text-white border border-white/20">
                            <div class="text-sm font-medium mb-1">Latest Episode</div>
                            <div class="text-xs text-gray-300">Building Africa's Digital Future</div>
                        </div>
                        <div
                            class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full opacity-20 blur-xl animate-float">
                        </div>
                        <div
                            class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-r from-red-500 to-pink-500 rounded-full opacity-20 blur-xl animate-float delay-1000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <div
            class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-orange-200/30 to-red-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-yellow-200/30 to-orange-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-md border border-gray-200 text-gray-800 rounded-full text-sm font-medium mb-6">
                    ⭐ Trusted by Industry Leaders</div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    What <span class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Leaders
                        Say</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">See what colleagues, partners, and
                    industry professionals say about working with Violet.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $star =
                        '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>';
                    $stars = '<div class="flex text-yellow-400">' . str_repeat($star, 5) . '</div>';
                @endphp

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-4">{!! $stars !!}</div>
                    <blockquote
                        class="text-gray-700 mb-6 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                        "Violet has a rare ability to connect vision with execution. In every partnership conversation, she
                        brings depth, foresight, and a true passion for African innovation. She is a force in technology
                        across the continent."</blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                            DS</div>
                        <div>
                            <div class="font-semibold text-gray-900">Daniel Skirrow</div>
                            <div class="text-sm text-gray-600">Vice President EFT Corp, SA</div>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-4">{!! $stars !!}</div>
                    <blockquote
                        class="text-gray-700 mb-6 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                        "Violet is the epitome of resilience and vision. She has defied odds, broken barriers, and now uses
                        her platform to open doors for others. She's not just a leader in technology — she's a role model
                        for what is possible."</blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-pink-500 to-red-500 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                            SM</div>
                        <div>
                            <div class="font-semibold text-gray-900">Samuel Mwale</div>
                            <div class="text-sm text-gray-600">Head Of Operations, Probase Group</div>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div class="flex items-center mb-4">{!! $stars !!}</div>
                    <blockquote
                        class="text-gray-700 mb-6 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                        "Violet Nswana Kaponda doesn't just participate in Africa's tech revolution — she leads it. Through
                        strategic vision and relentless execution, she's opening doors that transform entire industries."
                    </blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                            ND</div>
                        <div>
                            <div class="font-semibold text-gray-900">Nickson Dawson</div>
                            <div class="text-sm text-gray-600">CEO & Founder at East Africa Internet Group</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter"
        class="py-20 bg-gradient-to-br from-red-900 via-red-800 to-orange-900 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-orange-500/20 to-red-500/20 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-on-scroll">
            <div class="mb-8">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    Stay Ahead of Africa's
                    <span class="bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">Digital
                        Revolution</span>
                </h2>
                <p class="text-xl text-red-100 leading-relaxed max-w-3xl mx-auto">
                    Get exclusive insights on AI, digital infrastructure, enterprise technology, and the opportunities
                    shaping Africa's future. Join 5000+ forward-thinking leaders.
                </p>
            </div>

            <div class="max-w-lg mx-auto mb-8">
                <form id="newsletter-main-form" action="{{ route('newsletter.subscribe') }}" method="POST"
                    class="flex flex-col sm:flex-row gap-4">
                    @csrf
                    <input type="email" name="email" placeholder="Enter your email address"
                        class="flex-1 px-6 py-4 rounded-xl text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-4 focus:ring-yellow-400/50 border-0 shadow-lg backdrop-blur-md"
                        required>
                    <button type="submit" id="newsletter-main-btn"
                        class="px-8 py-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 whitespace-nowrap">
                        Join the Movement
                    </button>
                </form>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const form = document.getElementById('newsletter-main-form');
                    if (!form) return;
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        const btn = document.getElementById('newsletter-main-btn');
                        const orig = btn.textContent;
                        const fd = new FormData(this);
                        btn.innerHTML =
                            '<div class="flex items-center justify-center"><svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Joining...</div>';
                        btn.disabled = true;
                        fetch(this.action, {
                                method: 'POST',
                                body: fd,
                                headers: {
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                        .getAttribute('content')
                                }
                            })
                            .then(r => r.json()).then(data => {
                                if (data.success) {
                                    btn.innerHTML = '🎉 Welcome!';
                                    btn.style.background = 'linear-gradient(to right, #10b981, #059669)';
                                    setTimeout(() => {
                                        form.reset();
                                        btn.innerHTML = orig;
                                        btn.disabled = false;
                                        btn.style.background = '';
                                    }, 4000);
                                } else {
                                    btn.innerHTML = 'Error - Try Again';
                                    btn.style.background = '#dc2626';
                                    setTimeout(() => {
                                        btn.innerHTML = orig;
                                        btn.disabled = false;
                                        btn.style.background = '';
                                    }, 3000);
                                }
                            }).catch(() => {
                                btn.innerHTML = 'Network Error';
                                btn.style.background = '#dc2626';
                                setTimeout(() => {
                                    btn.innerHTML = orig;
                                    btn.disabled = false;
                                    btn.style.background = '';
                                }, 3000);
                            });
                    });
                });
            </script>

            <div
                class="flex flex-col sm:flex-row items-center justify-center space-y-2 sm:space-y-0 sm:space-x-8 text-red-200 text-sm">
                <div class="flex items-center space-x-2"><svg class="w-4 h-4 text-green-400" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg><span>No spam, ever</span></div>
                <div class="flex items-center space-x-2"><svg class="w-4 h-4 text-green-400" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg><span>Unsubscribe anytime</span></div>
                <div class="flex items-center space-x-2"><svg class="w-4 h-4 text-green-400" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg><span>Monthly insights + exclusive opportunities</span></div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section id="cta" class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-100 to-red-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-yellow-100 to-orange-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-on-scroll">
            <div class="space-y-8">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 leading-tight">
                    Ready to Build Africa's
                    <span class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Digital Future
                        Together?</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Whether you're looking to bring Violet to your next conference, partner with AVEC Technologies, or
                    explore opportunities to transform your organization — let's start the conversation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-4">
                    <a href="{{ route('contact') }}"
                        class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-600 to-red-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <span>Book Speaking Engagement</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="/avec"
                        class="group inline-flex items-center px-8 py-4 bg-white border-2 border-gray-300 text-gray-700 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 hover:border-orange-500 hover:text-orange-600">
                        <span>Explore AVEC Technologies</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
                <div class="border-t border-gray-200 pt-8 mt-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <div class="group">
                            <div
                                class="text-sm font-semibold text-gray-900 mb-1 group-hover:text-red-600 transition-colors duration-300">
                                Speaking & Partnership Inquiries</div>
                            <a href="mailto:violet@violetnswanakaponda.com"
                                class="text-red-700 hover:text-red-900 transition-colors duration-300">violet@violetnswanakaponda.com</a>
                        </div>
                        <div class="group">
                            <div
                                class="text-sm font-semibold text-gray-900 mb-1 group-hover:text-red-600 transition-colors duration-300">
                                Based in</div>
                            <span class="text-gray-600">Lusaka, Zambia</span>
                        </div>
                        <div class="group">
                            <div
                                class="text-sm font-semibold text-gray-900 mb-1 group-hover:text-red-600 transition-colors duration-300">
                                Response Time</div>
                            <span class="text-gray-600">24-48 hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes gradient {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
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

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        html {
            scroll-behavior: smooth;
        }

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
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('visible');
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });
            });
        });
    </script>
@endsection
