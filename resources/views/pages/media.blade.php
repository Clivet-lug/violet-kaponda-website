@extends('layouts.app')

@section('title', 'Violet Kaponda Media - Elevate & Dominate Video Series | African Fintech Queen')
@section('description', 'Watch Violet Nswana Kaponda\'s Elevate & Dominate video series. Get insights on fintech,
    mindset, wellness, and building limitless careers in Africa\'s tech ecosystem.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-gray-900 via-red-900 to-black text-white overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-96 h-96 bg-gradient-to-r from-red-600/30 to-red-500/20 rounded-full blur-3xl animate-pulse">
            </div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-gradient-to-r from-red-500/20 to-pink-500/20 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-red-900/10 to-red-800/10 rounded-full blur-3xl">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Content - Left Side -->
                <div class="animate-on-scroll space-y-8">
                    <!-- Badge with Real Stats -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-red-600/20 backdrop-blur-md border border-red-500/30 text-red-300 rounded-full text-sm font-medium shadow-lg">
                        🎙️ Now Streaming • 11 Videos • 206+ Subscribers
                    </div>

                    <!-- Headlines -->
                    <div class="space-y-4">
                        <h1 class="text-4xl md:text-6xl font-display font-bold text-white leading-tight">
                            Elevate &
                            <span class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">
                                Dominate
                            </span>
                        </h1>

                        <h2 class="text-2xl md:text-3xl text-red-300 font-semibold">
                            The Video Series Empowering Africa's Future
                        </h2>
                    </div>

                    <!-- Enhanced Description -->
                    <div class="space-y-4">
                        <p class="text-xl text-gray-300 leading-relaxed">
                            Join Violet for powerful conversations about <strong class="text-red-400">fintech
                                innovation</strong>,
                            mindset transformation, wellness strategies, and building limitless careers in today's digital
                            economy.
                        </p>

                        <div class="flex items-center space-x-2 text-red-400 font-semibold">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Step into your power. Claim your space. Build your legacy.</span>
                        </div>
                    </div>

                    <!-- Real YouTube Stats -->
                    <div class="grid grid-cols-3 gap-6">
                        <div
                            class="text-center bg-red-600/10 backdrop-blur-md rounded-xl p-4 border border-red-500/20 hover:bg-red-600/15 transition-all duration-300">
                            <div class="text-2xl font-bold text-red-400 mb-1">11</div>
                            <div class="text-xs text-gray-400">Videos</div>
                            <div class="text-xs text-red-300 mt-1">Published</div>
                        </div>
                        <div
                            class="text-center bg-red-600/10 backdrop-blur-md rounded-xl p-4 border border-red-500/20 hover:bg-red-600/15 transition-all duration-300">
                            <div class="text-2xl font-bold text-red-400 mb-1">206+</div>
                            <div class="text-xs text-gray-400">Subscribers</div>
                            <div class="text-xs text-red-300 mt-1">& Growing</div>
                        </div>
                        <div
                            class="text-center bg-red-600/10 backdrop-blur-md rounded-xl p-4 border border-red-500/20 hover:bg-red-600/15 transition-all duration-300">
                            <div class="text-2xl font-bold text-red-400 mb-1">3+</div>
                            <div class="text-xs text-gray-400">Platforms</div>
                            <div class="text-xs text-red-300 mt-1">Multi-channel</div>
                        </div>
                    </div>

                    <!-- Enhanced Platform Links -->
                    <div class="space-y-4">
                        <!-- Primary Platform - YouTube -->
                        <div class="flex flex-wrap gap-4">
                            <a href="https://youtube.com/@elevate-and-dominat?si=0Htkc9hotWOoSpp6" target="_blank"
                                class="group flex items-center space-x-3 bg-red-600 hover:bg-red-700 px-6 py-4 rounded-xl text-white font-medium shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex-1 min-w-0">
                                <svg class="w-6 h-6 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                                <div class="flex-1 text-left">
                                    <div class="font-semibold">Watch on YouTube</div>
                                    <div class="text-sm opacity-90">11 videos • 206+ subscribers</div>
                                </div>
                                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                    </path>
                                </svg>
                            </a>
                        </div>

                        <!-- Secondary Platforms -->
                        <div class="flex flex-wrap gap-3">
                            <a href="https://tiktok.com/@violetkaponda" target="_blank"
                                class="group flex items-center space-x-2 bg-gray-900 hover:bg-gray-800 px-4 py-3 rounded-lg text-white font-medium shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72z" />
                                </svg>
                                <span>TikTok</span>
                            </a>

                            <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                                class="group flex items-center space-x-2 bg-blue-600 hover:bg-blue-700 px-4 py-3 rounded-lg text-white font-medium shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                                <span>LinkedIn</span>
                            </a>

                            <button
                                class="group flex items-center space-x-2 bg-green-600 hover:bg-green-700 px-4 py-3 rounded-lg text-white font-medium shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105"
                                onclick="navigator.share({title: 'Elevate & Dominate by Violet Kaponda', url: window.location.href}) || alert('Share this page with friends!')">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z">
                                    </path>
                                </svg>
                                <span>Share</span>
                            </button>
                        </div>
                    </div>

                    <!-- African Excellence Badge -->
                    <div
                        class="inline-flex items-center space-x-2 bg-gradient-to-r from-yellow-600/20 to-red-600/20 backdrop-blur-md border border-yellow-500/30 text-yellow-300 rounded-full px-4 py-2 text-sm font-medium">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span>Empowering Africa's Fintech Future</span>
                    </div>
                </div>

                <!-- Video Visual - Right Side -->
                <div class="animate-on-scroll lg:order-2">
                    <div class="relative">
                        <!-- Main Episode Showcase -->
                        <div
                            class="relative rounded-2xl overflow-hidden shadow-2xl bg-gradient-to-br from-gray-900 to-black">
                            <!-- Featured Episode Thumbnail -->
                            <div class="relative h-80 bg-gradient-to-br from-red-900/20 to-black">
                                <!-- Episode Thumbnail Background -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>

                                <!-- YouTube Play Button Overlay -->
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <button onclick="window.open('https://youtube.com/@elevateanddominate', '_blank')"
                                        class="group w-20 h-20 bg-red-600/90 backdrop-blur-md rounded-full flex items-center justify-center shadow-xl hover:bg-red-600 hover:scale-110 transition-all duration-300 border border-white/20">
                                        <svg class="w-8 h-8 text-white ml-1 group-hover:scale-110 transition-transform duration-300"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Episode Info Overlay -->
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <div class="space-y-2">
                                        <div class="flex items-center space-x-2">
                                            <div class="px-2 py-1 bg-red-600 text-white text-xs font-bold rounded">EP 01
                                            </div>
                                            <div
                                                class="px-2 py-1 bg-black/60 backdrop-blur-md text-red-300 text-xs rounded">
                                                AUDACITY SERIES</div>
                                        </div>
                                        <h3 class="text-white font-bold text-lg leading-tight">
                                            Audacity Series Ep 1 #audacity
                                        </h3>
                                        <p class="text-gray-300 text-sm leading-relaxed">
                                            Building unshakeable self-belief and confidence to pursue your biggest dreams in
                                            the tech industry.
                                        </p>
                                        <div class="flex items-center space-x-4 text-xs text-gray-400">
                                            <span>3:12 duration</span>
                                            <span>64 views</span>
                                            <span>13 days ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Episode Queue Preview -->
                        <div class="mt-4 space-y-3">
                            <!-- Next Episode 1 -->
                            <div
                                class="flex items-center space-x-3 bg-red-900/10 backdrop-blur-md rounded-xl p-3 border border-red-500/20 hover:bg-red-900/20 transition-all duration-300 cursor-pointer">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-700 rounded-lg flex items-center justify-center text-white text-xs font-bold">
                                    EP 02
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-white font-medium text-sm truncate">How is your past trauma stopping
                                        you?</h4>
                                    <p class="text-gray-400 text-xs">7:54 • 25 views • 5 days ago</p>
                                </div>
                                <button
                                    class="w-8 h-8 bg-red-600/20 rounded-full flex items-center justify-center hover:bg-red-600/40 transition-colors">
                                    <svg class="w-4 h-4 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>

                            <!-- Next Episode 2 -->
                            <div
                                class="flex items-center space-x-3 bg-red-900/10 backdrop-blur-md rounded-xl p-3 border border-red-500/20 hover:bg-red-900/20 transition-all duration-300 cursor-pointer">
                                <div
                                    class="w-12 h-12 bg-gradient-to-br from-red-600 to-red-700 rounded-lg flex items-center justify-center text-white text-xs font-bold">
                                    EP 03
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-white font-medium text-sm truncate">From Ideas to Impact: The Journey
                                        begins</h4>
                                    <p class="text-gray-400 text-xs">1:12 • 30 views • 3 months ago</p>
                                </div>
                                <button
                                    class="w-8 h-8 bg-red-600/20 rounded-full flex items-center justify-center hover:bg-red-600/40 transition-colors">
                                    <svg class="w-4 h-4 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Floating Latest Episode Card -->
                        <div
                            class="absolute -top-6 -left-6 bg-black/90 backdrop-blur-md rounded-xl p-4 shadow-xl border border-red-500/30 max-w-xs">
                            <div class="flex items-center space-x-2 mb-1">
                                <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-red-300">Latest Episode</span>
                            </div>
                            <p class="text-xs text-gray-300">Audacity Series Ep 1</p>
                            <p class="text-xs text-red-400 mt-1">64 views • 13 days ago</p>
                        </div>

                        <!-- Floating Channel Stats -->
                        <div
                            class="absolute -bottom-6 -right-6 bg-gradient-to-r from-red-600 to-red-700 rounded-xl p-4 shadow-xl text-white max-w-xs">
                            <div class="text-sm font-bold">206 Subscribers</div>
                            <div class="text-xs opacity-90">11 Videos Published</div>
                            <div class="text-xs opacity-75 mt-1">Growing Community 📈</div>
                        </div>

                        <!-- Decorative Elements -->
                        <div
                            class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-r from-red-500 to-pink-500 rounded-full opacity-20 blur-xl animate-float">
                        </div>
                        <div
                            class="absolute -bottom-8 -left-8 w-32 h-32 bg-gradient-to-r from-red-600 to-red-700 rounded-full opacity-15 blur-xl animate-float delay-1000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Audacity Series -->
    <section class="py-20 bg-black relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-red-900/30 to-red-800/20 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-red-800/20 to-red-900/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-red-600/20 backdrop-blur-md border border-red-500/30 text-red-300 rounded-full text-sm font-medium mb-6">
                    🔥 The Audacity Series
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    Reclaim Your <span
                        class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">Voice,
                        Power & Presence</span>
                </h2>

                <p class="text-xl text-gray-300 max-w-4xl mx-auto leading-relaxed">
                    A bold journey into reclaiming your voice, power, and presence in today's digital economy.
                    Sometimes, what stands between you and the life you know you're meant to live... is <strong
                        class="text-red-400">AUDACITY</strong>.
                </p>
            </div>

            <!-- Series Overview -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Audacity to Believe -->
                <div
                    class="group bg-red-900/20 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/30 hover:bg-red-900/30 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-red-300 transition-colors duration-300">
                        Audacity to Believe
                    </h3>

                    <p class="text-gray-300 leading-relaxed mb-4">
                        Building unshakeable self-belief and confidence to pursue your biggest dreams
                        in the tech industry and beyond.
                    </p>

                    <div class="text-sm text-red-400 font-medium">Episode 1 • Foundation Series</div>
                </div>

                <!-- Audacity to Start -->
                <div
                    class="group bg-red-900/20 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/30 hover:bg-red-900/30 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-700 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-red-300 transition-colors duration-300">
                        Audacity to Start
                    </h3>

                    <p class="text-gray-300 leading-relaxed mb-4">
                        Overcoming perfectionism, fear, and procrastination to take the first step
                        toward your transformational goals.
                    </p>

                    <div class="text-sm text-red-400 font-medium">Episode 2 • Action Series</div>
                </div>

                <!-- Audacity to Take Space -->
                <div
                    class="group bg-red-900/20 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/30 hover:bg-red-900/30 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-red-700 to-red-800 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-4 group-hover:text-red-300 transition-colors duration-300">
                        Audacity to Take Space
                    </h3>

                    <p class="text-gray-300 leading-relaxed mb-4">
                        Unapologetically claiming your space in boardrooms, conferences, and leadership
                        positions across Africa's tech ecosystem.
                    </p>

                    <div class="text-sm text-red-400 font-medium">Episode 3 • Leadership Series</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Episodes -->
    <section class="py-20 bg-gradient-to-br from-gray-900 to-black relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-red-900/20 to-red-800/10 rounded-full blur-3xl opacity-40">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-red-700/10 to-red-900/20 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-red-600/20 backdrop-blur-md border border-red-500/30 text-red-300 rounded-full text-sm font-medium mb-6">
                    🎧 Featured Episodes
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    Latest <span
                        class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">Episodes</span>
                </h2>

                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Dive into powerful conversations that transform mindsets and build limitless careers.
                </p>
            </div>

            <!-- Episodes Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Episode 1 -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('images/podcast/episode-1-thumbnail.jpg') }}" alt="The Audacity to Be More"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                        <!-- Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button
                                class="w-16 h-16 bg-red-600/90 backdrop-blur-md rounded-full flex items-center justify-center shadow-xl hover:bg-red-600 hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Episode Number -->
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                            EP 01
                        </div>
                    </div>

                    <div class="p-6">
                        <h3
                            class="text-lg font-bold text-white mb-2 group-hover:text-red-300 transition-colors duration-300">
                            The Audacity to Be More
                        </h3>

                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                            Sometimes, what stands between you and the life you know you're meant to live... is AUDACITY.
                            Kicking off a bold journey into reclaiming your voice, power, and presence.
                        </p>

                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span>The Audacity Series</span>
                            <span>25 min</span>
                        </div>
                    </div>
                </div>

                <!-- Episode 2 -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('images/podcast/episode-2-thumbnail.jpg') }}"
                            alt="Building Africa's Digital Future"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                        <!-- Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button
                                class="w-16 h-16 bg-red-600/90 backdrop-blur-md rounded-full flex items-center justify-center shadow-xl hover:bg-red-600 hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Episode Number -->
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                            EP 02
                        </div>
                    </div>

                    <div class="p-6">
                        <h3
                            class="text-lg font-bold text-white mb-2 group-hover:text-red-300 transition-colors duration-300">
                            Building Africa's Digital Future
                        </h3>

                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                            Exploring how African interoperability and digital transformation are reshaping
                            our continent's financial landscape and creating new opportunities.
                        </p>

                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span>Fintech Innovation</span>
                            <span>32 min</span>
                        </div>
                    </div>
                </div>

                <!-- Episode 3 -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl overflow-hidden shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="relative">
                        <img src="{{ asset('images/podcast/episode-3-thumbnail.jpg') }}"
                            alt="Women Leading Tech Innovation"
                            class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">

                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

                        <!-- Play Button -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <button
                                class="w-16 h-16 bg-red-600/90 backdrop-blur-md rounded-full flex items-center justify-center shadow-xl hover:bg-red-600 hover:scale-110 transition-all duration-300">
                                <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Episode Number -->
                        <div class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-xs font-bold">
                            EP 03
                        </div>
                    </div>

                    <div class="p-6">
                        <h3
                            class="text-lg font-bold text-white mb-2 group-hover:text-red-300 transition-colors duration-300">
                            Women Leading Tech Innovation
                        </h3>

                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                            Breaking barriers and claiming space in boardrooms. How women are driving
                            transformational change across Africa's technology ecosystem.
                        </p>

                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span>Women in Tech</span>
                            <span>28 min</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Episodes CTA -->
            <div class="text-center mt-12 animate-on-scroll">
                <a href="https://youtube.com/@elevateanddominate" target="_blank"
                    class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    <span>Watch All Episodes</span>
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Media Appearances & Press -->
    <section class="py-20 bg-black relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-red-800/20 to-red-900/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-red-700/20 to-red-800/20 rounded-full blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-red-600/20 backdrop-blur-md border border-red-500/30 text-red-300 rounded-full text-sm font-medium mb-6">
                    📺 Media Appearances & Press
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    In the <span
                        class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">Spotlight</span>
                </h2>

                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Featured across conferences, summits, and media platforms as a leading voice in African fintech and
                    digital transformation.
                </p>
            </div>

            <!-- Media Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- PMI Conference Feature -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-start space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-purple-600 to-red-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-xl font-bold text-white mb-2 group-hover:text-red-300 transition-colors duration-300">
                                PMI Zambia 2025 Conference
                            </h3>
                            <p class="text-gray-400 mb-3 leading-relaxed">
                                Featured speaker on "Agile Leadership: Empowering Projects in a Tech-Driven World" -
                                delivering transformational insights to project management professionals.
                            </p>
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="px-3 py-1 bg-red-600/20 text-red-300 rounded-full">Conference Speaker</span>
                                <span class="text-gray-500">2025</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LinkedIn Thought Leadership -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-start space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-blue-600 to-red-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-xl font-bold text-white mb-2 group-hover:text-red-300 transition-colors duration-300">
                                LinkedIn Thought Leadership
                            </h3>
                            <p class="text-gray-400 mb-3 leading-relaxed">
                                Building influence with 2,000+ followers through strategic content on African fintech
                                innovation,
                                digital transformation, and business development insights.
                            </p>
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="px-3 py-1 bg-red-600/20 text-red-300 rounded-full">Content Creator</span>
                                <span class="text-gray-500">2,000+ Followers</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galactic Billionaire Event -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-start space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-yellow-600 to-red-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-xl font-bold text-white mb-2 group-hover:text-red-300 transition-colors duration-300">
                                Galactic Billionaire 2025 Experience
                            </h3>
                            <p class="text-gray-400 mb-3 leading-relaxed">
                                "Some rooms don't just shift your thinking, they shift your entire trajectory."
                                A transformational experience that redefined vision and approach to building Africa's
                                future.
                            </p>
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="px-3 py-1 bg-red-600/20 text-red-300 rounded-full">Thought Leader</span>
                                <span class="text-gray-500">Lusaka Experience</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Digital Inclusion Advocacy -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div class="flex items-start space-x-6">
                        <div
                            class="w-16 h-16 bg-gradient-to-r from-green-600 to-red-600 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3
                                class="text-xl font-bold text-white mb-2 group-hover:text-red-300 transition-colors duration-300">
                                Digital Africa Advocacy
                            </h3>
                            <p class="text-gray-400 mb-3 leading-relaxed">
                                Leading conversations on African interoperability and data integration -
                                "Let's connect our own systems before we dream about connecting continents."
                            </p>
                            <div class="flex items-center space-x-4 text-sm">
                                <span class="px-3 py-1 bg-red-600/20 text-red-300 rounded-full">Digital Advocate</span>
                                <span class="text-gray-500">Continental Impact</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Highlights -->
    <section class="py-20 bg-gradient-to-br from-gray-900 to-black relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-red-900/20 to-red-800/10 rounded-full blur-3xl opacity-40">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-red-700/10 to-red-900/20 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-red-600/20 backdrop-blur-md border border-red-500/30 text-red-300 rounded-full text-sm font-medium mb-6">
                    📱 Social Media Highlights
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-6 leading-tight">
                    Follow the <span
                        class="bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent">Journey</span>
                </h2>

                <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Stay connected for daily insights on fintech innovation, mindset transformation, and building limitless
                    careers.
                </p>
            </div>

            <!-- Social Platforms Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">

                <!-- YouTube -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll text-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-red-600 to-red-700 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-red-300 transition-colors duration-300">
                        YouTube Channel
                    </h3>

                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Full podcast episodes, behind-the-scenes content, and exclusive interviews with industry leaders.
                    </p>

                    <div class="text-sm text-red-400 font-medium mb-4">11+ Episodes Available</div>

                    <a href="https://youtube.com/@elevateanddominate" target="_blank"
                        class="inline-flex items-center px-6 py-3 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        <span>Subscribe</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>

                <!-- LinkedIn -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll text-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-600 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-red-300 transition-colors duration-300">
                        LinkedIn Posts
                    </h3>

                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Professional insights, industry updates, and thought leadership on African fintech and business
                        development.
                    </p>

                    <div class="text-sm text-red-400 font-medium mb-4">2,000+ Followers</div>

                    <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                        class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        <span>Connect</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>

                <!-- TikTok -->
                <div
                    class="group bg-red-900/10 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/20 hover:border-red-500/40 transition-all duration-500 hover:-translate-y-2 animate-on-scroll text-center">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-gray-800 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72z" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-red-300 transition-colors duration-300">
                        TikTok Content
                    </h3>

                    <p class="text-gray-400 mb-4 leading-relaxed">
                        Quick insights, motivational content, and behind-the-scenes glimpses of building Africa's digital
                        future.
                    </p>

                    <div class="text-sm text-red-400 font-medium mb-4">Short-form Content</div>

                    <a href="https://tiktok.com/@violetkaponda" target="_blank"
                        class="inline-flex items-center px-6 py-3 bg-gray-800 hover:bg-gray-700 text-white font-semibold rounded-lg transition-all duration-300 hover:scale-105">
                        <span>Follow</span>
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Content Highlights -->
            <div
                class="bg-red-900/10 backdrop-blur-md rounded-2xl p-8 shadow-lg border border-red-500/20 animate-on-scroll">
                <h3 class="text-2xl font-bold text-white mb-6 text-center">
                    Recent <span class="text-red-400">Content Highlights</span>
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-3 h-3 bg-red-500 rounded-full mt-2 flex-shrink-0"></div>
                        <div>
                            <p class="text-gray-300 leading-relaxed">
                                <strong class="text-white">"Africa's Digital Future"</strong> - Breaking down
                                interoperability challenges and solutions for connecting African systems.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-3 h-3 bg-red-500 rounded-full mt-2 flex-shrink-0"></div>
                        <div>
                            <p class="text-gray-300 leading-relaxed">
                                <strong class="text-white">"The Audacity Series"</strong> - Empowering professionals to
                                step into their power and build limitless careers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Media Contact & Newsletter -->
    <section class="py-20 bg-black relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-red-600/10 rounded-full blur-3xl animate-pulse"></div>
            <div
                class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-red-500/10 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Content -->
                <div class="animate-on-scroll space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-4xl md:text-5xl font-display font-bold text-white leading-tight">
                            Stay <span class="text-red-400">Connected</span>
                        </h2>

                        <p class="text-xl text-gray-300 leading-relaxed">
                            Get exclusive content, behind-the-scenes insights, and early access to new podcast episodes.
                            Join the community building Africa's digital future.
                        </p>
                    </div>

                    <!-- Newsletter Benefits -->
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Early access to new episodes</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Exclusive fintech insights</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-gray-300">Behind-the-scenes content</span>
                        </div>
                    </div>

                    <!-- Media Contact -->
                    <div class="bg-red-900/20 backdrop-blur-md rounded-xl p-6 border border-red-500/30">
                        <h3 class="text-lg font-bold text-white mb-4">Media Inquiries:</h3>
                        <div class="space-y-2">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <a href="mailto:violet@violetkaponda.com"
                                    class="text-red-300 hover:text-red-200 transition-colors duration-300">
                                    violet@violetkaponda.com
                                </a>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-gray-300">Response within 24-48 hours</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter Form -->
                <div class="animate-on-scroll">
                    <div class="bg-red-900/10 backdrop-blur-md rounded-2xl p-8 border border-red-500/20 shadow-xl">
                        <h3 class="text-2xl font-bold text-white mb-6">Join the Movement</h3>

                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Your Email Address</label>
                                <input type="email"
                                    class="w-full px-4 py-3 bg-red-900/20 backdrop-blur-md border border-red-500/30 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300"
                                    placeholder="email@example.com" required>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">Your Name (Optional)</label>
                                <input type="text"
                                    class="w-full px-4 py-3 bg-red-900/20 backdrop-blur-md border border-red-500/30 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300"
                                    placeholder="Full Name">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-300 mb-2">I'm interested in:</label>
                                <div class="space-y-2">
                                    <label class="flex items-center">
                                        <input type="checkbox"
                                            class="w-4 h-4 text-red-600 bg-red-900/20 border-red-500/30 rounded focus:ring-red-500 focus:ring-2">
                                        <span class="ml-2 text-gray-300">Podcast updates</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox"
                                            class="w-4 h-4 text-red-600 bg-red-900/20 border-red-500/30 rounded focus:ring-red-500 focus:ring-2">
                                        <span class="ml-2 text-gray-300">Fintech insights</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox"
                                            class="w-4 h-4 text-red-600 bg-red-900/20 border-red-500/30 rounded focus:ring-red-500 focus:ring-2">
                                        <span class="ml-2 text-gray-300">Speaking events</span>
                                    </label>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-gradient-to-r from-red-600 to-red-700 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                Subscribe Now
                            </button>

                            <p class="text-xs text-gray-400 text-center">
                                No spam ever. Unsubscribe anytime with one click.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced CSS for Media Page -->
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(2deg);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll animations
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
            const newsletterForm = document.querySelector('#newsletter form, form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const button = this.querySelector('button[type="submit"]');
                    const originalText = button.textContent;

                    button.textContent = 'Subscribing...';
                    button.disabled = true;

                    setTimeout(() => {
                        button.textContent = '✓ Subscribed!';
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
        });
    </script>
@endsection
