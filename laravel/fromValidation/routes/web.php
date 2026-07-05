<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\productController;
use App\Http\Controllers\NotificationController;

Route::resource('/students', StudentsController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('product', [productController::class, 'index'])->name('product.index');
Route::get('show', [productController::class, 'show'])->name('show.index');
Route::post('product', [productController::class, 'store'])->name('products.store');
Route::get('product/{product}/edit', [productController::class, 'edit'])->name('products.edit');
Route::put('product/{product}', [productController::class, 'update'])->name('products.update');
Route::delete('product/{product}', [productController::class, 'destroy'])->name('products.destroy');
Route::get('notification', [NotificationController::class, 'index'])->name('notifications.index');
Route::get('notification/{type}', [NotificationController::class, 'notification'])->name("notification");