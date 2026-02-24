<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| These are all the public-facing pages of the website.
|
*/

Route::controller(FrontendController::class)->group(function () {

    // Home page
    Route::get('/', 'index')->name('home');

    // About page
    Route::get('/about', 'about')->name('about');

    // Blog pages
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/single-post', 'singlePost')->name('single-post');

    // Case Studies
    Route::get('/case-studies', 'caseStudies')->name('case-studies');

    // Services
    Route::get('/service', 'service')->name('service');
    Route::get('/service/{slug}', [FrontendController::class, 'singleService'])
    ->name('service.show');
    Route::get('/single-service', 'singleService')->name('single-service');

    // Other pages
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/partnership', 'partnership')->name('partnership');
    Route::get('/team', 'team')->name('team');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
});

// -----------------------------------------------------------------------------
// 404 Page Route
// -----------------------------------------------------------------------------

Route::fallback([FrontendController::class, 'pageNotFound']);

// -----------------------------------------------------------------------------
// Authenticated Dashboard
// -----------------------------------------------------------------------------

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Include additional settings/routes

require __DIR__.'/settings.php';

// use Illuminate\Support\Facades\Route;

// Route::livewire('/', 'frontend::welcome')
//     ->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {

//     Route::livewire('/dashboard', 'pages::admin.dashboard')
//         ->name('dashboard');

// });

// require __DIR__.'/settings.php';