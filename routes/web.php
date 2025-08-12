<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/speaking', function () {
    return view('pages.speaking');
})->name('speaking');

Route::get('/media', function () {
    return view('pages.media');
})->name('media');

Route::get('/blog', function () {
    return view('pages.blog.index');
})->name('blog.index');

// Contact routes using controller
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Newsletter subscription (for future implementation)
Route::post('/newsletter/subscribe', function () {
    // Newsletter subscription logic here
})->name('newsletter.subscribe');
