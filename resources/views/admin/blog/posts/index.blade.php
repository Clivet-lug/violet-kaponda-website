@extends('admin.layouts.app')

@section('title', 'Manage Posts')
@section('page-title', 'Blog Posts')
@section('page-description', 'Manage all your blog posts')

@section('content')
    <div class="space-y-6">
        <!-- Header with Actions -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div class="flex items-center space-x-4">
                <a href="{{ route('admin.blog.posts.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-orange-500 to-red-600 text-white text-sm font-medium rounded-lg hover:from-orange-600 hover:to-red-700 transition-all duration-200 shadow-sm hover:shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    New Post
                </a>
            </div>

            <!-- Search and Filters -->
            <div class="flex flex-col sm:flex-row gap-3">
                <form method="GET" class="flex flex-col sm:flex-row gap-3">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search posts..."
                            class="w-full sm:w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>

                    <select name="status"
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        <option value="">All Status</option>
                        <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published
                        </option>
                        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    </select>

                    <select name="category"
                        class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    <button type="submit"
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                        Filter
                    </button>

                    @if (request()->hasAny(['search', 'status', 'category']))
                        <a href="{{ route('admin.blog.posts.index') }}"
                            class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                            Clear
                        </a>
                    @endif
                </form>
            </div>
        </div>

        <!-- Bulk Actions -->
        <form id="bulk-form" method="POST" action="{{ route('admin.blog.posts.bulk') }}">
            @csrf
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <!-- Bulk Actions Bar -->
                <div id="bulk-actions" class="hidden bg-orange-50 border-b border-orange-200 px-6 py-3">
                    <div class="flex items-center justify-between">
                        <span id="selected-count" class="text-sm text-orange-800 font-medium"></span>
                        <div class="flex items-center space-x-3">
                            <select name="action" class="border border-orange-300 rounded-lg px-3 py-1 text-sm">
                                <option value="">Choose action...</option>
                                <option value="publish">Publish</option>
                                <option value="unpublish">Unpublish</option>
                                <option value="delete">Delete</option>
                            </select>
                            <button type="submit"
                                class="px-4 py-1 bg-orange-600 text-white text-sm rounded-lg hover:bg-orange-700 transition-colors">
                                Apply
                            </button>
                            <button type="button" onclick="clearSelection()"
                                class="px-4 py-1 bg-gray-200 text-gray-700 text-sm rounded-lg hover:bg-gray-300 transition-colors">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Posts Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left">
                                    <input type="checkbox" id="select-all"
                                        class="rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Post
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categories
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Views
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($posts as $post)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        <input type="checkbox" name="posts[]" value="{{ $post->id }}"
                                            class="post-checkbox rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-start space-x-4">
                                            @if ($post->featured_image)
                                                <img src="{{ asset('storage/' . $post->featured_image) }}"
                                                    alt="{{ $post->title }}"
                                                    class="w-16 h-16 object-cover rounded-lg flex-shrink-0">
                                            @else
                                                <div
                                                    class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center flex-shrink-0">
                                                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                    </svg>
                                                </div>
                                            @endif
                                            <div class="flex-1 min-w-0">
                                                <h3 class="text-sm font-medium text-gray-900 truncate mb-1">
                                                    <a href="{{ route('admin.blog.posts.edit', $post) }}"
                                                        class="hover:text-orange-600">
                                                        {{ $post->title }}
                                                    </a>
                                                </h3>
                                                @if ($post->excerpt)
                                                    <p class="text-sm text-gray-500 line-clamp-2">
                                                        {{ Str::limit($post->excerpt, 100) }}</p>
                                                @endif
                                                @if ($post->tags && count($post->tags) > 0)
                                                    <div class="flex flex-wrap gap-1 mt-2">
                                                        @foreach (array_slice($post->tags, 0, 3) as $tag)
                                                            <span
                                                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                                {{ $tag }}
                                                            </span>
                                                        @endforeach
                                                        @if (count($post->tags) > 3)
                                                            <span
                                                                class="text-xs text-gray-500">+{{ count($post->tags) - 3 }}
                                                                more</span>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($post->categories->count() > 0)
                                            <div class="flex flex-wrap gap-1">
                                                @foreach ($post->categories->take(2) as $category)
                                                    <span
                                                        class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium text-white"
                                                        style="background-color: {{ $category->color }}">
                                                        {{ $category->name }}
                                                    </span>
                                                @endforeach
                                                @if ($post->categories->count() > 2)
                                                    <span
                                                        class="text-xs text-gray-500">+{{ $post->categories->count() - 2 }}</span>
                                                @endif
                                            </div>
                                        @else
                                            <span class="text-sm text-gray-400">No categories</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                        {{ $post->is_published ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                            {{ $post->is_published ? 'Published' : 'Draft' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        {{ number_format($post->views) }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <div>{{ $post->created_at->format('M j, Y') }}</div>
                                        <div class="text-xs">{{ $post->created_at->format('g:i A') }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            @if ($post->is_published)
                                                <a href="{{ route('blog.show', $post->slug) }}" target="_blank"
                                                    class="text-gray-400 hover:text-blue-600 p-1" title="View Post">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </a>
                                            @endif
                                            <a href="{{ route('admin.blog.posts.edit', $post) }}"
                                                class="text-gray-400 hover:text-orange-600 p-1" title="Edit Post">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <button type="button"
                                                onclick="deletePost({{ $post->id }}, '{{ $post->title }}')"
                                                class="text-gray-400 hover:text-red-600 p-1" title="Delete Post">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="px-6 py-12 text-center">
                                        <div class="flex flex-col items-center">
                                            <svg class="w-12 h-12 text-gray-400 mb-4" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                            <h3 class="text-lg font-medium text-gray-900 mb-2">No posts found</h3>
                                            <p class="text-gray-500 mb-4">Get started by creating your first blog post.</p>
                                            <a href="{{ route('admin.blog.posts.create') }}"
                                                class="inline-flex items-center px-4 py-2 bg-orange-600 text-white text-sm font-medium rounded-lg hover:bg-orange-700 transition-colors">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 4v16m8-8H4" />
                                                </svg>
                                                Create Post
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </form>

        <!-- Pagination -->
        @if ($posts->hasPages())
            <div class="flex justify-center">
                {{ $posts->withQueryString()->links() }}
            </div>
        @endif
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-red-100 mb-4">
                    <svg class="h-6 w-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Delete Post</h3>
                <p class="text-sm text-gray-500 mb-4">Are you sure you want to delete "<span
                        id="delete-post-title"></span>"? This action cannot be undone.</p>
                <div class="flex justify-center space-x-3">
                    <button onclick="closeDeleteModal()"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                        Cancel
                    </button>
                    <form id="delete-form" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                            Delete Post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Bulk selection functionality
            const selectAllCheckbox = document.getElementById('select-all');
            const postCheckboxes = document.querySelectorAll('.post-checkbox');
            const bulkActions = document.getElementById('bulk-actions');
            const selectedCount = document.getElementById('selected-count');
            const bulkForm = document.getElementById('bulk-form');

            selectAllCheckbox.addEventListener('change', function() {
                postCheckboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
                updateBulkActions();
            });

            postCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateBulkActions);
            });

            function updateBulkActions() {
                const checkedBoxes = document.querySelectorAll('.post-checkbox:checked');
                const count = checkedBoxes.length;

                if (count > 0) {
                    bulkActions.classList.remove('hidden');
                    selectedCount.textContent = `${count} post${count > 1 ? 's' : ''} selected`;
                } else {
                    bulkActions.classList.add('hidden');
                }

                selectAllCheckbox.indeterminate = count > 0 && count < postCheckboxes.length;
                selectAllCheckbox.checked = count === postCheckboxes.length;
            }

            function clearSelection() {
                postCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
                selectAllCheckbox.checked = false;
                updateBulkActions();
            }

            // Bulk form submission
            bulkForm.addEventListener('submit', function(e) {
                const action = document.querySelector('select[name="action"]').value;
                if (!action) {
                    e.preventDefault();
                    alert('Please select an action.');
                    return;
                }

                const checkedBoxes = document.querySelectorAll('.post-checkbox:checked');
                if (checkedBoxes.length === 0) {
                    e.preventDefault();
                    alert('Please select at least one post.');
                    return;
                }

                if (action === 'delete') {
                    if (!confirm(
                            `Are you sure you want to delete ${checkedBoxes.length} post${checkedBoxes.length > 1 ? 's' : ''}?`
                            )) {
                        e.preventDefault();
                    }
                }
            });

            // Delete modal functionality
            function deletePost(id, title) {
                document.getElementById('delete-post-title').textContent = title;
                document.getElementById('delete-form').action = `{{ route('admin.blog.posts.index') }}/${id}`;
                document.getElementById('delete-modal').classList.remove('hidden');
            }

            function closeDeleteModal() {
                document.getElementById('delete-modal').classList.add('hidden');
            }

            // Close modal when clicking outside
            document.getElementById('delete-modal').addEventListener('click', function(e) {
                if (e.target === this) {
                    closeDeleteModal();
                }
            });
        </script>
    @endpush
@endsection
