<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Example Routes Admin
Route::prefix('admin')
        ->middleware(['auth'])
        ->as('admin.')
        ->group(function () {
            Route::view('/', 'admin.pages.home.index')->name('home');
            Route::get('/users', [AdminController::class, 'users']);
            Route::get('/categories', [AdminController::class, 'categories']);
            Route::get('/products', [AdminController::class, 'products']);
        });

Route::get('/', function () {
    return view('website.home');
});

Auth::routes();
