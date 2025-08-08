@extends('layouts.app')

@section('title', 'Violet Nswana Kaponda - Fintech Thought Leader & Speaker')
@section('description', 'Violet Nswana Kaponda is a leading voice in African fintech, digital transformation, and women in technology. Book her for speaking engagements and strategic consulting.')

@section('content')
<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden" x-data="hero">
    <!-- Background with Gradient Overlay -->
    <div class="absolute inset-0 bg-hero-gradient"></div>
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    
    <!-- Hero Image -->
    <div class="absolute inset-0">
        <img 
            src="{{ asset('images/hero/violet-hero-main.jpg') }}" 
            alt="Violet Nswana Kaponda - Fintech Thought Leader"
            class="w-full h-full object-cover object-center opacity-80"
        >
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 container-brand text-center text-white">
        <div class="max-w-4xl mx-auto animate-on-scroll">
            <!-- Main Headline -->
            <h1 class="hero-text text-white mb-6 text-shadow-lg">
                Empowering Africa's 
                <span class="text-brand-gradient bg-gradient-to-r from-brand-amber-400 to-brand-gold bg-clip-text text-transparent">
                    Fintech Future
                </span>
            </h1>
            
            <!-- Subheadline -->
            <p class="text-xl md:text-2xl mb-8 text-gray-200 max-w-3xl mx-auto leading-relaxed text-shadow">
                I'm Violet Nswana Kaponda, a thought leader driving digital transformation 
                across Africa through strategic consulting, inspiring speaking, and empowering women in technology.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                <a href="#speaking" class="btn-primary text-lg px-8 py-4 shadow-brand-lg hover:shadow-glow transform hover:-translate-y-1 transition-all duration-300" x-ref="ctaButton">
                    Book Me to Speak
                </a>
                <a href="#podcast" class="btn-secondary text-lg px-8 py-4 bg-white bg-opacity-20 border-white text-white hover:bg-white hover:text-brand-black backdrop-blur-sm">
                    Listen to My Podcast
                </a>
            </div>
            
            <!-- Social Proof / Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="animate-on-scroll">
                    <div class="text-3xl font-bold text-brand-amber-400 mb-2">11+</div>
                    <div class="text-gray-300">Podcast Episodes</div>
                </div>
                <div class="animate-on-scroll">
                    <div class="text-3xl font-bold text-brand-amber-400 mb-2">5</div>
                    <div class="text-gray-300">Speaking Topics</div>
                </div>
                <div class="animate-on-scroll">
                    <div class="text-3xl font-bold text-brand-amber-400 mb-2">100%</div>
                    <div class="text-gray-300">Passion for Impact</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce-soft">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- About Preview Section -->
<section id="about-preview" class="section-padding bg-white">
    <div class="container-brand">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="animate-on-scroll">
                <h2 class="display-text mb-6">
                    Leading Africa's 
                    <span class="text-brand-gradient">Digital Revolution</span>
                </h2>
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    As a fintech thought leader and strategic consultant, I'm passionate about 
                    driving digital transformation across Africa. Through my work, speaking engagements, 
                    and the "Elevate & Dominate" podcast, I empower organizations and individuals 
                    to harness the power of technology for sustainable growth.
                </p>
                <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                    My mission is to amplify African voices in technology, create pathways for 
                    women in fintech, and build bridges between innovation and practical implementation.
                </p>
                <a href="{{ route('about') }}" class="btn-primary">
                    Learn More About My Journey
                </a>
            </div>
            
            <!-- Image -->
            <div class="animate-on-scroll">
                <div class="relative">
                    <img 
                        src="{{ asset('images/gallery/violet-professional-1.jpg') }}" 
                        alt="Violet Nswana Kaponda - Professional Portrait"
                        class="rounded-xl shadow-brand-lg w-full"
                    >
                    <!-- Decorative Element -->
                    <div class="absolute -top-4 -left-4 w-24 h-24 bg-brand-gradient rounded-full opacity-20"></div>
                    <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-brand-amber-900 rounded-full opacity-10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Speaking Topics Section -->
<section id="speaking" class="section-padding bg-gray-50">
    <div class="container-brand">
        <!-- Section Header -->
        <div class="text-center mb-16 animate-on-scroll">
            <h2 class="display-text mb-6">Speaking Topics That Transform</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                From fintech innovation to women's leadership, I deliver powerful insights 
                that inspire action and drive meaningful change.
            </p>
        </div>
        
        <!-- Topics Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Topic 1: Fintech & AI -->
            <div class="card-elevated animate-on-scroll group">
                <div class="p-8">
                    <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                        Fintech & AI in Africa
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Exploring how artificial intelligence and fintech innovations are 
                        reshaping Africa's financial landscape and creating new opportunities.
                    </p>
                </div>
            </div>
            
            <!-- Topic 2: Women in Technology -->
            <div class="card-elevated animate-on-scroll group">
                <div class="p-8">
                    <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                        Women in Technology & Leadership
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Empowering women to break barriers, claim their space in tech, 
                        and become leaders who drive organizational transformation.
                    </p>
                </div>
            </div>
            
            <!-- Topic 3: Digital Transformation -->
            <div class="card-elevated animate-on-scroll group">
                <div class="p-8">
                    <div class="w-16 h-16 bg-brand-gradient rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="headline-text mb-4 group-hover:text-brand-red-900 transition-colors duration-300">
                        Digital Inclusion & Transformation
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Strategic approaches to digital transformation that ensure 
                        inclusive growth and sustainable technology adoption across Africa.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="text-center mt-12 animate-on-scroll">
            <a href="{{ route('speaking') }}" class="btn-primary text-lg px-8 py-4">
                View All Speaking Topics
            </a>
        </div>
    </div>
</section>

<!-- Podcast Section -->
<section id="podcast" class="section-padding bg-brand-black text-white" x-data="podcastPlayer">
    <div class="container-brand">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="animate-on-scroll">
                <h2 class="display-text text-white mb-6">
                    Elevate & Dominate 
                    <span class="text-brand-amber-400">Podcast</span>
                </h2>
                <p class="text-xl text-gray-300 mb-6 leading-relaxed">
                    Join me for powerful conversations about fintech innovation, leadership, 
                    wellness, and the strategies that drive success in today's digital economy.
                </p>
                <p class="text-lg text-gray-400 mb-8 leading-relaxed">
                    With over 11 episodes and growing, we explore the intersection of 
                    technology, business, and personal development with industry leaders 
                    and innovators across Africa and beyond.
                </p>
                
                <!-- Podcast Stats -->
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-brand-amber-400 mb-2">11+</div>
                        <div class="text-gray-400">Episodes</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-brand-amber-400 mb-2">Multi-Platform</div>
                        <div class="text-gray-400">Available On</div>
                    </div>
                </div>
                
                <!-- Platform Links -->
                <div class="flex flex-wrap gap-4 mb-8">
                    <a href="https://youtube.com/@elevateanddominate" class="flex items-center space-x-2 bg-red-600 hover:bg-red-700 px-4 py-2 rounded-lg transition duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                        <span>YouTube</span>
                    </a>
                    <a href="https://tiktok.com/@violetkaponda" class="flex items-center space-x-2 bg-gray-800 hover:bg-gray-700 px-4 py-2 rounded-lg transition duration-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.53.02C13.84 0 15.14.01 16.44 0c.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                        <span>TikTok</span>
                    </a>
                </div>
                
                <a href="{{ route('media') }}" class="btn-accent">
                    Listen to All Episodes
                </a>
            </div>
            
            <!-- Featured Episode / Speaking Image -->
            <div class="animate-on-scroll">
                <div class="relative">
                    <img 
                        src="{{ asset('images/speaking/violet-speaking-event-1.jpg') }}" 
                        alt="Violet Kaponda Speaking at Event"
                        class="rounded-xl shadow-brand-lg w-full"
                    >
                    <!-- Play Button Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button 
                            @click="playEpisode({title: 'Latest Episode', description: 'Fintech Innovation in Africa'})"
                            class="w-20 h-20 bg-white bg-opacity-90 rounded-full flex items-center justify-center shadow-lg hover:bg-opacity-100 transition duration-300 group"
                        >
                            <svg class="w-8 h-8 text-brand-red-900 ml-1 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section id="newsletter" class="section-padding bg-brand-red-900 text-white">
    <div class="container-brand">
        <div class="max-w-3xl mx-auto text-center animate-on-scroll">
            <h2 class="display-text text-white mb-6">
                Stay Ahead of the Curve
            </h2>
            <p class="text-xl text-red-100 mb-8 leading-relaxed">
                Get exclusive insights on fintech trends, leadership strategies, and opportunities 
                shaping Africa's digital future. Join thousands of forward-thinking professionals.
            </p>
            
            <!-- Newsletter Form -->
            <div x-data="newsletter" class="max-w-md mx-auto">
                <form @submit.prevent="subscribe()" class="flex flex-col sm:flex-row gap-4 mb-4">
                    <input 
                        type="email" 
                        x-model="email"
                        placeholder="Enter your email address"
                        class="flex-1 px-4 py-3 rounded-lg text-brand-black focus:outline-none focus:ring-2 focus:ring-brand-amber-400"
                        required
                    >
                    <button 
                        type="submit" 
                        :disabled="loading"
                        class="btn-accent px-8 py-3 text-lg whitespace-nowrap"
                        :class="{ 'opacity-50 cursor-not-allowed': loading }"
                    >
                        <span x-show="!loading">Subscribe</span>
                        <span x-show="loading">Subscribing...</span>
                    </button>
                </form>
                
                <!-- Success/Error Messages -->
                <div x-show="success" class="text-green-300 mb-4">
                    ✅ Thank you! You've successfully joined our community.
                </div>
                <div x-show="error" class="text-red-300 mb-4" x-text="error"></div>
                
                <p class="text-red-200 text-sm">
                    No spam, ever. Unsubscribe anytime with just one click.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section id="cta" class="section-padding bg-white">
    <div class="container-brand">
        <div class="max-w-4xl mx-auto text-center animate-on-scroll">
            <h2 class="display-text mb-6">
                Ready to Transform Your Event?
            </h2>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto leading-relaxed">
                Book Violet for your next conference, corporate event, or strategic session. 
                Deliver powerful insights that inspire action and drive meaningful change 
                in your organization.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('contact') }}" class="btn-primary text-lg px-8 py-4">
                    Book Speaking Engagement
                </a>
                <a href="{{ route('about') }}" class="btn-secondary text-lg px-8 py-4">
                    Learn More About Violet
                </a>
            </div>
            
            <!-- Contact Info -->
            <div class="mt-8 pt-8 border-t border-gray-200">
                <p class="text-gray-600">
                    <strong>For speaking inquiries:</strong> 
                    <a href="mailto:violet@violetkaponda.com" class="text-brand-red-700 hover:text-brand-red-900">
                        violet@violetkaponda.com
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection