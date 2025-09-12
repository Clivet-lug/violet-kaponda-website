<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') - Violet Nswana Kaponda</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Heroicons -->
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js" type="module"></script>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/mfbdnvj7mjvuz835d2goj09wand7rjjodkt9q9oxpyyop1sz/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon/apple-touch-icon.png') }}">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        .sidebar-transition {
            transition: all 0.3s ease-in-out;
        }

        /* Tooltip Styles */
        .tooltip {
            position: relative;
        }

        .tooltip-content {
            position: absolute;
            left: 100%;
            top: 50%;
            transform: translateY(-50%);
            margin-left: 12px;
            padding: 8px 12px;
            background-color: #1f2937;
            color: white;
            font-size: 0.875rem;
            border-radius: 6px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: all 0.2s ease-in-out;
            z-index: 50;
        }

        .tooltip-content::before {
            content: '';
            position: absolute;
            right: 100%;
            top: 50%;
            transform: translateY(-50%);
            border: 6px solid transparent;
            border-right-color: #1f2937;
        }

        .tooltip:hover .tooltip-content {
            opacity: 1;
            visibility: visible;
        }

        /* Mobile overlay */
        .mobile-overlay {
            backdrop-filter: blur(4px);
        }
    </style>
</head>

<body class="bg-gray-50 font-sans" x-data="{ sidebarOpen: false, isMobile: window.innerWidth < 1024 }" x-init="() => {
    // Set initial state - sidebar should be open by default on desktop
    {{-- if (window.innerWidth >= 1024) {
        sidebarOpen = true;
    } --}}
    window.addEventListener('resize', () => {
        isMobile = window.innerWidth < 1024;
        // Auto-close sidebar on mobile, auto-open on desktop
        if (isMobile) {
            sidebarOpen = false;
        }
    });
}">
    <div class="min-h-screen flex">
        @auth
            @if (auth()->user()->is_admin)
                <!-- Mobile Overlay -->
                <div x-show="sidebarOpen && isMobile" x-transition:enter="transition-opacity ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" @click="sidebarOpen = false"
                    class="lg:hidden fixed inset-0 bg-black bg-opacity-50 mobile-overlay z-20"></div>

                <!-- Sidebar -->
                <aside :class="sidebarOpen ? 'w-64' : (isMobile ? 'w-0' : 'w-20')"
                    class="bg-white shadow-sm border-r border-gray-200 fixed h-full sidebar-transition z-30 overflow-hidden">

                    <!-- Show content only when not collapsed on mobile -->
                    <div x-show="!isMobile || sidebarOpen" class="h-full flex flex-col">

                        <!-- Sidebar Header -->
                        <div class="border-b border-gray-200 flex-shrink-0" :class="sidebarOpen ? 'p-6' : 'p-3'">
                            <div class="flex items-center space-x-3" x-show="sidebarOpen" x-transition>
                                <!-- Enhanced Logo - Expanded -->
                                <div class="relative">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-br from-orange-500 via-red-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg transform hover:scale-105 transition-transform duration-200">
                                        <div class="relative">
                                            <!-- Main V with better typography -->
                                            <span class="text-white font-black text-xl tracking-tight"
                                                style="font-family: 'Inter', sans-serif;">V</span>
                                            <!-- Subtle accent dot -->
                                            <div
                                                class="absolute -bottom-1 -right-1 w-2 h-2 bg-yellow-400 rounded-full shadow-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Glow effect -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl opacity-20 blur-md">
                                    </div>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold text-gray-900 tracking-tight">Admin Panel</h2>
                                    <p class="text-sm text-orange-600 font-medium">Violet Nswana Kaponda</p>
                                </div>
                            </div>

                            <!-- Enhanced Collapsed Logo - Centered -->
                            <div x-show="!sidebarOpen && !isMobile" class="flex justify-center w-full">
                                <div class="relative tooltip">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-br from-orange-500 via-red-500 to-red-600 rounded-xl flex items-center justify-center shadow-lg transform hover:scale-110 transition-transform duration-200">
                                        <div class="relative">
                                            <!-- Main V -->
                                            <span class="text-white font-black text-xl tracking-tight"
                                                style="font-family: 'Inter', sans-serif;">V</span>
                                            <!-- Accent dot for collapsed view -->
                                            <div
                                                class="absolute -bottom-1 -right-1 w-2 h-2 bg-yellow-400 rounded-full shadow-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Glow effect -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl opacity-20 blur-sm">
                                    </div>
                                    <!-- Tooltip -->
                                    <div class="tooltip-content">Violet Nswana Kaponda Admin</div>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <nav class="space-y-2 flex-1 overflow-y-auto" :class="sidebarOpen ? 'p-4' : 'p-2'">
                            <!-- Dashboard -->
                            <div class="tooltip">
                                <a href="{{ route('admin.dashboard') }}"
                                    class="flex items-center rounded-lg text-gray-700 hover:bg-gray-100 transition-colors duration-200 {{ request()->routeIs('admin.dashboard') ? 'bg-orange-50 text-orange-700 border-r-2 border-orange-500' : '' }}"
                                    :class="sidebarOpen ? 'px-3 py-2 space-x-3' : 'px-2 py-3 justify-center'">
                                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 5a2 2 0 012-2h4a2 2 0 012 2v10a2 2 0 01-2 2H10a2 2 0 01-2-2V5z" />
                                    </svg>
                                    <span x-show="sidebarOpen" x-transition>Dashboard</span>
                                </a>
                                <div x-show="!sidebarOpen && !isMobile" class="tooltip-content">Dashboard</div>
                            </div>

                            <!-- Blog Management Section -->
                            <div class="pt-2" x-show="sidebarOpen" x-transition>
                                <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Blog Management
                                </p>
                            </div>

                            <!-- Posts -->
                            <div class="tooltip">
                                <a href="{{ route('admin.blog.posts.index') }}"
                                    class="flex items-center rounded-lg text-gray-700 hover:bg-gray-100 transition-colors duration-200 {{ request()->routeIs('admin.blog.posts.*') ? 'bg-orange-50 text-orange-700 border-r-2 border-orange-500' : '' }}"
                                    :class="sidebarOpen ? 'px-3 py-2 space-x-3' : 'px-2 py-3 justify-center'">
                                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span x-show="sidebarOpen" x-transition>Posts</span>
                                </a>
                                <div x-show="!sidebarOpen && !isMobile" class="tooltip-content">Blog Posts</div>
                            </div>

                            <!-- Categories -->
                            <div class="tooltip">
                                <a href="{{ route('admin.blog.categories.index') }}"
                                    class="flex items-center rounded-lg text-gray-700 hover:bg-gray-100 transition-colors duration-200 {{ request()->routeIs('admin.blog.categories.*') ? 'bg-orange-50 text-orange-700 border-r-2 border-orange-500' : '' }}"
                                    :class="sidebarOpen ? 'px-3 py-2 space-x-3' : 'px-2 py-3 justify-center'">
                                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                    <span x-show="sidebarOpen" x-transition>Categories</span>
                                </a>
                                <div x-show="!sidebarOpen && !isMobile" class="tooltip-content">Categories</div>
                            </div>

                            <!-- Media -->
                            <div class="tooltip">
                                <a href="{{ route('admin.media.index') }}"
                                    class="flex items-center rounded-lg text-gray-700 hover:bg-gray-100 transition-colors duration-200 {{ request()->routeIs('admin.media.*') ? 'bg-orange-50 text-orange-700 border-r-2 border-orange-500' : '' }}"
                                    :class="sidebarOpen ? 'px-3 py-2 space-x-3' : 'px-2 py-3 justify-center'">
                                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span x-show="sidebarOpen" x-transition>Media</span>
                                </a>
                                <div x-show="!sidebarOpen && !isMobile" class="tooltip-content">Media Library</div>
                            </div>
                        </nav>

                        <!-- Bottom User Section -->
                        <div class="border-t border-gray-200 bg-white flex-shrink-0" :class="sidebarOpen ? 'p-4' : 'p-2'">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center"
                                    :class="sidebarOpen ? 'space-x-3' : 'justify-center w-full'">
                                    <div class="tooltip">
                                        <img src="{{ auth()->user()->avatar_url }}" alt="{{ auth()->user()->name }}"
                                            class="w-10 h-10 rounded-full flex-shrink-0">
                                        <div x-show="!sidebarOpen && !isMobile" class="tooltip-content">
                                            {{ auth()->user()->name }}</div>
                                    </div>
                                    <div x-show="sidebarOpen" x-transition>
                                        <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                                        <p class="text-xs text-gray-500">Administrator</p>
                                    </div>
                                </div>
                                <form action="{{ route('admin.logout') }}" method="POST" x-show="sidebarOpen"
                                    x-transition>
                                    @csrf
                                    <button type="submit"
                                        class="text-gray-400 hover:text-gray-600 p-1 rounded transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Main Content -->
                <main :class="sidebarOpen ? 'ml-64' : (isMobile ? 'ml-0' : 'ml-20')" class="flex-1 sidebar-transition">
                    <!-- Top Header -->
                    <header class="bg-white shadow-sm border-b border-gray-200 px-4 sm:px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3 sm:space-x-4">
                                <!-- Mobile Menu Button -->
                                <button @click="sidebarOpen = !sidebarOpen"
                                    class="lg:hidden text-gray-500 hover:text-gray-700 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>

                                <!-- Desktop Sidebar Toggle Button -->
                                <button @click="sidebarOpen = !sidebarOpen"
                                    class="hidden lg:block text-gray-500 hover:text-gray-700 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                </button>

                                <div>
                                    <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h1>
                                    <p class="text-sm text-gray-600 hidden sm:block">@yield('page-description', 'Welcome back!')</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <a href="{{ route('home') }}" target="_blank"
                                    class="text-gray-500 hover:text-gray-700 text-sm hidden sm:flex items-center">
                                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    View Site
                                </a>
                                <!-- Mobile view site icon -->
                                <a href="{{ route('home') }}" target="_blank"
                                    class="sm:hidden text-gray-500 hover:text-gray-700 p-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </header>

                    <!-- Page Content -->
                    <div class="p-4 sm:p-6">
                        @if (session('success'))
                            <div
                                class="mb-4 sm:mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-4 sm:mb-6 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg">
                                {{ session('error') }}
                            </div>
                        @endif

                        @yield('content')
                    </div>
                </main>
            @endif
        @endauth
    </div>

    <!-- Alpine.js -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    @stack('scripts')
</body>

</html>
