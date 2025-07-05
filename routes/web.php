<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

Route::get('/', function () {
    return redirect()->route('products.index');
});
Route::resource('products', ProductController::class); 

Route::get('sales/create', [SaleController::class, 'create'])->name('sales.create');
