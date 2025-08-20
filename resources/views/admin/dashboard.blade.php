@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-description', 'Overview of your blog performance and recent activity')

@section('content')
    <div class="space-y-4 sm:space-y-6">
        <!-- Quick Stats Cards - Enhanced Responsive -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-3 sm:gap-4 lg:gap-6">
            <!-- Total Posts -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">Total Posts</p>
                        <p class="text-2xl sm:text-3xl font-bold text-gray-900 mt-1">{{ $stats['total_posts'] }}</p>
                    </div>
                    <div
                        class="w-10 h-10 sm:w-12 sm:h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 ml-3">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-blue-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Published Posts -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">Published</p>
                        <p class="text-2xl sm:text-3xl font-bold text-green-600 mt-1">{{ $stats['published_posts'] }}</p>
                    </div>
                    <div
                        class="w-10 h-10 sm:w-12 sm:h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 ml-3">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-green-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Draft Posts -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">Drafts</p>
                        <p class="text-2xl sm:text-3xl font-bold text-yellow-600 mt-1">{{ $stats['draft_posts'] }}</p>
                    </div>
                    <div
                        class="w-10 h-10 sm:w-12 sm:h-12 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0 ml-3">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-yellow-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Views -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow duration-200">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">Total Views</p>
                        <p class="text-2xl sm:text-3xl font-bold text-purple-600 mt-1">
                            {{ number_format($stats['total_views']) }}</p>
                    </div>
                    <div
                        class="w-10 h-10 sm:w-12 sm:h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 ml-3">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-purple-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Categories -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6 hover:shadow-md transition-shadow duration-200 sm:col-span-2 lg:col-span-1">
                <div class="flex items-center justify-between">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs sm:text-sm font-medium text-gray-600 truncate">Categories</p>
                        <p class="text-2xl sm:text-3xl font-bold text-orange-600 mt-1">{{ $stats['total_categories'] }}</p>
                    </div>
                    <div
                        class="w-10 h-10 sm:w-12 sm:h-12 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 ml-3">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-orange-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions - Enhanced Responsive -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6">
            <h3 class="text-lg sm:text-xl font-semibold text-gray-900 mb-3 sm:mb-4">Quick Actions</h3>

            <!-- Mobile: Stack vertically, Tablet: 2 columns, Desktop: 4 columns -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3 sm:gap-4">

                <!-- New Post - Primary Action -->
                <a href="{{ route('admin.blog.posts.create') }}"
                    class="flex items-center justify-center sm:justify-start space-x-3 p-3 sm:p-4 bg-gradient-to-r from-orange-500 to-red-600 text-white rounded-lg hover:from-orange-600 hover:to-red-700 transition-all duration-200 shadow-sm hover:shadow-md transform hover:scale-[1.02] active:scale-[0.98] sm:col-span-2 xl:col-span-1">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="font-medium text-sm sm:text-base">New Post</span>
                </a>

                <!-- New Category -->
                <a href="{{ route('admin.blog.categories.create') }}"
                    class="flex items-center justify-center sm:justify-start space-x-3 p-3 sm:p-4 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] group">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0 group-hover:text-orange-600 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    <span class="font-medium text-sm sm:text-base">New Category</span>
                </a>

                <!-- Upload Media -->
                <a href="{{ route('admin.media.index') }}"
                    class="flex items-center justify-center sm:justify-start space-x-3 p-3 sm:p-4 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] group">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0 group-hover:text-orange-600 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="font-medium text-sm sm:text-base">Upload Media</span>
                </a>

                <!-- View Blog -->
                <a href="{{ route('blog.index') }}" target="_blank"
                    class="flex items-center justify-center sm:justify-start space-x-3 p-3 sm:p-4 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-all duration-200 transform hover:scale-[1.02] active:scale-[0.98] group">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 flex-shrink-0 group-hover:text-orange-600 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span class="font-medium text-sm sm:text-base">View Blog</span>
                </a>
            </div>
        </div>

        <!-- Content Grid - Enhanced Responsive -->
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-4 sm:gap-6">

            <!-- Recent Posts -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-4 sm:p-6 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-900">Recent Posts</h3>
                        <a href="{{ route('admin.blog.posts.index') }}"
                            class="text-xs sm:text-sm text-orange-600 hover:text-orange-700 font-medium transition-colors">
                            View all →
                        </a>
                    </div>
                </div>
                <div class="p-4 sm:p-6">
                    @if ($recent_posts->count() > 0)
                        <div class="space-y-3 sm:space-y-4">
                            @foreach ($recent_posts as $post)
                                <div
                                    class="flex items-start space-x-3 sm:space-x-4 p-3 sm:p-4 hover:bg-gray-50 rounded-lg transition-colors">
                                    <!-- Featured Image -->
                                    @if ($post->featured_image)
                                        <img src="{{ asset('storage/' . $post->featured_image) }}"
                                            alt="{{ $post->title }}"
                                            class="w-12 h-12 sm:w-16 sm:h-16 object-cover rounded-lg flex-shrink-0">
                                    @else
                                        <div
                                            class="w-12 h-12 sm:w-16 sm:h-16 bg-gray-200 rounded-lg flex items-center justify-center flex-shrink-0">
                                            <svg class="w-6 h-6 sm:w-8 sm:h-8 text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </div>
                                    @endif

                                    <!-- Post Content -->
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-sm sm:text-base font-medium text-gray-900 line-clamp-2 mb-1">
                                            {{ $post->title }}</h4>
                                        <p class="text-xs sm:text-sm text-gray-500 mb-2">
                                            {{ $post->created_at->diffForHumans() }}
                                            @if ($post->categories->count() > 0)
                                                <span class="hidden sm:inline">•
                                                    {{ $post->categories->first()->name }}</span>
                                            @endif
                                        </p>

                                        <!-- Status & Views -->
                                        <div class="flex items-center flex-wrap gap-2">
                                            <span
                                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                                {{ $post->is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                {{ $post->is_published ? 'Published' : 'Draft' }}
                                            </span>
                                            <span class="text-xs text-gray-500">{{ $post->views }} views</span>
                                        </div>

                                        <!-- Category on mobile -->
                                        @if ($post->categories->count() > 0)
                                            <div class="sm:hidden mt-1">
                                                <span
                                                    class="text-xs text-gray-500">{{ $post->categories->first()->name }}</span>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.blog.posts.edit', $post) }}"
                                        class="text-gray-400 hover:text-gray-600 p-1 rounded transition-colors flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-6 sm:py-8">
                            <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-400 mx-auto mb-3 sm:mb-4" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <p class="text-gray-500 mb-3 sm:mb-4 text-sm sm:text-base">No posts yet</p>
                            <a href="{{ route('admin.blog.posts.create') }}"
                                class="inline-flex items-center px-3 sm:px-4 py-2 bg-orange-600 text-white text-xs sm:text-sm font-medium rounded-lg hover:bg-orange-700 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Create your first post
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Popular Posts -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="p-4 sm:p-6 border-b border-gray-200">
                    <h3 class="text-base sm:text-lg font-semibold text-gray-900">Popular Posts</h3>
                    <p class="text-xs sm:text-sm text-gray-600 mt-1">Posts with the most views</p>
                </div>
                <div class="p-4 sm:p-6">
                    @if ($popular_posts->count() > 0)
                        <div class="space-y-3 sm:space-y-4">
                            @foreach ($popular_posts as $index => $post)
                                <div
                                    class="flex items-center space-x-3 sm:space-x-4 p-3 sm:p-4 hover:bg-gray-50 rounded-lg transition-colors">
                                    <!-- Ranking Number -->
                                    <div
                                        class="flex-shrink-0 w-6 h-6 sm:w-8 sm:h-8 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center">
                                        <span class="text-white text-xs sm:text-sm font-bold">{{ $index + 1 }}</span>
                                    </div>

                                    <!-- Post Info -->
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-sm sm:text-base font-medium text-gray-900 line-clamp-2 mb-1">
                                            {{ $post->title }}</h4>
                                        <p class="text-xs sm:text-sm text-gray-500">{{ number_format($post->views) }}
                                            views</p>
                                    </div>

                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.blog.posts.edit', $post) }}"
                                        class="text-gray-400 hover:text-gray-600 p-1 rounded transition-colors flex-shrink-0">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-6 sm:py-8">
                            <svg class="w-10 h-10 sm:w-12 sm:h-12 text-gray-400 mx-auto mb-3 sm:mb-4" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <p class="text-gray-500 text-sm sm:text-base">No popular posts yet</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Simple Chart Section - Enhanced Responsive -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6">
            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-3 sm:mb-4">Posts Created (Last 6 Months)</h3>

            <!-- Chart Container -->
            <div class="w-full overflow-x-auto">
                <div class="min-w-[300px] sm:min-w-0">
                    <!-- Chart -->
                    <div class="flex items-end justify-between space-x-1 sm:space-x-2 h-24 sm:h-32 lg:h-40">
                        @foreach ($months as $index => $month)
                            <div class="flex-1 flex flex-col items-center group">
                                <!-- Bar Container -->
                                <div class="w-full bg-gray-200 rounded-t-lg relative transition-all duration-300 group-hover:bg-gray-300"
                                    style="height: {{ $post_counts[$index] > 0 ? 96 : 24 }}px; max-height: {{ 120 }}px;">

                                    <!-- Animated Bar -->
                                    <div class="bg-gradient-to-t from-orange-500 to-red-600 rounded-t-lg absolute bottom-0 w-full transition-all duration-700 ease-out group-hover:from-orange-600 group-hover:to-red-700"
                                        style="height: {{ $post_counts[$index] > 0 ? ($post_counts[$index] / max($post_counts ?: [1])) * 100 : 8 }}%; min-height: 8px;">
                                    </div>

                                    <!-- Value Label -->
                                    @if ($post_counts[$index] > 0)
                                        <div
                                            class="absolute -top-5 sm:-top-6 left-1/2 transform -translate-x-1/2 text-xs sm:text-sm font-medium text-gray-700 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                            {{ $post_counts[$index] }}
                                        </div>

                                        <!-- Always visible count on mobile -->
                                        <div
                                            class="sm:hidden absolute -top-5 left-1/2 transform -translate-x-1/2 text-xs font-medium text-gray-700">
                                            {{ $post_counts[$index] }}
                                        </div>
                                    @endif
                                </div>

                                <!-- Month Label -->
                                <div class="text-xs sm:text-sm text-gray-600 mt-2 text-center font-medium">
                                    <!-- Full month name on larger screens -->
                                    <span class="hidden sm:inline">{{ $month }}</span>
                                    <!-- Abbreviated month on mobile -->
                                    <span class="sm:hidden">{{ substr($month, 0, 3) }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Chart Legend/Info -->
                    <div
                        class="mt-4 sm:mt-6 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 sm:gap-4">
                        <div class="flex items-center space-x-4 text-xs sm:text-sm text-gray-600">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-gradient-to-t from-orange-500 to-red-600 rounded"></div>
                                <span>Posts Published</span>
                            </div>
                            <div class="hidden sm:flex items-center space-x-2">
                                <div class="w-3 h-3 bg-gray-200 rounded"></div>
                                <span>No Activity</span>
                            </div>
                        </div>

                        <!-- Summary Stats -->
                        <div class="flex items-center space-x-4 text-xs sm:text-sm">
                            <div class="text-gray-600">
                                <span class="font-medium text-gray-900">{{ array_sum($post_counts) }}</span> total posts
                            </div>
                            <div class="text-gray-600 hidden sm:inline">
                                <span
                                    class="font-medium text-gray-900">{{ number_format(array_sum($post_counts) / 6, 1) }}</span>
                                avg/month
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Chart Instructions -->
            <div class="sm:hidden mt-3 text-xs text-gray-500 text-center">
                Tap bars to see exact values
            </div>
        </div>
    </div>
@endsection
