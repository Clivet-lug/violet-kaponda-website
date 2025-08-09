@extends('layouts.app')

@section('title', 'About Violet Nswana Kaponda - African Fintech Queen & Digital Transformation Leader')
@section('description', 'Learn about Violet Nswana Kaponda\'s journey from IT Project Manager to Business Development
    leader at Probase Group. Master\'s in Project Management, 1,469+ LinkedIn followers, driving Africa\'s digital
    transformation.')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative py-20 lg:py-32 bg-gradient-to-br from-gray-900 via-red-900 to-orange-900 text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute w-96 h-96 bg-orange-500 rounded-full opacity-20 animate-float"
                style="top: -10%; right: -10%;"></div>
            <div class="absolute w-64 h-64 bg-red-500 rounded-full opacity-15 animate-float"
                style="bottom: -10%; left: -10%; animation-delay: 2s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Content -->
                <div class="animate-on-scroll">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-sm font-medium mb-6">
                        <span class="w-2 h-2 bg-orange-400 rounded-full mr-2 animate-pulse"></span>
                        African Fintech Queen
                    </div>
                    <h1 class="font-display text-4xl lg:text-6xl font-bold mb-6 text-shadow-xl">
                        Meet <span class="gradient-text">Violet Nswana Kaponda</span>
                    </h1>
                    <p class="text-xl lg:text-2xl mb-8 text-gray-200 leading-relaxed">
                        <strong>BSc, MSc</strong> • Fintech Queen • Building Africa's Digital Future •
                        Architect of Visibility & Impact • International Speaker
                    </p>
                    <div class="flex flex-wrap gap-4 mb-8">
                        <div class="bg-white/10 backdrop-blur-md rounded-xl px-4 py-2 border border-white/20">
                            <span class="text-sm font-medium">📍 Lusaka, Zambia</span>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-xl px-4 py-2 border border-white/20">
                            <span class="text-sm font-medium">👥 1,469+ LinkedIn Followers</span>
                        </div>
                        <div class="bg-white/10 backdrop-blur-md rounded-xl px-4 py-2 border border-white/20">
                            <span class="text-sm font-medium">🎓 Master's in Project Management</span>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/contact" class="btn-primary px-8 py-4 text-lg">
                            Work With Me
                        </a>
                        <a href="https://linkedin.com/in/violetkaponda"
                            class="px-8 py-4 border-2 border-white/30 text-white rounded-xl hover:bg-white hover:text-gray-900 transition-all duration-300 font-semibold text-center">
                            View LinkedIn Profile
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="animate-on-scroll">
                    <div class="relative">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('images/about/violet-professional-hero.jpg') }}"
                                alt="Violet Nswana Kaponda - African Fintech Queen" class="w-full h-auto object-cover"
                                style="aspect-ratio: 4/5;">
                            <!-- Modern overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent">
                            </div>
                        </div>
                        <!-- Floating badge -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-2xl p-4 shadow-xl animate-float">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-orange-600">6+</div>
                                <div class="text-xs text-gray-600 font-medium">Years Experience</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Story Section -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="font-display text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                        My <span class="gradient-text">Journey</span>
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        From IT Project Manager to Business Development Leader -
                        Building Africa's Digital Future One Partnership at a Time
                    </p>
                </div>

                <div class="prose prose-lg prose-gray max-w-none animate-on-scroll">
                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-3xl p-8 lg:p-12 mb-12">
                        <p class="text-xl leading-relaxed text-gray-700 mb-6">
                            I am a <strong>business acquisition and growth strategist</strong> with a passion for scaling
                            tech businesses,
                            closing high-value deals, and driving digital expansion in Africa. With a strong foundation in
                            project management
                            and business development, I specialize in identifying strategic opportunities, building
                            high-impact partnerships,
                            and leading commercial strategies that drive revenue growth.
                        </p>

                        <p class="text-lg leading-relaxed text-gray-600 mb-6">
                            Beyond business, I'm deeply committed to <strong>digital inclusion and economic
                                empowerment</strong> in emerging markets.
                            I believe that technology has the power to transform industries and create opportunities, and
                            I'm on a mission
                            to bridge the gap between innovation and accessibility.
                        </p>

                        <p class="text-lg leading-relaxed text-gray-600">
                            I also share insights on mindset, tech, and wellness through my podcast, <strong>"Elevate &
                                Dominate"</strong>,
                            where I inspire professionals to step into their power and build limitless careers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Experience Section -->
    <section class="py-20 lg:py-32 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                    Professional Experience
                </div>
                <h2 class="font-display text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                    Career <span class="gradient-text">Progression</span>
                </h2>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Current Role -->
                <div class="animate-on-scroll mb-12">
                    <div
                        class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl border border-gray-100 hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-start space-x-4 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h3 class="font-display text-2xl font-bold text-gray-900">Business Development and
                                        Strategic Partnerships</h3>
                                    <span
                                        class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Current</span>
                                </div>
                                <div class="text-orange-600 font-semibold mb-2">Probase Group • Full-time</div>
                                <div class="text-gray-600 mb-4">Feb 2024 - Present • 1 yr 7 mos</div>
                                <p class="text-gray-700 leading-relaxed">
                                    Leading strategic partnerships and business development initiatives, focusing on scaling
                                    tech businesses
                                    and driving digital expansion across Africa. Responsible for identifying growth
                                    opportunities,
                                    structuring high-value deals, and building strategic alliances that drive revenue
                                    growth.
                                </p>
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">Business
                                Acquisition</span>
                            <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">Business
                                Development</span>
                            <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">+5
                                skills</span>
                        </div>
                    </div>
                </div>

                <!-- Previous Role -->
                <div class="animate-on-scroll">
                    <div
                        class="bg-white rounded-3xl p-8 lg:p-12 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300">
                        <div class="flex items-start space-x-4 mb-6">
                            <div
                                class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-display text-2xl font-bold text-gray-900 mb-2">IT Project Manager</h3>
                                <div class="text-blue-600 font-semibold mb-2">ProBASE • Full-time</div>
                                <div class="text-gray-600 mb-4">Sep 2017 - Feb 2024 • 6 yrs 6 mos • Zambia</div>
                                <p class="text-gray-700 leading-relaxed">
                                    Managed complex IT projects and digital transformation initiatives. Led cross-functional
                                    teams,
                                    implemented project management best practices, and delivered technology solutions that
                                    drove
                                    business growth and operational efficiency.
                                </p>
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class="flex flex-wrap gap-2 mt-6">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Project
                                Management</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Project
                                Planning</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">+3
                                skills</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                    Education & Qualifications
                </div>
                <h2 class="font-display text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                    Academic <span class="gradient-text">Excellence</span>
                </h2>
            </div>

            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Master's Degree -->
                <div class="animate-on-scroll">
                    <div
                        class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-3xl p-8 shadow-lg border border-purple-100 hover:shadow-xl transition-all duration-300 h-full">
                        <div class="flex items-start space-x-4 mb-6">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-purple-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-display text-xl font-bold text-gray-900 mb-2">Master's Degree</h3>
                                <div class="text-purple-600 font-semibold mb-1">University of Lusaka</div>
                                <div class="text-gray-600 mb-2">Project Management</div>
                                <div class="text-sm text-gray-500">2019 - 2021</div>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Advanced studies in project management methodologies, strategic planning, and leadership
                            principles
                            that form the foundation of my business development expertise.
                        </p>
                    </div>
                </div>

                <!-- Bachelor's Degree -->
                <div class="animate-on-scroll">
                    <div
                        class="bg-gradient-to-br from-orange-50 to-red-50 rounded-3xl p-8 shadow-lg border border-orange-100 hover:shadow-xl transition-all duration-300 h-full">
                        <div class="flex items-start space-x-4 mb-6">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-display text-xl font-bold text-gray-900 mb-2">Bachelor's Degree</h3>
                                <div class="text-orange-600 font-semibold mb-1">University of Zambia</div>
                                <div class="text-gray-600 mb-2">BSc</div>
                                <div class="text-sm text-gray-500">2012 - 2017</div>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm leading-relaxed">
                            Comprehensive undergraduate education that provided the technical foundation for my career
                            in technology and business development.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What I Bring Section -->
    <section class="py-20 lg:py-32 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium mb-6">
                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                    Core Expertise
                </div>
                <h2 class="font-display text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                    What I Bring to the <span class="gradient-text">Table</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Expertise Cards -->
                <div class="animate-on-scroll">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold mb-4 text-gray-900">Business Acquisition & Strategic
                            Growth</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Expert in identifying and closing high-value deals, building strategic partnerships,
                            and driving revenue growth through innovative business development strategies.
                        </p>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold mb-4 text-gray-900">Digital Transformation & Commercial
                            Strategy</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Leading digital transformation initiatives and developing commercial strategies
                            that drive sustainable growth in the African tech ecosystem.
                        </p>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-pink-500 to-red-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold mb-4 text-gray-900">High-Value Deal Structuring &
                            Negotiation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Skilled in structuring complex deals, negotiating partnerships, and creating
                            win-win scenarios that drive mutual value for all stakeholders.
                        </p>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold mb-4 text-gray-900">Thought Leadership in Tech & Digital
                            Inclusion</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Passionate advocate for digital inclusion and economic empowerment,
                            bridging the gap between innovation and accessibility in emerging markets.
                        </p>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold mb-4 text-gray-900">Project Management & Strategic
                            Planning</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Master's-level expertise in project management methodologies,
                            strategic planning, and leading cross-functional teams to deliver results.
                        </p>
                    </div>
                </div>

                <div class="animate-on-scroll">
                    <div
                        class="bg-white rounded-3xl p-8 shadow-lg border border-gray-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 h-full">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-teal-500 to-green-600 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-display text-xl font-bold mb-4 text-gray-900">Mindset & Performance Coaching</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Inspiring professionals through the "Elevate & Dominate" podcast,
                            helping individuals step into their power and build limitless careers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section
        class="py-20 lg:py-32 bg-gradient-to-br from-orange-600 via-red-600 to-red-700 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;">
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute w-64 h-64 bg-white rounded-full opacity-5 animate-float" style="top: 10%; right: 10%;">
            </div>
            <div class="absolute w-96 h-96 bg-yellow-300 rounded-full opacity-10 animate-float"
                style="bottom: -10%; left: -10%; animation-delay: 3s;"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center animate-on-scroll">
            <h2 class="font-display text-4xl lg:text-5xl font-bold mb-6">
                Ready to <span class="text-yellow-300">Collaborate?</span>
            </h2>
            <p class="text-xl lg:text-2xl mb-12 text-red-100 leading-relaxed max-w-3xl mx-auto">
                I'm always open to meaningful conversations and collaborations that align with my vision.
                Let's connect and explore opportunities to scale, innovate, and dominate together.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                <a href="/contact"
                    class="bg-white text-red-600 px-10 py-5 rounded-xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl hover:scale-105">
                    Start a Conversation
                </a>
                <a href="/speaking"
                    class="border-2 border-white/30 text-white px-10 py-5 rounded-xl font-bold text-lg hover:bg-white hover:text-red-600 transition-all duration-300">
                    Book Me to Speak
                </a>
            </div>

            <!-- Social Links -->
            <div class="flex justify-center space-x-6">
                <a href="https://linkedin.com/in/violetkaponda"
                    class="group p-4 bg-white/10 backdrop-blur-md rounded-2xl hover:bg-white/20 transition-all duration-300">
                    <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                </a>
                <a href="https://youtube.com/@elevateanddominate"
                    class="group p-4 bg-white/10 backdrop-blur-md rounded-2xl hover:bg-white/20 transition-all duration-300">
                    <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
                <a href="https://instagram.com/violetkaponda"
                    class="group p-4 bg-white/10 backdrop-blur-md rounded-2xl hover:bg-white/20 transition-all duration-300">
                    <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12.017 0C8.396 0 7.989.013 7.041.048 6.094.082 5.52.204 5.036.388a5.918 5.918 0 0 0-2.14 1.394A5.918 5.918 0 0 0 .48 4.126C.294 4.61.172 5.184.139 6.131.103 7.08.09 7.487.09 11.108c0 3.62.013 4.027.048 4.975.034.948.156 1.521.34 2.006a5.918 5.918 0 0 0 1.394 2.14 5.918 5.918 0 0 0 2.14 1.394c.485.184 1.058.306 2.006.34.948.035 1.355.048 4.976.048 3.62 0 4.027-.013 4.975-.048.948-.034 1.521-.156 2.006-.34a5.918 5.918 0 0 0 2.14-1.394 5.918 5.918 0 0 0 1.394-2.14c.184-.485.306-1.058.34-2.006.035-.948.048-1.355.048-4.976 0-3.62-.013-4.027-.048-4.975-.034-.948-.156-1.521-.34-2.006a5.918 5.918 0 0 0-1.394-2.14A5.918 5.918 0 0 0 16.986.388C16.501.204 15.928.082 14.98.048 14.031.013 13.624 0 10.003 0h2.014zm-.24 5.4a6.6 6.6 0 1 1 0 13.2 6.6 6.6 0 0 1 0-13.2zm0 2.16a4.44 4.44 0 1 0 0 8.88 4.44 4.44 0 0 0 0-8.88zm6.406-2.845a1.44 1.44 0 1 1 0 2.88 1.44 1.44 0 0 1 0-2.88z" />
                    </svg>
                </a>
                <a href="https://tiktok.com/@violetkaponda"
                    class="group p-4 bg-white/10 backdrop-blur-md rounded-2xl hover:bg-white/20 transition-all duration-300">
                    <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                    </svg>
                </a>
            </div>

            <!-- Contact Info -->
            <div class="mt-12 pt-8 border-t border-white/20">
                <p class="text-red-100 flex items-center justify-center space-x-2 mb-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>Based in Lusaka, Zambia</span>
                </p>
                <p class="text-red-100 flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    <span>violet@violetkaponda.com</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Enhanced JavaScript for this page -->
    <script>
        // Enhanced scroll animations for about page
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

        // Add stagger effect to cards
        const cards = document.querySelectorAll('.animate-on-scroll');
        cards.forEach((card, index) => {
            card.style.transitionDelay = `${index * 0.1}s`;
        });

        // Enhanced LinkedIn link tracking
        document.querySelector('a[href*="linkedin.com"]').addEventListener('click', function(e) {
            // Add any analytics tracking here if needed
            console.log('LinkedIn profile clicked');
        });
    </script>

    <!-- Additional Styles for About Page -->
    <style>
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .card-hover:hover {
            transform: translateY(-8px) scale(1.02);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .gradient-text {
            background: linear-gradient(135deg, #ea580c 0%, #dc2626 50%, #f59e0b 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradient 3s ease infinite;
        }

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
    </style>
@endsection
