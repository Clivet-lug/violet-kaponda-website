@extends('layouts.app')

@section('title', 'Contact Violet Nswana Kaponda - Let\'s Build Africa\'s Digital Future Together')
@section('description',
    'Connect with Violet Nswana Kaponda for speaking engagements, media inquiries, strategic
    partnerships, and business development opportunities across Africa\'s fintech ecosystem.')

@section('content')
    <!-- Hero Section -->
    <section class="relative py-20 bg-gradient-to-br from-gray-50 to-gray-100 overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-100 to-amber-100 rounded-full blur-3xl opacity-40">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tr from-amber-100 to-yellow-100 rounded-full blur-3xl opacity-30">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

                <!-- Contact Information -->
                <div class="animate-on-scroll space-y-8">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-200 text-amber-800 rounded-full text-sm font-medium shadow-sm">
                        💬 Let's Connect & Collaborate
                    </div>

                    <!-- Headlines -->
                    <div class="space-y-4">
                        <h1 class="text-4xl md:text-6xl font-display font-bold text-gray-900 leading-tight">
                            Ready to
                            <span
                                class="bg-gradient-to-r from-orange-600 via-amber-600 to-red-600 bg-clip-text text-transparent">
                                Transform
                            </span>
                            Together?
                        </h1>

                        <h2 class="text-xl md:text-2xl text-amber-700 font-medium">
                            Building Africa's Digital Future, One Connection at a Time
                        </h2>
                    </div>

                    <!-- Description -->
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Whether you're looking for a transformational keynote speaker, strategic business partnership,
                        or media collaboration, I'm excited to explore how we can create meaningful impact together
                        across Africa's fintech ecosystem.
                    </p>

                    <!-- Response Promise -->
                    <div class="bg-white/80 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20">
                        <div class="flex items-center space-x-3 mb-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900">Quick Response Guarantee</h3>
                                <p class="text-sm text-gray-600">Professional inquiries answered within 24-48 hours</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Methods -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Direct Contact Options</h3>

                        <div class="space-y-3">
                            <div class="flex items-center space-x-3 group">
                                <div
                                    class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Email</div>
                                    <a href="mailto:violet@violetnswanakaponda.com"
                                        class="text-orange-600 hover:text-orange-700 transition-colors duration-300">
                                        	violet@violetnswanakaponda.com
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3 group">
                                <div
                                    class="w-10 h-10 bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">LinkedIn</div>
                                    <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153"
                                        target="_blank"
                                        class="text-blue-600 hover:text-blue-700 transition-colors duration-300">
                                        Professional Network
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3 group">
                                <div
                                    class="w-10 h-10 bg-gradient-to-r from-amber-500 to-orange-500 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Location</div>
                                    <span class="text-gray-600">Lusaka, Zambia (Global availability)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Availability Status -->
                    <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-4 border border-green-200">
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                            <div>
                                <div class="font-semibold text-green-800">Currently Available</div>
                                <div class="text-sm text-green-600">Accepting new speaking engagements and partnerships
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Smart Contact Form -->
                <div class="animate-on-scroll">
                    <div class="bg-white/90 backdrop-blur-md rounded-2xl p-8 shadow-xl border border-white/20 sticky top-8">
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Send Your Inquiry</h3>
                            <p class="text-gray-600">Choose your inquiry type and I'll personalize my response</p>
                        </div>

                        <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf

                            <!-- Inquiry Type Selection -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-3">What can I help you with?
                                    *</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <label class="inquiry-type-option cursor-pointer">
                                        <input type="radio" name="inquiry_type" value="speaking" class="sr-only" required>
                                        <div
                                            class="inquiry-card bg-gradient-to-r from-purple-50 to-pink-50 border border-purple-200 rounded-lg p-4 text-center transition-all duration-300 hover:shadow-md">
                                            <svg class="w-6 h-6 mx-auto mb-2 text-purple-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                                                </path>
                                            </svg>
                                            <div class="font-medium text-purple-800 text-sm">Speaking Engagement</div>
                                        </div>
                                    </label>

                                    <label class="inquiry-type-option cursor-pointer">
                                        <input type="radio" name="inquiry_type" value="partnership" class="sr-only">
                                        <div
                                            class="inquiry-card bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-lg p-4 text-center transition-all duration-300 hover:shadow-md">
                                            <svg class="w-6 h-6 mx-auto mb-2 text-green-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                </path>
                                            </svg>
                                            <div class="font-medium text-green-800 text-sm">Business Partnership</div>
                                        </div>
                                    </label>

                                    <label class="inquiry-type-option cursor-pointer">
                                        <input type="radio" name="inquiry_type" value="media" class="sr-only">
                                        <div
                                            class="inquiry-card bg-gradient-to-r from-blue-50 to-cyan-50 border border-blue-200 rounded-lg p-4 text-center transition-all duration-300 hover:shadow-md">
                                            <svg class="w-6 h-6 mx-auto mb-2 text-blue-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                                </path>
                                            </svg>
                                            <div class="font-medium text-blue-800 text-sm">Media Inquiry</div>
                                        </div>
                                    </label>

                                    <label class="inquiry-type-option cursor-pointer">
                                        <input type="radio" name="inquiry_type" value="general" class="sr-only">
                                        <div
                                            class="inquiry-card bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-200 rounded-lg p-4 text-center transition-all duration-300 hover:shadow-md">
                                            <svg class="w-6 h-6 mx-auto mb-2 text-amber-600" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                                </path>
                                            </svg>
                                            <div class="font-medium text-amber-800 text-sm">Coaching</div>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- Basic Information -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Your Name *</label>
                                    <input type="text" name="name" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                        placeholder="Full Name">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                    <input type="email" name="email" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                        placeholder="email@company.com">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Organization</label>
                                    <input type="text" name="organization"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                        placeholder="Company/Organization">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Your Role</label>
                                    <input type="text" name="role"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                        placeholder="Job Title">
                                </div>
                            </div>

                            <!-- Dynamic Fields Based on Inquiry Type -->
                            <div id="dynamic-fields"></div>

                            <!-- Message -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Your Message *</label>
                                <textarea name="message" rows="4" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                    placeholder="Tell me more about your inquiry and how we can work together..."></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" id="submit-button"
                                class="w-full bg-gradient-to-r from-orange-600 to-red-600 text-white font-semibold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 relative overflow-hidden">
                                <span class="relative z-10">Send Inquiry</span>
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-red-600 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                </div>
                            </button>

                            <!-- Privacy Notice -->
                            <p class="text-xs text-gray-500 text-center">
                                By submitting this form, you agree to receive follow-up communications.
                                I respect your privacy and will never share your information.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How I Can Help Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-amber-100 to-orange-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-yellow-100 to-amber-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-200 text-amber-800 rounded-full text-sm font-medium mb-6">
                    🚀 Ways We Can Collaborate
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    How I Can <span
                        class="bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">Help You</span>
                    Succeed
                </h2>

                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From transformational keynotes to strategic partnerships, here's how we can create impact together.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Speaking Engagements -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-700 transition-colors duration-300">
                        Speaking Engagements
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Keynotes, panels, workshops on fintech innovation, women in tech, and digital transformation.
                    </p>

                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Conference keynotes</li>
                        <li>• Corporate workshops</li>
                        <li>• Panel discussions</li>
                        <li>• Virtual presentations</li>
                    </ul>
                </div>

                <!-- Media Collaborations -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-700 transition-colors duration-300">
                        Media Collaborations
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Expert commentary, podcast appearances, and thought leadership content for media outlets.
                    </p>

                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Podcast guest appearances</li>
                        <li>• Expert interviews</li>
                        <li>• Thought leadership articles</li>
                        <li>• Industry commentary</li>
                    </ul>
                </div>

                <!-- Strategic Partnerships -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-green-700 transition-colors duration-300">
                        Strategic Partnerships
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Business development, deal structuring, and strategic consulting for fintech initiatives.
                    </p>

                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Business development</li>
                        <li>• Strategic consulting</li>
                        <li>• Partnership facilitation</li>
                        <li>• Market expansion</li>
                    </ul>
                </div>

                <!-- Mentorship & Coaching -->
                <div
                    class="group bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 animate-on-scroll">
                    <div
                        class="w-16 h-16 bg-gradient-to-r from-amber-500 to-orange-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>

                    <h3
                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-amber-700 transition-colors duration-300">
                        Mentorship & Coaching
                    </h3>

                    <p class="text-gray-600 leading-relaxed mb-4">
                        Personal and professional development for leaders in tech and business development.
                    </p>

                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Executive coaching</li>
                        <li>• Career mentorship</li>
                        <li>• Leadership development</li>
                        <li>• Performance coaching</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-1/4 right-1/4 w-96 h-96 bg-gradient-to-r from-amber-200/30 to-orange-200/30 rounded-full blur-3xl">
        </div>
        <div
            class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-gradient-to-r from-yellow-200/30 to-amber-200/30 rounded-full blur-3xl">
        </div>

        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-12 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-200 text-amber-800 rounded-full text-sm font-medium mb-6">
                    ⭐ What People Say
                </div>

                <h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4">
                    Trusted by <span
                        class="bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">Industry
                        Leaders</span>
                </h2>
            </div>

            <!-- Quick Testimonials -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div
                    class="bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    <blockquote class="text-gray-700 mb-4 leading-relaxed">
                        "I’ve worked with Violet on multiple projects, and she consistently raises the bar. Her leadership is hands-on, yet deeply strategic,
                        ensuring that teams feel empowered while driving measurable results."
                    </blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold text-xs mr-3">
                            CL
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 text-sm">Clivet Lungu</div>
                            <div class="text-xs text-gray-600">Software Developer</div>
                        </div>
                    </div>
                </div>


                <div
                    class="bg-white/90 backdrop-blur-md rounded-2xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    <blockquote class="text-gray-700 mb-4 leading-relaxed">
                        "Violet Nswana Kaponda doesn't just participate in Africa's fintech revolution — she leads it.
                        Through strategic vision and relentless execution, she's opening doors that transform entire industries."
                    </blockquote>
                    <div class="flex items-center">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-gray-500 to-gray-400 rounded-full flex items-center justify-center text-white font-semibold text-xs mr-3">
                            ND
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900 text-sm">Nickson Dawson</div>
                            <div class="text-xs text-gray-600">CEO & Founder at East Africa Internet Group</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-amber-100 to-orange-100 rounded-full blur-3xl opacity-30">
        </div>
        <div
            class="absolute bottom-0 left-0 w-80 h-80 bg-gradient-to-tl from-yellow-100 to-amber-100 rounded-full blur-3xl opacity-20">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-200 text-amber-800 rounded-full text-sm font-medium mb-6">
                    ❓ Frequently Asked Questions
                </div>

                <h2 class="text-4xl md:text-5xl font-display font-bold text-gray-900 mb-6 leading-tight">
                    Common <span
                        class="bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">Questions</span>
                </h2>

                <p class="text-xl text-gray-600 leading-relaxed">
                    Everything you need to know about working with me.
                </p>
            </div>

            <!-- FAQ Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">What's your typical response time?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            I respond to all professional inquiries within 24-48 hours. For urgent speaking requests,
                            I aim to respond within 12 hours during business days.
                        </p>
                    </div>

                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">Do you speak at virtual events?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Absolutely! I'm experienced with virtual presentations, webinars, and hybrid events.
                            I have professional home studio setup for high-quality virtual appearances.
                        </p>
                    </div>

                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">What's included in speaking engagements?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Pre-event consultation, customized presentation, professional slides,
                            interactive Q&A session, and post-event follow-up materials.
                        </p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">Do you travel internationally?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Yes! I'm available for international speaking engagements and business development
                            opportunities. Travel arrangements and requirements can be discussed during booking.
                        </p>
                    </div>

                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">What industries do you work with?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Primarily fintech, technology, financial services, and emerging markets.
                            I also work with organizations focused on women's empowerment and leadership development.
                        </p>
                    </div>

                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">Can you customize presentations?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Every presentation is tailored to your audience, industry, and specific objectives.
                            I conduct pre-event consultations to ensure maximum relevance and impact.
                        </p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">Do you offer workshops or training?
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Yes — I create and deliver bespoke workshops on digital transformation, business growth
                            strategies, fintech trends, and leadership in emerging markets.

                        </p>
                    </div>

                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">What makes your approach unique?
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            I merge nearly a decade of fintech experience with a passion for digital inclusion, ensuring
                            that strategies are both innovative and accessible to diverse markets.
                        </p>
                    </div>

                    {{-- <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">What's included in speaking engagements?</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Pre-event consultation, customized presentation, professional slides,
                            interactive Q&A session, and post-event follow-up materials.
                        </p>
                    </div> --}}
                </div>

                <div class="space-y-6">
                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">What’s your speaking style?
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            I combine data-driven insights, practical strategies, and compelling storytelling to keep
                            audiences engaged while delivering actionable takeaways.

                        </p>
                    </div>

                    <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">Can you collaborate on long-term projects?
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Absolutely I work with organizations on both short-term engagements and long-term strategic
                            partnerships to ensure sustained impact.
                        </p>
                    </div>

                    {{-- <div
                        class="bg-white/90 backdrop-blur-md rounded-xl p-6 shadow-lg border border-white/20 animate-on-scroll">
                        <h3 class="font-bold text-gray-900 mb-3">How far in advance should I book you?
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            For speaking engagements, I recommend booking at least 4–6 weeks in advance to allow for
                            customization. For consulting or business development projects, timelines vary based on scope.

                        </p>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-20 bg-gradient-to-br from-amber-600 via-orange-600 to-red-600 text-white relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-white/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse delay-1000">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 animate-on-scroll">
            <div class="space-y-8">
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white leading-tight">
                    Let's Create <span class="text-yellow-200">Extraordinary</span> Together
                </h2>

                <p class="text-xl text-orange-100 leading-relaxed max-w-3xl mx-auto">
                    Ready to bring transformational insights to your audience or explore strategic partnerships?
                    I'm excited to connect and discover how we can drive meaningful impact across Africa's digital
                    ecosystem.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center pt-4">
                    <a href="#contact-form" onclick="scrollToForm()"
                        class="group inline-flex items-center px-8 py-4 bg-white text-amber-700 font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <span>Send Your Inquiry</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                    <a href="mailto:violet@violetnswanakaponda.com"
                        class="group inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-md border border-white/30 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span>Email Directly</span>
                    </a>
                </div>

                <!-- Social Links -->
                <div class="pt-8 border-t border-white/20">
                    <p class="text-orange-200 mb-4">Connect with me on social media</p>
                    <div class="flex justify-center space-x-6">
                        <a href="https://linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153" target="_blank"
                            class="p-3 bg-white/20 backdrop-blur-md rounded-xl text-white hover:text-yellow-300 hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="https://youtube.com/@elevateanddominate" target="_blank"
                            class="p-3 bg-white/20 backdrop-blur-md rounded-xl text-white hover:text-yellow-300 hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                            </svg>
                        </a>
                        <a href="https://tiktok.com/@violetkaponda" target="_blank"
                            class="p-3 bg-white/20 backdrop-blur-md rounded-xl text-white hover:text-yellow-300 hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/violetkaponda" target="_blank"
                            class="p-3 bg-white/20 backdrop-blur-md rounded-xl text-white hover:text-yellow-300 hover:scale-110 transition-all duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12.017 0C8.396 0 7.989.013 7.041.048 6.094.082 5.52.204 5.036.388a5.918 5.918 0 0 0-2.14 1.394A5.918 5.918 0 0 0 .48 4.126C.294 4.61.172 5.184.139 6.131.103 7.08.09 7.487.09 11.108c0 3.62.013 4.027.048 4.975.034.948.156 1.521.34 2.006a5.918 5.918 0 0 0 1.394 2.14 5.918 5.918 0 0 0 2.14 1.394c.485.184 1.058.306 2.006.34.948.035 1.355.048 4.975.048 3.621 0 4.028-.013 4.976-.048.948-.034 1.52-.156 2.005-.34a5.918 5.918 0 0 0 2.14-1.394 5.918 5.918 0 0 0 1.394-2.14c.184-.485.306-1.058.34-2.006.035-.947.048-1.355.048-4.976 0-3.62-.013-4.027-.048-4.975-.034-.948-.156-1.521-.34-2.006a5.918 5.918 0 0 0-1.394-2.14A5.918 5.918 0 0 0 19.063.388C18.578.204 18.005.082 17.057.048 16.108.013 15.701 0 12.08 0h-.063z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced JavaScript for Smart Form -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inquiryTypeOptions = document.querySelectorAll('input[name="inquiry_type"]');
            const dynamicFields = document.getElementById('dynamic-fields');
            const contactForm = document.getElementById('contact-form');

            // Inquiry type selection handling
            inquiryTypeOptions.forEach(option => {
                option.addEventListener('change', function() {
                    // Update visual selection
                    document.querySelectorAll('.inquiry-type-option .inquiry-card').forEach(
                        card => {
                            card.classList.remove('border-orange-500', 'bg-orange-50',
                                'shadow-lg');
                            card.classList.add('hover:shadow-md');
                        });

                    const selectedCard = this.closest('.inquiry-type-option').querySelector(
                        '.inquiry-card');
                    selectedCard.classList.remove('hover:shadow-md');
                    selectedCard.classList.add('border-orange-500', 'bg-orange-50', 'shadow-lg');

                    // Generate dynamic fields based on inquiry type
                    generateDynamicFields(this.value);
                });
            });

            function generateDynamicFields(inquiryType) {
                let fieldsHTML = '';

                switch (inquiryType) {
                    case 'speaking':
                        fieldsHTML = `
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Event Date</label>
                                    <input type="date" name="event_date"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Expected Audience Size</label>
                                    <select name="audience_size"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300">
                                        <option value="">Select size</option>
                                        <option value="1-50">1-50 people</option>
                                        <option value="51-200">51-200 people</option>
                                        <option value="201-500">201-500 people</option>
                                        <option value="500+">500+ people</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Speaking Topic</label>
                                <select name="speaking_topic"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300">
                                    <option value="">Select a topic</option>
                                    <option value="fintech-ai">Fintech & AI in Africa</option>
                                    <option value="women-tech">Women in Technology & Leadership</option>
                                    <option value="digital-transformation">Digital Transformation Strategy</option>
                                    <option value="business-development">Strategic Business Development</option>
                                    <option value="mindset-coaching">Mindset & Performance Coaching</option>
                                    <option value="custom">Custom Topic (please specify in message)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Event Format</label>
                                <select name="event_format"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300">
                                    <option value="">Select format</option>
                                    <option value="keynote">Keynote (45-60 min)</option>
                                    <option value="panel">Panel Discussion</option>
                                    <option value="workshop">Workshop (2-4 hours)</option>
                                    <option value="fireside">Fireside Chat</option>
                                    <option value="virtual">Virtual Presentation</option>
                                </select>
                            </div>`;
                        break;

                    case 'partnership':
                        fieldsHTML = `
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Partnership Type</label>
                                    <select name="partnership_type"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300">
                                        <option value="">Select type</option>
                                        <option value="business-development">Business Development</option>
                                        <option value="strategic-consulting">Strategic Consulting</option>
                                        <option value="deal-structuring">Deal Structuring</option>
                                        <option value="market-expansion">Market Expansion</option>
                                        <option value="other">Other (please specify)</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Project Timeline</label>
                                    <select name="timeline"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300">
                                        <option value="">Select timeline</option>
                                        <option value="immediate">Immediate (within 1 month)</option>
                                        <option value="short-term">Short-term (1-3 months)</option>
                                        <option value="medium-term">Medium-term (3-6 months)</option>
                                        <option value="long-term">Long-term (6+ months)</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Industry Focus</label>
                                <input type="text" name="industry"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                    placeholder="e.g., Fintech, Digital Banking, Mobile Payments">
                            </div>`;
                        break;

                    case 'media':
                        fieldsHTML = `
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Media Type</label>
                                    <select name="media_type"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300">
                                        <option value="">Select type</option>
                                        <option value="podcast">Podcast Interview</option>
                                        <option value="article">Article/Blog Feature</option>
                                        <option value="interview">Media Interview</option>
                                        <option value="expert-commentary">Expert Commentary</option>
                                        <option value="thought-leadership">Thought Leadership Piece</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Publication/Platform</label>
                                    <input type="text" name="publication"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                        placeholder="Name of publication, podcast, or platform">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Topic/Angle</label>
                                <input type="text" name="media_topic"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                    placeholder="What aspect of fintech/tech leadership would you like to explore?">
                            </div>`;
                        break;

                    case 'general':
                        fieldsHTML = `
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">How can I help you?</label>
                                <select name="general_help"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300">
                                    <option value="">Select option</option>
                                    <option value="networking">Professional Networking</option>
                                    <option value="mentorship">Career Mentorship</option>
                                    <option value="collaboration">Collaboration Opportunity</option>
                                    <option value="advice">Industry Advice</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Your Background</label>
                                <input type="text" name="background"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-300"
                                    placeholder="Brief description of your background or current focus">
                            </div>`;
                        break;

                    default:
                        fieldsHTML = '';
                }

                dynamicFields.innerHTML = fieldsHTML;
            }

            // Form submission handling
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const submitButton = document.getElementById('submit-button');
                const originalText = submitButton.textContent;
                const formData = new FormData(this);

                // Show loading state
                submitButton.innerHTML = `
                <div class="flex items-center justify-center">
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Sending...
                </div>
    `;
                submitButton.disabled = true;

                // Send form data
                fetch(this.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Show success state
                            submitButton.innerHTML = `
                <div class="flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Message Sent!
                </div>
            `;
                            submitButton.classList.remove('bg-gradient-to-r', 'from-orange-600',
                                'to-red-600');
                            submitButton.classList.add('bg-green-600');

                            // Show success message
                            showNotification('success', data.message);

                            // Reset form after delay
                            setTimeout(() => {
                                contactForm.reset();
                                dynamicFields.innerHTML = '';
                                document.querySelectorAll('.inquiry-type-option .inquiry-card')
                                    .forEach(card => {
                                        card.classList.remove('border-orange-500',
                                            'bg-orange-50', 'shadow-lg');
                                        card.classList.add('hover:shadow-md');
                                    });

                                submitButton.innerHTML = originalText;
                                submitButton.disabled = false;
                                submitButton.classList.remove('bg-green-600');
                                submitButton.classList.add('bg-gradient-to-r',
                                    'from-orange-600', 'to-red-600');
                            }, 3000);
                        } else {
                            // Show error state
                            submitButton.innerHTML = `
                <div class="flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Error - Try Again
                </div>
            `;
                            submitButton.classList.remove('bg-gradient-to-r', 'from-orange-600',
                                'to-red-600');
                            submitButton.classList.add('bg-red-600');

                            showNotification('error', data.message ||
                                'Something went wrong. Please try again.');

                            // Reset button after delay
                            setTimeout(() => {
                                submitButton.innerHTML = originalText;
                                submitButton.disabled = false;
                                submitButton.classList.remove('bg-red-600');
                                submitButton.classList.add('bg-gradient-to-r',
                                    'from-orange-600', 'to-red-600');
                            }, 3000);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);

                        submitButton.innerHTML = `
            <div class="flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                Network Error
            </div>
        `;
                        submitButton.classList.remove('bg-gradient-to-r', 'from-orange-600',
                            'to-red-600');
                        submitButton.classList.add('bg-red-600');

                        showNotification('error',
                            'Network error. Please check your connection and try again.');

                        setTimeout(() => {
                            submitButton.innerHTML = originalText;
                            submitButton.disabled = false;
                            submitButton.classList.remove('bg-red-600');
                            submitButton.classList.add('bg-gradient-to-r', 'from-orange-600',
                                'to-red-600');
                        }, 3000);
                    });
            });

            // Notification function
            function showNotification(type, message) {
                // Remove existing notifications
                const existingNotification = document.querySelector('.notification');
                if (existingNotification) {
                    existingNotification.remove();
                }

                const notification = document.createElement('div');
                notification.className =
                    `notification fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 max-w-md`;

                if (type === 'success') {
                    notification.classList.add('bg-green-600', 'text-white');
                    notification.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                <div>
                    <div class="font-semibold">Success!</div>
                    <div class="text-sm opacity-90">${message}</div>
                </div>
            </div>
        `;
                } else {
                    notification.classList.add('bg-red-600', 'text-white');
                    notification.innerHTML = `
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <div>
                    <div class="font-semibold">Error</div>
                    <div class="text-sm opacity-90">${message}</div>
                </div>
            </div>
        `;
                }

                document.body.appendChild(notification);

                // Auto-remove after 5 seconds
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.style.opacity = '0';
                        notification.style.transform = 'translateX(100%)';
                        setTimeout(() => notification.remove(), 300);
                    }
                }, 5000);
            }

            // Animate on scroll
            const animateElements = document.querySelectorAll('.animate-on-scroll');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            animateElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.8s ease-out';
                observer.observe(el);
            });
        });

        // Smooth scroll to form
        function scrollToForm() {
            document.getElementById('contact-form').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    </script>

    <!-- Custom CSS for enhanced animations -->
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

        .inquiry-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .inquiry-card:hover {
            transform: translateY(-2px);
        }

        /* Custom focus styles for better accessibility */
        input:focus,
        select:focus,
        textarea:focus {
            box-shadow: 0 0 0 3px rgba(234, 88, 12, 0.1);
        }

        /* Smooth transitions for all interactive elements */
        * {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
    </style>
@endsection
