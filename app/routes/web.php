<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('productForm');
});
// Route::get('/', fn () => "product");
Route::post('/',[ProductController::class, 'productForm'])->name('productForm.store');
