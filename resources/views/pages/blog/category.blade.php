@extends('layouts.app')

@section('title', $category->name . ' - Blog Category')
@section('description', $category->description ?: 'Explore articles in the ' . $category->name . ' category by Violet
    Nswana Kaponda.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-gray-50 to-orange-50 py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center space-x-2 text-sm text-gray-600 mb-6">
                <a href="{{ route('home') }}" class="hover:text-orange-600 transition-colors">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <a href="{{ route('blog.index') }}" class="hover:text-orange-600 transition-colors">Blog</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
                <span class="text-gray-400">{{ $category->name }}</span>
            </nav>

            <div class="text-center">
                <!-- Category Badge -->
                <div class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium text-white mb-6"
                    style="background-color: {{ $category->color }}">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    {{ $category->name }}
                </div>

                <!-- Title -->
                <h1 class="text-4xl lg:text-6xl font-bold font-display text-gray-900 mb-6">
                    <span class="gradient-text">{{ $category->name }}</span>
                </h1>

                <!-- Description -->
                @if ($category->description)
                    <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                        {{ $category->description }}
                    </p>
                @endif

                <!-- Stats -->
                <div class="flex items-center justify-center space-x-8 text-sm text-gray-600">
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        {{ $posts->total() }} {{ Str::plural('article', $posts->total()) }}
                    </span>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="lg:grid lg:grid-cols-4 lg:gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <!-- Other Categories -->
                @if ($otherCategories->count() > 0)
                    <div class="mb-8">
                        <div class="flex flex-wrap items-center gap-4">
                            <span class="text-sm font-medium text-gray-700">Other categories:</span>
                            <a href="{{ route('blog.index') }}"
                                class="px-4 py-2 text-sm bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200 transition-colors">
                                All Posts
                            </a>
                            @foreach ($otherCategories as $otherCategory)
                                <a href="{{ route('blog.category', $otherCategory->slug) }}"
                                    class="px-4 py-2 text-sm text-white rounded-full hover:opacity-90 transition-opacity"
                                    style="background-color: {{ $otherCategory->color }}">
                                    {{ $otherCategory->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

                <!-- Posts -->
                @if ($posts->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach ($posts as $post)
                            <article
                                class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300 group">
                                <!-- Featured Image -->
                                <div class="aspect-video bg-gray-200 overflow-hidden">
                                    @if ($post->featured_image)
                                        <img src="{{ asset('storage/' . $post->featured_image) }}"
                                            alt="{{ $post->title }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                    @else
                                        <div
                                            class="w-full h-full bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <!-- Content -->
                                <div class="p-6">
                                    <!-- Categories -->
                                    @if ($post->categories->count() > 0)
                                        <div class="flex flex-wrap gap-2 mb-3">
                                            @foreach ($post->categories->take(2) as $postCategory)
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium text-white"
                                                    style="background-color: {{ $postCategory->color }}">
                                                    {{ $postCategory->name }}
                                                </span>
                                            @endforeach
                                        </div>
                                    @endif

                                    <!-- Title -->
                                    <h2
                                        class="text-xl font-bold text-gray-900 mb-3 group-hover:text-orange-600 transition-colors">
                                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h2>

                                    <!-- Excerpt -->
                                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $post->excerpt }}</p>

                                    <!-- Meta Info -->
                                    <div class="flex items-center justify-between text-sm text-gray-500">
                                        <div class="flex items-center space-x-4">
                                            <span class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                {{ $post->published_at->format('M j, Y') }}
                                            </span>
                                            <span class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                {{ $post->reading_time }} min read
                                            </span>
                                            <span class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                {{ number_format($post->views) }}
                                            </span>
                                        </div>
                                        <a href="{{ route('blog.show', $post->slug) }}"
                                            class="text-orange-600 hover:text-orange-700 font-medium">
                                            Read more →
                                        </a>
                                    </div>

                                    <!-- Tags -->
                                    @if ($post->tags && count($post->tags) > 0)
                                        <div class="flex flex-wrap gap-2 mt-4 pt-4 border-t border-gray-100">
                                            @foreach (array_slice($post->tags, 0, 3) as $tag)
                                                <a href="{{ route('blog.index', ['tag' => $tag]) }}"
                                                    class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-gray-100 text-gray-800 hover:bg-gray-200 transition-colors">
                                                    #{{ $tag }}
                                                </a>
                                            @endforeach
                                            @if (count($post->tags) > 3)
                                                <span class="text-xs text-gray-500">+{{ count($post->tags) - 3 }}
                                                    more</span>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    @if ($posts->hasPages())
                        <div class="mt-12">
                            {{ $posts->links('pagination::tailwind') }}
                        </div>
                    @endif
                @else
                    <!-- No Posts -->
                    <div class="text-center py-16">
                        <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6"
                            style="background-color: {{ $category->color }}20">
                            <svg class="w-10 h-10" style="color: {{ $category->color }}" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">No posts in this category yet</h3>
                        <p class="text-gray-600 mb-6">Check back soon for new content in {{ $category->name }}.</p>
                        <a href="{{ route('blog.index') }}"
                            class="inline-flex items-center px-6 py-3 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition-colors font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                            Browse All Posts
                        </a>
                    </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 mt-12 lg:mt-0">
                <div class="space-y-8">
                    <!-- Category Info -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4"
                                style="background-color: {{ $category->color }}">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $category->name }}</h3>
                            @if ($category->description)
                                <p class="text-sm text-gray-600 mb-4">{{ $category->description }}</p>
                            @endif
                            <div class="text-sm text-gray-500">
                                {{ $posts->total() }} {{ Str::plural('article', $posts->total()) }} published
                            </div>
                        </div>
                    </div>

                    <!-- Other Categories -->
                    @if ($otherCategories->count() > 0)
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Explore Other Topics</h3>
                            <div class="space-y-3">
                                @foreach ($otherCategories as $otherCategory)
                                    <a href="{{ route('blog.category', $otherCategory->slug) }}"
                                        class="flex items-center justify-between p-3 rounded-lg hover:bg-gray-50 transition-colors group">
                                        <div class="flex items-center">
                                            <div class="w-3 h-3 rounded-full mr-3"
                                                style="background-color: {{ $otherCategory->color }}"></div>
                                            <span
                                                class="text-sm font-medium text-gray-900 group-hover:text-orange-600">{{ $otherCategory->name }}</span>
                                        </div>
                                        <span
                                            class="text-xs text-gray-500">{{ $otherCategory->published_posts_count }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Newsletter Signup -->
                    <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl p-6 text-white">
                        <h3 class="text-lg font-bold mb-2">Stay Updated</h3>
                        <p class="text-orange-100 text-sm mb-4">
                            Get the latest {{ $category->name }} insights delivered to your inbox.
                        </p>
                        <form id="category-newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST"
                            class="space-y-3">
                            @csrf
                            <input type="email" name="email" placeholder="Your email address" required
                                class="w-full px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-300">
                            <button type="submit" id="category-newsletter-btn"
                                class="w-full bg-white text-orange-600 py-3 px-4 rounded-lg font-semibold hover:bg-orange-50 transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>

                    <!-- Back to All Posts -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 text-center">
                        <a href="{{ route('blog.index') }}"
                            class="inline-flex items-center text-orange-600 hover:text-orange-700 font-medium">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                            View All Categories
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Newsletter form submission for category page
            document.addEventListener('DOMContentLoaded', function() {
                const categoryNewsletterForm = document.getElementById('category-newsletter-form');

                if (categoryNewsletterForm) {
                    categoryNewsletterForm.addEventListener('submit', function(e) {
                        e.preventDefault();

                        const submitBtn = document.getElementById('category-newsletter-btn');
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
                                        categoryNewsletterForm.reset();
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
                                submitBtn.style.color = 'white';

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
    @endpush
@endsection
