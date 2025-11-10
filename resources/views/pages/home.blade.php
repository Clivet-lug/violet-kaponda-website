@extends('layouts.app')

@section('title', 'Violet Nswana Kaponda - African Fintech Queen | Building Africa\'s Digital Future')
@section('description',
    'Violet Nswana Kaponda is the African Fintech Queen building Africa\'s digital future. Expert in
    business development, strategic partnerships, and digital transformation across emerging markets.')

@section('content')
    <!-- Hero Section -->
    <section id="hero"
        class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-black">
        <!-- Animated Background Elements -->
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

        <!-- Glass Overlay -->
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center min-h-[80vh] py-12">

                <!-- Content Side -->
                <div class="text-white space-y-8 order-2 lg:order-1">
                    <!-- Status Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-sm font-medium border border-white/20 shadow-lg">
                        <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                        Available for Speaking Engagements
                    </div>

                    <!-- Main Headlines -->
                    <div class="space-y-4">
                        <h1 class="text-5xl md:text-7xl font-display font-bold leading-tight">
                            <span class="block text-white">African</span>
                            <span
                                class="block bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 bg-clip-text text-transparent animate-gradient">
                                Fintech Queen
                            </span>
                        </h1>

                        <div class="text-xl md:text-2xl text-gray-300 font-medium">
                            Building Africa's Digital Future
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-lg md:text-xl text-gray-200 leading-relaxed max-w-2xl">
                        I'm <strong class="text-white">Violet Nswana Kaponda</strong>, driving digital transformation across
                        Africa through strategic partnerships, business development, and empowering the next generation of
                        tech leaders in the <strong class="text-orange-400">fintech ecosystem</strong>. With a special focus
                        on <strong class="text-orange-400">Digital Inclusion</strong> and access for underserved
                        communities.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="/speaking"
                            class="group relative px-8 py-4 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-xl overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-orange-500/25">
                            <span class="relative z-10">Work With Me</span>
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-red-600 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>

                        <a href="https://youtube.com/@elevate-and-dominat?si=fPZL9xmnmx-yn5lP"
                            class="group px-8 py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-xl border border-white/20 transition-all duration-300 hover:bg-white/20 hover:scale-105">
                            <span class="flex items-center space-x-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                                <span>Listen to Elevate & Dominate</span>
                            </span>
                        </a>
                    </div>

                    <!-- Stats Grid with Persistent Glass Glow -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-8">
                        <div
                            class="group relative text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 transition-all duration-500 hover:bg-white/8 hover:border-white/20 hover:scale-105 cursor-pointer overflow-hidden">
                            <!-- Initial glass shimmer sweep effect -->
                            <div
                                class="absolute top-0 left-[-100%] w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-600 ease-out group-hover:left-[100%]">
                            </div>

                            <!-- Persistent glass glow that stays on hover -->
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
                            <!-- Initial glass shimmer sweep effect -->
                            <div
                                class="absolute top-0 left-[-100%] w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-600 ease-out group-hover:left-[100%]">
                            </div>

                            <!-- Persistent glass glow that stays on hover -->
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
                            <!-- Initial glass shimmer sweep effect -->
                            <div
                                class="absolute top-0 left-[-100%] w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-600 ease-out group-hover:left-[100%]">
                            </div>

                            <!-- Persistent glass glow that stays on hover -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-white/10 via-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 delay-300 rounded-xl">
                            </div>

                            <div class="relative z-10">
                                <div
                                    class="text-2xl md:text-3xl font-bold text-yellow-400 mb-1 group-hover:text-yellow-300 transition-colors duration-300">
                                    5</div>
                                <div class="text-sm text-gray-300 group-hover:text-white transition-colors duration-300">
                                    Speaking Topics</div>
                            </div>
                        </div>

                        <div
                            class="group relative text-center bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 transition-all duration-500 hover:bg-white/8 hover:border-white/20 hover:scale-105 cursor-pointer overflow-hidden">
                            <!-- Initial glass shimmer sweep effect -->
                            <div
                                class="absolute top-0 left-[-100%] w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent transition-all duration-600 ease-out group-hover:left-[100%]">
                            </div>

                            <!-- Persistent glass glow that stays on hover -->
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
                        <!-- Main Image - Made Bigger -->
                        <div
                            class="relative w-96 h-[500px] md:w-[450px] md:h-[580px] rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/hero/violet-hero-main.jpg') }}"
                                alt="Violet Nswana Kaponda - African Fintech Queen"
                                class="w-full h-full object-cover object-center">

                            <!-- Glass Overlay with Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent">
                            </div>
                        </div>

                        <!-- Floating Achievement Card -->
                        <div
                            class="absolute -top-6 -left-6 bg-white/90 backdrop-blur-md rounded-2xl p-4 shadow-xl border border-white/20 max-w-xs">
                            <div class="flex items-center space-x-3">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-gray-800">International Speaker</span>
                            </div>
                            <p class="text-xs text-gray-600 mt-1">Available for global events</p>
                        </div>

                        <!-- Floating Stats Card - Updated without Probase -->
                        <div
                            class="absolute -bottom-6 -right-6 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl p-4 shadow-xl text-white max-w-xs">
                            <div class="text-lg font-bold">Co-founder and Chief Operations Officer</div>
                            <div class="text-sm opacity-90">Fintech Leader</div>
                        </div>

                        <!-- Decorative Elements -->
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

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/70 animate-bounce">
            <a href="#about-preview" class="block group">
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

    <!-- About Preview Section -->
    <section id="about-preview" class="py-20 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-100 to-red-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-yellow-100 to-orange-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Image Side - LEFT as requested -->
                <div class="lg:order-1 animate-on-scroll">
                    <div class="relative">
                        <!-- Main Professional Image -->
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/gallery/violet-professional-1.jpg') }}"
                                alt="Violet Nswana Kaponda - Professional Portrait" class="w-full h-auto object-cover">

                            <!-- Glass Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent">
                            </div>
                        </div>

                        <!-- Floating Achievement Cards -->
                        <div
                            class="absolute -top-4 -right-4 bg-white/95 backdrop-blur-md rounded-xl p-3 shadow-xl border border-gray-100 max-w-xs">
                            <div class="flex items-center space-x-2 mb-1">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-xs font-semibold text-gray-800">Master of Science in Project
                                    Management</span>
                            </div>
                            <p class="text-xs text-gray-600">University of Lusaka</p>
                        </div>

                        <div
                            class="absolute -bottom-4 -left-4 bg-gradient-to-r from-red-600 to-orange-600 rounded-xl p-3 shadow-xl text-white max-w-xs">
                            <div class="text-sm font-bold">10+ Years</div>
                            <div class="text-xs opacity-90">Tech Leadership Experience</div>
                        </div>

                        <!-- Decorative Elements -->
                        <div
                            class="absolute -top-8 -left-8 w-24 h-24 bg-gradient-to-r from-orange-400 to-red-400 rounded-full opacity-20 blur-xl">
                        </div>
                        <div
                            class="absolute -bottom-8 -right-8 w-32 h-32 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-full opacity-15 blur-xl">
                        </div>
                    </div>
                </div>

                <!-- Content Side - RIGHT -->
                <div class="lg:order-2 animate-on-scroll space-y-6">
                    <!-- Section Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-50 to-orange-50 border border-red-200 text-red-800 rounded-full text-sm font-medium">
                        🚀 Architect of Visibility & Impact
                    </div>

                    <!-- Headlines -->
                    <div class="space-y-4">
                        <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 leading-tight">
                            The <span
                                class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Fintech
                                Queen</span>
                            <br>Transforming Africa
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="space-y-4 text-lg text-gray-700 leading-relaxed">
                        <p>
                            I'm a <strong class="text-gray-900">business acquisition and growth strategist</strong> with a
                            passion for scaling tech businesses, closing high-value deals, and driving digital expansion
                            across Africa. With a strong foundation in project management and business development, I
                            specialize in identifying strategic opportunities and building high-impact partnerships.
                        </p>

                        <p>
                            Beyond business, I'm deeply committed to <strong class="text-red-600">digital inclusion and
                                economic empowerment</strong> in emerging markets. I believe technology has the power to
                            transform industries and create opportunities, and I'm on a mission to bridge the gap between
                            innovation and accessibility.
                        </p>
                    </div>

                    <!-- Key Achievements -->
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Master's
                                in Project Management (University of Lusaka)</span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">10+ Years
                                IT Project Management at ProBASE</span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Current:
                                Co-Founder & Chief Operating Officer at Sunga
                            </span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Current:
                                Co-Founder & Chief Strategy and Growth Officer at Uniplexity AI
                            </span>
                        </div>
                        <div class="flex items-center space-x-3 group">
                            <div
                                class="w-2 h-2 bg-red-600 rounded-full group-hover:scale-125 transition-transform duration-200">
                            </div>
                            <span class="text-gray-700 group-hover:text-gray-900 transition-colors duration-200">Host of
                                "Elevate & Dominate" Podcast</span>
                        </div>
                    </div>

                    <!-- CTA -->
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
        <!-- Background Elements -->
        <div
            class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-orange-200/30 to-red-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-yellow-200/30 to-orange-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-md border border-gray-200 text-gray-800 rounded-full text-sm font-medium mb-6">
                    💼 What I Bring to the Table
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Strategic <span
                        class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Expertise</span>
                    <br>for Digital Growth
                </h2>

                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Combining strategic vision with practical execution to drive transformational growth across the African
                    tech ecosystem.
                </p>
            </div>

            <!-- Expertise Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Business Development -->
                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Business Acquisition & Strategic Growth
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Expert in scaling tech businesses, closing high-value deals, and identifying strategic opportunities
                        that drive sustainable revenue growth across African markets.
                    </p>
                </div>

                <!-- Digital Transformation -->
                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Digital Transformation & Commercial Strategy
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Driving digital expansion across Africa with commercial strategies that bridge innovation gaps and
                        create accessible technology solutions.
                    </p>
                </div>

                <!-- Partnership Building -->
                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        High-Value Deal Structuring & Negotiation
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Building high-impact partnerships and structuring complex deals that create mutual value and drive
                        sustainable business growth.
                    </p>
                </div>

                <!-- Thought Leadership -->
                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Thought Leadership in Tech & Digital Inclusion
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Championing digital inclusion and economic empowerment across emerging markets through speaking,
                        podcasting, and strategic consultation.
                    </p>
                </div>

                <!-- Project Management -->
                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Software Project Management
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        10+ years of expertise in managing complex software projects, ensuring delivery excellence and
                        stakeholder satisfaction across diverse technical initiatives.
                    </p>
                </div>

                <!-- Mindset Coaching -->
                <div
                    class="group bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-pink-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Mindset & Performance Coaching
                    </h3>

                    <p class="text-gray-600 leading-relaxed">
                        Empowering professionals to step into their power and build limitless careers through mindset
                        transformation and performance optimization strategies.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Speaking Topics Preview -->
    <section id="speaking" class="py-20 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-red-100 to-orange-100 rounded-full blur-3xl opacity-40">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-yellow-100 to-red-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-red-50 to-orange-50 border border-red-200 text-red-800 rounded-full text-sm font-medium mb-6">
                    🎤 Speaking Topics That Transform
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Insights That <span
                        class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Inspire
                        Action</span>
                </h2>

                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    From fintech innovation to women's leadership, I deliver powerful insights that inspire action and drive
                    meaningful change across Africa's tech ecosystem.
                </p>
            </div>

            <!-- Featured Topics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">

                <!-- Fintech & AI -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-xl border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Fintech & AI in Africa
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Exploring how artificial intelligence and fintech innovations are reshaping Africa's financial
                        landscape and creating unprecedented opportunities for economic growth and inclusion.
                    </p>

                    <div class="flex items-center justify-between">
                        <div class="text-sm text-red-600 font-medium">
                            ⏱️ Duration: 45-60 minutes • Interactive Q&A included
                        </div>
                    </div>
                </div>

                <!-- Women in Technology -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-xl border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-pink-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Women in Technology & Leadership
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-6">
                        Empowering women to break barriers, claim their space in tech, and become leaders who drive
                        organizational transformation and innovation across the African continent.
                    </p>

                    <div class="flex items-center justify-between">
                        <div class="text-sm text-red-600 font-medium">
                            👥 Duration: 45-60 minutes • Audience: All genders welcome
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Topics Preview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 border border-orange-200">
                    <h4 class="font-bold text-gray-900 mb-2">Digital Inclusion & Transformation</h4>
                    <p class="text-sm text-gray-600">Strategic approaches to digital transformation that ensure inclusive
                        growth across Africa.</p>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-pink-50 rounded-xl p-6 border border-red-200">
                    <h4 class="font-bold text-gray-900 mb-2">Mindset & Performance Coaching</h4>
                    <p class="text-sm text-gray-600">Empowering professionals to step into their power and build limitless
                        careers.</p>
                </div>

                <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-xl p-6 border border-yellow-200">
                    <h4 class="font-bold text-gray-900 mb-2">Business Development Strategy</h4>
                    <p class="text-sm text-gray-600">Scaling tech businesses and closing high-value deals in emerging
                        markets.</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center animate-on-scroll">
                <p class="text-lg text-gray-600 mb-6">
                    Ready to inspire your audience with actionable insights and transformational strategies?
                </p>
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
        <!-- Background Effects -->
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

                <!-- Content -->
                <div class="animate-on-scroll space-y-8">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-medium shadow-lg">
                        🎙️ 11+ Episodes & Growing
                    </div>

                    <!-- Headlines -->
                    <div class="space-y-4">
                        <h2 class="text-4xl md:text-5xl font-display font-bold text-white leading-tight">
                            Elevate & Dominate
                            <span
                                class="block bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                                Podcast
                            </span>
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="space-y-4">
                        <p class="text-xl text-gray-300 leading-relaxed">
                            Join me for powerful conversations about fintech innovation, leadership strategies, wellness,
                            and the mindset shifts that drive success in today's digital economy.
                        </p>

                        <p class="text-lg text-gray-400 leading-relaxed">
                            Through "Elevate & Dominate," I share insights on mindset, tech, and wellness, inspiring
                            professionals to step into their power and build limitless careers across the African tech
                            ecosystem and beyond.
                        </p>
                    </div>

                    <!-- Podcast Stats -->
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

                    <!-- Platform Links -->
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

                    <!-- CTA -->
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

                <!-- Featured Episode / Speaking Image -->
                <div class="animate-on-scroll lg:order-2">
                    <div class="relative">
                        <!-- Main Image -->
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/speaking/violet-speaking-event-1.jpg') }}"
                                alt="Violet Kaponda Speaking at Event" class="w-full h-auto object-cover">

                            <!-- Glass Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent">
                            </div>
                        </div>

                        <!-- Enhanced Play Button Overlay - Replace the entire original section -->
                        <div x-data="{
                            openVideo: false,
                            isHovered: false,
                            closeVideo() {
                                this.openVideo = false;
                                // Stop video by reloading iframe src
                                setTimeout(() => {
                                    const iframe = this.$refs.videoFrame;
                                    if (iframe) {
                                        iframe.src = iframe.src.replace('&autoplay=1', '');
                                    }
                                }, 300);
                            }
                        }" class="absolute inset-0 flex flex-col items-center justify-center">

                            <!-- Gradient overlay for better contrast -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/20"></div>

                            <!-- Video Duration Badge -->
                            <div
                                class="absolute bottom-4 right-4 bg-black/80 backdrop-blur-sm text-white text-sm px-2 py-1 rounded font-medium z-10">
                                12:45
                            </div>

                            <!-- Enhanced Play Button with pulse animation -->
                            <button @click="openVideo = true" @mouseenter="isHovered = true"
                                @mouseleave="isHovered = false"
                                class="group/btn relative w-24 h-24 bg-gradient-to-br from-red-600 to-red-700 rounded-full flex items-center justify-center shadow-2xl hover:shadow-red-500/25 transition-all duration-500 border-2 border-white/20 hover:border-white/40 mb-4 z-10"
                                :class="{ 'scale-110 shadow-red-500/40': isHovered }">

                                <!-- Pulse animation rings -->
                                <div class="absolute inset-0 rounded-full bg-red-600 animate-ping opacity-20"></div>
                                <div class="absolute inset-2 rounded-full bg-red-600 animate-pulse opacity-30"></div>

                                <!-- Play icon with enhanced styling -->
                                <svg class="relative z-10 w-10 h-10 text-white ml-1 transition-all duration-300"
                                    :class="{ 'scale-110': isHovered }" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>

                                <!-- Glow effect -->
                                <div
                                    class="absolute inset-0 rounded-full bg-gradient-to-r from-red-600 to-red-500 blur-lg opacity-0 group-hover/btn:opacity-30 transition-opacity duration-500">
                                </div>
                            </button>

                            <!-- Descriptive text -->
                            <div
                                class="text-white font-medium text-lg tracking-wide opacity-90 hover:opacity-100 transition-opacity duration-300 z-10">
                                Watch Full Interview
                            </div>

                            <!-- Enhanced Video Modal -->
                            <div x-show="openVideo" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                class="fixed inset-0 bg-black/90 backdrop-blur-sm flex items-center justify-center z-50 p-4"
                                @click.self="closeVideo()" @keydown.escape.window="closeVideo()">

                                <!-- Video Container with enhanced animations -->
                                <div x-show="openVideo" x-transition:enter="transition ease-out duration-300 delay-100"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                    class="relative w-full max-w-5xl aspect-video">

                                    <!-- Loading state -->
                                    <div
                                        class="absolute inset-0 bg-gray-900 rounded-lg flex items-center justify-center z-0">
                                        <div
                                            class="animate-spin rounded-full h-12 w-12 border-4 border-red-600 border-t-transparent">
                                        </div>
                                    </div>

                                    <!-- YouTube Video with MUTED autoplay by default -->
                                    <iframe x-ref="videoFrame" class="relative z-10 w-full h-full rounded-lg shadow-2xl"
                                        src="https://www.youtube.com/embed/xtmlZ5w70uE?autoplay=1&mute=1&rel=0&modestbranding=1&fs=1&cc_load_policy=1"
                                        title="Violet Kaponda - Fintech Innovation Interview" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen>
                                    </iframe>

                                    <!-- Enhanced Close Button -->
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

                                    <!-- ESC hint -->
                                    {{-- <div x-show="openVideo"
                                        x-transition:enter="transition ease-out duration-500 delay-500"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        class="absolute -bottom-8 left-0 text-white/60 text-sm">
                                        Press ESC to close
                                    </div> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Episode Info Card -->
                        <div
                            class="absolute bottom-4 left-4 right-4 bg-black/80 backdrop-blur-md rounded-xl p-4 text-white border border-white/20">
                            <div class="text-sm font-medium mb-1">Latest Episode</div>
                            <div class="text-xs text-gray-300">Building Africa's Digital Future</div>
                        </div>

                        <!-- Decorative Elements -->
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

    <!-- Social Proof / Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-orange-200/30 to-red-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-yellow-200/30 to-orange-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-md border border-gray-200 text-gray-800 rounded-full text-sm font-medium mb-6">
                    ⭐ Trusted by Industry Leaders
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    What <span class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Leaders
                        Say</span>
                </h2>

                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    See what colleagues, partners, and industry professionals say about working with Violet.
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Testimonial 1 -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <!-- Star Rating -->
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
                    </div>

                    <blockquote
                        class="text-gray-700 mb-6 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                        "Violet has a rare ability to connect vision with execution. In every partnership
                        conversation, she brings depth, foresight, and a true passion for African innovation. She is a force
                        in fintech and technology across the continent."
                    </blockquote>

                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                            DS
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Daniel Skirrow</div>
                            <div class="text-sm text-gray-600">VIce President EFT Corp, SA</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <!-- Star Rating -->
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
                    </div>

                    <blockquote
                        class="text-gray-700 mb-6 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                        "Violet is the epitome of resilience and vision. She has defied odds, broken barriers, and now uses
                        her platform to open doors for others.
                        She’s not just a leader in technology — she’s a role model for what is possible."
                    </blockquote>

                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-pink-500 to-red-500 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                            SM
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Samuel Mwale</div>
                            <div class="text-sm text-gray-600">Head Of Operations, Probase Group</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <!-- Star Rating -->
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
                    </div>

                    <blockquote
                        class="text-gray-700 mb-6 leading-relaxed group-hover:text-gray-900 transition-colors duration-300">
                        "Violet Nswana Kaponda doesn't just participate in Africa's fintech revolution — she leads it.
                        Through strategic vision and relentless execution,
                        she's opening doors that transform entire industries."
                    </blockquote>

                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-semibold mr-4">
                            ND
                        </div>
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
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-yellow-500/20 to-orange-500/20 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-orange-500/20 to-red-500/20 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-on-scroll">
            <!-- Section Header -->
            <div class="mb-8">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    Stay Ahead of Africa's
                    <span class="bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">Tech
                        Revolution</span>
                </h2>

                <p class="text-xl text-red-100 leading-relaxed max-w-3xl mx-auto">
                    Get exclusive insights on fintech trends, leadership strategies, business development tactics, and
                    opportunities shaping Africa's digital future. Join 5000+ forward-thinking professionals.
                </p>
            </div>

            <!-- Newsletter Form -->
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
                // Newsletter main form submission handling
                document.addEventListener('DOMContentLoaded', function() {
                    const newsletterMainForm = document.getElementById('newsletter-main-form');

                    if (newsletterMainForm) {
                        newsletterMainForm.addEventListener('submit', function(e) {
                            e.preventDefault();

                            const submitBtn = document.getElementById('newsletter-main-btn');
                            const originalText = submitBtn.textContent;
                            const formData = new FormData(this);

                            // Show loading state
                            submitBtn.innerHTML = `
                <div class="flex items-center justify-center">
                    <svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
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
                                        submitBtn.innerHTML = '🎉 Welcome to the Movement!';
                                        submitBtn.style.background =
                                            'linear-gradient(to right, #10b981, #059669)';

                                        // Show success notification
                                        showMainNewsletterNotification('success',
                                            'Welcome! You\'ve successfully joined Violet\'s exclusive fintech community.'
                                        );

                                        // Reset form after delay
                                        setTimeout(() => {
                                            newsletterMainForm.reset();
                                            submitBtn.innerHTML = originalText;
                                            submitBtn.disabled = false;
                                            submitBtn.style.background = '';
                                        }, 4000);
                                    } else {
                                        // Show error state
                                        submitBtn.innerHTML = 'Error - Try Again';
                                        submitBtn.style.background = '#dc2626';

                                        showMainNewsletterNotification('error', data.message ||
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

                                    submitBtn.innerHTML = 'Network Error';
                                    submitBtn.style.background = '#dc2626';

                                    showMainNewsletterNotification('error', 'Network error. Please try again.');

                                    setTimeout(() => {
                                        submitBtn.innerHTML = originalText;
                                        submitBtn.disabled = false;
                                        submitBtn.style.background = '';
                                    }, 3000);
                                });
                        });
                    }
                });

                // Notification function for main newsletter
                function showMainNewsletterNotification(type, message) {
                    // Remove existing notifications
                    const existingNotification = document.querySelector('.main-newsletter-notification');
                    if (existingNotification) {
                        existingNotification.remove();
                    }

                    const notification = document.createElement('div');
                    notification.className =
                        `main-newsletter-notification fixed top-4 right-4 z-50 p-6 rounded-xl shadow-2xl transition-all duration-300 max-w-md`;

                    if (type === 'success') {
                        notification.classList.add('bg-gradient-to-r', 'from-green-500', 'to-emerald-600', 'text-white');
                        notification.innerHTML = `
            <div class="flex items-center">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div>
                    <div class="font-bold text-lg mb-1">Welcome to the Movement! 🚀</div>
                    <div class="text-sm opacity-90">${message}</div>
                    <div class="text-xs opacity-75 mt-2">Check your email for a welcome message from Violet!</div>
                </div>
            </div>
        `;
                    } else {
                        notification.classList.add('bg-gradient-to-r', 'from-red-500', 'to-red-600', 'text-white');
                        notification.innerHTML = `
            <div class="flex items-center">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
                <div>
                    <div class="font-bold text-lg mb-1">Subscription Error</div>
                    <div class="text-sm opacity-90">${message}</div>
                </div>
            </div>
        `;
                    }

                    document.body.appendChild(notification);

                    // Auto-remove after 7 seconds for success, 5 for error
                    const timeout = type === 'success' ? 7000 : 5000;
                    setTimeout(() => {
                        if (notification.parentNode) {
                            notification.style.opacity = '0';
                            notification.style.transform = 'translateX(100%)';
                            setTimeout(() => notification.remove(), 300);
                        }
                    }, timeout);
                }
            </script>

            <!-- Trust Indicators -->
            <div
                class="flex flex-col sm:flex-row items-center justify-center space-y-2 sm:space-y-0 sm:space-x-8 text-red-200 text-sm">
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>No spam, ever</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Unsubscribe anytime</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Monthly insights + exclusive opportunities</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Final Call to Action Section -->
    <section id="cta" class="py-20 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-100 to-red-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-yellow-100 to-orange-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-on-scroll">
            <!-- Section Content -->
            <div class="space-y-8">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 leading-tight">
                    Ready to Transform Your
                    <span
                        class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Organization?</span>
                </h2>

                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Bring Violet to your next conference, corporate event, retreat,or strategic boardroom session. With deep
                    expertise in
                    fintech innovation, digital transformation, and business growth, Violet empowers leaders to unlock new
                    opportunities, embrace technology with confidence, and drive inclusive impact.

                    Her insights don’t just inspire they ignite actionable change that helps organizations thrive in
                    Africa’s fast-evolving tech ecosystem.

                </p>

                <!-- CTA Buttons -->
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

                    <a href="{{ route('about') }}"
                        class="group inline-flex items-center px-8 py-4 bg-white border-2 border-gray-300 text-gray-700 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 hover:border-orange-500 hover:text-orange-600">
                        <span>Learn More About Violet</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Quick Contact Info -->
                <div class="border-t border-gray-200 pt-8 mt-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <div class="group">
                            <div
                                class="text-sm font-semibold text-gray-900 mb-1 group-hover:text-red-600 transition-colors duration-300">
                                Speaking Inquiries</div>
                            <a href="mailto:violet@violetnswanakaponda.com"
                                class="text-red-700 hover:text-red-900 transition-colors duration-300">
                                violet@violetnswanakaponda.com
                            </a>
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

    <!-- Enhanced CSS Styles -->
    <style>
        /* Custom animations */
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

        @keyframes bounce-soft {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-bounce-soft {
            animation: bounce-soft 2s ease-in-out infinite;
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

        /* Glass effects */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Custom gradients */
        .text-gradient {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 50%, #f59e0b 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Enhanced hover effects */
        .group:hover .group-hover\:glow {
            box-shadow: 0 0 30px rgba(234, 88, 12, 0.3);
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
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

    <!-- Enhanced JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate on scroll
            const animateElements = document.querySelectorAll('.animate-on-scroll');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            animateElements.forEach(el => observer.observe(el));

            // Newsletter form handling
            const newsletterForm = document.querySelector('#newsletter form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const email = this.querySelector('input[type="email"]').value;
                    const button = this.querySelector('button');
                    const originalText = button.textContent;

                    // Show loading state
                    button.textContent = 'Joining...';
                    button.disabled = true;

                    // Simulate API call
                    setTimeout(() => {
                        button.textContent = '✓ Joined!';
                        button.style.background = 'linear-gradient(to right, #10b981, #059669)';

                        setTimeout(() => {
                            button.textContent = originalText;
                            button.disabled = false;
                            button.style.background = '';
                            this.reset();
                        }, 2000);
                    }, 1500);
                });
            }

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

            // Parallax effect for background elements
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('[class*="blur-3xl"]');

                parallaxElements.forEach((element, index) => {
                    const speed = 0.5 + (index * 0.1);
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            });

            // Enhanced testimonial interactions
            const testimonialCards = document.querySelectorAll('#testimonials .group');
            testimonialCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px) scale(1.02)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    </script>
@endsection
