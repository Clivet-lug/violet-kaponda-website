<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// API Routes for forms (we'll build these later)
Route::post('/contact', function () {
    // Contact form processing
})->name('contact.submit');

Route::post('/newsletter/subscribe', function () {
    // Newsletter subscription
})->name('newsletter.subscribe');