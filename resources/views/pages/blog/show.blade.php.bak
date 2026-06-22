@extends('layouts.app')

@section('title', ($post->seo_title ?: $post->title) . ' - Violet Nswana Kaponda')
@section('description', $post->meta_description ?: $post->excerpt)

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-gray-50 to-orange-50 py-12 lg:py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center space-x-2 text-sm text-gray-600 mb-6">
                <a href="{{ route('home') }}" class="hover:text-orange-600 transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="{{ route('blog.index') }}" class="hover:text-orange-600 transition-colors">Blog</a>
                @if ($post->categories->first())
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <a href="{{ route('blog.category', $post->categories->first()->slug) }}"
                        class="hover:text-orange-600 transition-colors">
                        {{ $post->categories->first()->name }}
                    </a>
                @endif
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-gray-400">{{ Str::limit($post->title, 30) }}</span>
            </nav>

            <!-- Categories -->
            @if ($post->categories->count() > 0)
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach ($post->categories as $category)
                        <a href="{{ route('blog.category', $category->slug) }}"
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium text-white hover:opacity-90 transition-opacity"
                            style="background-color: {{ $category->color }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            @endif

            <!-- Title -->
            <h1 class="text-3xl lg:text-5xl font-bold font-display text-gray-900 mb-6 leading-tight">
                {{ $post->title }}
            </h1>

            <!-- Meta Info -->
            <div class="flex flex-wrap items-center gap-6 text-gray-600 mb-8">
                <div class="flex items-center">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mr-3">
                        <span class="text-white font-bold text-lg">V</span>
                    </div>
                    <div>
                        <p class="font-medium text-gray-900">Violet Nswana Kaponda</p>
                        <p class="text-sm text-gray-500">Fintech Thought Leader</p>
                    </div>
                </div>

                <div class="flex items-center space-x-6 text-sm">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        {{ $post->published_at->format('F j, Y') }}
                    </span>
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $post->reading_time }} min read
                    </span>
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        {{ number_format($post->views) }} views
                    </span>
                </div>
            </div>

            <!-- Social Share -->
            <div class="flex items-center space-x-4">
                <span class="text-sm font-medium text-gray-700">Share:</span>
                <div class="flex space-x-2">
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                        target="_blank" class="p-2 bg-blue-400 text-white rounded-lg hover:bg-blue-500 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                        target="_blank" class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                        target="_blank" class="p-2 bg-blue-800 text-white rounded-lg hover:bg-blue-900 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <button onclick="copyPostUrl()"
                        class="p-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="lg:grid lg:grid-cols-4 lg:gap-12">
            <!-- Article Content -->
            <article class="lg:col-span-3">
                <!-- Featured Image -->
                @if ($post->featured_image)
                    <div class="mb-8 rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                            class="w-full h-auto">
                    </div>
                @endif

                <!-- Article Body -->
                <div class="prose prose-lg prose-orange max-w-none">
                    {!! $post->content !!}
                </div>

                <!-- Tags -->
                @if ($post->tags && count($post->tags) > 0)
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('blog.index', ['tag' => $tag]) }}"
                                    class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-orange-100 text-orange-800 hover:bg-orange-200 transition-colors">
                                    #{{ $tag }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Author Bio -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <div class="flex items-start space-x-4">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white font-bold text-xl">V</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Violet Nswana Kaponda</h3>
                            <p class="text-gray-600 mb-4">
                                Fintech thought leader and speaker passionate about empowering Africa through technology and
                                innovation.
                                With expertise in digital transformation and women in tech, Violet is driving change across
                                the continent.
                            </p>
                            <div class="flex space-x-3">
                                <a href="https://www.linkedin.com/in/violet-nswana-kaponda-bsc-msc-a2761a153"
                                    target="_blank" class="text-blue-600 hover:text-blue-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                    </svg>
                                </a>
                                <a href="https://youtu.be/xtmlZ5w70uE" target="_blank"
                                    class="text-red-600 hover:text-red-700">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23.498 6.186a2.99 2.99 0 00-2.122-2.121C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.376.52A2.99 2.99 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a2.99 2.99 0 002.122 2.121c1.871.52 9.376.52 9.376.52s7.505 0 9.376-.52a2.99 2.99 0 002.122-2.121C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.75 15.568V8.432L15.818 12 9.75 15.568z" />
                                    </svg>
                                </a>
                                <a href="{{ route('about') }}"
                                    class="text-orange-600 hover:text-orange-700 text-sm font-medium">
                                    View Full Bio →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                @if ($previousPost || $nextPost)
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @if ($previousPost)
                                <a href="{{ route('blog.show', $previousPost->slug) }}"
                                    class="group p-6 bg-white border border-gray-200 rounded-xl hover:shadow-md transition-all duration-200">
                                    <div class="flex items-center text-sm text-gray-500 mb-2">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7" />
                                        </svg>
                                        Previous Post
                                    </div>
                                    <h3 class="font-semibold text-gray-900 group-hover:text-orange-600 transition-colors">
                                        {{ $previousPost->title }}
                                    </h3>
                                </a>
                            @endif

                            @if ($nextPost)
                                <a href="{{ route('blog.show', $nextPost->slug) }}"
                                    class="group p-6 bg-white border border-gray-200 rounded-xl hover:shadow-md transition-all duration-200 {{ !$previousPost ? 'md:col-start-2' : '' }}">
                                    <div class="flex items-center justify-end text-sm text-gray-500 mb-2">
                                        Next Post
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </div>
                                    <h3
                                        class="font-semibold text-gray-900 group-hover:text-orange-600 transition-colors text-right">
                                        {{ $nextPost->title }}
                                    </h3>
                                </a>
                            @endif
                        </div>
                    </div>
                @endif
            </article>

            <!-- Sidebar -->
            <div class="lg:col-span-1 mt-12 lg:mt-0">
                <div class="space-y-8">
                    <!-- Table of Contents (if content has headings) -->
                    <div id="toc-container" class="hidden bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Table of Contents</h3>
                        <nav id="table-of-contents" class="space-y-2"></nav>
                    </div>

                    <!-- Newsletter Signup -->
                    <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl p-6 text-white">
                        <h3 class="text-lg font-bold mb-2">Enjoyed this article?</h3>
                        <p class="text-orange-100 text-sm mb-4">
                            Subscribe to get more insights like this delivered to your inbox.
                        </p>
                        <form id="post-newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST"
                            class="space-y-3">
                            @csrf
                            <input type="email" name="email" placeholder="Your email address" required
                                class="w-full px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-300">
                            <button type="submit" id="post-newsletter-btn"
                                class="w-full bg-white text-orange-600 py-3 px-4 rounded-lg font-semibold hover:bg-orange-50 transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>

                    <!-- Related Posts -->
                    @if ($relatedPosts->count() > 0)
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Related Articles</h3>
                            <div class="space-y-4">
                                @foreach ($relatedPosts as $relatedPost)
                                    <article class="group">
                                        @if ($relatedPost->featured_image)
                                            <div class="aspect-video bg-gray-200 rounded-lg overflow-hidden mb-3">
                                                <img src="{{ asset('storage/' . $relatedPost->featured_image) }}"
                                                    alt="{{ $relatedPost->title }}"
                                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                            </div>
                                        @endif
                                        <h4
                                            class="font-medium text-gray-900 group-hover:text-orange-600 transition-colors mb-2 line-clamp-2">
                                            <a
                                                href="{{ route('blog.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                                        </h4>
                                        <p class="text-sm text-gray-600 line-clamp-2">{{ $relatedPost->excerpt }}</p>
                                        <p class="text-xs text-gray-500 mt-2">
                                            {{ $relatedPost->published_at->diffForHumans() }}</p>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Back to Blog -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 text-center">
                        <a href="{{ route('blog.index') }}"
                            class="inline-flex items-center text-orange-600 hover:text-orange-700 font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                            Back to All Posts
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Copy post URL functionality
            function copyPostUrl() {
                navigator.clipboard.writeText(window.location.href).then(() => {
                    // Show temporary success message
                    const notification = document.createElement('div');
                    notification.className =
                        'fixed bottom-4 right-4 bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg z-50';
                    notification.textContent = 'Post URL copied to clipboard!';
                    document.body.appendChild(notification);

                    setTimeout(() => {
                        notification.remove();
                    }, 3000);
                });
            }

            // Generate Table of Contents
            document.addEventListener('DOMContentLoaded', function() {
                const headings = document.querySelectorAll('.prose h2, .prose h3, .prose h4');
                const tocContainer = document.getElementById('toc-container');
                const tocNav = document.getElementById('table-of-contents');

                if (headings.length > 0) {
                    tocContainer.classList.remove('hidden');

                    headings.forEach((heading, index) => {
                        // Add ID to heading if it doesn't have one
                        if (!heading.id) {
                            heading.id = `heading-${index}`;
                        }

                        const tocItem = document.createElement('a');
                        tocItem.href = `#${heading.id}`;
                        tocItem.textContent = heading.textContent;
                        tocItem.className = `block text-sm text-gray-600 hover:text-orange-600 transition-colors py-1 ${
                    heading.tagName === 'H3' ? 'pl-4' : heading.tagName === 'H4' ? 'pl-8' : ''
                }`;

                        tocNav.appendChild(tocItem);
                    });

                    // Smooth scroll for TOC links
                    tocNav.addEventListener('click', function(e) {
                        if (e.target.tagName === 'A') {
                            e.preventDefault();
                            const targetId = e.target.getAttribute('href').substring(1);
                            const targetElement = document.getElementById(targetId);
                            if (targetElement) {
                                targetElement.scrollIntoView({
                                    behavior: 'smooth',
                                    block: 'start'
                                });
                            }
                        }
                    });
                }

                // Newsletter form submission (similar to previous implementation)
                const postNewsletterForm = document.getElementById('post-newsletter-form');
                if (postNewsletterForm) {
                    postNewsletterForm.addEventListener('submit', function(e) {
                        e.preventDefault();

                        const submitBtn = document.getElementById('post-newsletter-btn');
                        const originalText = submitBtn.textContent;
                        const formData = new FormData(this);

                        // Show loading state
                        submitBtn.innerHTML = `
                    <div class="flex items-center justify-center">
                        <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-orange-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Subscribing...
                    </div>
                `;
                        submitBtn.disabled = true;

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
                                    submitBtn.innerHTML = '✓ Subscribed!';
                                    submitBtn.style.background = '#10b981';
                                    submitBtn.style.color = 'white';

                                    setTimeout(() => {
                                        postNewsletterForm.reset();
                                        submitBtn.innerHTML = originalText;
                                        submitBtn.disabled = false;
                                        submitBtn.style.background = '';
                                        submitBtn.style.color = '';
                                    }, 3000);
                                } else {
                                    submitBtn.innerHTML = 'Error';
                                    submitBtn.style.background = '#dc2626';
                                    submitBtn.style.color = 'white';

                                    setTimeout(() => {
                                        submitBtn.innerHTML = originalText;
                                        submitBtn.disabled = false;
                                        submitBtn.style.background = '';
                                        submitBtn.style.color = '';
                                    }, 3000);
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                submitBtn.innerHTML = 'Error';
                                submitBtn.style.background = '#dc2626';
                                submitBtn.style.color = '';

                                setTimeout(() => {
                                    submitBtn.innerHTML = originalText;
                                    submitBtn.disabled = false;
                                    submitBtn.style.background = '';
                                    submitBtn.style.color = '';
                                }, 3000);
                            });
                    });
                }
            });
        </script>

        <style>
            /* Enhanced Prose Styles */
            .prose {
                color: #374151;
                line-height: 1.75;
            }

            .prose h2 {
                color: #111827;
                font-weight: 700;
                font-size: 1.5em;
                margin-top: 2em;
                margin-bottom: 1em;
                line-height: 1.3333333;
            }

            .prose h3 {
                color: #111827;
                font-weight: 600;
                font-size: 1.25em;
                margin-top: 1.6em;
                margin-bottom: 0.6em;
                line-height: 1.6;
            }

            .prose h4 {
                color: #111827;
                font-weight: 600;
                margin-top: 1.5em;
                margin-bottom: 0.5em;
                line-height: 1.5;
            }

            .prose p {
                margin-top: 1.25em;
                margin-bottom: 1.25em;
            }

            .prose a {
                color: #ea580c;
                text-decoration: underline;
                font-weight: 500;
            }

            .prose a:hover {
                color: #dc2626;
            }

            .prose strong {
                color: #111827;
                font-weight: 600;
            }

            .prose ul {
                margin-top: 1.25em;
                margin-bottom: 1.25em;
                padding-left: 1.625em;
            }

            .prose ul li {
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                position: relative;
            }

            .prose ul li::before {
                content: "";
                position: absolute;
                background-color: #ea580c;
                border-radius: 50%;
                width: 0.375em;
                height: 0.375em;
                top: calc(0.875em - 0.1875em);
                left: -1.5em;
            }

            .prose ol {
                margin-top: 1.25em;
                margin-bottom: 1.25em;
                padding-left: 1.625em;
                counter-reset: list-counter;
            }

            .prose ol li {
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                counter-increment: list-counter;
                position: relative;
            }

            .prose ol li::before {
                content: counter(list-counter) ".";
                position: absolute;
                font-weight: 600;
                color: #ea580c;
                left: -1.5em;
            }

            .prose blockquote {
                font-weight: 500;
                font-style: italic;
                color: #111827;
                border-left-width: 0.25rem;
                border-left-color: #ea580c;
                quotes: "\201C" "\201D" "\2018" "\2019";
                margin-top: 1.6em;
                margin-bottom: 1.6em;
                padding-left: 1em;
                background: #fef3f2;
                padding: 1.5em;
                border-radius: 0.75rem;
            }

            .prose blockquote p:first-of-type::before {
                content: open-quote;
            }

            .prose blockquote p:last-of-type::after {
                content: close-quote;
            }

            .prose code {
                color: #111827;
                font-weight: 600;
                font-size: 0.875em;
                background-color: #f3f4f6;
                padding: 0.25em 0.375em;
                border-radius: 0.25rem;
            }

            .prose pre {
                color: #e5e7eb;
                background-color: #1f2937;
                overflow-x: auto;
                font-size: 0.875em;
                line-height: 1.7142857;
                margin-top: 1.7142857em;
                margin-bottom: 1.7142857em;
                border-radius: 0.375rem;
                padding: 0.8571429em 1.1428571em;
            }

            .prose pre code {
                background-color: transparent;
                border-width: 0;
                border-radius: 0;
                padding: 0;
                font-weight: 400;
                color: inherit;
                font-size: inherit;
                font-family: inherit;
                line-height: inherit;
            }

            .prose table {
                width: 100%;
                table-layout: auto;
                text-align: left;
                margin-top: 2em;
                margin-bottom: 2em;
                font-size: 0.875em;
                line-height: 1.7142857;
                border-radius: 0.75rem;
                overflow: hidden;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            }

            .prose thead {
                background-color: #f3f4f6;
                border-bottom: 1px solid #d1d5db;
            }

            .prose thead th {
                color: #111827;
                font-weight: 600;
                vertical-align: bottom;
                padding: 0.8571429em 1.1428571em;
            }

            .prose tbody tr {
                border-bottom: 1px solid #e5e7eb;
            }

            .prose tbody tr:last-child {
                border-bottom-width: 0;
            }

            .prose tbody td {
                vertical-align: top;
                padding: 0.8571429em 1.1428571em;
            }

            .prose img {
                margin-top: 2em;
                margin-bottom: 2em;
                border-radius: 0.75rem;
                box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            }

            .prose figure {
                margin-top: 2em;
                margin-bottom: 2em;
            }

            .prose figcaption {
                color: #6b7280;
                font-size: 0.875em;
                line-height: 1.4285714;
                margin-top: 0.8571429em;
                text-align: center;
                font-style: italic;
            }

            .prose hr {
                border-color: #e5e7eb;
                border-top-width: 1px;
                margin-top: 3em;
                margin-bottom: 3em;
            }

            /* Custom responsive adjustments */
            @media (max-width: 640px) {
                .prose {
                    font-size: 1rem;
                }

                .prose h2 {
                    font-size: 1.375rem;
                    margin-top: 1.5em;
                    margin-bottom: 0.75em;
                }

                .prose h3 {
                    font-size: 1.25rem;
                    margin-top: 1.25em;
                    margin-bottom: 0.5em;
                }

                .prose img {
                    margin-top: 1.5em;
                    margin-bottom: 1.5em;
                }

                .prose blockquote {
                    padding: 1em;
                    margin-top: 1.25em;
                    margin-bottom: 1.25em;
                }

                .prose table {
                    font-size: 0.8rem;
                }

                .prose pre {
                    padding: 0.75em 1em;
                    font-size: 0.8rem;
                }
            }

            /* Line clamp utility */
            .line-clamp-2 {
                overflow: hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 2;
            }

            .line-clamp-3 {
                overflow: hidden;
                display: -webkit-box;
                -webkit-box-orient: vertical;
                -webkit-line-clamp: 3;
            }

            /* Smooth scroll behavior for anchor links */
            html {
                scroll-behavior: smooth;
            }

            /* Reading progress indicator for long articles */
            .reading-progress {
                position: fixed;
                top: 0;
                left: 0;
                width: 0%;
                height: 3px;
                background: linear-gradient(to right, #ea580c, #dc2626);
                z-index: 9999;
                transition: width 0.3s ease;
            }
        </style>

        <script>
            // Reading progress indicator
            document.addEventListener('DOMContentLoaded', function() {
                // Create reading progress bar
                const progressBar = document.createElement('div');
                progressBar.className = 'reading-progress';
                document.body.appendChild(progressBar);

                // Update progress on scroll
                window.addEventListener('scroll', function() {
                    const article = document.querySelector('article');
                    if (article) {
                        const articleTop = article.offsetTop;
                        const articleHeight = article.offsetHeight;
                        const windowHeight = window.innerHeight;
                        const scrollTop = window.scrollY;

                        // Calculate progress
                        const progress = Math.min(
                            Math.max((scrollTop - articleTop + windowHeight) / articleHeight, 0),
                            1
                        );

                        progressBar.style.width = (progress * 100) + '%';
                    }
                });
            });
        </script>
    @endpush
@endsection
