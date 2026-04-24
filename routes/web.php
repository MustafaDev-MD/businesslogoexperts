<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PackageFormController;

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
    Route::get('/blog/{slug}', 'singlePost')->name('single-post');
    // Route::get('/single-post', 'singlePost')->name('single-post');

    // Case Studies
    Route::get('/case-studies', 'caseStudies')->name('case-studies');

    // Services
    Route::get('/services', 'services')->name('services');
    Route::get('/services/{slug}', 'singleService')->name('single-service');
    // Route::get('/single-service', 'singleService')->name('single-service-page');
    
    // Other pages
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/partnership', 'partnership')->name('partnership');
    Route::get('/team', 'team')->name('team');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
});

Route::get('/package-form/{service}/{package}', [PackageFormController::class, 'index'])
    ->name('package.form');
    
Route::post('/package-submit', [PackageFormController::class, 'submit'])->name('package.submit')->middleware('throttle:5,1');;

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