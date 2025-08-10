@extends('layouts.app')

@section('title', 'About Violet Nswana Kaponda - The Fintech Queen Building Africa\'s Digital Future')
@section('description', 'Learn about Violet Nswana Kaponda\'s journey from IT Project Manager to Fintech Queen. Discover
    her mission to drive digital transformation and economic empowerment across Africa.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-gray-50 overflow-hidden">
        <div class="container-brand">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Content -->
                <div class="animate-on-scroll">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-brand-red-50 text-brand-red-800 rounded-full text-sm font-medium mb-6">
                        👑 Meet the Fintech Queen
                    </div>

                    <h1 class="hero-text mb-6">
                        Building Africa's
                        <span class="text-brand-gradient">Digital Future</span>
                    </h1>

                    <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                        I'm Violet Nswana Kaponda, a business acquisition and growth strategist on a mission
                        to bridge the gap between innovation and accessibility across emerging markets.
                        Welcome to my story of transformation, impact, and limitless possibilities.
                    </p>

                    <!-- Quick Stats -->
                    <div class="grid grid-cols-2 gap-6 mb-8">
                        <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                            <div class="text-2xl font-bold text-brand-red-900 mb-1">6+</div>
                            <div class="text-sm text-gray-600">Years in Tech Leadership</div>
                        </div>
                        <div class="text-center p-4 bg-white rounded-lg shadow-sm">
                            <div class="text-2xl font-bold text-brand-red-900 mb-1">Master's</div>
                            <div class="text-sm text-gray-600">Project Management</div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="flex space-x-4">
                        <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                            class="flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-white transition duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                            <span>Connect on LinkedIn</span>
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('images/hero/violet-hero-2.jpg') }}"
                            alt="Violet Nswana Kaponda - Professional Portrait" class="rounded-xl shadow-brand-lg w-full">

                        <!-- Decorative Elements -->
                        <div class="absolute -top-6 -left-6 w-32 h-32 bg-brand-gradient rounded-full opacity-20"></div>
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-yellow-400 rounded-full opacity-30"></div>

                        <!-- Achievement Card -->
                        <div class="absolute bottom-4 left-4 right-4 bg-white rounded-lg shadow-lg p-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="font-semibold text-gray-900">International Speaker</div>
                                    <div class="text-sm text-gray-600">Available globally</div>
                                </div>
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Story Section -->
    <section class="section-padding bg-white">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">My Story</h2>
                    <p class="text-xl text-gray-600">
                        From IT Project Manager to Fintech Queen - a journey of transformation,
                        impact, and building bridges between innovation and accessibility.
                    </p>
                </div>

                <!-- Story Content -->
                <div class="prose prose-lg prose-brand mx-auto animate-on-scroll">
                    <p class="text-lg leading-relaxed mb-6">
                        I am a business acquisition and growth strategist with a passion for scaling tech businesses,
                        closing high-value deals, and driving digital expansion across Africa. With a strong foundation
                        in project management and business development, I specialize in identifying strategic opportunities,
                        building high-impact partnerships, and leading commercial strategies that drive revenue growth.
                    </p>

                    <p class="text-lg leading-relaxed mb-6">
                        Beyond business, I'm deeply committed to digital inclusion and economic empowerment in emerging
                        markets.
                        I believe that technology has the power to transform industries and create opportunities, and I'm on
                        a
                        mission to bridge the gap between innovation and accessibility. This belief drives everything I do -
                        from my strategic work at Probase Group to my thought leadership through the "Elevate & Dominate"
                        podcast.
                    </p>

                    <p class="text-lg leading-relaxed mb-8">
                        Through my podcast, I share insights on mindset, tech, and wellness, where I inspire professionals
                        to step into their power and build limitless careers. I'm always open to meaningful conversations
                        and collaborations that align with my vision. Let's connect and explore opportunities to scale,
                        innovate, and dominate together.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Journey Timeline -->
    <section class="section-padding bg-gray-50">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">Professional Journey</h2>
                    <p class="text-xl text-gray-600">
                        A decade of growth, learning, and impact across the African tech ecosystem.
                    </p>
                </div>

                <!-- Timeline -->
                <div class="relative">
                    <!-- Timeline Line -->
                    <div
                        class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 top-0 bottom-0 w-1 bg-brand-red-200">
                    </div>

                    <!-- Timeline Items -->
                    <div class="space-y-12">
                        <!-- Current Role -->
                        <div class="relative flex items-center animate-on-scroll">
                            <div
                                class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-brand-red-900 rounded-full border-4 border-white shadow-lg flex items-center justify-center">
                                <div class="w-3 h-3 bg-white rounded-full animate-pulse"></div>
                            </div>
                            <div class="ml-16 md:ml-0 md:w-1/2 md:pr-8 md:text-right">
                                <div class="card">
                                    <div class="p-6">
                                        <div class="text-sm font-semibold text-brand-red-600 mb-2">Feb 2024 - Present</div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Business Development & Strategic
                                            Partnerships</h3>
                                        <div class="text-brand-red-700 font-medium mb-3">Probase Group</div>
                                        <p class="text-gray-600 leading-relaxed">
                                            Leading business acquisition and growth strategies, driving digital expansion
                                            across Africa, and building high-impact partnerships that deliver measurable
                                            results.
                                        </p>
                                        <div class="flex flex-wrap gap-2 mt-4">
                                            <span
                                                class="px-3 py-1 bg-brand-red-50 text-brand-red-700 rounded-full text-sm">Business
                                                Development</span>
                                            <span
                                                class="px-3 py-1 bg-brand-red-50 text-brand-red-700 rounded-full text-sm">Strategic
                                                Partnerships</span>
                                            <span
                                                class="px-3 py-1 bg-brand-red-50 text-brand-red-700 rounded-full text-sm">Deal
                                                Structuring</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Previous Role -->
                        <div class="relative flex items-center animate-on-scroll">
                            <div
                                class="absolute left-0 md:left-1/2 transform md:-translate-x-1/2 w-8 h-8 bg-brand-amber-900 rounded-full border-4 border-white shadow-lg">
                            </div>
                            <div class="ml-16 md:ml-0 md:w-1/2 md:pl-8 md:ml-auto">
                                <div class="card">
                                    <div class="p-6">
                                        <div class="text-sm font-semibold text-brand-amber-700 mb-2">Sep 2017 - Feb 2024 (6
                                            yrs 6 mos)</div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">IT Project Manager</h3>
                                        <div class="text-brand-amber-700 font-medium mb-3">ProBASE, Zambia</div>
                                        <p class="text-gray-600 leading-relaxed">
                                            Managed complex software projects, ensuring delivery excellence and stakeholder
                                            satisfaction across diverse technical initiatives. Built the foundation for my
                                            expertise in project management and business development.
                                        </p>
                                        <div class="flex flex-wrap gap-2 mt-4">
                                            <span
                                                class="px-3 py-1 bg-brand-amber-50 text-brand-amber-700 rounded-full text-sm">Project
                                                Management</span>
                                            <span
                                                class="px-3 py-1 bg-brand-amber-50 text-brand-amber-700 rounded-full text-sm">Software
                                                Development</span>
                                            <span
                                                class="px-3 py-1 bg-brand-amber-50 text-brand-amber-700 rounded-full text-sm">Team
                                                Leadership</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="section-padding bg-white">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">Education & Qualifications</h2>
                    <p class="text-xl text-gray-600">
                        Building expertise through continuous learning and academic excellence.
                    </p>
                </div>

                <!-- Education Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Master's Degree -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Master's Degree</h3>
                            <div class="text-brand-red-700 font-medium mb-2">University of Lusaka</div>
                            <div class="text-gray-600 mb-4">Project Management • 2019 - 2021</div>
                            <p class="text-gray-600 leading-relaxed">
                                Advanced studies in project management methodologies, strategic planning,
                                and organizational leadership, providing the foundation for my expertise
                                in managing complex business initiatives.
                            </p>
                        </div>
                    </div>

                    <!-- Bachelor's Degree -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Bachelor's Degree</h3>
                            <div class="text-brand-red-700 font-medium mb-2">University of Zambia</div>
                            <div class="text-gray-600 mb-4">2012 - 2017</div>
                            <p class="text-gray-600 leading-relaxed">
                                Comprehensive undergraduate education that provided the analytical thinking,
                                problem-solving skills, and academic rigor that underpin my professional
                                success in technology and business development.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values & Mission -->
    <section class="section-padding bg-brand-black text-white">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Section Header -->
                <div class="mb-16 animate-on-scroll">
                    <h2 class="display-text text-white mb-6">My Mission & Values</h2>
                    <p class="text-xl text-gray-300">
                        The principles and purpose that drive everything I do in the African tech ecosystem.
                    </p>
                </div>

                <!-- Mission Statement -->
                <div class="mb-16 animate-on-scroll">
                    <div class="bg-white bg-opacity-10 rounded-xl p-8 backdrop-blur-sm">
                        <h3 class="text-2xl font-bold text-yellow-400 mb-4">My Mission</h3>
                        <p class="text-xl text-gray-200 leading-relaxed">
                            To bridge the gap between innovation and accessibility across emerging markets,
                            empowering individuals and organizations to harness technology for transformational
                            growth and sustainable impact across Africa's digital economy.
                        </p>
                    </div>
                </div>

                <!-- Core Values -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Digital Inclusion -->
                    <div class="animate-on-scroll">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-brand-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Digital Inclusion</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Ensuring technology solutions are accessible and beneficial to all,
                            especially underrepresented communities across emerging markets.
                        </p>
                    </div>

                    <!-- Innovation Excellence -->
                    <div class="animate-on-scroll">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-brand-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Innovation Excellence</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Driving cutting-edge solutions and transformational strategies
                            that create sustainable value and competitive advantage.
                        </p>
                    </div>

                    <!-- Empowerment -->
                    <div class="animate-on-scroll">
                        <div class="w-16 h-16 bg-yellow-400 rounded-lg flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-brand-black" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-3">Empowerment</h3>
                        <p class="text-gray-300 leading-relaxed">
                            Inspiring professionals to step into their power, build limitless careers,
                            and become leaders who drive meaningful change.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recognition & Achievements -->
    <section class="section-padding bg-white">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">Recognition & Achievements</h2>
                    <p class="text-xl text-gray-600">
                        Milestones and recognition that reflect my impact across the African tech ecosystem.
                    </p>
                </div>

                <!-- Achievements Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- LinkedIn Influence -->
                    <div class="card animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">LinkedIn Thought Leader</h3>
                                    <p class="text-sm text-gray-600">1,470+ followers and growing</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Building a strong professional network and sharing insights that inspire
                                and educate professionals across the African tech ecosystem.
                            </p>
                        </div>
                    </div>

                    <!-- Podcast Host -->
                    <div class="card animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-brand-red-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">Podcast Host</h3>
                                    <p class="text-sm text-gray-600">"Elevate & Dominate" - 11+ episodes</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Sharing insights on mindset, tech, and wellness to inspire professionals
                                to step into their power and build limitless careers.
                            </p>
                        </div>
                    </div>

                    <!-- International Speaker -->
                    <div class="card animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-brand-amber-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v3M7 4H5a1 1 0 00-1 1v16a1 1 0 001 1h14a1 1 0 001-1V5a1 1 0 00-1-1h-2">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">International Speaker</h3>
                                    <p class="text-sm text-gray-600">Available for global events</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Delivering transformational insights on fintech innovation,
                                digital transformation, and women's leadership across Africa.
                            </p>
                        </div>
                    </div>

                    <!-- Education Excellence -->
                    <div class="card animate-on-scroll">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">Academic Excellence</h3>
                                    <p class="text-sm text-gray-600">BSc, MSc Project Management</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                Strong academic foundation with advanced degrees in project management,
                                providing the theoretical framework for practical business excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personal Philosophy -->
    <section class="section-padding bg-gray-50">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">My Philosophy</h2>
                    <p class="text-xl text-gray-600">
                        The beliefs and principles that guide my approach to business, leadership, and life.
                    </p>
                </div>

                <!-- Philosophy Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Limitless Mindset -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Limitless Mindset</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                I believe in the power of thinking beyond traditional boundaries.
                                Success isn't limited by geography, background, or circumstance—it's
                                determined by vision, preparation, and the courage to take action.
                            </p>
                            <blockquote class="border-l-4 border-brand-red-500 pl-4 italic text-gray-700">
                                "Your potential is unlimited when you refuse to accept limitations."
                            </blockquote>
                        </div>
                    </div>

                    <!-- Impact Over Income -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Impact Over Income</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                While financial success is important, true fulfillment comes from
                                creating meaningful change. I focus on building solutions that
                                empower communities and drive sustainable transformation.
                            </p>
                            <blockquote class="border-l-4 border-brand-red-500 pl-4 italic text-gray-700">
                                "Success is measured not just by what you achieve, but by whom you lift up along the way."
                            </blockquote>
                        </div>
                    </div>

                    <!-- Continuous Evolution -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Continuous Evolution</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                The technology landscape is constantly evolving, and so must we.
                                I'm committed to lifelong learning, adapting to new challenges,
                                and staying ahead of industry trends.
                            </p>
                            <blockquote class="border-l-4 border-brand-red-500 pl-4 italic text-gray-700">
                                "Growth is not a destination—it's a way of life."
                            </blockquote>
                        </div>
                    </div>

                    <!-- Collaborative Leadership -->
                    <div class="card-elevated animate-on-scroll">
                        <div class="p-8">
                            <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Collaborative Leadership</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                The best solutions emerge when diverse minds work together.
                                I believe in building inclusive teams, fostering open dialogue,
                                and creating environments where everyone can contribute their best.
                            </p>
                            <blockquote class="border-l-4 border-brand-red-500 pl-4 italic text-gray-700">
                                "Leadership is not about being in charge—it's about taking care of those in your charge."
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Focus Areas -->
    <section class="section-padding bg-white">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16 animate-on-scroll">
                    <h2 class="display-text mb-6">Current Focus Areas</h2>
                    <p class="text-xl text-gray-600">
                        The strategic initiatives and passion projects driving my work today.
                    </p>
                </div>

                <!-- Focus Areas -->
                <div class="space-y-8">
                    <!-- Fintech Innovation -->
                    <div class="card animate-on-scroll">
                        <div class="p-8">
                            <div class="flex items-start space-x-6">
                                <div
                                    class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fintech Innovation & Financial
                                        Inclusion</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">
                                        Leading initiatives to expand financial services access across emerging markets.
                                        Working on solutions that bridge the gap between traditional banking and
                                        digital-first financial services, with a focus on underserved communities.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">Digital
                                            Payments</span>
                                        <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">Financial
                                            Inclusion</span>
                                        <span class="px-3 py-1 bg-green-50 text-green-700 rounded-full text-sm">Mobile
                                            Banking</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Women in Tech -->
                    <div class="card animate-on-scroll">
                        <div class="p-8">
                            <div class="flex items-start space-x-6">
                                <div
                                    class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-3">Women's Leadership in Tech</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">
                                        Championing women's advancement in technology through mentorship, advocacy,
                                        and creating platforms for visibility. Through my podcast and speaking
                                        engagements, I inspire women to step into leadership roles and build limitless
                                        careers.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">Mentorship</span>
                                        <span
                                            class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">Leadership
                                            Development</span>
                                        <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm">Career
                                            Advancement</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Digital Transformation -->
                    <div class="card animate-on-scroll">
                        <div class="p-8">
                            <div class="flex items-start space-x-6">
                                <div
                                    class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-3">Digital Transformation Strategy</h3>
                                    <p class="text-gray-600 leading-relaxed mb-4">
                                        Helping organizations navigate their digital evolution through strategic planning,
                                        technology adoption, and change management. Focus on creating sustainable
                                        transformation that drives business value and competitive advantage.
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm">Strategy
                                            Development</span>
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm">Change
                                            Management</span>
                                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm">Technology
                                            Adoption</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding bg-brand-gradient text-white">
        <div class="container-brand">
            <div class="max-w-4xl mx-auto text-center">
                <div class="animate-on-scroll">
                    <h2 class="display-text text-white mb-6">Let's Build the Future Together</h2>
                    <p class="text-xl text-gray-100 mb-8 leading-relaxed">
                        Ready to explore opportunities for collaboration, partnership, or simply
                        connect with someone who shares your passion for transformational change?
                        I'm always open to meaningful conversations that can drive impact across Africa's digital ecosystem.
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <a href="{{ route('contact') }}" class="btn-primary-white">
                            Start a Conversation
                            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="{{ route('speaking') }}" class="btn-secondary-white">
                            Book Me to Speak
                        </a>
                    </div>

                    <!-- Social Connect -->
                    <div class="mt-8 pt-8 border-t border-white border-opacity-20">
                        <p class="text-gray-200 mb-4">Connect with me on social media</p>
                        <div class="flex justify-center space-x-6">
                            <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                                class="text-white hover:text-yellow-400 transition duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="#" target="_blank"
                                class="text-white hover:text-yellow-400 transition duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a href="#" target="_blank"
                                class="text-white hover:text-yellow-400 transition duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.085.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.746-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z" />
                                </svg>
                            </a>
                        </div>
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
    </script>
@endpush
