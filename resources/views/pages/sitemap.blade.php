@extends('layouts.app')

@section('title', 'Sitemap - Violet Nswana Kaponda')
@section('description', 'Complete sitemap of Violet Nswana Kaponda\'s website. Find all pages and navigate easily.')

@section('content')
    <div class="min-h-screen bg-gray-50 py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl font-display font-bold text-gray-900 mb-4">Sitemap</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Navigate our website easily with this complete overview of all available pages and sections.
                </p>
            </div>

            <!-- Sitemap Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Main Pages -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-brand-orange to-brand-red rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 21v-4a2 2 0 012-2h2a2 2 0 012 2v4" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Main Pages</h2>
                    </div>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('home') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                About Me
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('speaking') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Speaking Engagements
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('media') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Media Kit
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Contact & Work With Me
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Blog & Content -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C20.832 18.477 19.246 18 17.5 18s-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Blog & Content</h2>
                    </div>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('blog.index') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Blog Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog.category', 'fintech') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Fintech Insights
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog.category', 'digital-transformation') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Digital Transformation
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog.category', 'women-in-tech') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Women in Tech
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog.category', 'thought-leadership') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Thought Leadership
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Legal & Policies -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-gray-600 to-gray-800 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Legal & Policies</h2>
                    </div>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ route('privacy') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('terms') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Terms of Service
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sitemap') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Sitemap
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sitemap.xml') }}"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                XML Sitemap
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Social Media & External -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-pink-500 to-red-500 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Social Media</h2>
                    </div>
                    <ul class="space-y-3">
                        <li>
                            <a href="https://www.linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                                LinkedIn Profile
                            </a>
                        </li>
                        <li>
                            <a href="https://youtu.be/xtmlZ5w70uE" target="_blank"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                                YouTube Channel
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/thee_goddess_nswanah" target="_blank"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                                Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/@theegoddessnwanah" target="_blank"
                                class="flex items-center text-gray-600 hover:text-brand-orange transition-colors duration-300 group">
                                <svg class="w-4 h-4 mr-3 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                                TikTok
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Professional Services -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Services</h2>
                    </div>
                    <ul class="space-y-3">
                        <li>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Fintech Consulting
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Keynote Speaking
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Digital Transformation
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Strategic Partnerships
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center text-gray-600">
                                <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Business Development
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-brand-orange to-brand-red rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-900">Quick Actions</h2>
                    </div>
                    <div class="space-y-4">
                        <a href="{{ route('contact') }}"
                            class="block w-full btn-primary text-white text-center px-6 py-3 rounded-xl font-semibold shadow-lg transition-all duration-300 hover:scale-105">
                            Work With Me
                        </a>
                        <a href="{{ route('newsletter.subscribe') }}"
                            class="block w-full bg-gray-100 hover:bg-gray-200 text-gray-800 text-center px-6 py-3 rounded-xl font-medium transition-all duration-300">
                            Subscribe to Newsletter
                        </a>
                        <a href="{{ route('blog.index') }}"
                            class="block w-full border-2 border-brand-orange text-brand-orange hover:bg-brand-orange hover:text-white text-center px-6 py-3 rounded-xl font-medium transition-all duration-300">
                            Read Latest Insights
                        </a>
                    </div>
                </div>
            </div>

            <!-- Search Box -->
            <div class="mt-16 max-w-2xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Looking for something specific?</h2>
                    <p class="text-gray-600 mb-6">Use our search to find exactly what you need.</p>
                    <div class="flex gap-3">
                        <input type="text" placeholder="Search our website..."
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent">
                        <button class="btn-primary text-white px-8 py-3 rounded-xl font-semibold shadow-lg">
                            Search
                        </button>
                    </div>
                </div>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-12">
                <a href="{{ route('home') }}"
                    class="inline-flex items-center space-x-2 text-brand-orange hover:text-brand-red transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span class="font-medium">Back to Home</span>
                </a>
            </div>
        </div>
    </div>
@endsection

