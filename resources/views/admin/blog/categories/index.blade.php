@extends('admin.layouts.app')

@section('title', 'Manage Categories')
@section('page-title', 'Blog Categories')
@section('page-description', 'Organize your content with categories')

@section('content')
    <div class="space-y-6">
        <!-- Header with Actions -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div class="flex items-center space-x-4">
                <a href="{{ route('admin.blog.categories.create') }}"
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-orange-500 to-red-600 text-white text-sm font-medium rounded-lg hover:from-orange-600 hover:to-red-700 transition-all duration-200 shadow-sm hover:shadow-md">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    New Category
                </a>
            </div>

            <!-- Search -->
            <div class="flex gap-3">
                <form method="GET" class="flex gap-3">
                    <div class="relative">
                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Search categories..."
                            class="w-full sm:w-64 pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>

                    <button type="submit"
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                        Search
                    </button>

                    @if (request('search'))
                        <a href="{{ route('admin.blog.categories.index') }}"
                            class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors">
                            Clear
                        </a>
                    @endif
                </form>
            </div>
        </div>

        <!-- Bulk Actions -->
        <form id="bulk-form" method="POST" action="{{ route('admin.blog.categories.bulk') }}">
            @csrf
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <!-- Bulk Actions Bar -->
                <div id="bulk-actions" class="hidden bg-orange-50 border-b border-orange-200 px-6 py-3">
                    <div class="flex items-center justify-between">
                        <span id="selected-count" class="text-sm text-orange-800 font-medium"></span>
                        <div class="flex items-center space-x-3">
                            <select name="action" class="border border-orange-300 rounded-lg px-3 py-1 text-sm">
                                <option value="">Choose action...</option>
                                <option value="activate">Activate</option>
                                <option value="deactivate">Deactivate</option>
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

                <!-- Categories Grid -->
                <div class="p-6">
                    @if ($categories->count() > 0)
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($categories as $category)
                                <div
                                    class="border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow relative">
                                    <!-- Checkbox -->
                                    <div class="absolute top-4 left-4">
                                        <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                            class="category-checkbox rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                                    </div>

                                    <!-- Category Header -->
                                    <div class="ml-8 mb-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <div class="flex items-center space-x-3">
                                                <div class="w-4 h-4 rounded-full flex-shrink-0"
                                                    style="background-color: {{ $category->color }}"></div>
                                                <h3 class="text-lg font-semibold text-gray-900">{{ $category->name }}</h3>
                                            </div>
                                            <span
                                                class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium
                                            {{ $category->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                                {{ $category->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </div>

                                        @if ($category->description)
                                            <p class="text-sm text-gray-600 mb-3">
                                                {{ Str::limit($category->description, 100) }}</p>
                                        @endif

                                        <!-- Stats -->
                                        <div class="flex items-center space-x-4 text-sm text-gray-500 mb-4">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                                {{ $category->posts_count }}
                                                {{ Str::plural('post', $category->posts_count) }}
                                            </div>
                                            <div class="text-xs">
                                                Created {{ $category->created_at->diffForHumans() }}
                                            </div>
                                        </div>

                                        <!-- Actions -->
                                        <div class="flex items-center justify-end space-x-2">
                                            @if ($category->posts_count > 0)
                                                <a href="{{ route('blog.category', $category->slug) }}" target="_blank"
                                                    class="text-gray-400 hover:text-blue-600 p-1" title="View Category">
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
                                            <a href="{{ route('admin.blog.categories.edit', $category) }}"
                                                class="text-gray-400 hover:text-orange-600 p-1" title="Edit Category">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <button type="button"
                                                onclick="deleteCategory({{ $category->id }}, '{{ $category->name }}', {{ $category->posts_count }})"
                                                class="text-gray-400 hover:text-red-600 p-1" title="Delete Category">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-12">
                            <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">No categories found</h3>
                            <p class="text-gray-500 mb-4">Get started by creating your first category to organize your
                                posts.</p>
                            <a href="{{ route('admin.blog.categories.create') }}"
                                class="inline-flex items-center px-4 py-2 bg-orange-600 text-white text-sm font-medium rounded-lg hover:bg-orange-700 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Create Category
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Select All Checkbox (at bottom for better UX) -->
                @if ($categories->count() > 0)
                    <div class="px-6 py-3 bg-gray-50 border-t border-gray-200">
                        <label class="flex items-center">
                            <input type="checkbox" id="select-all"
                                class="rounded border-gray-300 text-orange-600 focus:ring-orange-500">
                            <span class="ml-2 text-sm text-gray-700">Select all categories</span>
                        </label>
                    </div>
                @endif
            </div>
        </form>

        <!-- Pagination -->
        @if ($categories->hasPages())
            <div class="flex justify-center">
                {{ $categories->withQueryString()->links() }}
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
                <h3 class="text-lg font-medium text-gray-900 mb-2">Delete Category</h3>
                <div id="delete-content"></div>
                <div class="flex justify-center space-x-3 mt-4">
                    <button onclick="closeDeleteModal()"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                        Cancel
                    </button>
                    <form id="delete-form" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                            Delete Category
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
            const categoryCheckboxes = document.querySelectorAll('.category-checkbox');
            const bulkActions = document.getElementById('bulk-actions');
            const selectedCount = document.getElementById('selected-count');
            const bulkForm = document.getElementById('bulk-form');

            if (selectAllCheckbox) {
                selectAllCheckbox.addEventListener('change', function() {
                    categoryCheckboxes.forEach(checkbox => {
                        checkbox.checked = this.checked;
                    });
                    updateBulkActions();
                });
            }

            categoryCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateBulkActions);
            });

            function updateBulkActions() {
                const checkedBoxes = document.querySelectorAll('.category-checkbox:checked');
                const count = checkedBoxes.length;

                if (count > 0) {
                    bulkActions.classList.remove('hidden');
                    selectedCount.textContent = `${count} categor${count > 1 ? 'ies' : 'y'} selected`;
                } else {
                    bulkActions.classList.add('hidden');
                }

                if (selectAllCheckbox) {
                    selectAllCheckbox.indeterminate = count > 0 && count < categoryCheckboxes.length;
                    selectAllCheckbox.checked = count === categoryCheckboxes.length;
                }
            }

            function clearSelection() {
                categoryCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
                if (selectAllCheckbox) {
                    selectAllCheckbox.checked = false;
                }
                updateBulkActions();
            }

            // Bulk form submission
            if (bulkForm) {
                bulkForm.addEventListener('submit', function(e) {
                    const action = document.querySelector('select[name="action"]').value;
                    if (!action) {
                        e.preventDefault();
                        alert('Please select an action.');
                        return;
                    }

                    const checkedBoxes = document.querySelectorAll('.category-checkbox:checked');
                    if (checkedBoxes.length === 0) {
                        e.preventDefault();
                        alert('Please select at least one category.');
                        return;
                    }

                    if (action === 'delete') {
                        if (!confirm(
                                `Are you sure you want to delete ${checkedBoxes.length} categor${checkedBoxes.length > 1 ? 'ies' : 'y'}?`
                                )) {
                            e.preventDefault();
                        }
                    }
                });
            }

            // Delete modal functionality
            function deleteCategory(id, name, postsCount) {
                const deleteContent = document.getElementById('delete-content');

                if (postsCount > 0) {
                    deleteContent.innerHTML = `
                <p class="text-sm text-gray-500 mb-4">
                    Cannot delete category "<strong>${name}</strong>" because it has ${postsCount} post${postsCount > 1 ? 's' : ''} assigned to it.
                </p>
                <p class="text-sm text-gray-500 mb-4">
                    Please move or delete the posts first, or assign them to other categories.
                </p>
            `;
                    document.querySelector('#delete-form').style.display = 'none';
                } else {
                    deleteContent.innerHTML = `
                <p class="text-sm text-gray-500 mb-4">
                    Are you sure you want to delete "<strong>${name}</strong>"? This action cannot be undone.
                </p>
            `;
                    document.querySelector('#delete-form').style.display = 'inline';
                    document.getElementById('delete-form').action = `{{ route('admin.blog.categories.index') }}/${id}`;
                }

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
