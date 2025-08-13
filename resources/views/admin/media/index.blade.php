@extends('admin.layouts.app')

@section('title', 'Media Library')
@section('page-title', 'Media Library')
@section('page-description', 'Manage your blog images and media files')

@section('content')
    <div class="space-y-6">
        <!-- Upload Area -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Upload New Images</h3>

            <div id="upload-dropzone"
                class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-orange-400 transition-colors cursor-pointer">
                <input type="file" id="media-upload" multiple accept="image/*" class="hidden">
                <div id="upload-placeholder">
                    <svg class="mx-auto h-16 w-16 text-gray-400 mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                    </svg>
                    <h4 class="text-xl font-medium text-gray-900 mb-2">Upload Images</h4>
                    <p class="text-gray-600 mb-4">Drag and drop your images here, or click to browse</p>
                    <div class="inline-flex items-center px-4 py-2 bg-orange-100 text-orange-700 rounded-lg font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Choose Files
                    </div>
                    <p class="text-xs text-gray-500 mt-3">PNG, JPG, WebP up to 2MB each</p>
                </div>

                <!-- Upload Progress -->
                <div id="upload-progress" class="hidden">
                    <div class="text-center">
                        <svg class="animate-spin mx-auto h-12 w-12 text-orange-600 mb-4" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                        <p class="text-lg font-medium text-gray-900">Uploading Images...</p>
                        <p id="upload-status" class="text-sm text-gray-600"></p>
                    </div>
                </div>
            </div>

            <!-- Upload Results -->
            <div id="upload-results" class="hidden mt-4 p-4 rounded-lg"></div>
        </div>

        <!-- Media Grid -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
            <!-- Header -->
            <div class="p-6 border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Your Images</h3>
                        <p class="text-sm text-gray-600">{{ $images->count() }} images in your library</p>
                    </div>

                    <!-- View Options -->
                    <div class="flex items-center space-x-2">
                        <button id="grid-view" onclick="setView('grid')"
                            class="p-2 text-gray-400 hover:text-gray-600 bg-orange-100 text-orange-600 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </button>
                        <button id="list-view" onclick="setView('list')"
                            class="p-2 text-gray-400 hover:text-gray-600 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Images Grid/List -->
            <div class="p-6">
                @if ($images->count() > 0)
                    <div id="media-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                        @foreach ($images as $image)
                            <div
                                class="relative group border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                                <!-- Image -->
                                <div class="aspect-square bg-gray-100">
                                    <img src="{{ $image['url'] }}" alt="{{ $image['name'] }}"
                                        class="w-full h-full object-cover cursor-pointer"
                                        onclick="openImageModal('{{ $image['url'] }}', '{{ $image['name'] }}', '{{ $image['path'] }}', {{ $image['size'] }}, {{ $image['modified'] }})">
                                </div>

                                <!-- Overlay -->
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-200 flex items-center justify-center">
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

                    <!-- List View (Hidden by default) -->
                    <div id="media-list" class="hidden space-y-2">
                        @foreach ($images as $image)
                            <div
                                class="flex items-center space-x-4 p-4 border border-gray-200 rounded-lg hover:bg-gray-50">
                                <img src="{{ $image['url'] }}" alt="{{ $image['name'] }}"
                                    class="w-16 h-16 object-cover rounded-lg">
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-gray-900 truncate">{{ $image['name'] }}</h4>
                                    <p class="text-sm text-gray-500">
                                        {{ number_format($image['size'] / 1024, 1) }} KB •
                                        Uploaded
                                        {{ \Carbon\Carbon::createFromTimestamp($image['modified'])->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button
                                        onclick="openImageModal('{{ $image['url'] }}', '{{ $image['name'] }}', '{{ $image['path'] }}', {{ $image['size'] }}, {{ $image['modified'] }})"
                                        class="p-2 text-gray-400 hover:text-blue-600">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button onclick="copyImageUrl('{{ $image['url'] }}')"
                                        class="p-2 text-gray-400 hover:text-green-600">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                    <button onclick="deleteImage('{{ $image['path'] }}', '{{ $image['name'] }}')"
                                        class="p-2 text-gray-400 hover:text-red-600">
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
                    <div class="text-center py-12">
                        <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">No images yet</h3>
                        <p class="text-gray-500 mb-4">Upload your first image to get started.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Image Detail Modal -->
    <div id="image-modal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 overflow-y-auto h-full w-full z-50">
        <div class="relative top-8 mx-auto p-5 border max-w-4xl shadow-lg rounded-md bg-white">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-900">Image Details</h3>
                <button onclick="closeImageModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Image Preview -->
                <div>
                    <img id="modal-image" src="" alt="" class="w-full h-auto rounded-lg shadow-sm">
                </div>

                <!-- Image Info -->
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">File Name</label>
                        <p id="modal-filename" class="text-sm text-gray-900 font-mono bg-gray-50 p-2 rounded"></p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">File Size</label>
                        <p id="modal-filesize" class="text-sm text-gray-900"></p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Upload Date</label>
                        <p id="modal-date" class="text-sm text-gray-900"></p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Image URL</label>
                        <div class="flex">
                            <input type="text" id="modal-url" readonly
                                class="flex-1 text-sm text-gray-900 font-mono bg-gray-50 p-2 rounded-l border border-gray-300">
                            <button onclick="copyImageUrl(document.getElementById('modal-url').value)"
                                class="px-3 py-2 bg-orange-600 text-white rounded-r hover:bg-orange-700 transition-colors">
                                Copy
                            </button>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-gray-200">
                        <div class="flex space-x-3">
                            <button onclick="copyImageUrl(document.getElementById('modal-url').value)"
                                class="flex-1 px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors text-sm font-medium">
                                Copy URL
                            </button>
                            <button id="modal-delete-btn" onclick="deleteImageFromModal()"
                                class="flex-1 px-4 py-2 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors text-sm font-medium">
                                Delete Image
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <h3 class="text-lg font-medium text-gray-900 mb-2">Delete Image</h3>
                <p class="text-sm text-gray-500 mb-4">Are you sure you want to delete "<span
                        id="delete-filename"></span>"? This action cannot be undone.</p>
                <div class="flex justify-center space-x-3">
                    <button onclick="closeDeleteModal()"
                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                        Cancel
                    </button>
                    <button id="confirm-delete-btn"
                        class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
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
                            // Refresh page to show new images
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
                    uploadResults.className = 'mt-4 p-4 rounded-lg bg-green-50 border border-green-200';
                    uploadResults.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span class="text-green-800 font-medium">Successfully uploaded ${files.length} image${files.length > 1 ? 's' : ''}!</span>
                </div>
            `;
                } else {
                    uploadResults.className = 'mt-4 p-4 rounded-lg bg-red-50 border border-red-200';
                    uploadResults.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    <span class="text-red-800 font-medium">${message}</span>
                </div>
            `;
                }

                // Hide results after 5 seconds
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
                document.getElementById('modal-date').textContent = new Date(modified * 1000).toLocaleString();
                document.getElementById('modal-url').value = url;
                currentImagePath = path;
                document.getElementById('image-modal').classList.remove('hidden');
            }

            function closeImageModal() {
                document.getElementById('image-modal').classList.add('hidden');
            }

            // Copy URL functionality
            function copyImageUrl(url) {
                navigator.clipboard.writeText(url).then(() => {
                    // Show temporary success message
                    const notification = document.createElement('div');
                    notification.className =
                        'fixed bottom-4 right-4 bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg z-50';
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
            }

            function deleteImageFromModal() {
                const name = document.getElementById('modal-filename').textContent;
                closeImageModal();
                deleteImage(currentImagePath, name);
            }

            function closeDeleteModal() {
                document.getElementById('delete-modal').classList.add('hidden');
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
        </script>
    @endpush
@endsection
