<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Example Routes Admin
Route::prefix('admin')
        ->middleware(['auth'])
        ->as('admin.')
        ->group(function () {
            Route::view('/', 'admin.pages.home.index')->name('home');
            Route::get('/users', [AdminController::class, 'users']);

            Route::get('/categories', [AdminController::class, 'categories']);
            Route::get('/add-categories', [AdminController::class, 'categoriesAdd']);
            Route::post('/add-categories', [AdminController::class, 'categoriesInsert']);
            Route::get('/edit-categories/{id}', [AdminController::class, 'categoriesEdit']);
            Route::post('/edit-categories/{id}', [AdminController::class, 'categoriesUpdate']);

            Route::get('/sub-categories', [AdminController::class, 'subCategories']);
            Route::get('/add-sub-categories', [AdminController::class, 'subCategoriesAdd']);
            Route::post('/add-sub-categories', [AdminController::class, 'subCategoriesInsert']);
            Route::get('/edit-sub-categories/{id}', [AdminController::class, 'subCategoriesEdit']);
            Route::post('/edit-sub-categories/{id}', [AdminController::class, 'subCategoriesUpdate']);

            Route::get('/products', [AdminController::class, 'products']);
            Route::post('subcat', [AdminController::class, 'subCat'])->name('subcat');
            Route::get('/add-product', [AdminController::class, 'productsAdd']);
            Route::post('/add-product', [AdminController::class, 'productsInsert']);
            Route::get('/edit-product/{id}', [AdminController::class, 'productsEdit']);
            Route::post('/edit-product/{id}', [AdminController::class, 'productsUpdate']);
        });

// Route::get('/', function () {
//     return view('website.home');
// });

Route::get('/', [HomeController::class, 'index']);

Auth::routes();
