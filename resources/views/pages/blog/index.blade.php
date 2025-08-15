@extends('layouts.app')

@section('title', 'Blog - Insights on Fintech & African Innovation')
@section('description', 'Explore Violet Nswana Kaponda\'s latest thoughts on fintech, digital transformation, and
    empowering women in technology across Africa.')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-gray-50 to-orange-50 py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl lg:text-6xl font-bold font-display text-gray-900 mb-6">
                    <span class="gradient-text">Insights & Ideas</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    Exploring the future of fintech, digital transformation, and innovation across Africa.
                    Join me on this journey of discovery and empowerment.
                </p>

                <!-- Search Bar -->
                <div class="max-w-md mx-auto">
                    <form method="GET" action="{{ route('blog.index') }}" class="relative">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Search articles..."
                            class="w-full px-6 py-4 pr-12 text-gray-900 placeholder-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent shadow-lg">
                        <button type="submit"
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 p-2 text-gray-400 hover:text-orange-600 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="lg:grid lg:grid-cols-4 lg:gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <!-- Filters -->
                <div class="flex flex-wrap items-center gap-4 mb-8">
                    <div class="flex items-center space-x-2">
                        <span class="text-sm font-medium text-gray-700">Filter by:</span>
                        <a href="{{ route('blog.index') }}"
                            class="px-4 py-2 text-sm rounded-full transition-colors {{ !request('category') && !request('tag') ? 'bg-orange-100 text-orange-700' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                            All Posts
                        </a>
                    </div>

                    @foreach ($categories as $category)
                        <a href="{{ route('blog.index', ['category' => $category->slug]) }}"
                            class="px-4 py-2 text-sm rounded-full transition-colors {{ request('category') === $category->slug ? 'text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                            @if (request('category') === $category->slug) style="background-color: {{ $category->color }}" @endif>
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>

                <!-- Results Info -->
                @if (request('search') || request('category') || request('tag'))
                    <div class="mb-8 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-blue-500 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-blue-800">
                                Found {{ $posts->total() }} post{{ $posts->total() !== 1 ? 's' : '' }}
                                @if (request('search'))
                                    for "<strong>{{ request('search') }}</strong>"
                                @endif
                                @if (request('category'))
                                    in category
                                    "<strong>{{ $categories->where('slug', request('category'))->first()->name ?? request('category') }}</strong>"
                                @endif
                                @if (request('tag'))
                                    tagged with "<strong>{{ request('tag') }}</strong>"
                                @endif
                            </span>
                            <a href="{{ route('blog.index') }}"
                                class="ml-auto text-blue-600 hover:text-blue-800 text-sm font-medium">
                                Clear filters
                            </a>
                        </div>
                    </div>
                @endif

                <!-- Posts Grid -->
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
                                            @foreach ($post->categories->take(2) as $category)
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium text-white"
                                                    style="background-color: {{ $category->color }}">
                                                    {{ $category->name }}
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
                            {{ $posts->withQueryString()->links('pagination::tailwind') }}
                        </div>
                    @endif
                @else
                    <!-- No Posts Found -->
                    <div class="text-center py-16">
                        <svg class="w-20 h-20 text-gray-400 mx-auto mb-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">No posts found</h3>
                        <p class="text-gray-600 mb-6">
                            @if (request('search') || request('category') || request('tag'))
                                Try adjusting your filters or search terms.
                            @else
                                Check back soon for new insights and articles.
                            @endif
                        </p>
                        @if (request('search') || request('category') || request('tag'))
                            <a href="{{ route('blog.index') }}"
                                class="inline-flex items-center px-6 py-3 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition-colors font-medium">
                                View All Posts
                            </a>
                        @endif
                    </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 mt-12 lg:mt-0">
                <div class="space-y-8">
                    <!-- About Widget -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                        <div class="text-center">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4 animate-float">
                                <span class="text-white font-bold text-2xl font-display">V</span>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900 mb-2">Violet Nswana Kaponda</h3>
                            <p class="text-sm text-gray-600 mb-4">
                                Fintech thought leader passionate about empowering Africa through technology and innovation.
                            </p>
                            <a href="{{ route('about') }}"
                                class="inline-flex items-center text-orange-600 hover:text-orange-700 font-medium text-sm">
                                Learn more about me →
                            </a>
                        </div>
                    </div>

                    <!-- Recent Posts -->
                    @if ($recentPosts->count() > 0)
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Recent Posts</h3>
                            <div class="space-y-4">
                                @foreach ($recentPosts as $recentPost)
                                    <article class="flex space-x-3 group">
                                        @if ($recentPost->featured_image)
                                            <img src="{{ asset('storage/' . $recentPost->featured_image) }}"
                                                alt="{{ $recentPost->title }}"
                                                class="w-16 h-16 object-cover rounded-lg flex-shrink-0">
                                        @else
                                            <div
                                                class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center flex-shrink-0">
                                                <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>
                                        @endif
                                        <div class="flex-1 min-w-0">
                                            <h4
                                                class="text-sm font-medium text-gray-900 group-hover:text-orange-600 transition-colors line-clamp-2">
                                                <a
                                                    href="{{ route('blog.show', $recentPost->slug) }}">{{ $recentPost->title }}</a>
                                            </h4>
                                            <p class="text-xs text-gray-500 mt-1">
                                                {{ $recentPost->published_at->diffForHumans() }}</p>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Popular Posts -->
                    @if ($popularPosts->count() > 0)
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Popular Posts</h3>
                            <div class="space-y-4">
                                @foreach ($popularPosts as $index => $popularPost)
                                    <article class="flex items-start space-x-3 group">
                                        <div
                                            class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center">
                                            <span class="text-white text-xs font-bold">{{ $index + 1 }}</span>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h4
                                                class="text-sm font-medium text-gray-900 group-hover:text-orange-600 transition-colors line-clamp-2">
                                                <a
                                                    href="{{ route('blog.show', $popularPost->slug) }}">{{ $popularPost->title }}</a>
                                            </h4>
                                            <p class="text-xs text-gray-500 mt-1">{{ number_format($popularPost->views) }}
                                                views</p>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Popular Tags -->
                    @if ($popularTags->count() > 0)
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-4">Popular Tags</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($popularTags->take(10) as $tag => $count)
                                    <a href="{{ route('blog.index', ['tag' => $tag]) }}"
                                        class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800 hover:bg-orange-100 hover:text-orange-800 transition-colors">
                                        #{{ $tag }}
                                        <span class="ml-1 text-xs text-gray-500">({{ $count }})</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Newsletter Signup -->
                    <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl p-6 text-white">
                        <h3 class="text-lg font-bold mb-2">Stay Updated</h3>
                        <p class="text-orange-100 text-sm mb-4">
                            Get the latest insights on fintech and African innovation delivered to your inbox.
                        </p>
                        <form id="sidebar-newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST"
                            class="space-y-3">
                            @csrf
                            <input type="email" name="email" placeholder="Your email address" required
                                class="w-full px-4 py-3 rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-300">
                            <button type="submit" id="sidebar-newsletter-btn"
                                class="w-full bg-white text-orange-600 py-3 px-4 rounded-lg font-semibold hover:bg-orange-50 transition-colors">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Sidebar newsletter form submission
            document.addEventListener('DOMContentLoaded', function() {
                const sidebarNewsletterForm = document.getElementById('sidebar-newsletter-form');

                if (sidebarNewsletterForm) {
                    sidebarNewsletterForm.addEventListener('submit', function(e) {
                        e.preventDefault();

                        const submitBtn = document.getElementById('sidebar-newsletter-btn');
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

                                    // Reset form after delay
                                    setTimeout(() => {
                                        sidebarNewsletterForm.reset();
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
