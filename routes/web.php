<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('/', function () {
    return Inertia::render('home/Home');
})->name('home');


Route::get('about', function () {
    return Inertia::render('about/About');
})->name('about');

Route::get('projects', function () {
    return Inertia::render('Projects');
})->name('projects');

Route::get('blogs', function () {
    return Inertia::render('Blogs');
})->name('blogs');

Route::get('contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
