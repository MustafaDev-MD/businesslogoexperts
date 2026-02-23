<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend/index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';

// use Illuminate\Support\Facades\Route;

// Route::livewire('/', 'frontend::welcome')
//     ->name('home');

// Route::middleware(['auth', 'verified'])->group(function () {

//     Route::livewire('/dashboard', 'pages::admin.dashboard')
//         ->name('dashboard');

// });

// require __DIR__.'/settings.php';