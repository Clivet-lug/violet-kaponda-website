@extends('admin.layouts.app')

@section('title', 'Create Category')
@section('page-title', 'Create New Category')
@section('page-description', 'Add a new category to organize your blog posts')

@section('content')
    <div class="max-w-2xl mx-auto">
        <form method="POST" action="{{ route('admin.blog.categories.store') }}" class="space-y-6">
            @csrf

            <!-- Main Category Details -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-6">Category Information</h3>

                <div class="space-y-6">
                    <!-- Category Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            Category Name *
                        </label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            placeholder="Enter category name..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Auto-generated Slug -->
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">
                            URL Slug
                            <span class="text-xs text-gray-500">(Auto-generated from name, you can edit)</span>
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                {{ url('/blog/category') }}/
                            </span>
                            <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                                placeholder="auto-generated-from-name"
                                class="flex-1 px-4 py-3 border border-gray-300 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('slug') border-red-500 @enderror">
                        </div>
                        @error('slug')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                            Description
                            <span class="text-xs text-gray-500">(Optional)</span>
                        </label>
                        <textarea id="description" name="description" rows="4" placeholder="Describe what this category is about..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                        <div class="flex justify-between items-center mt-2">
                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @else
                                <span class="text-xs text-gray-500">Help readers understand what they'll find in this
                                    category</span>
                            @enderror
                            <span id="description-count" class="text-xs text-gray-500">0 characters</span>
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
                            <input type="color" id="color" name="color" value="{{ old('color', '#ea580c') }}"
                                required class="h-12 w-20 border border-gray-300 rounded-lg cursor-pointer">
                            <div class="flex-1">
                                <input type="text" id="color-hex" value="{{ old('color', '#ea580c') }}"
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
                                    class="w-12 h-12 rounded-lg border-2 border-gray-200 hover:border-gray-400 transition-colors cursor-pointer"
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
                                    style="background-color: {{ old('color', '#ea580c') }}">
                                    <span id="preview-name">{{ old('name', 'Category Name') }}</span>
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
                                    {{ old('is_active', '1') === '1' ? 'checked' : '' }}
                                    class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300">
                                <span class="ml-3">
                                    <span class="text-sm font-medium text-gray-700">Active</span>
                                    <span class="block text-xs text-gray-500">Category will be visible and available for
                                        posts</span>
                                </span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="is_active" value="0"
                                    {{ old('is_active') === '0' ? 'checked' : '' }}
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
                <div class="flex flex-col sm:flex-row gap-3 sm:justify-end">
                    <a href="{{ route('admin.blog.categories.index') }}"
                        class="px-6 py-3 bg-gray-100 text-gray-700 rounded-lg font-medium text-center hover:bg-gray-200 transition-colors">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-6 py-3 bg-gradient-to-r from-orange-500 to-red-600 text-white rounded-lg font-semibold hover:from-orange-600 hover:to-red-700 transition-all duration-200 shadow-sm hover:shadow-md">
                        Create Category
                    </button>
                </div>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            // Auto-generate slug from name
            document.getElementById('name').addEventListener('input', function() {
                const name = this.value;
                const slug = name
                    .toLowerCase()
                    .replace(/[^a-z0-9 -]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .replace(/^-|-$/g, '');

                document.getElementById('slug').value = slug;
                updatePreview();
            });

            // Character counter for description
            const descriptionField = document.getElementById('description');
            const descriptionCounter = document.getElementById('description-count');

            descriptionField.addEventListener('input', function() {
                descriptionCounter.textContent = `${this.value.length} characters`;
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

            // Initialize preview
            updatePreview();
            updatePreviewColor();

            // Set initial description count
            descriptionCounter.textContent = `${descriptionField.value.length} characters`;
        </script>
    @endpush
@endsection
