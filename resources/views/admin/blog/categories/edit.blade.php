@extends('admin.layouts.app')

@section('title', 'Edit Category')
@section('page-title', 'Edit Category')
@section('page-description', 'Update category information')

@section('content')
    <div class="max-w-2xl mx-auto">
        <form method="POST" action="{{ route('admin.blog.categories.update', $category) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Category Info Card -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900">Category Information</h3>
                    <div class="flex items-center space-x-2 text-sm text-gray-600">
                        <span>{{ $category->posts()->count() }} posts</span>
                        <span>•</span>
                        <span>Created {{ $category->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <div class="space-y-6">
                    <!-- Category Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Category Name *
                        </label>
                        <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}"
                            required placeholder="Enter category name..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Slug -->
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">
                            URL Slug
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                {{ url('/blog/category') }}/
                            </span>
                            <input type="text" id="slug" name="slug" value="{{ old('slug', $category->slug) }}"
                                placeholder="auto-generated-from-name"
                                class="flex-1 px-4 py-3 border border-gray-300 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('slug') border-red-500 @enderror">
                        </div>
                        @error('slug')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        @if ($category->posts()->count() > 0)
                            <div class="mt-2 p-3 bg-blue-50 border border-blue-200 rounded-lg">
                                <div class="flex">
                                    <svg class="h-5 w-5 text-blue-400 mt-0.5 mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <div>
                                        <p class="text-sm text-blue-800 font-medium">Category in Use</p>
                                        <p class="text-xs text-blue-700">This category has {{ $category->posts()->count() }}
                                            published posts. Changing the slug will change the category URL.</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description
                            <span class="text-xs text-gray-500">(Optional)</span>
                        </label>
                        <textarea id="description" name="description" rows="4" placeholder="Describe what this category is about..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('description') border-red-500 @enderror">{{ old('description', $category->description) }}</textarea>
                        <div class="flex justify-between items-center mt-2">
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @else
                                <span class="text-xs text-gray-500">Help readers understand what they'll find in this
                                    category</span>
                            @enderror
                            <span id="description-count"
                                class="text-xs text-gray-500">{{ strlen(old('description', $category->description ?? '')) }}
                                characters</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Appearance -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">Category Appearance</h3>

                <div class="space-y-6">
                    <!-- Color Picker -->
                    <div>
                        <label for="color" class="block text-sm font-medium text-gray-700 mb-2">
                            Category Color *
                        </label>
                        <div class="flex items-center space-x-4">
                            <input type="color" id="color" name="color"
                                value="{{ old('color', $category->color) }}" required
                                class="h-12 w-20 border border-gray-300 rounded-lg cursor-pointer">
                            <div class="flex-1">
                                <input type="text" id="color-hex" value="{{ old('color', $category->color) }}"
                                    placeholder="#ea580c"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent text-gray-600 font-mono">
                                <p class="text-xs text-gray-500 mt-1">This color will be used for category badges and labels
                                </p>
                            </div>
                        </div>
                        @error('color')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Color Presets -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Quick Color Presets</label>
                        <div class="grid grid-cols-8 gap-2">
                            @php
                                $presetColors = [
                                    '#ea580c',
                                    '#dc2626',
                                    '#f59e0b',
                                    '#059669',
                                    '#0ea5e9',
                                    '#7c3aed',
                                    '#ec4899',
                                    '#6b7280',
                                ];
                            @endphp
                            @foreach ($presetColors as $presetColor)
                                <button type="button" onclick="setColor('{{ $presetColor }}')"
                                    class="w-12 h-12 rounded-lg border-2 border-gray-200 hover:border-gray-400 transition-colors cursor-pointer {{ $category->color === $presetColor ? 'ring-2 ring-orange-500' : '' }}"
                                    style="background-color: {{ $presetColor }}" title="{{ $presetColor }}">
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <!-- Preview -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Preview</label>
                        <div class="p-4 bg-gray-50 rounded-lg">
                            <div class="flex items-center space-x-3">
                                <span id="preview-badge"
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium text-white"
                                    style="background-color: {{ old('color', $category->color) }}">
                                    <span id="preview-name">{{ old('name', $category->name) }}</span>
                                </span>
                                <span class="text-sm text-gray-600">Category badge preview</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Category Settings -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">Category Settings</h3>

                <div class="space-y-4">
                    <!-- Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-3">Status</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="is_active" value="1"
                                    {{ old('is_active', $category->is_active ? '1' : '0') === '1' ? 'checked' : '' }}
                                    class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300">
                                <span class="ml-3">
                                    <span class="text-sm font-medium text-gray-700">Active</span>
                                    <span class="block text-xs text-gray-500">Category will be visible and available for
                                        posts</span>
                                </span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="is_active" value="0"
                                    {{ old('is_active', $category->is_active ? '1' : '0') === '0' ? 'checked' : '' }}
                                    class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300">
                                <span class="ml-3">
                                    <span class="text-sm font-medium text-gray-700">Inactive</span>
                                    <span class="block text-xs text-gray-500">Category will be hidden from public
                                        view</span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex flex-col sm:flex-row gap-3 sm:justify-between">
                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="{{ route('admin.blog.categories.index') }}"
                            class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg font-medium text-center hover:bg-gray-200 transition-colors">
                            Cancel
                        </a>
                        @if ($category->posts()->count() > 0)
                            <a href="{{ route('blog.category', $category->slug) }}" target="_blank"
                                class="px-6 py-3 bg-blue-100 text-blue-700 rounded-lg font-medium text-center hover:bg-blue-200 transition-colors">
                                View Category
                            </a>
                        @endif
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        @if ($category->posts()->count() === 0)
                            <button type="button" onclick="deleteCategory()"
                                class="px-6 py-3 bg-red-50 text-red-700 rounded-lg font-medium hover:bg-red-100 transition-colors border border-red-200">
                                Delete Category
                            </button>
                        @endif
                        <button type="submit"
                            class="px-6 py-3 bg-gradient-to-r from-orange-500 to-red-600 text-white rounded-lg font-semibold hover:from-orange-600 hover:to-red-700 transition-all duration-200 shadow-sm hover:shadow-md">
                            Update Category
                        </button>
                    </div>
                </div>
            </div>
        </form>
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
                <p class="text-sm text-gray-500 mb-4">Are you sure you want to delete "{{ $category->name }}"? This action
                    cannot be undone.</p>
                <div class="flex justify-center space-x-3">
                    <button onclick="closeDeleteModal()"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                        Cancel
                    </button>
                    <form action="{{ route('admin.blog.categories.destroy', $category) }}" method="POST"
                        class="inline">
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
            // Character counter for description
            const descriptionField = document.getElementById('description');
            const descriptionCounter = document.getElementById('description-count');

            descriptionField.addEventListener('input', function() {
                descriptionCounter.textContent = `${this.value.length} characters`;
            });

            // Auto-generate slug from name (only if name changed significantly)
            document.getElementById('name').addEventListener('input', function() {
                updatePreview();
            });

            // Color picker synchronization
            const colorPicker = document.getElementById('color');
            const colorHex = document.getElementById('color-hex');

            colorPicker.addEventListener('input', function() {
                colorHex.value = this.value;
                updatePreviewColor();
            });

            colorHex.addEventListener('input', function() {
                const value = this.value;
                if (/^#[0-9A-F]{6}$/i.test(value)) {
                    colorPicker.value = value;
                    updatePreviewColor();
                }
            });

            // Preset color selection
            function setColor(color) {
                colorPicker.value = color;
                colorHex.value = color;
                updatePreviewColor();

                // Update preset button states
                document.querySelectorAll('[onclick^="setColor"]').forEach(btn => {
                    btn.classList.remove('ring-2', 'ring-orange-500');
                });
                event.target.classList.add('ring-2', 'ring-orange-500');
            }

            // Preview updates
            function updatePreview() {
                const name = document.getElementById('name').value || 'Category Name';
                document.getElementById('preview-name').textContent = name;
            }

            function updatePreviewColor() {
                const color = colorPicker.value;
                document.getElementById('preview-badge').style.backgroundColor = color;
            }

            // Delete modal
            function deleteCategory() {
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
