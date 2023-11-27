<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/products/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::get('/products/{id}/delete', [ProductController::class, 'destroy'])->name('product.delete');

