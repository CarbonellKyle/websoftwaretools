<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//CRUD Routes
Route::get('/product', [App\Http\Controllers\ProductController::class, 'getAllProduct'])->name('product.index');
Route::get('/product/add', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('product.add');
Route::post('product/add', [App\Http\Controllers\ProductController::class, 'addProductSubmit'])->name('product.addsubmit');
Route::get('product/view/{id}', [App\Http\Controllers\ProductController::class, 'getProductById'])->name('product.view');
Route::get('product/remove/{id}', [App\Http\Controllers\ProductController::class, 'removeProduct'])->name('product.remove');
Route::get('product/edit/{id}', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('product.edit');
Route::post('product/update', [App\Http\Controllers\ProductController::class, 'updateProduct'])->name('product.update');