<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\MediaController;

// Admin Authentication Routes (outside middleware)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Protected Admin Routes
    Route::middleware(['admin'])->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard', [DashboardController::class, 'index']);

        // Blog Posts Management
        Route::prefix('blog/posts')->name('blog.posts.')->group(function () {
            Route::get('/', [BlogPostController::class, 'index'])->name('index');
            Route::get('/create', [BlogPostController::class, 'create'])->name('create');
            Route::post('/', [BlogPostController::class, 'store'])->name('store');
            Route::get('/{post}', [BlogPostController::class, 'show'])->name('show');
            Route::get('/{post}/edit', [BlogPostController::class, 'edit'])->name('edit');
            Route::put('/{post}', [BlogPostController::class, 'update'])->name('update');
            Route::delete('/{post}', [BlogPostController::class, 'destroy'])->name('destroy');
            Route::post('/bulk-action', [BlogPostController::class, 'bulkAction'])->name('bulk');
        });

        // Blog Categories Management
        Route::prefix('blog/categories')->name('blog.categories.')->group(function () {
            Route::get('/', [BlogCategoryController::class, 'index'])->name('index');
            Route::get('/create', [BlogCategoryController::class, 'create'])->name('create');
            Route::post('/', [BlogCategoryController::class, 'store'])->name('store');
            Route::get('/{category}', [BlogCategoryController::class, 'show'])->name('show');
            Route::get('/{category}/edit', [BlogCategoryController::class, 'edit'])->name('edit');
            Route::put('/{category}', [BlogCategoryController::class, 'update'])->name('update');
            Route::delete('/{category}', [BlogCategoryController::class, 'destroy'])->name('destroy');
            Route::post('/bulk-action', [BlogCategoryController::class, 'bulkAction'])->name('bulk');
        });

        // Media Management
        Route::prefix('media')->name('media.')->group(function () {
            Route::get('/', [MediaController::class, 'index'])->name('index');
            Route::post('/upload', [MediaController::class, 'upload'])->name('upload');
            Route::delete('/delete', [MediaController::class, 'destroy'])->name('destroy');
        });
    });
});
