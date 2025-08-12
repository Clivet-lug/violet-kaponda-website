<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin Dashboard') - Violet Kaponda</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Heroicons -->
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js" type="module"></script>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex">
        @auth
            @if (auth()->user()->is_admin)
                <!-- Sidebar -->
                <aside class="w-64 bg-white shadow-sm border-r border-gray-200 fixed h-full">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                                <span class="text-white font-bold text-lg">V</span>
                            </div>
                            <div>
                                <h2 class="text-lg font-semibold text-gray-900">Admin Panel</h2>
                                <p class="text-sm text-gray-500">Violet Kaponda</p>
                            </div>
                        </div>
                    </div>

                    <nav class="p-4 space-y-2">
                        <a href="{{ route('admin.dashboard') }}"
                            class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'bg-orange-50 text-orange-700 border-r-2 border-orange-500' : '' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 5a2 2 0 012-2h4a2 2 0 012 2v10a2 2 0 01-2 2H10a2 2 0 01-2-2V5z" />
                            </svg>
                            <span>Dashboard</span>
                        </a>

                        <div class="pt-2">
                            <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Blog Management</p>
                            <div class="mt-2 space-y-1">
                                <a href="{{ route('admin.blog.posts.index') }}"
                                    class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.blog.posts.*') ? 'bg-orange-50 text-orange-700 border-r-2 border-orange-500' : '' }}">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span>Posts</span>
                                </a>

                                <a href="{{ route('admin.blog.categories.index') }}"
                                    class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.blog.categories.*') ? 'bg-orange-50 text-orange-700 border-r-2 border-orange-500' : '' }}">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                    <span>Categories</span>
                                </a>

                                <a href="{{ route('admin.media.index') }}"
                                    class="flex items-center space-x-3 px-3 py-2 rounded-lg text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.media.*') ? 'bg-orange-50 text-orange-700 border-r-2 border-orange-500' : '' }}">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>Media</span>
                                </a>
                            </div>
                        </div>
                    </nav>

                    <div class="absolute bottom-0 w-64 p-4 border-t border-gray-200 bg-white">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="{{ auth()->user()->avatar_url }}" alt="{{ auth()->user()->name }}"
                                    class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">{{ auth()->user()->name }}</p>
                                    <p class="text-xs text-gray-500">Administrator</p>
                                </div>
                            </div>
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-gray-400 hover:text-gray-600 p-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </aside>

                <!-- Main Content -->
                <main class="flex-1 ml-64">
                    <!-- Top Header -->
                    <header class="bg-white shadow-sm border-b border-gray-200 px-6 py-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-2xl font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h1>
                                <p class="text-sm text-gray-600">@yield('page-description', 'Welcome back!')</p>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('home') }}" target="_blank"
                                    class="text-gray-500 hover:text-gray-700 text-sm">
                                    <svg class="w-5 h-5 inline mr-1" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                    View Site
                                </a>
                            </div>
                        </div>
                    </header>

                    <!-- Page Content -->
                    <div class="p-6">
                        @if (session('success'))
                            <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-6 bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg">
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
