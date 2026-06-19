@extends('layouts.app')

@section('title',
    'AVEC Technologies - Digital Infrastructure & AI Intelligence Partner for Africa | Violet Nswana
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
                        <svg viewBox="0 0 400 440" class="w-full max-w-sm opacity-95" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="africaFill" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#fb923c" stop-opacity="0.14" />
                                    <stop offset="100%" stop-color="#f87171" stop-opacity="0.05" />
                                </linearGradient>
                            </defs>
                            <path
                                d="M54.0,191.4 L52.6,191.0 L48.9,188.9 L46.2,186.2 L45.3,184.3 L44.7,180.5 L42.4,177.4 L40.4,175.4 L39.1,174.7 L37.8,173.7 L37.2,171.4 L36.4,170.2 L34.9,169.4 L37.2,166.9 L38.8,167.0 L40.1,166.1 L41.3,166.1 L42.1,165.4 L41.7,163.7 L42.2,163.1 L42.3,161.4 L32.8,161.2 L31.4,161.8 L29.6,161.6 L26.9,162.4 L26.1,158.5 L26.7,156.2 L24.6,152.1 L22.0,150.3 L24.3,149.3 L26.8,145.7 L28.0,143.0 L27.6,140.2 L29.0,137.7 L29.7,132.8 L29.1,127.7 L28.5,125.1 L29.0,122.5 L27.6,120.1 L24.9,117.8 L25.1,115.6 L25.4,113.2 L27.4,111.8 L29.1,109.1 L28.7,107.4 L30.5,103.7 L33.4,100.4 L35.1,99.6 L36.5,96.6 L36.6,93.8 L38.5,90.6 L41.9,88.7 L45.2,83.4 L47.9,81.4 L52.7,80.8 L56.8,77.3 L59.4,75.9 L63.7,71.6 L62.4,65.1 L64.4,60.7 L65.1,57.9 L68.4,54.4 L73.6,52.1 L77.5,49.9 L80.9,44.6 L82.6,41.4 L86.4,41.4 L89.5,43.6 L94.4,43.3 L99.8,44.4 L102.0,44.5 L107.0,41.6 L112.6,40.7 L115.9,38.6 L120.8,37.0 L129.6,36.1 L138.2,35.7 L140.8,36.5 L145.7,34.4 L151.2,34.4 L153.3,35.6 L156.9,35.3 L162.5,33.2 L166.1,33.8 L166.0,36.4 L170.4,34.5 L170.7,35.5 L168.1,38.0 L168.1,40.4 L169.9,41.7 L169.2,46.2 L165.8,48.8 L166.8,51.6 L169.5,51.7 L170.8,54.2 L172.7,55.0 L178.8,56.8 L181.0,56.3 L185.3,57.2 L192.2,59.5 L194.6,64.1 L199.3,65.1 L206.6,67.3 L212.1,69.8 L214.6,68.5 L217.1,66.1 L215.9,62.2 L217.5,59.6 L221.2,57.2 L224.8,56.5 L231.8,57.6 L233.6,59.9 L235.5,59.9 L237.1,60.8 L242.3,61.4 L243.5,63.1 L250.4,63.0 L255.4,64.4 L260.6,65.9 L263.0,66.7 L266.9,65.1 L269.1,63.6 L273.6,63.2 L277.3,63.8 L278.7,66.4 L279.9,64.7 L284.1,65.9 L288.1,66.2 L290.7,64.9 L294.1,73.8 L292.6,75.9 L291.5,79.8 L290.1,82.5 L288.9,83.4 L287.2,81.7 L284.8,79.4 L281.1,72.0 L280.6,72.5 L282.7,77.9 L285.9,83.1 L289.8,91.2 L291.7,94.0 L293.4,96.9 L298.1,102.7 L297.0,103.6 L297.2,106.9 L303.2,111.6 L304.1,112.6 L305.8,117.7 L304.7,118.7 L305.4,124.0 L307.3,130.2 L309.3,131.5 L312.1,133.4 L315.1,139.4 L316.6,144.1 L319.4,146.6 L326.5,151.5 L329.3,154.5 L332.1,157.5 L333.8,159.2 L336.3,160.8 L337.5,162.4 L337.4,164.6 L334.4,165.8 L336.6,167.2 L338.3,168.2 L339.3,170.3 L341.7,172.5 L344.2,172.5 L349.1,171.2 L354.8,170.5 L359.3,168.9 L361.9,168.6 L363.7,167.7 L366.7,167.5 L368.3,167.4 L370.7,166.6 L373.5,166.1 L375.9,164.3 L377.9,164.3 L378.0,165.7 L377.5,168.7 L377.5,171.5 L376.4,173.3 L375.0,178.9 L372.5,184.7 L369.3,191.3 L364.9,198.9 L360.4,204.7 L354.3,211.8 L349.2,216.0 L341.4,221.1 L336.6,225.0 L330.9,231.3 L329.7,234.0 L328.6,235.3 L324.9,237.3 L323.7,239.5 L321.7,239.9 L321.0,243.5 L319.3,245.6 L318.3,249.1 L316.2,250.8 L313.8,257.1 L314.1,260.1 L317.5,262.0 L317.6,263.3 L316.2,266.4 L316.5,268.0 L316.1,270.5 L318.0,273.7 L320.1,278.8 L322.0,280.0 L322.8,282.3 L322.6,287.4 L323.3,292.0 L323.5,300.1 L324.4,302.6 L322.8,306.3 L320.8,309.9 L317.5,313.1 L312.8,315.1 L307.0,317.6 L301.1,323.2 L299.1,324.1 L295.5,327.8 L293.4,329.0 L292.9,332.7 L295.4,336.6 L296.4,339.6 L296.5,341.2 L297.4,340.9 L297.2,346.0 L296.4,348.4 L297.6,349.3 L296.8,351.4 L294.7,353.3 L290.4,355.0 L284.2,357.8 L281.9,359.8 L282.4,361.9 L283.7,362.3 L283.2,365.0 L281.9,368.8 L281.3,373.1 L280.0,375.4 L276.5,378.0 L275.4,378.8 L273.2,381.4 L271.8,384.1 L268.9,387.8 L263.0,393.1 L259.4,396.2 L255.5,398.6 L250.0,400.6 L247.4,400.9 L246.7,402.3 L243.6,401.5 L241.0,402.5 L235.4,401.5 L232.3,402.2 L230.1,401.9 L224.8,403.9 L220.4,404.7 L217.2,406.7 L214.8,406.8 L212.6,405.0 L210.9,404.9 L208.6,402.6 L208.4,403.3 L207.7,401.9 L207.7,398.9 L206.1,395.4 L207.7,394.5 L207.6,390.5 L204.2,385.6 L201.6,381.2 L197.9,374.5 L194.0,370.6 L192.0,366.8 L190.9,361.8 L189.6,358.0 L187.9,350.1 L187.7,343.9 L187.1,341.0 L185.1,338.9 L182.4,334.6 L179.7,328.4 L178.5,325.2 L174.3,320.1 L174.0,316.1 L173.5,312.9 L174.2,308.3 L176.0,303.6 L176.3,301.4 L178.0,296.7 L179.2,294.6 L182.2,291.2 L183.8,288.9 L184.4,285.0 L184.1,282.1 L182.6,280.3 L181.2,277.1 L179.9,274.0 L180.2,272.9 L181.8,270.9 L180.2,265.9 L179.2,262.4 L176.6,259.1 L177.1,258.1 L176.3,256.5 L174.9,252.6 L170.7,247.2 L165.4,241.9 L161.9,237.7 L158.8,232.3 L159.0,230.6 L160.1,228.9 L161.4,225.2 L162.4,221.3 L161.4,220.5 L163.2,214.7 L164.0,210.6 L161.9,207.2 L159.6,206.3 L158.5,204.0 L157.2,203.3 L157.3,201.8 L151.9,203.7 L149.9,203.4 L147.9,204.6 L143.8,204.5 L141.0,201.2 L139.3,197.5 L135.6,194.1 L131.8,194.1 L127.2,194.1 L122.9,194.8 L118.7,195.9 L110.6,198.9 L107.7,200.7 L103.1,202.2 L98.5,200.7 L96.1,200.7 L92.5,199.7 L89.2,199.8 L83.0,200.7 L79.5,202.2 L74.3,204.1 L73.3,204.0 L72.0,204.0 L66.6,201.5 L61.9,197.6 L57.5,194.8 L54.0,191.4 Z M236.9,181.9 L240.5,183.9 L236.9,181.9 Z M373.2,309.4 L371.4,306.4 L370.4,307.9 L371.4,311.7 L371.0,313.9 L369.5,315.1 L369.2,319.5 L367.2,325.5 L364.6,332.7 L361.4,342.5 L359.4,349.7 L357.1,355.7 L352.9,356.9 L348.4,359.1 L345.4,357.8 L341.3,355.9 L339.8,353.2 L339.5,348.6 L337.7,344.5 L337.2,340.8 L338.1,337.0 L340.5,336.1 L340.5,334.4 L343.0,330.5 L343.5,327.2 L342.3,324.7 L341.3,321.5 L340.9,316.7 L342.7,313.8 L343.4,310.5 L346.0,310.3 L348.8,309.3 L350.8,308.3 L353.0,308.3 L356.0,305.3 L360.2,302.1 L361.8,299.5 L361.1,297.3 L363.3,297.9 L366.1,294.3 L366.2,291.2 L368.0,288.9 L369.8,291.1 L371.1,293.3 L372.4,296.7 L373.3,303.0 L374.6,305.4 L374.1,307.9 L373.2,309.4 Z"
                                fill="url(#africaFill)" stroke="#fb923c" stroke-width="1" stroke-opacity="0.55" />
                            <g stroke="#fb923c" stroke-width="0.8" stroke-opacity="0.4" stroke-dasharray="4,4">
                                <line x1="275.0" y1="71.0" x2="259.9" y2="306.2" />
                                <line x1="130.8" y1="192.8" x2="259.9" y2="306.2" />
                                <line x1="112.3" y1="197.6" x2="259.9" y2="306.2" />
                                <line x1="303.9" y1="233.2" x2="259.9" y2="306.2" />
                                <line x1="313.8" y1="179.8" x2="259.9" y2="306.2" />
                                <line x1="192.5" y1="248.9" x2="259.9" y2="306.2" />
                                <line x1="258.5" y1="362.2" x2="259.9" y2="306.2" />
                                <line x1="22.9" y1="150.5" x2="259.9" y2="306.2" />
                                <line x1="130.8" y1="192.8" x2="112.3" y2="197.6" />
                                <line x1="275.0" y1="71.0" x2="313.8" y2="179.8" />
                                <line x1="303.9" y1="233.2" x2="313.8" y2="179.8" />
                            </g>
                            <g>
                                <circle cx="275.0" cy="71.0" r="3.5" fill="#fb923c" />
                                <circle cx="130.8" cy="192.8" r="3.5" fill="#fb923c" />
                                <circle cx="112.3" cy="197.6" r="3.5" fill="#fb923c" />
                                <circle cx="303.9" cy="233.2" r="3.5" fill="#fb923c" />
                                <circle cx="313.8" cy="179.8" r="3.5" fill="#fb923c" />
                                <circle cx="192.5" cy="248.9" r="3.5" fill="#fb923c" />
                                <circle cx="258.5" cy="362.2" r="3.5" fill="#fb923c" />
                                <circle cx="22.9" cy="150.5" r="3.5" fill="#fb923c" />
                                <circle cx="259.9" cy="306.2" r="6" fill="#f87171" />
                            </g>
                            <circle cx="259.9" cy="306.2" r="6" fill="none" stroke="#f87171"
                                stroke-width="1.5" opacity="0.6">
                                <animate attributeName="r" values="6;15;6" dur="3s" repeatCount="indefinite" />
                                <animate attributeName="opacity" values="0.6;0;0.6" dur="3s"
                                    repeatCount="indefinite" />
                            </circle>
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
