@extends('layouts.app')

@section('title', 'Violet Nswana Kaponda - Fintech Queen | Building Africa\'s Digital Future')
@section('description', 'Violet Nswana Kaponda is the Fintech Queen building Africa\'s digital future. Expert in
    business development, strategic partnerships, and digital transformation across emerging markets.')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden"
        x-data="hero">
        <!-- Background with Gradient Overlay -->
        <div class="absolute inset-0 bg-hero-gradient"></div>
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>

        <!-- Hero Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero/violet-hero-main.jpg') }}" alt="Violet Nswana Kaponda - Fintech Queen"
                class="w-full h-full object-cover object-center opacity-80">
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 container-brand text-center text-white">
            <div class="max-w-5xl mx-auto animate-on-scroll">
                <!-- Badge -->
                <div
                    class="inline-flex items-center px-4 py-2 bg-white bg-opacity-20 rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                    <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                    Available for Speaking Engagements
                </div>

                <!-- Main Headline -->
                <h1 class="hero-text text-white mb-6 text-shadow-lg">
                    Building Africa's
                    <span
                        class="text-gradient bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent">
                        Digital Future
                    </span>
                </h1>

                <!-- Subheadline -->
                <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-4xl mx-auto leading-relaxed text-shadow">
                    I'm Violet Nswana Kaponda, the <strong>Fintech Queen</strong> driving digital transformation
                    across Africa through strategic partnerships, business development, and empowering the next generation
                    of tech leaders.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                    <a href="#speaking"
                        class="btn-primary text-lg px-8 py-4 shadow-brand-lg hover:shadow-glow transform hover:-translate-y-1 transition-all duration-300"
                        x-ref="ctaButton">
                        Book Me to Speak
                    </a>
                    <a href="#podcast"
                        class="btn-secondary text-lg px-8 py-4 bg-white bg-opacity-20 border-white text-white hover:bg-white hover:text-brand-black backdrop-blur-sm">
                        Listen to Elevate & Dominate
                    </a>
                </div>

                <!-- Social Proof Stats -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                    <div class="animate-on-scroll">
                        <div class="text-3xl font-bold text-yellow-400 mb-2">6+</div>
                        <div class="text-gray-300">Years in Tech Leadership</div>
                    </div>
                    <div class="animate-on-scroll">
                        <div class="text-3xl font-bold text-yellow-400 mb-2">11+</div>
                        <div class="text-gray-300">Podcast Episodes</div>
                    </div>
                    <div class="animate-on-scroll">
                        <div class="text-3xl font-bold text-yellow-400 mb-2">5</div>
                        <div class="text-gray-300">Core Speaking Topics</div>
                    </div>
                    <div class="animate-on-scroll">
                        <div class="text-3xl font-bold text-yellow-400 mb-2">1,470+</div>
                        <div class="text-gray-300">LinkedIn Followers</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce-soft">
            <a href="#about-preview" class="block">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </a>
        </div>
    </section>

    <!-- About Preview Section -->
    <section id="about-preview" class="section-padding bg-white">
        <div class="container-brand">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div class="animate-on-scroll">
                    <div
                        class="inline-flex items-center px-3 py-1 bg-brand-red-50 text-brand-red-800 rounded-full text-sm font-medium mb-6">
                        🚀 Architect of Visibility & Impact
                    </div>

                    <h2 class="display-text mb-6">
                        The <span class="text-brand-gradient">Fintech Queen</span>
                        Transforming Africa
                    </h2>

                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        I'm a business acquisition and growth strategist with a passion for scaling tech businesses,
                        closing high-value deals, and driving digital expansion across Africa. With a strong foundation
                        in project management and business development, I specialize in identifying strategic opportunities
                        and building high-impact partnerships.
                    </p>

                    <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                        Beyond business, I'm deeply committed to digital inclusion and economic empowerment in emerging
                        markets.
                        I believe technology has the power to transform industries and create opportunities, and I'm on a
                        mission
                        to bridge the gap between innovation and accessibility.
                    </p>

                    <!-- Key Achievements -->
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-brand-red-600 rounded-full"></div>
                            <span class="text-gray-700">Master's in Project Management (University of Lusaka)</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-brand-red-600 rounded-full"></div>
                            <span class="text-gray-700">6+ Years IT Project Management at ProBASE</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-brand-red-600 rounded-full"></div>
                            <span class="text-gray-700">Current: Business Development at Probase Group</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-brand-red-600 rounded-full"></div>
                            <span class="text-gray-700">Host of "Elevate & Dominate" Podcast</span>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="btn-primary">
                        Discover My Full Story
                    </a>
                </div>

                <!-- Image -->
                <div class="animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('images/gallery/violet-professional-1.jpg') }}"
                            alt="Violet Nswana Kaponda - Professional Portrait" class="rounded-xl shadow-brand-lg w-full">
                        <!-- Decorative Elements -->
                        <div class="absolute -top-6 -left-6 w-32 h-32 bg-brand-gradient rounded-full opacity-20"></div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-yellow-400 rounded-full opacity-30"></div>

                        <!-- Floating Achievement Card -->
                        <div class="absolute top-4 right-4 bg-white rounded-lg shadow-lg p-4 max-w-xs">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="text-sm font-semibold text-gray-800">International Speaker</span>
                            </div>
                            <p class="text-xs text-gray-600 mt-1">Available for global events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section id="expertise" class="section-padding bg-gray-50">
        <div class="container-brand">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="display-text mb-6">What I Bring to the Table</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Combining strategic vision with practical execution to drive transformational growth
                    across the African tech ecosystem.
                </p>
            </div>

            <!-- Expertise Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Business Development -->
                <div class="card-elevated animate-on-scroll group">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                            Business Acquisition & Strategic Growth
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Expert in scaling tech businesses, closing high-value deals, and identifying
                            strategic opportunities that drive sustainable revenue growth.
                        </p>
                    </div>
                </div>

                <!-- Digital Transformation -->
                <div class="card-elevated animate-on-scroll group">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                            Digital Transformation & Commercial Strategy
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Driving digital expansion across Africa with commercial strategies that
                            bridge innovation gaps and create accessible technology solutions.
                        </p>
                    </div>
                </div>

                <!-- Partnership Building -->
                <div class="card-elevated animate-on-scroll group">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                            High-Value Deal Structuring & Negotiation
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Building high-impact partnerships and structuring complex deals that create
                            mutual value and drive sustainable business growth.
                        </p>
                    </div>
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
                        6+ years of expertise in managing complex software projects, ensuring delivery excellence and
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
>>>>>>> e78563b6fb2fd9d59ed3ac13f2f5fceebd8f8565
                    </div>

<<<<<<< HEAD
                <!-- Thought Leadership -->
                <div class="card-elevated animate-on-scroll group">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                            Thought Leadership in Tech & Digital Inclusion
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Championing digital inclusion and economic empowerment across emerging markets
                            through speaking, podcasting, and strategic consultation.
                        </p>
                    </div>
                </div>

                <!-- Project Management -->
                <div class="card-elevated animate-on-scroll group">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                        </div>
                        <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                            Software Project Management
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            6+ years of expertise in managing complex software projects, ensuring delivery
                            excellence and stakeholder satisfaction across diverse technical initiatives.
                        </p>
                    </div>
                </div>

                <!-- Mindset Coaching -->
                <div class="card-elevated animate-on-scroll group">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                            Mindset & Performance Coaching
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Empowering professionals to step into their power and build limitless careers
                            through mindset transformation and performance optimization strategies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Speaking Topics Preview -->
    <section id="speaking" class="section-padding bg-white">
        <div class="container-brand">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="display-text mb-6">Speaking Topics That Transform</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From fintech innovation to women's leadership, I deliver powerful insights
                    that inspire action and drive meaningful change across Africa's tech ecosystem.
                </p>
            </div>

            <!-- Featured Topics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Fintech & AI -->
                <div class="card-elevated animate-on-scroll group">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                            Fintech & AI in Africa
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Exploring how artificial intelligence and fintech innovations are
                            reshaping Africa's financial landscape and creating unprecedented opportunities
                            for economic growth and inclusion.
                        </p>
                        <div class="text-sm text-brand-red-600 font-medium">
                            Duration: 45-60 minutes • Interactive Q&A included
                        </div>
                    </div>
                </div>

                <!-- Women in Technology -->
                <div class="card-elevated animate-on-scroll group">
                    <div class="p-8">
                        <div
                            class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                            Women in Technology & Leadership
                        </h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Empowering women to break barriers, claim their space in tech,
                            and become leaders who drive organizational transformation and innovation
                            across the African continent.
                        </p>
                        <div class="text-sm text-brand-red-600 font-medium">
                            Duration: 45-60 minutes • Audience: All genders welcome
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center animate-on-scroll">
                <p class="text-lg text-gray-600 mb-6">
                    Ready to inspire your audience with actionable insights and transformational strategies?
                </p>
                <a href="{{ route('speaking') }}" class="btn-primary text-lg px-8 py-4">
                    View All Speaking Topics & Book Now
                </a>
            </div>
        </div>
    </section>

    <!-- Podcast Section -->
    <section id="podcast" class="section-padding bg-brand-black text-white" x-data="podcastPlayer">
        <div class="container-brand">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Content -->
                <div class="animate-on-scroll">
                    <div
                        class="inline-flex items-center px-3 py-1 bg-white bg-opacity-10 text-white rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                        🎙️ 11+ Episodes & Growing
                    </div>

                    <h2 class="display-text text-white mb-6">
                        Elevate & Dominate
                        <span class="text-yellow-400">Podcast</span>
                    </h2>

                    <p class="text-xl text-gray-300 mb-6 leading-relaxed">
                        Join me for powerful conversations about fintech innovation, leadership strategies,
                        wellness, and the mindset shifts that drive success in today's digital economy.
                    </p>

                    <p class="text-lg text-gray-400 mb-8 leading-relaxed">
                        Through "Elevate & Dominate," I share insights on mindset, tech, and wellness,
                        inspiring professionals to step into their power and build limitless careers
                        across the African tech ecosystem and beyond.
                    </p>

                    <!-- Podcast Features -->
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-yellow-400 mb-2">11+</div>
                            <div class="text-gray-400">Episodes Available</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-yellow-400 mb-2">Multi-Platform</div>
                            <div class="text-gray-400">Distribution</div>
                        </div>
                    </div>

                    <!-- Platform Links -->
                    <div class="flex flex-wrap gap-4 mb-8">
                        <a href="https://youtube.com/@elevateanddominate" target="_blank"
                            class="flex items-center space-x-2 bg-red-600 hover:bg-red-700 px-4 py-3 rounded-lg transition duration-200 text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                            <span class="font-medium">YouTube</span>
                        </a>
                        <a href="https://tiktok.com/@violetkaponda" target="_blank"
                            class="flex items-center space-x-2 bg-gray-800 hover:bg-gray-700 px-4 py-3 rounded-lg transition duration-200 text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                            </svg>
                            <span class="font-medium">TikTok</span>
                        </a>
                        <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                            class="flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 px-4 py-3 rounded-lg transition duration-200 text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                            <span class="font-medium">LinkedIn</span>
                        </a>
                    </div>

                    <a href="{{ route('media') }}" class="btn-accent">
                        Listen to All Episodes
                    </a>
                </div>

                <!-- Featured Episode / Speaking Image -->
                <div class="animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('images/speaking/violet-speaking-event-1.jpg') }}"
                            alt="Violet Kaponda Speaking at Event" class="rounded-xl shadow-brand-lg w-full">
                        <!-- Play Button Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button
                                @click="playEpisode({title: 'Latest Episode', description: 'Fintech Innovation in Africa'})"
                                class="w-20 h-20 bg-white bg-opacity-90 rounded-full flex items-center justify-center shadow-lg hover:bg-opacity-100 transition duration-300 group">
                                <svg class="w-8 h-8 text-brand-red-900 ml-1 group-hover:scale-110 transition-transform duration-300"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Episode Info Card -->
                        <div
                            class="absolute bottom-4 left-4 right-4 bg-black bg-opacity-80 rounded-lg p-4 text-white backdrop-blur-sm">
                            <div class="text-sm font-medium mb-1">Latest Episode</div>
                            <div class="text-xs text-gray-300">Building Africa's Digital Future</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof / Testimonials Preview -->
    <section id="testimonials" class="section-padding bg-gray-50">
        <div class="container-brand">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="display-text mb-6">Trusted by Industry Leaders</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    See what colleagues, partners, and industry professionals say about working with Violet.
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="card animate-on-scroll">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <blockquote class="text-gray-700 mb-4 leading-relaxed">
                            "Violet's strategic insights and business development expertise have been instrumental
                            in driving our digital transformation initiatives across the region."
                        </blockquote>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-brand-gradient rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                JM
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">John Mwangi</div>
                                <div class="text-sm text-gray-600">CTO, TechCorp Africa</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="card animate-on-scroll">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <blockquote class="text-gray-700 mb-4 leading-relaxed">
                            "As a keynote speaker, Violet delivered actionable insights that transformed how
                            our team approaches fintech innovation. Highly recommend!"
                        </blockquote>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-brand-gradient rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                AK
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Amara Kone</div>
                                <div class="text-sm text-gray-600">Event Director, FinTech Summit</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="card animate-on-scroll">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <blockquote class="text-gray-700 mb-4 leading-relaxed">
                            "Violet's podcast 'Elevate & Dominate' has been a game-changer for my career.
                            Her insights on mindset and performance are invaluable."
                        </blockquote>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-brand-gradient rounded-full flex items-center justify-center text-white font-semibold mr-3">
                                SM
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Sarah Mutuku</div>
                                <div class="text-sm text-gray-600">Software Engineer, InnovateTech</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="section-padding bg-brand-red-900 text-white">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto text-center animate-on-scroll">
                <h2 class="display-text text-white mb-6">
                    Stay Ahead of Africa's Tech Revolution
                </h2>
                <p class="text-xl text-red-100 mb-8 leading-relaxed">
                    Get exclusive insights on fintech trends, leadership strategies, business development tactics,
                    and opportunities shaping Africa's digital future. Join 1,470+ forward-thinking professionals.
                </p>

                <!-- Newsletter Form -->
                <div x-data="newsletter" class="max-w-lg mx-auto">
                    <form @submit.prevent="subscribe()" class="flex flex-col sm:flex-row gap-4 mb-6">
                        <input type="email" x-model="email" placeholder="Enter your email address"
                            class="flex-1 px-4 py-3 rounded-lg text-brand-black focus:outline-none focus:ring-2 focus:ring-yellow-400 border-0"
                            required>
                        <button type="submit" :disabled="loading"
                            class="btn-accent px-8 py-3 text-lg whitespace-nowrap font-semibold"
                            :class="{ 'opacity-50 cursor-not-allowed': loading }">
                            <span x-show="!loading">Join the Movement</span>
                            <span x-show="loading">Joining...</span>
                        </button>
                    </form>

                    <!-- Success/Error Messages -->
                    <div x-show="success" class="text-green-300 mb-4 font-medium">
                        🎉 Welcome to the community! Check your email for confirmation.
                    </div>
                    <div x-show="error" class="text-red-300 mb-4" x-text="error"></div>

                    <p class="text-red-200 text-sm">
                        ✅ No spam, ever. Unsubscribe anytime. 📧 Monthly insights + exclusive opportunities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="cta" class="section-padding bg-white">
        <div class="container-brand">
            <div class="max-w-5xl mx-auto text-center animate-on-scroll">
                <h2 class="display-text mb-6">
                    Ready to Transform Your Organization?
                </h2>
                <p class="text-xl text-gray-600 mb-8 max-w-4xl mx-auto leading-relaxed">
                    Book Violet for your next conference, corporate event, or strategic consultation.
                    Deliver powerful insights on fintech innovation, digital transformation, and leadership
                    that inspire action and drive meaningful change across Africa's tech ecosystem.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-8">
                    <a href="{{ route('contact') }}" class="btn-primary text-lg px-8 py-4">
                        Book Speaking Engagement
                    </a>
                    <a href="{{ route('about') }}" class="btn-secondary text-lg px-8 py-4">
                        Learn More About Violet
                    </a>
                </div>

                <!-- Quick Contact Info -->
                <div class="border-t border-gray-200 pt-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                        <div>
                            <div class="text-sm font-semibold text-gray-900 mb-1">Speaking Inquiries</div>
                            <a href="mailto:violet@violetkaponda.com" class="text-brand-red-700 hover:text-brand-red-900">
                                violet@violetkaponda.com
                            </a>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-900 mb-1">Based in</div>
                            <span class="text-gray-600">Lusaka, Zambia</span>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-gray-900 mb-1">Response Time</div>
                            <span class="text-gray-600">24-48 hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
