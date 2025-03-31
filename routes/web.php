<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;



Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/products', [ProductController::class, 'index'])->name('product.index')->middleware('auth');

Route::get('/products/create', [ProductController::class, 'create'])->name('product.create')->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show')->middleware('auth');
Route::post('/products', [ProductController::class, 'store'])->name('product.store')->middleware('auth');

Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::post('/products/{product}', [ProductController::class, 'update'])->name('product.update')->middleware('auth');

Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('product.destroy')->middleware('auth');


Route::get('users/list', [UserController::class, 'index'])->name('users.list')->middleware('auth');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
