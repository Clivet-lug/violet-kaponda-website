@extends('layouts.app')

@section('title', 'About Violet Nswana Kaponda - Founder & CEO, AVEC Technologies | Building Africa\'s Digital Future')
@section('description',
    'Learn about Violet Nswana Kaponda\'s journey from IT Project Manager to Founder & CEO of AVEC Technologies.
    Discover her mission to drive AI and digital infrastructure transformation across Africa.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-10 bg-gradient-to-br from-gray-50 to-gray-100 overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-violet-100 to-violet-100 rounded-full blur-3xl opacity-40">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-violet-100 to-yellow-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Content -->
                <div class="animate-on-scroll space-y-8 -mt-1">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium shadow-sm">
                        🚀 Founder & CEO, AVEC Technologies
                    </div>

                    <div class="space-y-4">
                        <h1 class="text-4xl md:text-6xl font-display font-bold text-gray-900 leading-tight">
                            Building Africa's
                            <span
                                class="bg-gradient-to-r from-violet-600 via-amber-600 to-blue-600 bg-clip-text text-transparent">
                                Digital Future
                            </span>
                        </h1>
                    </div>

                    <p class="text-xl text-gray-700 leading-relaxed">
                        I'm Violet Nswana Kaponda, Founder & CEO of AVEC Technologies — a digital infrastructure and AI
                        company building the systems that power modern African institutions. Welcome to my story of
                        transformation, impact, and limitless possibilities.
                    </p>

                    <div class="grid grid-cols-2 gap-6">
                        <div
                            class="bg-white/80 backdrop-blur-md rounded-xl p-4 shadow-lg border border-white/20 text-center">
                            <div class="text-2xl font-bold text-violet-800 mb-1">10+</div>
                            <div class="text-sm text-gray-600">Years in Tech Leadership</div>
                        </div>
                        <div
                            class="bg-white/80 backdrop-blur-md rounded-xl p-4 shadow-lg border border-white/20 text-center">
                            <div class="text-2xl font-bold text-violet-800 mb-1">5000+</div>
                            <div class="text-sm text-gray-600">Followers Across Social Media Platforms</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                            class="group flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-xl text-white font-medium shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                            <span>Connect on LinkedIn</span>
                        </a>

                        <a href="https://www.youtube.com/embed/xtmlZ5w70uE?autoplay=1" target="_blank"
                            class="group flex items-center space-x-2 bg-red-600 hover:bg-red-700 px-6 py-3 rounded-xl text-white font-medium shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                            <span>Watch Podcast</span>
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="animate-on-scroll lg:order-2">
                    <div class="relative">
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/hero/fintechQ1.webp') }}"
                                alt="Violet Nswana Kaponda - Founder & CEO, AVEC Technologies"
                                class="w-full h-auto object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent">
                            </div>
                        </div>

                        <div
                            class="absolute -top-6 -left-6 bg-white/95 backdrop-blur-md rounded-xl p-4 shadow-xl border border-white/20 max-w-xs">
                            <div class="flex items-center space-x-2 mb-1">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-gray-800">Founder & CEO, AVEC</span>
                            </div>
                            <p class="text-xs text-gray-600">Building Digital Africa</p>
                        </div>

                        <div
                            class="absolute -bottom-6 -right-6 bg-gradient-to-r from-violet-600 to-blue-600 rounded-xl p-4 shadow-xl text-white max-w-xs">
                            <div class="text-sm font-bold">International Speaker</div>
                            <div class="text-xs opacity-90">Available globally</div>
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

    <!-- Recent Highlights Section -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    🌟 Recent Highlights
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4">
                    Making <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Impact</span>
                    Across Africa
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    From speaking at prestigious conferences to building the digital infrastructure powering African
                    institutions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- PMI Conference Speaking -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-lg font-bold text-gray-900 mb-2 group-hover:text-amber-700 transition-colors duration-300">
                        PMI Zambia 2025 Conference</h3>
                    <p class="text-gray-600 text-sm mb-4">Speaking on "Agile Leadership: Empowering Projects in a
                        Tech-Driven World" - joining other dynamic minds to unpack transformational leadership.</p>
                    <div class="text-xs text-amber-600 font-medium">Featured Speaker</div>
                </div>

                <!-- AVEC Technologies Launch -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-lg font-bold text-gray-900 mb-2 group-hover:text-amber-700 transition-colors duration-300">
                        Founding AVEC Technologies</h3>
                    <p class="text-gray-600 text-sm mb-4">Launching AVEC to build the digital infrastructure and AI systems
                        that help African governments, universities, and enterprises modernize at scale.</p>
                    <div class="text-xs text-amber-600 font-medium">Founder & CEO</div>
                </div>

                <!-- Podcast Launch -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 14.142m-5.657-2.121L8 14.586l-7.778-7.778 2.828-2.828L8 9.932l7.778-7.778z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-lg font-bold text-gray-900 mb-2 group-hover:text-amber-700 transition-colors duration-300">
                        "Elevate & Dominate" Podcast</h3>
                    <p class="text-gray-600 text-sm mb-4">Launching "The Audacity Series" - empowering professionals to
                        reclaim their voice, power, and presence in today's digital economy.</p>
                    <div class="text-xs text-amber-600 font-medium">Content Creator</div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Story Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <div
            class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-violet-200/30 to-blue-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-cyan-200/30 to-violet-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    My <span class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Story</span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    From IT Project Manager to Founder & CEO of AVEC Technologies - a journey of transformation, impact, and
                    building the digital infrastructure that powers African institutions.
                </p>
            </div>

            <div class="space-y-8 animate-on-scroll">
                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20">
                    <p class="text-lg leading-relaxed text-gray-700 mb-6">
                        I started my career as an IT Project Manager, learning firsthand how fragmented systems and manual
                        processes hold African institutions back. That experience shaped everything that followed — a
                        decade-long path through business development, strategic partnerships, and ultimately, founding my
                        own technology company.
                    </p>

                    <p class="text-lg leading-relaxed text-gray-700 mb-6">
                        Today, as <strong class="text-amber-700">Founder & CEO of AVEC Technologies</strong>, I lead the
                        design and deployment of AI-powered systems and digital infrastructure that help governments,
                        universities, financial institutions, and enterprises across Africa modernize operations, manage
                        data securely, and scale efficiently. I believe Africa's next era of growth must be built on strong,
                        sovereign digital foundations — built on the continent, for the continent.
                    </p>

                    <p class="text-lg leading-relaxed text-gray-700">
                        Beyond AVEC, I co-founded Sunga to advance financial inclusion, and Uniplexity AI to push the
                        boundaries of what African AI innovation can look like. Through my podcast "Elevate & Dominate," I
                        share insights on technology, mindset, and building high-impact ventures — inspiring professionals
                        and founders to step into their power. I'm always open to meaningful conversations and
                        collaborations that align with this vision. Let's connect and explore opportunities to build, scale,
                        and transform Africa's digital future together.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Journey Timeline -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-violet-100 to-blue-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-cyan-100 to-violet-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    📈 Professional Journey
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    A Decade of <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Growth &
                        Impact</span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Building expertise across the African tech ecosystem through strategic leadership and innovation.
                </p>
            </div>

            <div class="relative">
                <div
                    class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-violet-200 via-violet-300 to-blue-300 shadow-sm">
                </div>

                <div class="space-y-12">

                    <!-- AVEC Technologies -->
                    <div class="relative flex items-center animate-on-scroll">
                        <div
                            class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-gradient-to-r from-violet-600 to-blue-600 rounded-full border-4 border-white shadow-xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                        </div>
                        <div class="ml-16 md:ml-0 md:w-1/2 md:pl-8 md:ml-auto">
                            <div
                                class="bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <div class="text-sm font-semibold text-violet-600 mb-2">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                                    2025 - Present
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Founder & Chief Executive Officer</h3>
                                <div class="text-violet-700 font-medium mb-3">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                    AVEC Technologies
                                </div>
                                <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                    Founded AVEC Technologies to design and deploy secure digital infrastructure and
                                    AI-powered systems that enable African institutions to operate intelligently and at
                                    scale. Leading product strategy across DIMS, AI agents, digital identity, and government
                                    digital transformation solutions.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-violet-50 text-violet-700 rounded-full text-sm font-medium">AI
                                        & Infrastructure</span>
                                    <span
                                        class="px-3 py-1 bg-violet-50 text-violet-700 rounded-full text-sm font-medium">Product
                                        Strategy</span>
                                    <span
                                        class="px-3 py-1 bg-violet-50 text-violet-700 rounded-full text-sm font-medium">Enterprise
                                        Systems</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sunga Role -->
                    <div class="relative flex items-center animate-on-scroll">
                        <div
                            class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-full border-4 border-white shadow-xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                        </div>
                        <div class="ml-16 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                            <div
                                class="bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <div class="text-sm font-semibold text-emerald-600 mb-2 flex md:justify-end">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                                    2025 - Present
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2 md:text-right">Co-Founder & Chief Operating
                                    Officer</h3>
                                <div class="text-emerald-700 font-medium mb-3 flex md:justify-end">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                    Sunga
                                </div>
                                <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                    Leading operational strategy, partnerships, and growth initiatives while overseeing
                                    product development focused on group savings and inclusive finance. Spearheading
                                    initiatives that foster digital trust and financial literacy across Zambia, driving
                                    strategic vision to position Sunga as a household name in African fintech.
                                </p>
                                <div class="flex flex-wrap gap-2 md:justify-end">
                                    <span
                                        class="px-3 py-1 bg-emerald-50 text-emerald-700 rounded-full text-sm font-medium">Operations</span>
                                    <span
                                        class="px-3 py-1 bg-emerald-50 text-emerald-700 rounded-full text-sm font-medium">Product
                                        Development</span>
                                    <span
                                        class="px-3 py-1 bg-emerald-50 text-emerald-700 rounded-full text-sm font-medium">Financial
                                        Inclusion</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Uniplexity AI -->
                    <div class="relative flex items-center animate-on-scroll">
                        <div
                            class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-gradient-to-r from-purple-600 to-gray-600 rounded-full border-4 border-white shadow-xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                        </div>
                        <div class="ml-16 md:ml-0 md:w-1/2 md:pl-8 md:ml-auto">
                            <div
                                class="bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <div class="text-sm font-semibold text-purple-600 mb-2">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                                    Jan 2025 - Present
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Co-Founder & Chief Strategy and Growth
                                    Officer</h3>
                                <div class="text-purple-700 font-medium mb-3">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                    Uniplexity AI
                                </div>
                                <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                    Leading strategic partnerships and business growth initiatives while positioning
                                    Uniplexity AI as a leader in Africa's digital and AI innovation.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium">Artificial
                                        Intelligence</span>
                                    <span
                                        class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium">Business
                                        Development</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Probase -->
                    <div class="relative flex items-center animate-on-scroll">
                        <div
                            class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-gradient-to-r from-violet-600 to-blue-600 rounded-full border-4 border-white shadow-xl flex items-center justify-center z-10">
                            <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                        </div>
                        <div class="ml-16 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                            <div
                                class="bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <div class="text-sm font-semibold text-amber-600 mb-2 flex md:justify-end">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                                    Feb 2024 - 2025
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2 md:text-right">Lead Business Development &
                                    Strategic Partnerships</h3>
                                <div class="text-amber-700 font-medium mb-3 flex md:justify-end">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                    Probase Group
                                </div>
                                <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                    Led business acquisition and growth strategies, driving digital expansion across Africa,
                                    and building high-impact partnerships that delivered measurable results and
                                    transformational value.
                                </p>
                                <div class="flex flex-wrap gap-2 md:justify-end">
                                    <span
                                        class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-sm font-medium">Business
                                        Development</span>
                                    <span
                                        class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-sm font-medium">Strategic
                                        Partnerships</span>
                                    <span
                                        class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-sm font-medium">Deal
                                        Structuring</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- IT Project Manager -->
                    <div class="relative flex items-center animate-on-scroll">
                        <div
                            class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full border-4 border-white shadow-xl flex items-center justify-center z-10">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-16 md:ml-0 md:w-1/2 md:pl-8 md:ml-auto">
                            <div
                                class="bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <div class="text-sm font-semibold text-blue-600 mb-2">Sep 2017 - Feb 2024 (6 yrs 6 mos)
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">IT Project Manager</h3>
                                <div class="text-blue-700 font-medium mb-3">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                    ProBASE, Zambia
                                </div>
                                <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                    Managed complex software projects, ensuring delivery excellence and stakeholder
                                    satisfaction across diverse technical initiatives. Built the foundation for my expertise
                                    in project management and business development.
                                </p>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Project
                                        Management</span>
                                    <span
                                        class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Software
                                        Development</span>
                                    <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Team
                                        Leadership</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Academic Excellence -->
                    <div class="relative flex items-center animate-on-scroll">
                        <div
                            class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-10 h-10 bg-gradient-to-r from-green-600 to-emerald-600 rounded-full border-4 border-white shadow-xl flex items-center justify-center z-10">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                            </svg>
                        </div>
                        <div class="ml-16 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                            <div
                                class="bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <div class="text-sm font-semibold text-green-600 mb-2 flex md:justify-end">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    2019 - 2021
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2 md:text-right">Academic Excellence</h3>
                                <div class="text-green-700 font-medium mb-3 flex md:justify-end">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    </svg>
                                    University of Lusaka
                                </div>
                                <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                    Earned Master's degree in Project Management while excelling in professional role,
                                    demonstrating commitment to continuous learning and academic excellence in leadership.
                                </p>
                                <div class="flex flex-wrap gap-2 md:justify-end">
                                    <span
                                        class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-medium">Master's
                                        Degree</span>
                                    <span
                                        class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm font-medium">Project
                                        Management</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <div
            class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-violet-200/30 to-blue-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-cyan-200/30 to-violet-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    🎓 Education & Qualifications
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Building <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Expertise</span>
                    Through Learning
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Continuous learning and academic excellence as the foundation for professional growth.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-violet-500 to-blue-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l9-5-9-5-9 5 9 5z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-amber-700 transition-colors duration-300">
                        Master's Degree</h3>
                    <div class="flex items-center text-amber-700 font-medium mb-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                        University of Lusaka
                    </div>
                    <div class="text-gray-600 mb-4 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3a4 4 0 118 0v4m-4 0v2m-6 6h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                            </path>
                        </svg>
                        Project Management • 2019 - 2021
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                        Advanced studies in project management methodologies, strategic planning, and organizational
                        leadership, providing the foundation for my expertise in managing complex business initiatives and
                        driving digital transformation.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-xs font-medium">Strategic
                            Planning</span>
                        <span
                            class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-xs font-medium">Leadership</span>
                        <span class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-xs font-medium">Project
                            Management</span>
                    </div>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition-colors duration-300">
                        Bachelor's Degree</h3>
                    <div class="flex items-center text-blue-700 font-medium mb-2">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                        University of Zambia
                    </div>
                    <div class="text-gray-600 mb-4 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3a4 4 0 118 0v4m-4 0v2m-6 6h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z">
                            </path>
                        </svg>
                        2012 - 2017
                    </div>
                    <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                        Comprehensive undergraduate education that provided the analytical thinking, problem-solving skills,
                        and academic rigor that underpin my professional success in technology and business development
                        across emerging markets.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">Analytical
                            Thinking</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">Problem
                            Solving</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">Research</span>
                    </div>
                </div>
            </div>

            <div class="mt-12 animate-on-scroll">
                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20">
                    <h3 class="text-xl font-bold text-gray-900 mb-6 text-center">
                        Additional <span class="text-amber-600">Qualifications & Expertise</span>
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">AI & Digital Infrastructure</h4>
                            <p class="text-sm text-gray-600">Designing AI-powered, scalable systems</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">Thought Leadership</h4>
                            <p class="text-sm text-gray-600">Public speaking & content creation</p>
                        </div>
                        <div class="text-center">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-violet-500 to-blue-500 rounded-xl flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">Digital Transformation</h4>
                            <p class="text-sm text-gray-600">Technology adoption & change management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values & Mission -->
    <section class="py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-violet-500/20 to-blue-500/20 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-violet-500/20 to-blue-500/20 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-cyan-500/10 to-violet-500/10 rounded-full blur-3xl">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-medium mb-6">
                    💎 My Mission & Values
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    The Principles That <span
                        class="bg-gradient-to-r from-violet-400 to-cyan-400 bg-clip-text text-transparent">Drive Me</span>
                </h2>
                <p class="text-xl text-gray-300 leading-relaxed">
                    The purpose and values that guide everything I do in the African tech ecosystem.
                </p>
            </div>

            <div class="mb-16 animate-on-scroll">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 shadow-xl">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-violet-400 to-cyan-400 rounded-xl flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-violet-400 mb-4">My Mission</h3>
                    <p class="text-xl text-gray-200 leading-relaxed">
                        To design and deploy secure digital infrastructure and AI-powered systems that enable African
                        institutions to operate intelligently and at scale — building Africa's next era of growth on strong,
                        sovereign digital foundations.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="animate-on-scroll group">
                    <div
                        class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300 hover:scale-105 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-violet-400 to-cyan-400 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-3 group-hover:text-violet-400 transition-colors duration-300">
                            Digital Sovereignty</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Ensuring African institutions own and control the digital infrastructure that powers their
                            operations, rather than depending entirely on external systems.
                        </p>
                    </div>
                </div>

                <div class="animate-on-scroll group">
                    <div
                        class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300 hover:scale-105 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-violet-400 to-cyan-400 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-3 group-hover:text-violet-400 transition-colors duration-300">
                            Innovation Excellence</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Driving cutting-edge AI and infrastructure solutions that create sustainable value and
                            competitive advantage for African institutions.
                        </p>
                    </div>
                </div>

                <div class="animate-on-scroll group">
                    <div
                        class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300 hover:scale-105 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-violet-400 to-cyan-400 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-3 group-hover:text-violet-400 transition-colors duration-300">
                            Empowerment</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Inspiring professionals and founders to step into their power, build limitless careers, and
                            become leaders who drive meaningful change.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recognition & Achievements -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-violet-100 to-blue-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-cyan-100 to-violet-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    🏆 Recognition & Achievements
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Milestones of <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Impact</span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Recognition and achievements that reflect my impact across the African tech ecosystem.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </div>
                        <div>
                            <h3
                                class="text-lg font-bold text-gray-900 group-hover:text-blue-700 transition-colors duration-300">
                                LinkedIn Thought Leader</h3>
                            <p class="text-sm text-gray-600">2,000+ followers and growing</p>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Building a strong professional network and sharing insights that inspire and educate professionals
                        across the African tech ecosystem through consistent content creation.
                    </p>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-600 to-pink-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3
                                class="text-lg font-bold text-gray-900 group-hover:text-red-700 transition-colors duration-300">
                                Podcast Host</h3>
                            <p class="text-sm text-gray-600">"Elevate & Dominate" - 11+ episodes</p>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Sharing insights on technology, mindset, and building high-impact ventures to inspire professionals
                        and founders through "The Audacity Series."
                    </p>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-violet-600 to-blue-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3
                                class="text-lg font-bold text-gray-900 group-hover:text-amber-700 transition-colors duration-300">
                                International Speaker</h3>
                            <p class="text-sm text-gray-600">Available for global events</p>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Delivering transformational insights on AI, digital infrastructure, and technology leadership across
                        Africa at prestigious conferences like PMI Zambia 2025.
                    </p>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3
                                class="text-lg font-bold text-gray-900 group-hover:text-green-700 transition-colors duration-300">
                                Academic Excellence</h3>
                            <p class="text-sm text-gray-600">BSc, MSc Project Management</p>
                        </div>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Strong academic foundation with advanced degrees in project management, providing the theoretical
                        framework for practical business excellence and leadership.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Personal Philosophy -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <div
            class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-violet-200/30 to-blue-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-cyan-200/30 to-violet-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    🧠 My Philosophy
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Beliefs That <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Guide Me</span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    The principles that shape my approach to business, leadership, and life.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-violet-500 to-blue-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-amber-700 transition-colors duration-300">
                        Limitless Mindset</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                        I believe in the power of thinking beyond traditional boundaries. Success isn't limited by
                        geography, background, or circumstance—it's determined by vision, preparation, and the courage to
                        take action.
                    </p>
                    <blockquote
                        class="border-l-4 border-amber-500 pl-4 italic text-gray-700 bg-violet-50 rounded-r-lg p-3">
                        "Your potential is unlimited when you refuse to accept limitations."
                    </blockquote>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-red-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Impact Over Income</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                        While financial success is important, true fulfillment comes from creating meaningful change. I
                        focus on building solutions that empower institutions and drive sustainable transformation.
                    </p>
                    <blockquote class="border-l-4 border-red-500 pl-4 italic text-gray-700 bg-red-50 rounded-r-lg p-3">
                        "Success is measured not just by what you achieve, but by whom you lift up along the way."
                    </blockquote>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-blue-700 transition-colors duration-300">
                        Continuous Evolution</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                        The technology landscape is constantly evolving, and so must we. I'm committed to lifelong learning,
                        adapting to new challenges, and staying ahead of industry trends.
                    </p>
                    <blockquote class="border-l-4 border-blue-500 pl-4 italic text-gray-700 bg-blue-50 rounded-r-lg p-3">
                        "Growth is not a destination—it's a way of life."
                    </blockquote>
                </div>

                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-xl font-bold text-gray-900 mb-4 group-hover:text-green-700 transition-colors duration-300">
                        Collaborative Leadership</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                        The best solutions emerge when diverse minds work together. I believe in building inclusive teams,
                        fostering open dialogue, and creating environments where everyone can contribute their best.
                    </p>
                    <blockquote class="border-l-4 border-green-500 pl-4 italic text-gray-700 bg-green-50 rounded-r-lg p-3">
                        "Leadership is not about being in charge—it's about taking care of those in your charge."
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Focus Areas -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-violet-100 to-blue-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-cyan-100 to-violet-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-violet-50 to-blue-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium mb-6">
                    🎯 Current Focus Areas
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Strategic <span
                        class="bg-gradient-to-r from-violet-600 to-blue-600 bg-clip-text text-transparent">Initiatives</span>
                    Driving Impact
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    The passion projects and strategic initiatives driving my work today.
                </p>
            </div>

            <div class="space-y-8">

                <!-- AI & Digital Infrastructure -->
                <div
                    class="bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 animate-on-scroll">
                    <div class="flex items-start space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">AI & Digital Infrastructure</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                Leading the design and deployment of AI-powered systems and secure digital infrastructure
                                through AVEC Technologies — building the platforms governments, universities, and
                                enterprises rely on to modernize and scale.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">AI
                                    Systems</span>
                                <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Digital
                                    Identity</span>
                                <span
                                    class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Enterprise
                                    Platforms</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Women in Tech -->
                <div
                    class="bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 animate-on-scroll">
                    <div class="flex items-start space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Women's Leadership in Tech</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                Championing women's advancement in technology through mentorship, advocacy, and creating
                                platforms for visibility. Through my podcast and speaking engagements, I inspire women to
                                step into leadership roles.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium">Mentorship</span>
                                <span
                                    class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium">Leadership
                                    Development</span>
                                <span
                                    class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium">Career
                                    Advancement</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Government Digital Transformation -->
                <div
                    class="bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 animate-on-scroll">
                    <div class="flex items-start space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-violet-500 to-blue-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Government Digital Transformation</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 text-justify">
                                Helping public institutions navigate their digital evolution through strategic planning, AI
                                adoption, and change management — building systems that improve transparency, efficiency,
                                and citizen-centric service delivery.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-sm font-medium">Strategy
                                    Development</span>
                                <span class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-sm font-medium">Change
                                    Management</span>
                                <span
                                    class="px-3 py-1 bg-violet-50 text-amber-700 rounded-full text-sm font-medium">Technology
                                    Adoption</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section
        class="py-20 bg-gradient-to-br from-violet-600 via-violet-600 to-blue-600 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="animate-on-scroll space-y-8">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    Let's Build the Future <span class="text-cyan-200">Together</span>
                </h2>
                <p class="text-xl text-violet-100 leading-relaxed max-w-3xl mx-auto">
                    Ready to explore opportunities for partnership, bring AVEC's digital infrastructure to your institution,
                    or simply connect with someone who shares your passion for transformational change? I'm always open to
                    meaningful conversations that drive impact across Africa's digital ecosystem.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-4">
                    <a href="{{ route('contact') }}"
                        class="group inline-flex items-center px-8 py-4 bg-white text-amber-700 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <span>Start a Conversation</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('speaking') }}"
                        class="group inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-md border border-white/30 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <span>Book Me to Speak</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="pt-8 border-t border-white/20">
                    <p class="text-violet-200 mb-4">Connect with me on social media</p>
                    <div class="flex justify-center space-x-6">
                        <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                            class="p-3 bg-white/20 backdrop-blur-md rounded-xl text-white hover:text-cyan-300 hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/embed/xtmlZ5w70uE?autoplay=1" target="_blank"
                            class="p-3 bg-white/20 backdrop-blur-md rounded-xl text-white hover:text-cyan-300 hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://www.tiktok.com/@theegoddessnwanah?_t=ZM-8yeSs5dzHxF&_r=1" target="_blank"
                            class="p-3 bg-white/20 backdrop-blur-md rounded-xl text-white hover:text-cyan-300 hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
