<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');



Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
