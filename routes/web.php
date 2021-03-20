<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileController;

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
Route::get('/product', [ProductController::class, 'getAllProduct'])->name('product.index');
Route::get('/product/add', [ProductController::class, 'addProduct'])->name('product.add');
Route::post('/product/add', [ProductController::class, 'addProductSubmit'])->name('product.addsubmit');
Route::get('/product/view/{id}', [ProductController::class, 'getProductById'])->name('product.view');
Route::get('/product/remove/{id}', [ProductController::class, 'removeProduct'])->name('product.remove');
Route::get('/product/edit/{id}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::post('/product/update', [ProductController::class, 'updateProduct'])->name('product.update'); 

//File Uploader Routes
Route::get('/file', [FileController::class, 'index'])->name('file.index');
Route::get('/file/add', [FileController::class, 'addFile'])->name('file.add');
Route::post('/file/add', [FileController::class, 'addFileSubmit'])->name('file.addsubmit');
Route::get('/file/view/{id}', [FileController::class, 'viewFile'])->name('file.view');
Route::get('/file/delete/{id}', [FileController::class, 'deleteFile'])->name('file.delete');
Route::get('/file/edit/{id}', [FileController::class, 'editFile'])->name('file.edit');
Route::post('/file/update', [FileController::class, 'updateFile'])->name('file.update');