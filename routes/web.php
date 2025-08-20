<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BlogController;

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

// Public Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/category/{slug}', [BlogController::class, 'category'])->name('blog.category');

// Contact routes using controller
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Newsletter subscription
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Legal Pages
Route::get('/privacy', function () {
    return view('pages.legal.privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('pages.legal.terms');
})->name('terms');

// Sitemap (HTML version for users)
Route::get('/sitemap', function () {
    return view('pages.sitemap');
})->name('sitemap');

// XML Sitemap for search engines (optional)
Route::get('/sitemap.xml', function () {
    $routes = [
        ['url' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly'],
        ['url' => route('about'), 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['url' => route('speaking'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => route('media'), 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => route('blog.index'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ['url' => route('contact'), 'priority' => '0.7', 'changefreq' => 'monthly'],
        ['url' => route('privacy'), 'priority' => '0.3', 'changefreq' => 'yearly'],
        ['url' => route('terms'), 'priority' => '0.3', 'changefreq' => 'yearly'],
    ];

    return response()->view('pages.sitemap-xml', compact('routes'))
        ->header('Content-Type', 'application/xml');
})->name('sitemap.xml');
