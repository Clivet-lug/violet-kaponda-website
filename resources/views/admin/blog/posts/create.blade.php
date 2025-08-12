@extends('admin.layouts.app')

@section('title', 'Create Post')
@section('page-title', 'Create New Post')
@section('page-description', 'Write and publish a new blog post')

@section('content')
    <form method="POST" action="{{ route('admin.blog.posts.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Post Title -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                            Post Title *
                        </label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required
                            placeholder="Enter your post title..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('title') border-red-500 @enderror">
                        @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Auto-generated Slug -->
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">
                            URL Slug
                            <span class="text-xs text-gray-500">(Auto-generated from title, you can edit)</span>
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                {{ url('/blog') }}/
                            </span>
                            <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                                placeholder="auto-generated-from-title"
                                class="flex-1 px-4 py-3 border border-gray-300 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('slug') border-red-500 @enderror">
                        </div>
                        @error('slug')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Post Excerpt -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <label for="excerpt" class="block text-sm font-medium text-gray-700 mb-2">
                        Excerpt
                        <span class="text-xs text-gray-500">(Brief description for previews)</span>
                    </label>
                    <textarea id="excerpt" name="excerpt" rows="3"
                        placeholder="Write a brief excerpt that will appear in post previews..."
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('excerpt') border-red-500 @enderror">{{ old('excerpt') }}</textarea>
                    <div class="flex justify-between items-center mt-2">
                        @error('excerpt')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @else
                            <span class="text-xs text-gray-500">Recommended: 150-160 characters</span>
                        @enderror
                        <span id="excerpt-count" class="text-xs text-gray-500">0 characters</span>
                    </div>
                </div>

                <!-- Post Content -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                        Post Content *
                    </label>
                    <textarea id="content" name="content" rows="20" required
                        class="w-full @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- SEO Settings -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        SEO Settings
                    </h3>

                    <div class="space-y-4">
                        <div>
                            <label for="seo_title" class="block text-sm font-medium text-gray-700 mb-2">
                                SEO Title
                                <span class="text-xs text-gray-500">(Will use post title if empty)</span>
                            </label>
                            <input type="text" id="seo_title" name="seo_title" value="{{ old('seo_title') }}"
                                maxlength="60" placeholder="Optimized title for search engines..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('seo_title') border-red-500 @enderror">
                            <div class="flex justify-between items-center mt-2">
                                @error('seo_title')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @else
                                    <span class="text-xs text-gray-500">Recommended: 50-60 characters</span>
                                @enderror
                                <span id="seo-title-count" class="text-xs text-gray-500">0/60</span>
                            </div>
                        </div>

                        <div>
                            <label for="meta_description" class="block text-sm font-medium text-gray-700 mb-2">
                                Meta Description
                            </label>
                            <textarea id="meta_description" name="meta_description" rows="3" maxlength="160"
                                placeholder="Brief description that appears in search results..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('meta_description') border-red-500 @enderror">{{ old('meta_description') }}</textarea>
                            <div class="flex justify-between items-center mt-2">
                                @error('meta_description')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @else
                                    <span class="text-xs text-gray-500">Recommended: 150-160 characters</span>
                                @enderror
                                <span id="meta-desc-count" class="text-xs text-gray-500">0/160</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Publish Settings -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Publish Settings</h3>

                    <div class="space-y-4">
                        <!-- Status -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <div class="space-y-2">
                                <label class="flex items-center">
                                    <input type="radio" name="is_published" value="0"
                                        {{ old('is_published', '0') === '0' ? 'checked' : '' }}
                                        class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">Save as Draft</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="is_published" value="1"
                                        {{ old('is_published') === '1' ? 'checked' : '' }}
                                        class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300">
                                    <span class="ml-2 text-sm text-gray-700">Publish Immediately</span>
                                </label>
                            </div>
                        </div>

                        <!-- Publish Date -->
                        <div>
                            <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">
                                Publish Date
                                <span class="text-xs text-gray-500">(Leave empty for current time)</span>
                            </label>
                            <input type="datetime-local" id="published_at" name="published_at"
                                value="{{ old('published_at') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('published_at') border-red-500 @enderror">
                            @error('published_at')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Featured Image</h3>

                    <div class="space-y-4">
                        <div id="image-upload-area"
                            class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-orange-400 transition-colors cursor-pointer">
                            <input type="file" id="featured_image" name="featured_image" accept="image/*"
                                class="hidden">
                            <div id="upload-placeholder">
                                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-sm text-gray-600 mb-1">Click to upload an image</p>
                                <p class="text-xs text-gray-500">PNG, JPG, WebP up to 2MB</p>
                            </div>
                            <div id="image-preview" class="hidden">
                                <img id="preview-img" class="max-w-full h-auto rounded-lg">
                                <p id="image-name" class="text-sm text-gray-600 mt-2"></p>
                                <button type="button" onclick="removeImage()"
                                    class="mt-2 text-xs text-red-600 hover:text-red-800">
                                    Remove image
                                </button>
                            </div>
                        </div>
                        @error('featured_image')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Categories -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Categories</h3>

                    @if ($categories->count() > 0)
                        <div class="space-y-2 max-h-48 overflow-y-auto">
                            @foreach ($categories as $category)
                                <label class="flex items-center p-2 hover:bg-gray-50 rounded-lg cursor-pointer">
                                    <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                        {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}
                                        class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded">
                                    <div class="ml-3 flex items-center">
                                        <div class="w-3 h-3 rounded-full mr-2"
                                            style="background-color: {{ $category->color }}"></div>
                                        <span class="text-sm text-gray-700">{{ $category->name }}</span>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    @else
                        <p class="text-sm text-gray-500 mb-3">No categories available.</p>
                        <a href="{{ route('admin.blog.categories.create') }}"
                            class="text-sm text-orange-600 hover:text-orange-700 font-medium">
                            Create your first category →
                        </a>
                    @endif

                    @error('categories')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tags -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Tags</h3>

                    <div>
                        <input type="text" id="tags" name="tags" value="{{ old('tags') }}"
                            placeholder="fintech, africa, innovation"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent @error('tags') border-red-500 @enderror">
                        <p class="text-xs text-gray-500 mt-2">Separate tags with commas</p>
                        @error('tags')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="space-y-3">
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-orange-500 to-red-600 text-white py-3 px-4 rounded-lg font-semibold hover:from-orange-600 hover:to-red-700 transition-all duration-200 shadow-sm hover:shadow-md">
                            Create Post
                        </button>
                        <a href="{{ route('admin.blog.posts.index') }}"
                            class="block w-full bg-gray-100 text-gray-700 py-3 px-4 rounded-lg font-medium text-center hover:bg-gray-200 transition-colors">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @push('scripts')
        <script>
            // Auto-generate slug from title
            document.getElementById('title').addEventListener('input', function() {
                const title = this.value;
                const slug = title
                    .toLowerCase()
                    .replace(/[^a-z0-9 -]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .replace(/^-|-$/g, '');

                document.getElementById('slug').value = slug;
            });

            // Character counters
            function setupCharacterCounter(inputId, counterId, maxLength = null) {
                const input = document.getElementById(inputId);
                const counter = document.getElementById(counterId);

                if (input && counter) {
                    input.addEventListener('input', function() {
                        const length = this.value.length;
                        if (maxLength) {
                            counter.textContent = `${length}/${maxLength}`;
                            if (length > maxLength * 0.9) {
                                counter.classList.add('text-red-500');
                                counter.classList.remove('text-gray-500');
                            } else {
                                counter.classList.add('text-gray-500');
                                counter.classList.remove('text-red-500');
                            }
                        } else {
                            counter.textContent = `${length} characters`;
                        }
                    });
                }
            }

            setupCharacterCounter('excerpt', 'excerpt-count');
            setupCharacterCounter('seo_title', 'seo-title-count', 60);
            setupCharacterCounter('meta_description', 'meta-desc-count', 160);

            // Image upload handling
            const imageUploadArea = document.getElementById('image-upload-area');
            const fileInput = document.getElementById('featured_image');
            const uploadPlaceholder = document.getElementById('upload-placeholder');
            const imagePreview = document.getElementById('image-preview');
            const previewImg = document.getElementById('preview-img');
            const imageName = document.getElementById('image-name');

            imageUploadArea.addEventListener('click', () => fileInput.click());

            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImg.src = e.target.result;
                        imageName.textContent = file.name;
                        uploadPlaceholder.classList.add('hidden');
                        imagePreview.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                }
            });

            function removeImage() {
                fileInput.value = '';
                uploadPlaceholder.classList.remove('hidden');
                imagePreview.classList.add('hidden');
            }

            // Initialize TinyMCE
            document.addEventListener('DOMContentLoaded', function() {
                tinymce.init({
                    selector: '#content',
                    height: 500,
                    menubar: false,
                    plugins: [
                        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                        'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                        'insertdatetime', 'media', 'table', 'help', 'wordcount'
                    ],
                    toolbar: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                    content_style: 'body { font-family: Inter, sans-serif; font-size: 16px; }',
                    setup: function(editor) {
                        editor.on('change', function() {
                            editor.save();
                        });
                    }
                });
            });
        </script>
    @endpush
@endsection
