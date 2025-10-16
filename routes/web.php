<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/products',[ProductController::class,'index'])->name('products.index'); 
// Route::post('/products',[ProductController::class,'store'])->name('products.store');
// Route::get('/products/create',[ProductController::class,'create'])->name('products.create'); 
// Route::get('/products/{id}',[ProductController::class,'destroy'])->name('products.destroy');

Route::resource('/products', ProductController::class);
