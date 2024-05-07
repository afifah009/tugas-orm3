<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('products', [productController::class, 'index'])->name('products.index');
Route::get('products/create',[productController::class, 'create'])->name('products.create');
Route::get('products/store',[productController::class, 'store'])->name('products.store');