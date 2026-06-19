@extends('layouts.app')

@section('title', 'AVEC Technologies - Digital Infrastructure & AI Intelligence Partner for Africa | Violet Nswana
    Kaponda')
@section('description',
    'AVEC Technologies, founded by Violet Nswana Kaponda, builds the digital infrastructure and AI-powered systems
    that power African governments, universities, financial institutions, and enterprises.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-10 bg-gradient-to-br from-gray-900 via-gray-800 to-black overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-amber-500/15 to-orange-500/15 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Content -->
                <div class="animate-on-scroll space-y-8 text-white">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-sm font-medium">
                        🏗️ Founder & CEO, AVEC Technologies
                    </div>

                    <div class="space-y-4">
                        <h1 class="text-4xl md:text-6xl font-display font-bold leading-tight">
                            Building Africa's
                            <span
                                class="bg-gradient-to-r from-orange-400 via-amber-400 to-red-400 bg-clip-text text-transparent">
                                Digital Future
                            </span>
                        </h1>
                        <p class="text-xl text-gray-300 font-medium">Digital Infrastructure & AI Intelligence Partner for
                            Africa</p>
                    </div>

                    <p class="text-lg text-gray-300 leading-relaxed">
                        AVEC Technologies designs and deploys secure digital infrastructure and AI-powered systems that help
                        African governments, universities, financial institutions, and enterprises modernize operations,
                        manage data securely, and scale efficiently.
                    </p>

                    <!-- Stats Strip -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 text-center">
                            <div class="text-2xl font-bold text-orange-400 mb-1">100%</div>
                            <div class="text-xs text-gray-400">Bespoke</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 text-center">
                            <div class="text-2xl font-bold text-orange-400 mb-1">AI</div>
                            <div class="text-xs text-gray-400">Enabled</div>
                        </div>
                        <div class="bg-white/5 backdrop-blur-md rounded-xl p-4 border border-white/10 text-center">
                            <div class="text-2xl font-bold text-orange-400 mb-1">Africa</div>
                            <div class="text-xs text-gray-400">First</div>
                        </div>
                    </div>

                    <!-- CTAs -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-2">
                        <a href="https://avectechnologies.com" target="_blank" rel="noopener"
                            class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            <span>Visit AVECTechnologies.com</span>
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="group inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-md text-white font-semibold rounded-xl border border-white/20 transition-all duration-300 hover:bg-white/20 hover:scale-105">
                            <span>Partner With AVEC</span>
                        </a>
                    </div>
                </div>

                <!-- Visual -->
                <div class="animate-on-scroll lg:order-2">
                    <div
                        class="relative rounded-2xl overflow-hidden shadow-2xl bg-gradient-to-br from-gray-800 to-black border border-white/10 p-12 flex items-center justify-center min-h-[320px]">
                        <svg viewBox="0 0 200 200" class="w-64 h-64 opacity-90">
                            <g fill="none" stroke="#fb923c" stroke-width="1.5">
                                <circle cx="60" cy="60" r="3" fill="#fb923c" />
                                <circle cx="140" cy="50" r="3" fill="#fb923c" />
                                <circle cx="100" cy="100" r="4" fill="#f87171" />
                                <circle cx="50" cy="130" r="3" fill="#fb923c" />
                                <circle cx="150" cy="140" r="3" fill="#fb923c" />
                                <circle cx="100" cy="160" r="3" fill="#fb923c" />
                                <line x1="60" y1="60" x2="100" y2="100" stroke-dasharray="3,3" />
                                <line x1="140" y1="50" x2="100" y2="100" stroke-dasharray="3,3" />
                                <line x1="50" y1="130" x2="100" y2="100" stroke-dasharray="3,3" />
                                <line x1="150" y1="140" x2="100" y2="100" stroke-dasharray="3,3" />
                                <line x1="100" y1="160" x2="100" y2="100" stroke-dasharray="3,3" />
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Digital Challenge -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-md border border-gray-200 text-gray-800 rounded-full text-sm font-medium mb-6">
                    Why AVEC Exists
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    The Digital <span
                        class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Challenge in
                        Africa</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Across Africa, many institutions still operate on fragmented systems, manual processes, and
                    underutilized data. AVEC exists to close that gap.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20">
                    <h3 class="font-bold text-gray-900 mb-2">Fragmented Systems</h3>
                    <p class="text-sm text-gray-600">African institutions rely on fragmented or outdated digital systems.
                    </p>
                </div>
                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20">
                    <h3 class="font-bold text-gray-900 mb-2">Underutilized Data</h3>
                    <p class="text-sm text-gray-600">Data is underutilized or siloed, preventing intelligent
                        decision-making.</p>
                </div>
                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20">
                    <h3 class="font-bold text-gray-900 mb-2">Limited Innovation</h3>
                    <p class="text-sm text-gray-600">Few players control infrastructure — limiting innovation and growth.
                    </p>
                </div>
                <div class="bg-white/80 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20">
                    <h3 class="font-bold text-gray-900 mb-2">Need for Scale</h3>
                    <p class="text-sm text-gray-600">Institutions need reliable, intelligent systems to operate at scale.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Three Core Pillars -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-100 to-red-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-yellow-100 to-orange-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-orange-50 to-red-50 border border-orange-200 text-orange-800 rounded-full text-sm font-medium mb-6">
                    What AVEC Does
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Three Core <span
                        class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Pillars</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Comprehensive solutions across digital infrastructure, bespoke institutional systems, and AI & data
                    intelligence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Pillar 1: Digital Infrastructure -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Digital Infrastructure</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Core institutional
                            platforms</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Payment systems</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Government digitization
                        </li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Enterprise architecture
                        </li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Secure hosting
                            environments</li>
                    </ul>
                </div>

                <!-- Pillar 2: Bespoke Institutional Systems -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Bespoke Institutional Systems</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>ERP systems</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Document management</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Records digitization</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Workflow automation</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>RFID tracking systems</li>
                    </ul>
                </div>

                <!-- Pillar 3: AI & Data Intelligence -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">AI & Data Intelligence</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Analytics dashboards</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Intelligence systems</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>Predictive modeling</li>
                        <li class="flex items-start"><span class="text-orange-500 mr-2">•</span>AI-driven decision engines
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-12 animate-on-scroll">
                <a href="https://avectechnologies.com/services" target="_blank" rel="noopener"
                    class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-orange-600 to-red-600 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <span>Explore All Services on AVECTechnologies.com</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- How We Work -->
    <section class="py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-orange-500/15 to-red-500/15 rounded-full blur-3xl">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-red-500/15 to-pink-500/15 rounded-full blur-3xl">
            </div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-medium mb-6">
                    Our Approach
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">How We Work</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">
                        01</div>
                    <h3 class="font-bold text-white mb-2">Discovery</h3>
                    <p class="text-sm text-gray-400">Deep dive into your institutional needs and challenges</p>
                </div>
                <div class="text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-purple-500 to-blue-500 rounded-xl flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">
                        02</div>
                    <h3 class="font-bold text-white mb-2">Architecture</h3>
                    <p class="text-sm text-gray-400">Design scalable, secure, and future-proof solutions</p>
                </div>
                <div class="text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">
                        03</div>
                    <h3 class="font-bold text-white mb-2">Execution</h3>
                    <p class="text-sm text-gray-400">Build and deploy with precision and speed</p>
                </div>
                <div class="text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">
                        04</div>
                    <h3 class="font-bold text-white mb-2">Support</h3>
                    <p class="text-sm text-gray-400">Long-term partnership and system governance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-orange-50 to-red-50 border border-orange-200 text-orange-800 rounded-full text-sm font-medium mb-6">
                    Leadership
                </div>
                <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4">A Founder-Led Vision</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    AVEC Technologies is led by a team committed to building reliable digital infrastructure for African
                    institutions.
                </p>
            </div>

            <div
                class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-8 shadow-lg border border-white/20 animate-on-scroll">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="md:col-span-1">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl">
                            <img src="{{ asset('images/gallery/violet-professional-1.jpg') }}"
                                alt="Violet Nswana Kaponda - Founder & CEO, AVEC Technologies"
                                class="w-full h-auto object-cover">
                        </div>
                    </div>
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold text-gray-900 mb-1">Violet Nswana Kaponda</h3>
                        <div class="text-orange-600 font-medium mb-4">Founder & CEO</div>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Violet Nswana Kaponda is a technology strategist with experience in fintech systems, digital
                            transformation, and enterprise platforms across the African technology ecosystem. Under her
                            leadership, AVEC Technologies focuses on designing scalable digital systems that help
                            governments, universities, financial institutions, and enterprises modernize operations,
                            strengthen data management, and unlock new opportunities through technology.
                        </p>
                        <blockquote
                            class="border-l-4 border-orange-500 pl-4 italic text-gray-700 bg-white rounded-r-lg p-4">
                            "AVEC is driven by the belief that Africa's next era of growth will be powered by strong digital
                            infrastructure built on the continent, for the continent."
                        </blockquote>
                        <div class="mt-6">
                            <a href="{{ route('about') }}"
                                class="text-orange-600 font-semibold hover:text-orange-700 transition-colors duration-300">
                                Read Violet's Full Story →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 bg-gradient-to-br from-orange-600 via-red-600 to-amber-600 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                Ready to Transform Your <span class="text-yellow-200">Digital Infrastructure?</span>
            </h2>
            <p class="text-xl text-orange-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Let's build the systems that will power your institution's future — and discover the full range of AVEC's
                services on our dedicated platform.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="https://avectechnologies.com/contact" target="_blank" rel="noopener"
                    class="group inline-flex items-center px-8 py-4 bg-white text-orange-700 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <span>Get Started on AVECTechnologies.com</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
                <a href="{{ route('contact') }}"
                    class="group inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-md border border-white/30 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <span>Speak With Violet Directly</span>
                </a>
            </div>
        </div>
    </section>
@endsection
