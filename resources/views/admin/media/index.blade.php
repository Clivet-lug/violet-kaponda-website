@extends('admin.layouts.app')

@section('title', 'Media Library')
@section('page-title', 'Media Library')
@section('page-description', 'Manage your blog images and media files')

@section('content')
    <div class="space-y-4 sm:space-y-6">
        <!-- Upload Area - Enhanced Responsive -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4 sm:p-6">
            <h3 class="text-base sm:text-lg font-semibold text-gray-900 mb-3 sm:mb-4">Upload New Images</h3>

            <div id="upload-dropzone"
                class="border-2 border-dashed border-gray-300 rounded-lg p-6 sm:p-8 text-center hover:border-orange-400 transition-colors cursor-pointer">
                <input type="file" id="media-upload" multiple accept="image/*" class="hidden">

                <div id="upload-placeholder">
                    <svg class="mx-auto h-12 w-12 sm:h-16 sm:w-16 text-gray-400 mb-3 sm:mb-4" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <h4 class="text-lg sm:text-xl font-medium text-gray-900 mb-2">Upload Images</h4>
                    <p class="text-sm sm:text-base text-gray-600 mb-3 sm:mb-4 px-2">
                        <span class="hidden sm:inline">Drag and drop your images here, or click to browse</span>
                        <span class="sm:hidden">Tap to select images from your device</span>
                    </p>
                    <div
                        class="inline-flex items-center px-3 sm:px-4 py-2 bg-orange-100 text-orange-700 rounded-lg font-medium text-sm sm:text-base">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Choose Files
                    </div>
                    <p class="text-xs sm:text-sm text-gray-500 mt-2 sm:mt-3">PNG, JPG, WebP up to 10MB each</p>
                </div>

                <!-- Upload Progress -->
                <div id="upload-progress" class="hidden">
                    <div class="text-center">
                        <svg class="animate-spin mx-auto h-10 w-10 sm:h-12 sm:w-12 text-orange-600 mb-3 sm:mb-4"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        <p class="text-base sm:text-lg font-medium text-gray-900">Uploading Images...</p>
                        <p id="upload-status" class="text-sm text-gray-600"></p>
                    </div>
                </div>
            </div>

            <!-- Upload Results -->
            <div id="upload-results" class="hidden mt-3 sm:mt-4 p-3 sm:p-4 rounded-lg text-sm sm:text-base"></div>
        </div>

        <!-- Media Grid Container -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
            <!-- Header - Enhanced Responsive -->
            <div class="p-4 sm:p-6 border-b border-gray-200">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-4">
                    <div>
                        <h3 class="text-base sm:text-lg font-semibold text-gray-900">Your Images</h3>
                        <p class="text-sm text-gray-600">{{ $images->count() }} images in your library</p>
                    </div>

                    <!-- View Options - Mobile Optimized -->
                    <div class="flex items-center justify-end sm:justify-start space-x-2">
                        <span class="text-sm text-gray-500 mr-2 hidden sm:inline">View:</span>
                        <button id="grid-view" onclick="setView('grid')"
                            class="p-2 sm:p-2.5 text-gray-400 hover:text-gray-600 bg-orange-100 text-orange-600 rounded-lg transition-colors">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </button>
                        <button id="list-view" onclick="setView('list')"
                            class="p-2 sm:p-2.5 text-gray-400 hover:text-gray-600 rounded-lg transition-colors">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Images Grid/List - Enhanced Responsive -->
            <div class="p-4 sm:p-6">
                @if ($images->count() > 0)
                    <!-- Grid View - Mobile Optimized -->
                    <div id="media-grid"
                        class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-3 sm:gap-4">
                        @foreach ($images as $image)
                            <div
                                class="relative group border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                                <!-- Image Container -->
                                <div class="aspect-square bg-gray-100">
                                    <img src="{{ $image['url'] }}" alt="{{ $image['name'] }}"
                                        class="w-full h-full object-cover cursor-pointer"
                                        onclick="openImageModal('{{ $image['url'] }}', '{{ $image['name'] }}', '{{ $image['path'] }}', {{ $image['size'] }}, {{ $image['modified'] }})">
                                </div>

                                <!-- Mobile Action Button (Always Visible) -->
                                <div class="sm:hidden absolute top-2 right-2">
                                    <button
                                        onclick="openImageModal('{{ $image['url'] }}', '{{ $image['name'] }}', '{{ $image['path'] }}', {{ $image['size'] }}, {{ $image['modified'] }})"
                                        class="p-1.5 bg-black bg-opacity-60 text-white rounded-full backdrop-blur-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Desktop Hover Overlay -->
                                <div
                                    class="hidden sm:block absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-200 flex items-center justify-center">
                                    <div
                                        class="opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex space-x-2">
                                        <button
                                            onclick="openImageModal('{{ $image['url'] }}', '{{ $image['name'] }}', '{{ $image['path'] }}', {{ $image['size'] }}, {{ $image['modified'] }})"
                                            class="p-2 bg-white bg-opacity-90 rounded-lg hover:bg-opacity-100 transition-all">
                                            <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </button>
                                        <button onclick="copyImageUrl('{{ $image['url'] }}')"
                                            class="p-2 bg-white bg-opacity-90 rounded-lg hover:bg-opacity-100 transition-all">
                                            <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                            </svg>
                                        </button>
                                        <button onclick="deleteImage('{{ $image['path'] }}', '{{ $image['name'] }}')"
                                            class="p-2 bg-white bg-opacity-90 rounded-lg hover:bg-opacity-100 transition-all">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- File Info -->
                                <div class="p-2 bg-white">
                                    <p class="text-xs text-gray-600 truncate">{{ $image['name'] }}</p>
                                    <p class="text-xs text-gray-400">{{ number_format($image['size'] / 1024, 1) }} KB</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- List View - Mobile Optimized -->
                    <div id="media-list" class="hidden space-y-2 sm:space-y-3">
                        @foreach ($images as $image)
                            <div
                                class="flex items-center space-x-3 sm:space-x-4 p-3 sm:p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition-colors">
                                <!-- Image Thumbnail -->
                                <img src="{{ $image['url'] }}" alt="{{ $image['name'] }}"
                                    class="w-12 h-12 sm:w-16 sm:h-16 object-cover rounded-lg flex-shrink-0 cursor-pointer"
                                    onclick="openImageModal('{{ $image['url'] }}', '{{ $image['name'] }}', '{{ $image['path'] }}', {{ $image['size'] }}, {{ $image['modified'] }})">

                                <!-- File Info -->
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm sm:text-base font-medium text-gray-900 truncate">
                                        {{ $image['name'] }}</h4>
                                    <p class="text-xs sm:text-sm text-gray-500">
                                        {{ number_format($image['size'] / 1024, 1) }} KB
                                        <span class="hidden sm:inline">
                                            • Uploaded
                                            {{ \Carbon\Carbon::createFromTimestamp($image['modified'])->diffForHumans() }}
                                        </span>
                                    </p>
                                    <!-- Mobile upload date -->
                                    <p class="text-xs text-gray-400 sm:hidden">
                                        {{ \Carbon\Carbon::createFromTimestamp($image['modified'])->diffForHumans() }}
                                    </p>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex items-center space-x-1 sm:space-x-2">
                                    <button
                                        onclick="openImageModal('{{ $image['url'] }}', '{{ $image['name'] }}', '{{ $image['path'] }}', {{ $image['size'] }}, {{ $image['modified'] }})"
                                        class="p-1.5 sm:p-2 text-gray-400 hover:text-blue-600 rounded transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button onclick="copyImageUrl('{{ $image['url'] }}')"
                                        class="p-1.5 sm:p-2 text-gray-400 hover:text-green-600 rounded transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                    <button onclick="deleteImage('{{ $image['path'] }}', '{{ $image['name'] }}')"
                                        class="p-1.5 sm:p-2 text-gray-400 hover:text-red-600 rounded transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Empty State - Mobile Optimized -->
                    <div class="text-center py-8 sm:py-12">
                        <svg class="w-12 h-12 sm:w-16 sm:h-16 text-gray-400 mx-auto mb-3 sm:mb-4" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-base sm:text-lg font-medium text-gray-900 mb-2">No images yet</h3>
                        <p class="text-sm sm:text-base text-gray-500 mb-4 px-4">Upload your first image to get started.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Image Detail Modal - Enhanced Responsive -->
    <div id="image-modal"
        class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 overflow-y-auto h-full w-full z-50 p-4 sm:p-0">
        <div
            class="relative top-0 sm:top-8 mx-auto p-4 sm:p-5 border max-w-full sm:max-w-4xl shadow-lg rounded-md bg-white">
            <!-- Modal Header -->
            <div class="flex justify-between items-center mb-4 sm:mb-6">
                <h3 class="text-base sm:text-lg font-semibold text-gray-900">Image Details</h3>
                <button onclick="closeImageModal()" class="text-gray-400 hover:text-gray-600 p-1">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6">
                <!-- Image Preview -->
                <div class="order-1">
                    <img id="modal-image" src="" alt=""
                        class="w-full h-auto rounded-lg shadow-sm max-h-[50vh] sm:max-h-none object-contain">
                </div>

                <!-- Image Info -->
                <div class="order-2 space-y-3 sm:space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">File Name</label>
                        <p id="modal-filename"
                            class="text-sm text-gray-900 font-mono bg-gray-50 p-2 sm:p-3 rounded break-all"></p>
                    </div>

                    <div class="grid grid-cols-2 gap-3 sm:gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">File Size</label>
                            <p id="modal-filesize" class="text-sm text-gray-900"></p>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Upload Date</label>
                            <p id="modal-date" class="text-sm text-gray-900"></p>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Image URL</label>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-0">
                            <input type="text" id="modal-url" readonly
                                class="flex-1 text-sm text-gray-900 font-mono bg-gray-50 p-2 sm:p-3 rounded sm:rounded-l sm:rounded-r-none border border-gray-300 break-all">
                            <button onclick="copyImageUrl(document.getElementById('modal-url').value)"
                                class="px-3 sm:px-4 py-2 sm:py-3 bg-orange-600 text-white rounded sm:rounded-l-none sm:rounded-r hover:bg-orange-700 transition-colors text-sm font-medium">
                                Copy URL
                            </button>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="pt-3 sm:pt-4 border-t border-gray-200">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <button onclick="copyImageUrl(document.getElementById('modal-url').value)"
                                class="w-full px-4 py-2.5 sm:py-3 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors text-sm font-medium">
                                Copy URL
                            </button>
                            <button id="modal-delete-btn" onclick="deleteImageFromModal()"
                                class="w-full px-4 py-2.5 sm:py-3 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors text-sm font-medium">
                                Delete Image
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal - Enhanced Responsive -->
    <div id="delete-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full z-50 p-4">
        <div
            class="relative top-4 sm:top-20 mx-auto p-4 sm:p-5 border w-full max-w-sm sm:max-w-md shadow-lg rounded-md bg-white">
            <div class="text-center">
                <div
                    class="mx-auto flex items-center justify-center h-10 w-10 sm:h-12 sm:w-12 rounded-full bg-red-100 mb-3 sm:mb-4">
                    <svg class="h-5 w-5 sm:h-6 sm:w-6 text-red-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z" />
                    </svg>
                </div>
                <h3 class="text-base sm:text-lg font-medium text-gray-900 mb-2">Delete Image</h3>
                <p class="text-sm text-gray-500 mb-4 sm:mb-6 px-2">
                    Are you sure you want to delete "<span id="delete-filename" class="font-medium"></span>"?
                    <span class="block mt-1 text-xs sm:inline sm:mt-0">This action cannot be undone.</span>
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-3 sm:space-x-0">
                    <button onclick="closeDeleteModal()"
                        class="w-full sm:w-auto px-4 py-2.5 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors text-sm font-medium">
                        Cancel
                    </button>
                    <button id="confirm-delete-btn"
                        class="w-full sm:w-auto px-4 py-2.5 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors text-sm font-medium">
                        Delete Image
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            let currentView = 'grid';
            let currentImagePath = '';

            // Upload functionality
            const uploadDropzone = document.getElementById('upload-dropzone');
            const fileInput = document.getElementById('media-upload');
            const uploadPlaceholder = document.getElementById('upload-placeholder');
            const uploadProgress = document.getElementById('upload-progress');
            const uploadResults = document.getElementById('upload-results');

            // File upload events
            uploadDropzone.addEventListener('click', () => fileInput.click());
            uploadDropzone.addEventListener('dragover', handleDragOver);
            uploadDropzone.addEventListener('drop', handleDrop);
            fileInput.addEventListener('change', handleFileSelect);

            function handleDragOver(e) {
                e.preventDefault();
                uploadDropzone.classList.add('border-orange-400', 'bg-orange-50');
            }

            uploadDropzone.addEventListener('dragleave', function() {
                this.classList.remove('border-orange-400', 'bg-orange-50');
            });

            function handleDrop(e) {
                e.preventDefault();
                uploadDropzone.classList.remove('border-orange-400', 'bg-orange-50');
                const files = e.dataTransfer.files;
                uploadFiles(files);
            }

            function handleFileSelect(e) {
                const files = e.target.files;
                uploadFiles(files);
            }

            function uploadFiles(files) {
                if (files.length === 0) return;

                const formData = new FormData();
                for (let i = 0; i < files.length; i++) {
                    formData.append('files[]', files[i]);
                }

                // Show progress
                uploadPlaceholder.classList.add('hidden');
                uploadProgress.classList.remove('hidden');
                document.getElementById('upload-status').textContent =
                    `Uploading ${files.length} file${files.length > 1 ? 's' : ''}...`;

                fetch('{{ route('admin.media.upload') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        uploadProgress.classList.add('hidden');
                        uploadPlaceholder.classList.remove('hidden');

                        if (data.success) {
                            showUploadResults(data.files, 'success');
                            setTimeout(() => location.reload(), 2000);
                        } else {
                            showUploadResults([], 'error', data.message || 'Upload failed');
                        }
                    })
                    .catch(error => {
                        uploadProgress.classList.add('hidden');
                        uploadPlaceholder.classList.remove('hidden');
                        showUploadResults([], 'error', 'Network error occurred');
                    });
            }

            function showUploadResults(files, type, message = null) {
                uploadResults.classList.remove('hidden');

                if (type === 'success') {
                    uploadResults.className = 'hidden mt-3 sm:mt-4 p-3 sm:p-4 rounded-lg bg-green-50 border border-green-200';
                    uploadResults.classList.remove('hidden');
                    uploadResults.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-green-800 font-medium text-sm sm:text-base">Successfully uploaded ${files.length} image${files.length > 1 ? 's' : ''}!</span>
                </div>
            `;
                } else {
                    uploadResults.className = 'hidden mt-3 sm:mt-4 p-3 sm:p-4 rounded-lg bg-red-50 border border-red-200';
                    uploadResults.classList.remove('hidden');
                    uploadResults.innerHTML = `
                <div class="flex items-start">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-red-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <span class="text-red-800 font-medium text-sm sm:text-base">${message}</span>
                </div>
            `;
                }

                setTimeout(() => {
                    uploadResults.classList.add('hidden');
                }, 5000);
            }

            // View switching
            function setView(view) {
                currentView = view;
                const gridView = document.getElementById('media-grid');
                const listView = document.getElementById('media-list');
                const gridBtn = document.getElementById('grid-view');
                const listBtn = document.getElementById('list-view');

                if (view === 'grid') {
                    gridView.classList.remove('hidden');
                    listView.classList.add('hidden');
                    gridBtn.classList.add('bg-orange-100', 'text-orange-600');
                    listBtn.classList.remove('bg-orange-100', 'text-orange-600');
                } else {
                    gridView.classList.add('hidden');
                    listView.classList.remove('hidden');
                    listBtn.classList.add('bg-orange-100', 'text-orange-600');
                    gridBtn.classList.remove('bg-orange-100', 'text-orange-600');
                }
            }

            // Image modal
            function openImageModal(url, name, path, size, modified) {
                document.getElementById('modal-image').src = url;
                document.getElementById('modal-image').alt = name;
                document.getElementById('modal-filename').textContent = name;
                document.getElementById('modal-filesize').textContent = `${(size / 1024).toFixed(1)} KB`;
                document.getElementById('modal-date').textContent = new Date(modified * 1000).toLocaleDateString();
                document.getElementById('modal-url').value = url;
                currentImagePath = path;
                document.getElementById('image-modal').classList.remove('hidden');
                // Prevent body scroll on mobile
                document.body.style.overflow = 'hidden';
            }

            function closeImageModal() {
                document.getElementById('image-modal').classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            // Copy URL functionality
            function copyImageUrl(url) {
                navigator.clipboard.writeText(url).then(() => {
                    // Show responsive notification
                    const notification = document.createElement('div');
                    notification.className =
                        'fixed bottom-4 left-4 right-4 sm:bottom-4 sm:right-4 sm:left-auto sm:w-auto bg-green-600 text-white px-4 py-3 rounded-lg shadow-lg z-50 text-center sm:text-left';
                    notification.textContent = 'URL copied to clipboard!';
                    document.body.appendChild(notification);

                    setTimeout(() => {
                        notification.remove();
                    }, 2000);
                });
            }

            // Delete functionality
            function deleteImage(path, name) {
                currentImagePath = path;
                document.getElementById('delete-filename').textContent = name;
                document.getElementById('delete-modal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function deleteImageFromModal() {
                const name = document.getElementById('modal-filename').textContent;
                closeImageModal();
                deleteImage(currentImagePath, name);
            }

            function closeDeleteModal() {
                document.getElementById('delete-modal').classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            // Confirm delete
            document.getElementById('confirm-delete-btn').addEventListener('click', function() {
                fetch('{{ route('admin.media.destroy') }}', {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            path: currentImagePath
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        closeDeleteModal();
                        if (data.success) {
                            location.reload();
                        } else {
                            alert('Failed to delete image');
                        }
                    })
                    .catch(error => {
                        closeDeleteModal();
                        alert('Error deleting image');
                    });
            });

            // Close modals when clicking outside
            document.getElementById('image-modal').addEventListener('click', function(e) {
                if (e.target === this) closeImageModal();
            });

            document.getElementById('delete-modal').addEventListener('click', function(e) {
                if (e.target === this) closeDeleteModal();
            });

            // Handle escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeImageModal();
                    closeDeleteModal();
                }
            });
        </script>
    @endpush
@endsection
