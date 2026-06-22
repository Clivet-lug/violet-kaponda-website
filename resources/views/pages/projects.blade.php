@extends('layouts.app')

@section('title', 'Projects & Impact - AVEC Technologies | Violet Nswana Kaponda')
@section('description',
    'Explore how AVEC Technologies digital infrastructure and AI-powered systems are transforming African
    institutions — from government digitization to enterprise platforms and intelligent decision systems.')

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

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="animate-on-scroll space-y-6">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-sm font-medium">
                    📊 Projects & Impact
                </div>
                <h1 class="text-4xl md:text-6xl font-display font-bold leading-tight">
                    Building <span
                        class="bg-gradient-to-r from-violet-400 via-cyan-400 to-blue-400 bg-clip-text text-transparent">Real
                        Systems</span> for Real Institutions
                </h1>
                <p class="text-xl text-gray-300 leading-relaxed max-w-3xl mx-auto">
                    AVEC Technologies turns Africa's digital challenges into working infrastructure. Here's a look at the
                    kinds of problems we solve, the systems we build, and the impact they create.
                </p>

                <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-xl p-4 max-w-2xl mx-auto mt-8">
                    <p class="text-sm text-gray-400">
                        💡 The examples below illustrate AVEC's core service areas. Detailed client case studies are being
                        compiled and will be added as engagements are finalized for public sharing.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project 1: Digital Infrastructure -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-100 to-cyan-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Content -->
                <div class="animate-on-scroll space-y-6">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-blue-50 border border-blue-200 text-blue-800 rounded-full text-sm font-medium">
                        Pillar 1 · Digital Infrastructure
                    </div>
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 leading-tight">
                        Government Digitization & Secure Hosting
                    </h2>

                    <div class="space-y-5">
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Challenge</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Many public institutions across Africa still rely on fragmented, paper-heavy, or outdated
                                systems for core services — leading to slow processing times, weak data integrity, and
                                limited transparency for citizens.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Solution</h3>
                            <p class="text-gray-700 leading-relaxed">
                                AVEC designs secure, scalable institutional platforms — covering core systems, payment
                                infrastructure, and government digitization — hosted in compliant, robust environments built
                                for mission-critical operations.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Impact</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Institutions gain faster service delivery, stronger data security, and the foundation needed
                                to scale digital services to more citizens.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 pt-2">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Government
                            Digitization</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Secure
                            Hosting</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">Payment
                            Systems</span>
                    </div>
                </div>

                <!-- Visual -->
                <div class="animate-on-scroll">
                    <div
                        class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-12 flex items-center justify-center border border-blue-100">
                        <svg viewBox="0 0 200 200" class="w-48 h-48">
                            <rect x="40" y="60" width="120" height="100" rx="8" fill="none" stroke="#3b82f6"
                                stroke-width="2" />
                            <rect x="55" y="75" width="90" height="14" rx="3" fill="#dbeafe" />
                            <rect x="55" y="97" width="90" height="14" rx="3" fill="#dbeafe" />
                            <rect x="55" y="119" width="60" height="14" rx="3" fill="#dbeafe" />
                            <circle cx="100" cy="40" r="14" fill="none" stroke="#3b82f6" stroke-width="2" />
                            <path d="M100 54 L100 60" stroke="#3b82f6" stroke-width="2" />
                            <path d="M93 35 L107 35 M93 45 L107 45" stroke="#3b82f6" stroke-width="2" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project 2: Bespoke Institutional Systems -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <div
            class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-violet-100 to-blue-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Visual -->
                <div class="animate-on-scroll lg:order-1">
                    <div
                        class="bg-gradient-to-br from-violet-50 to-blue-50 rounded-2xl p-12 flex items-center justify-center border border-violet-100">
                        <svg viewBox="0 0 200 200" class="w-48 h-48">
                            <rect x="30" y="50" width="50" height="110" rx="6" fill="none" stroke="#f97316"
                                stroke-width="2" />
                            <rect x="95" y="70" width="50" height="90" rx="6" fill="none" stroke="#f97316"
                                stroke-width="2" />
                            <rect x="40" y="65" width="30" height="8" rx="2" fill="#fed7aa" />
                            <rect x="40" y="80" width="30" height="8" rx="2" fill="#fed7aa" />
                            <rect x="105" y="85" width="30" height="8" rx="2" fill="#fed7aa" />
                            <rect x="105" y="100" width="30" height="8" rx="2" fill="#fed7aa" />
                            <path d="M80 90 L95 90" stroke="#f97316" stroke-width="2" stroke-dasharray="3,3" />
                            <circle cx="160" cy="50" r="10" fill="none" stroke="#f97316"
                                stroke-width="2" />
                            <path d="M148 60 L138 75" stroke="#f97316" stroke-width="2" stroke-dasharray="3,3" />
                        </svg>
                    </div>
                </div>

                <!-- Content -->
                <div class="animate-on-scroll space-y-6 lg:order-2">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-violet-50 border border-violet-200 text-violet-800 rounded-full text-sm font-medium">
                        Pillar 2 · Bespoke Institutional Systems
                    </div>
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 leading-tight">
                        ERP, Document Management & Workflow Automation
                    </h2>

                    <div class="space-y-5">
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Challenge</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Institutions managing large volumes of records — universities, financial institutions,
                                enterprises — often rely on manual workflows and paper trails that slow operations and make
                                assets difficult to track.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Solution</h3>
                            <p class="text-gray-700 leading-relaxed">
                                AVEC builds custom ERP systems, digital records and document management platforms, and
                                RFID-based asset tracking solutions tailored to each institution's specific operational
                                realities.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Impact</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Institutions streamline operations, improve accountability, and unlock the full value of
                                records that were previously siloed or inaccessible.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 pt-2">
                        <span class="px-3 py-1 bg-violet-50 text-violet-700 rounded-full text-sm font-medium">ERP
                            Systems</span>
                        <span class="px-3 py-1 bg-violet-50 text-violet-700 rounded-full text-sm font-medium">Document
                            Management</span>
                        <span class="px-3 py-1 bg-violet-50 text-violet-700 rounded-full text-sm font-medium">RFID
                            Tracking</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project 3: AI & Data Intelligence -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-pink-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Content -->
                <div class="animate-on-scroll space-y-6">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-purple-50 border border-purple-200 text-purple-800 rounded-full text-sm font-medium">
                        Pillar 3 · AI & Data Intelligence
                    </div>
                    <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 leading-tight">
                        Analytics Dashboards & AI-Driven Decision Engines
                    </h2>

                    <div class="space-y-5">
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Challenge</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Institutions generate vast amounts of data but lack the tools to turn it into actionable
                                insight — leaving decisions based on intuition rather than evidence.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Solution</h3>
                            <p class="text-gray-700 leading-relaxed">
                                AVEC deploys real-time analytics dashboards, predictive modeling, and AI-driven decision
                                engines that surface patterns and forecast outcomes directly from institutional data.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-sm font-bold text-gray-500 uppercase tracking-wide mb-2">The Impact</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Leadership teams move from reactive to proactive decision-making, with intelligence systems
                                that learn and adapt to evolving institutional needs.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 pt-2">
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium">Analytics
                            Dashboards</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium">Predictive
                            Modeling</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium">AI Decision
                            Engines</span>
                    </div>
                </div>

                <!-- Visual -->
                <div class="animate-on-scroll">
                    <div
                        class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-12 flex items-center justify-center border border-purple-100">
                        <svg viewBox="0 0 200 200" class="w-48 h-48">
                            <polyline points="30,150 60,120 90,135 120,90 150,100 170,60" fill="none" stroke="#a855f7"
                                stroke-width="2.5" />
                            <circle cx="30" cy="150" r="4" fill="#a855f7" />
                            <circle cx="60" cy="120" r="4" fill="#a855f7" />
                            <circle cx="90" cy="135" r="4" fill="#a855f7" />
                            <circle cx="120" cy="90" r="4" fill="#a855f7" />
                            <circle cx="150" cy="100" r="4" fill="#a855f7" />
                            <circle cx="170" cy="60" r="5" fill="#ec4899" />
                            <line x1="30" y1="170" x2="180" y2="170" stroke="#a855f7"
                                stroke-width="1.5" opacity="0.4" />
                            <line x1="30" y1="170" x2="30" y2="40" stroke="#a855f7"
                                stroke-width="1.5" opacity="0.4" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Recap -->
    <section class="py-20 bg-gradient-to-br from-gray-900 via-black to-gray-900 text-white relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-medium mb-6">
                    Our Process
                </div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">How Every Project
                    Comes to Life</h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Every engagement — regardless of pillar — follows the same disciplined process.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">
                        01</div>
                    <h3 class="font-bold text-white mb-2">Discovery</h3>
                    <p class="text-sm text-gray-400">Deep dive into institutional needs and challenges</p>
                </div>
                <div class="text-center">
                    <div
                        class="w-14 h-14 bg-gradient-to-r from-purple-500 to-blue-500 rounded-xl flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">
                        02</div>
                    <h3 class="font-bold text-white mb-2">Architecture</h3>
                    <p class="text-sm text-gray-400">Design scalable, secure, future-proof solutions</p>
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

    <!-- Final CTA -->
    <section class="py-20 bg-gradient-to-br from-violet-600 via-blue-600 to-blue-600 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-on-scroll">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                Have a Challenge <span class="text-cyan-200">Worth Solving?</span>
            </h2>
            <p class="text-xl text-violet-100 leading-relaxed max-w-3xl mx-auto mb-8">
                Whether it's government digitization, institutional systems, or AI-driven intelligence — let's discuss what
                AVEC can build for your organization.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('avec') }}"
                    class="group inline-flex items-center px-8 py-4 bg-white text-violet-700 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <span>Learn More About AVEC</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ route('contact') }}"
                    class="group inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-md border border-white/30 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <span>Speak With Violet Directly</span>
                </a>
            </div>
        </div>
    </section>

    <style>
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
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
        });
    </script>
@endsection
