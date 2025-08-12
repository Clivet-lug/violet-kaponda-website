@extends('layouts.app')

@section('title', 'Violet Nswana Kaponda - Fintech Queen | Building Africa\'s Digital Future')
@section('description', 'Violet Nswana Kaponda is the Fintech Queen building Africa\'s digital future. Expert in
    business development, strategic partnerships, and digital transformation across emerging markets.')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Dynamic Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-black"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-black/20"></div>

        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-brand-orange/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-brand-red/10 rounded-full blur-3xl animate-float-delayed">
            </div>
            <div class="absolute top-1/2 right-1/3 w-64 h-64 bg-brand-gold/10 rounded-full blur-3xl animate-float"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <div class="animate-on-scroll">
                <!-- Badge -->
                <div
                    class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-md rounded-full text-sm font-medium mb-8 border border-white/20 shadow-xl">
                    <span class="w-3 h-3 bg-green-400 rounded-full mr-3 animate-pulse"></span>
                    <span class="gradient-text">Available for Speaking Engagements</span>
                </div>

                <!-- Main Headline -->
                <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold mb-8 leading-tight">
                    Building Africa's
                    <span class="block gradient-text animate-on-scroll">Digital Future</span>
                </h1>

                <!-- Subheadline -->
                <p class="text-xl md:text-2xl lg:text-3xl mb-12 text-gray-200 max-w-5xl mx-auto leading-relaxed font-light">
                    I'm Violet Nswana Kaponda, the <span class="text-brand-gold font-semibold">Fintech Queen</span> driving
                    digital transformation across Africa through strategic partnerships, business development, and
                    empowering the next generation of tech leaders.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="#speaking"
                        class="btn-primary text-lg px-10 py-5 shadow-2xl transform hover:scale-105 transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10 flex items-center">
                            🎤 Book Me to Speak
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#podcast"
                        class="glass-btn text-lg px-10 py-5 bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 transition-all duration-300 rounded-xl font-semibold shadow-xl">
                        <span class="flex items-center">
                            🎙️ Listen to Elevate & Dominate
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8m-10 5a9 9 0 1118 0H3z"></path>
                            </svg>
                        </span>
                    </a>
                </div>

                <!-- Social Proof Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                    <div
                        class="glass-card p-6 text-center animate-on-scroll bg-white/5 backdrop-blur-md rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold gradient-text mb-2">6+</div>
                        <div class="text-gray-300 text-sm">Years in Tech Leadership</div>
                    </div>
                    <div
                        class="glass-card p-6 text-center animate-on-scroll bg-white/5 backdrop-blur-md rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold gradient-text mb-2">11+</div>
                        <div class="text-gray-300 text-sm">Podcast Episodes</div>
                    </div>
                    <div
                        class="glass-card p-6 text-center animate-on-scroll bg-white/5 backdrop-blur-md rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold gradient-text mb-2">5</div>
                        <div class="text-gray-300 text-sm">Core Speaking Topics</div>
                    </div>
                    <div
                        class="glass-card p-6 text-center animate-on-scroll bg-white/5 backdrop-blur-md rounded-2xl border border-white/10">
                        <div class="text-4xl font-bold gradient-text mb-2">1,470+</div>
                        <div class="text-gray-300 text-sm">LinkedIn Followers</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
            <a href="#about-preview" class="block p-2">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </a>
        </div>
    </section>

    <!-- About Preview Section -->
    <section id="about-preview" class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-orange/5 to-brand-red/5"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div class="animate-on-scroll from-left">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-brand-orange/10 text-brand-orange rounded-full text-sm font-medium mb-8 border border-brand-orange/20">
                        🚀 Architect of Visibility & Impact
                    </div>

                    <h2 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
                        The <span class="gradient-text">Fintech Queen</span> Transforming Africa
                    </h2>

                    <div class="space-y-6 text-lg text-gray-700 leading-relaxed mb-10">
                        <p>I'm a business acquisition and growth strategist with a passion for scaling tech businesses,
                            closing high-value deals, and driving digital expansion across Africa. With a strong foundation
                            in project management and business development, I specialize in identifying strategic
                            opportunities and building high-impact partnerships.</p>

                        <p>Beyond business, I'm deeply committed to digital inclusion and economic empowerment in emerging
                            markets. I believe technology has the power to transform industries and create opportunities,
                            and I'm on a mission to bridge the gap between innovation and accessibility.</p>
                    </div>

                    <!-- Key Achievements -->
                    <div class="space-y-4 mb-10">
                        <div
                            class="flex items-center space-x-4 p-3 bg-white/50 backdrop-blur-sm rounded-xl border border-gray-200/50">
                            <div class="w-3 h-3 bg-gradient-to-r from-brand-orange to-brand-red rounded-full"></div>
                            <span class="text-gray-700 font-medium">Master's in Project Management (University of
                                Lusaka)</span>
                        </div>
                        <div
                            class="flex items-center space-x-4 p-3 bg-white/50 backdrop-blur-sm rounded-xl border border-gray-200/50">
                            <div class="w-3 h-3 bg-gradient-to-r from-brand-orange to-brand-red rounded-full"></div>
                            <span class="text-gray-700 font-medium">6+ Years IT Project Management at ProBASE</span>
                        </div>
                        <div
                            class="flex items-center space-x-4 p-3 bg-white/50 backdrop-blur-sm rounded-xl border border-gray-200/50">
                            <div class="w-3 h-3 bg-gradient-to-r from-brand-orange to-brand-red rounded-full"></div>
                            <span class="text-gray-700 font-medium">Current: Business Development at Probase Group</span>
                        </div>
                        <div
                            class="flex items-center space-x-4 p-3 bg-white/50 backdrop-blur-sm rounded-xl border border-gray-200/50">
                            <div class="w-3 h-3 bg-gradient-to-r from-brand-orange to-brand-red rounded-full"></div>
                            <span class="text-gray-700 font-medium">Host of "Elevate & Dominate" Podcast</span>
                        </div>
                    </div>

                    <a href="/about" class="btn-primary inline-flex items-center text-lg px-8 py-4">
                        Discover My Full Story
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Image -->
                <div class="animate-on-scroll from-right">
                    <div class="relative">
                        <!-- Placeholder for Violet's image -->
                        <div
                            class="aspect-w-4 aspect-h-5 rounded-3xl overflow-hidden shadow-2xl bg-gradient-to-br from-brand-orange to-brand-red flex items-center justify-center">
                            <div class="text-white text-center p-8">
                                <div
                                    class="w-32 h-32 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <span class="text-6xl font-display font-bold">V</span>
                                </div>
                                <p class="text-xl font-semibold">Professional Portrait</p>
                                <p class="text-sm opacity-75 mt-2">Add: violet-professional-1.jpg</p>
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div
                            class="absolute -top-8 -left-8 w-32 h-32 bg-gradient-to-r from-brand-orange to-brand-gold rounded-full opacity-20 blur-xl">
                        </div>
                        <div
                            class="absolute -bottom-8 -right-8 w-24 h-24 bg-gradient-to-r from-brand-red to-brand-orange rounded-full opacity-30 blur-xl">
                        </div>

                        <!-- Floating Achievement Card -->
                        <div
                            class="absolute top-6 right-6 bg-white/90 backdrop-blur-md rounded-2xl shadow-xl p-4 max-w-xs border border-white/20">
                            <div class="flex items-center space-x-3">
                                <div class="w-4 h-4 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-gray-800">International Speaker</span>
                            </div>
                            <p class="text-xs text-gray-600 mt-2">Available for global events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expertise Section -->
    <section id="expertise" class="py-24 bg-gradient-to-br from-white to-gray-50 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-brand-red/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 left-1/4 w-72 h-72 bg-brand-orange/5 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-20 animate-on-scroll">
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-6">What I Bring to the Table</h2>
                <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Combining strategic vision with practical execution to drive transformational growth across the African
                    tech ecosystem.
                </p>
            </div>

            <!-- Expertise Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Business Development -->
                <div
                    class="card-hover glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold mb-4 text-gray-900 group-hover:text-brand-red transition-colors duration-300">
                        Business Acquisition & Strategic Growth
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Expert in scaling tech businesses, closing high-value deals, and identifying strategic opportunities
                        that drive sustainable revenue growth.
                    </p>
                </div>

                <!-- Digital Transformation -->
                <div
                    class="card-hover glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold mb-4 text-gray-900 group-hover:text-brand-red transition-colors duration-300">
                        Digital Transformation & Commercial Strategy
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Driving digital expansion across Africa with commercial strategies that bridge innovation gaps and
                        create accessible technology solutions.
                    </p>
                </div>

                <!-- Partnership Building -->
                <div
                    class="card-hover glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold mb-4 text-gray-900 group-hover:text-brand-red transition-colors duration-300">
                        High-Value Deal Structuring & Negotiation
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Building high-impact partnerships and structuring complex deals that create mutual value and drive
                        sustainable business growth.
                    </p>
                </div>

                <!-- Thought Leadership -->
                <div
                    class="card-hover glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold mb-4 text-gray-900 group-hover:text-brand-red transition-colors duration-300">
                        Thought Leadership in Tech & Digital Inclusion
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Championing digital inclusion and economic empowerment across emerging markets through speaking,
                        podcasting, and strategic consultation.
                    </p>
                </div>

                <!-- Project Management -->
                <div
                    class="card-hover glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold mb-4 text-gray-900 group-hover:text-brand-red transition-colors duration-300">
                        Software Project Management
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        6+ years of expertise in managing complex software projects, ensuring delivery excellence and
                        stakeholder satisfaction across diverse technical initiatives.
                    </p>
                </div>

                <!-- Mindset Coaching -->
                <div
                    class="card-hover glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll group">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold mb-4 text-gray-900 group-hover:text-brand-red transition-colors duration-300">
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
    <section id="speaking" class="py-24 bg-gradient-to-br from-gray-900 to-black text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/3 left-1/4 w-96 h-96 bg-brand-orange/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-brand-red/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-20 animate-on-scroll">
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-6 text-white">Speaking Topics That
                    Transform</h2>
                <p class="text-xl md:text-2xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    From fintech innovation to women's leadership, I deliver powerful insights that inspire action and drive
                    meaningful change across Africa's tech ecosystem.
                </p>
            </div>

            <!-- Featured Topics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Fintech & AI -->
                <div
                    class="glass-card bg-white/5 backdrop-blur-md p-10 rounded-3xl border border-white/10 shadow-2xl animate-on-scroll group hover:bg-white/10 transition-all duration-300">
                    <div
                        class="w-20 h-20 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold mb-6 text-white group-hover:text-brand-gold transition-colors duration-300">
                        Fintech & AI in Africa
                    </h3>
                    <p class="text-gray-300 leading-relaxed mb-6 text-lg">
                        Exploring how artificial intelligence and fintech innovations are reshaping Africa's financial
                        landscape and creating unprecedented opportunities for economic growth and inclusion.
                    </p>
                    <div class="text-sm text-brand-gold font-medium bg-brand-gold/10 px-4 py-2 rounded-full inline-block">
                        Duration: 45-60 minutes • Interactive Q&A included
                    </div>
                </div>

                <!-- Women in Technology -->
                <div
                    class="glass-card bg-white/5 backdrop-blur-md p-10 rounded-3xl border border-white/10 shadow-2xl animate-on-scroll group hover:bg-white/10 transition-all duration-300">
                    <div
                        class="w-20 h-20 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold mb-6 text-white group-hover:text-brand-gold transition-colors duration-300">
                        Women in Technology & Leadership
                    </h3>
                    <p class="text-gray-300 leading-relaxed mb-6 text-lg">
                        Empowering women to break barriers, claim their space in tech, and become leaders who drive
                        organizational transformation and innovation across the African continent.
                    </p>
                    <div class="text-sm text-brand-gold font-medium bg-brand-gold/10 px-4 py-2 rounded-full inline-block">
                        Duration: 45-60 minutes • Audience: All genders welcome
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="text-center animate-on-scroll">
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    Ready to inspire your audience with actionable insights and transformational strategies?
                </p>
                <a href="/speaking" class="btn-primary text-lg px-10 py-5 inline-flex items-center">
                    View All Speaking Topics & Book Now
                    <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Podcast Section -->
    <section id="podcast"
        class="py-24 bg-gradient-to-br from-brand-red to-brand-orange text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-1/3 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-black/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div class="animate-on-scroll from-left">
                    <div
                        class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-md text-white rounded-full text-sm font-medium mb-8 border border-white/20">
                        🎙️ 11+ Episodes & Growing
                    </div>

                    <h2 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-8 text-white">
                        Elevate & Dominate
                        <span class="block text-yellow-300">Podcast</span>
                    </h2>

                    <p class="text-xl md:text-2xl text-white/90 mb-8 leading-relaxed">
                        Join me for powerful conversations about fintech innovation, leadership strategies, wellness, and
                        the mindset shifts that drive success in today's digital economy.
                    </p>

                    <p class="text-lg text-white/80 mb-10 leading-relaxed">
                        Through "Elevate & Dominate," I share insights on mindset, tech, and wellness, inspiring
                        professionals to step into their power and build limitless careers across the African tech ecosystem
                        and beyond.
                    </p>

                    <!-- Podcast Features -->
                    <div class="grid grid-cols-2 gap-8 mb-10">
                        <div
                            class="glass-card bg-white/10 backdrop-blur-md p-6 rounded-2xl text-center border border-white/20">
                            <div class="text-4xl font-bold text-yellow-300 mb-2">11+</div>
                            <div class="text-white/80">Episodes Available</div>
                        </div>
                        <div
                            class="glass-card bg-white/10 backdrop-blur-md p-6 rounded-2xl text-center border border-white/20">
                            <div class="text-4xl font-bold text-yellow-300 mb-2">Multi</div>
                            <div class="text-white/80">Platform Distribution</div>
                        </div>
                    </div>

                    <!-- Platform Links -->
                    <div class="flex flex-wrap gap-4 mb-10">
                        <a href="https://youtube.com/@elevateanddominate" target="_blank"
                            class="flex items-center space-x-3 bg-red-600/80 backdrop-blur-md hover:bg-red-600 px-6 py-4 rounded-xl transition duration-300 text-white border border-white/20 shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814z" />
                            </svg>
                            <span class="font-medium text-lg">YouTube</span>
                        </a>
                        <a href="https://tiktok.com/@violetkaponda" target="_blank"
                            class="flex items-center space-x-3 bg-black/60 backdrop-blur-md hover:bg-black/80 px-6 py-4 rounded-xl transition duration-300 text-white border border-white/20 shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72z" />
                            </svg>
                            <span class="font-medium text-lg">TikTok</span>
                        </a>
                        <a href="https://linkedin.com/in/violetkaponda" target="_blank"
                            class="flex items-center space-x-3 bg-blue-600/80 backdrop-blur-md hover:bg-blue-600 px-6 py-4 rounded-xl transition duration-300 text-white border border-white/20 shadow-xl">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286z" />
                            </svg>
                            <span class="font-medium text-lg">LinkedIn</span>
                        </a>
                    </div>

                    <a href="/media"
                        class="glass-btn bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white/20 px-8 py-4 rounded-xl font-semibold text-lg inline-flex items-center">
                        Listen to All Episodes
                        <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h8m-10 5a9 9 0 1118 0H3z"></path>
                        </svg>
                    </a>
                </div>

                <!-- Featured Episode / Speaking Image -->
                <div class="animate-on-scroll from-right">
                    <div class="relative">
                        <!-- Placeholder for Speaking/Podcast image -->
                        <div
                            class="aspect-w-4 aspect-h-5 rounded-3xl overflow-hidden shadow-2xl bg-gradient-to-br from-gray-800 to-black flex items-center justify-center">
                            <div class="text-white text-center p-8">
                                <div
                                    class="w-32 h-32 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-xl font-semibold mb-2">Speaking Event Photo</p>
                                <p class="text-sm opacity-75">Add: violet-speaking-event-1.jpg</p>
                            </div>
                        </div>

                        <!-- Play Button Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button
                                class="w-24 h-24 bg-white/90 backdrop-blur-md rounded-full flex items-center justify-center shadow-2xl hover:bg-white transition duration-300 group border border-white/20">
                                <svg class="w-10 h-10 text-brand-red ml-1 group-hover:scale-110 transition-transform duration-300"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Episode Info Card -->
                        <div
                            class="absolute bottom-6 left-6 right-6 bg-black/80 backdrop-blur-md rounded-2xl p-6 text-white border border-white/20">
                            <div class="text-sm font-medium mb-2 text-yellow-300">Latest Episode</div>
                            <div class="text-lg font-semibold">Building Africa's Digital Future</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-orange/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-1/4 w-72 h-72 bg-brand-red/5 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20 animate-on-scroll">
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Trusted by Industry Leaders</h2>
                <p class="text-xl md:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    See what colleagues, partners, and industry professionals say about working with Violet.
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div
                    class="glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400">
                            <!-- 5 Stars -->
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
                    <blockquote class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Violet's strategic insights and business development expertise have been instrumental in driving
                        our digital transformation initiatives across the region."
                    </blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-brand-orange to-brand-red rounded-full flex items-center justify-center text-white font-semibold mr-4 text-lg">
                            JM
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 text-lg">John Mwangi</div>
                            <div class="text-sm text-gray-600">CTO, TechCorp Africa</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400">
                            <!-- 5 Stars -->
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
                    <blockquote class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "As a keynote speaker, Violet delivered actionable insights that transformed how our team approaches
                        fintech innovation. Highly recommend!"
                    </blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-brand-orange to-brand-red rounded-full flex items-center justify-center text-white font-semibold mr-4 text-lg">
                            AK
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 text-lg">Amara Kone</div>
                            <div class="text-sm text-gray-600">Event Director, FinTech Summit</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-xl animate-on-scroll hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-6">
                        <div class="flex text-yellow-400">
                            <!-- 5 Stars -->
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
                    <blockquote class="text-gray-700 mb-6 leading-relaxed text-lg">
                        "Violet's podcast 'Elevate & Dominate' has been a game-changer for my career. Her insights on
                        mindset and performance are invaluable."
                    </blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-brand-orange to-brand-red rounded-full flex items-center justify-center text-white font-semibold mr-4 text-lg">
                            SM
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 text-lg">Sarah Mutuku</div>
                            <div class="text-sm text-gray-600">Software Engineer, InnovateTech</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter"
        class="py-24 bg-gradient-to-br from-brand-red to-brand-orange text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 right-1/3 w-96 h-96 bg-white/5 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-black/10 rounded-full blur-3xl animate-float-delayed">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center animate-on-scroll">
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-8 text-white">
                    Stay Ahead of Africa's Tech Revolution
                </h2>
                <p class="text-xl md:text-2xl text-white/90 mb-12 leading-relaxed max-w-3xl mx-auto">
                    Get exclusive insights on fintech trends, leadership strategies, business development tactics, and
                    opportunities shaping Africa's digital future. Join <span
                        class="text-yellow-300 font-semibold">1,470+</span> forward-thinking professionals.
                </p>

                <!-- Newsletter Form -->
                <div class="max-w-lg mx-auto mb-8">
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Enter your email address" required
                            class="flex-1 px-6 py-4 rounded-xl text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-4 focus:ring-yellow-400/50 border-0 text-lg font-medium shadow-xl backdrop-blur-sm">
                        <button type="submit"
                            class="glass-btn bg-white/10 backdrop-blur-md border border-white/20 text-white hover:bg-white hover:text-brand-red px-8 py-4 text-lg whitespace-nowrap font-semibold rounded-xl shadow-xl transition-all duration-300 hover:scale-105">
                            Join the Movement 🚀
                        </button>
                    </form>
                </div>

                <div class="flex flex-wrap justify-center items-center gap-8 text-white/80 text-lg mb-8">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        No spam, ever
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Unsubscribe anytime
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Exclusive opportunities
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="cta" class="py-24 bg-gradient-to-br from-white to-gray-50 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-orange/5 rounded-full blur-3xl animate-float"></div>
            <div
                class="absolute bottom-1/4 right-1/4 w-72 h-72 bg-brand-red/5 rounded-full blur-3xl animate-float-delayed">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto text-center animate-on-scroll">
                <h2 class="font-display text-4xl md:text-5xl lg:text-6xl font-bold mb-8 leading-tight">
                    Ready to Transform Your Organization?
                </h2>
                <p class="text-xl md:text-2xl text-gray-600 mb-12 max-w-5xl mx-auto leading-relaxed">
                    Book Violet for your next conference, corporate event, or strategic consultation. Deliver powerful
                    insights on fintech innovation, digital transformation, and leadership that inspire action and drive
                    meaningful change across Africa's tech ecosystem.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-16">
                    <a href="/contact"
                        class="btn-primary text-lg px-10 py-5 inline-flex items-center shadow-2xl transform hover:scale-105 transition-all duration-300">
                        📞 Book Speaking Engagement
                        <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="/about"
                        class="glass-btn bg-white/60 backdrop-blur-md border border-gray-200 text-gray-800 hover:bg-white hover:shadow-2xl px-10 py-5 text-lg font-semibold rounded-xl shadow-xl transition-all duration-300 inline-flex items-center transform hover:scale-105">
                        Learn More About Violet
                        <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </a>
                </div>

                <!-- Quick Contact Info -->
                <div class="border-t border-gray-200 pt-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                        <div
                            class="glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-lg hover:shadow-xl transition-all duration-300 group">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="text-lg font-semibold text-gray-900 mb-2">Speaking Inquiries</div>
                            <a href="mailto:violet@violetkaponda.com"
                                class="text-brand-red hover:text-brand-orange transition-colors duration-300 font-medium text-lg">
                                violet@violetkaponda.com
                            </a>
                        </div>

                        <div
                            class="glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-lg hover:shadow-xl transition-all duration-300 group">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div class="text-lg font-semibold text-gray-900 mb-2">Based in</div>
                            <span class="text-gray-600 font-medium text-lg">Lusaka, Zambia 🇿🇲</span>
                        </div>

                        <div
                            class="glass-card bg-white/60 backdrop-blur-md p-8 rounded-3xl border border-white/20 shadow-lg hover:shadow-xl transition-all duration-300 group">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-brand-orange to-brand-red rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="text-lg font-semibold text-gray-900 mb-2">Response Time</div>
                            <span class="text-gray-600 font-medium text-lg">24-48 hours ⚡</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Styles for Glass Effects and Animations -->
    <style>
        .glass-card {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .glass-btn {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px) scale(0.95);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0) scale(1);
        }

        .animate-on-scroll.from-left {
            transform: translateX(-50px) scale(0.95);
        }

        .animate-on-scroll.from-left.visible {
            transform: translateX(0) scale(1);
        }

        .animate-on-scroll.from-right {
            transform: translateX(50px) scale(0.95);
        }

        .animate-on-scroll.from-right.visible {
            transform: translateX(0) scale(1);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(2deg);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(-2deg);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 6s ease-in-out infinite 2s;
        }
    </style>

    <!-- JavaScript for Scroll Animations -->
    <script>
        // Intersection Observer for Scroll Animations
        document.addEventListener('DOMContentLoaded', function() {
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
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            animatedElements.forEach(el => observer.observe(el));
        });

        // Enhanced Newsletter Form
        document.addEventListener('DOMContentLoaded', function() {
            const newsletterForm = document.querySelector('#newsletter form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const button = this.querySelector('button[type="submit"]');
                    const originalText = button.innerHTML;

                    // Show loading state
                    button.innerHTML = 'Joining... ⏳';
                    button.disabled = true;

                    // Simulate API call
                    setTimeout(() => {
                        button.innerHTML = 'Welcome! 🎉';
                        button.classList.add('bg-green-500', 'hover:bg-green-600');

                        // Reset after 3 seconds
                        setTimeout(() => {
                            button.innerHTML = originalText;
                            button.disabled = false;
                            button.classList.remove('bg-green-500', 'hover:bg-green-600');
                        }, 3000);
                    }, 2000);
                });
            }
        });
    </script>
@endsection
