<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\CardController;





Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');

        Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
        Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
        Route::post('/admin/products/save', [ProductController::class, 'save'])->name('admin/products/save');
        Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
        Route::put('admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
        Route::get('admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin/products/delete');
        Route::get('/products/search', [ProductController::class, 'search']);
        Route::get('admin/print-product', [ProductController::class, 'PrintProduct'])->name('admin/print-product');
       
        Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');
        Route::get('/admin/product2s', [Product2Controller::class, 'index'])->name('admin/product2s');
        Route::get('/admin/product2s/create', [Product2Controller::class, 'create'])->name('admin/product2s/create');
        Route::post('/admin/product2s/save', [Product2Controller::class, 'save'])->name('admin/product2s/save');
        Route::get('/admin/product2s/edit/{id}', [Product2Controller::class, 'edit'])->name('admin/product2s/edit');
        Route::put('admin/product2s/edit/{id}', [Product2Controller::class, 'update'])->name('admin/product2s/update');
        Route::get('admin/product2s/delete/{id}', [Product2Controller::class, 'delete'])->name('admin/product2s/delete');
        Route::get('/product2s/search', [Product2Controller::class, 'search']);
        Route::get('admin/print-product2', [Product2Controller::class, 'PrintProduct2'])->name('admin/print-product2');
        
       

});

require __DIR__.'/auth.php';

// Route::get('admin/dashboard', [HomeController::class, 'index']);
// Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin']);