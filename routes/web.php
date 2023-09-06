<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PubliController;

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

Route::get('/',[PubliController::class,'welcome'])->name('welcome');

Route::get('/products/create',[ProductController::class,'create'])->name('products.create');

Route::post('/products/store',[ProductController::class,'store'])->name('products.store');

Route::get('/products/show/{product}',[ProductController::class,'show'])->name('products.show');

Route::get('/product/edit/{product}',[ProductController::class, 'edit'])->name('edit.product');
Route::put('/product/update/{product}',[ProductController::class, 'update'])->name('product.update');

Route::delete('/product/delete/{product}',[ProductController::class, 'destroy'])->name('delete.product');

Route::get('/yourproduct',[ProductController::class,'seeYourProduct'])->name('your.products');
