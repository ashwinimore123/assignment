<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function () {
Route::get('admin/products', [ProductController::class, 'index'])->name('admin.products.index');

});

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

Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('admin/products', [ProductController::class, 'store'])->name('admin.products.store');

Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::put('admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
Route::get('admin/products/{product}', [ProductController::class, 'show'])->name('admin.products.show');
