<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [DashboardController::class, 'indexe'])->name('home');

Route::middleware('guest')->group(function(){
    Route::prefix('register')->group(function(){
        Route::get('/', [AuthController::class, 'index'])->name('register');
        Route::post('/', [AuthController::class, 'register'])->name('register.post');
    });
    Route::prefix('login')->group(function(){
        Route::get('/', [AuthController::class, 'logindex'])->name('login');
        Route::post('/', [AuthController::class, 'login'])->name('login.post');
    });
});

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        
        Route::prefix('category')->group(function(){
            Route::get('/', [CategoryController::class, 'index'])->name('category');
            Route::get('/data', [CategoryController::class, 'data'])->name('category.data');
            Route::post('/', [CategoryController::class, 'store'])->name('category.add');
            Route::put('/{id}', [CategoryController::class, 'update'])->name('category.update');
            Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
        });

        Route::prefix('product')->group(function(){
            Route::get('/', [ProductController::class, 'index'])->name('product');
            Route::post('/', [ProductController::class, 'store'])->name('product.add');
            Route::put('/{id}', [ProductController::class, 'update'])->name('product.update');
            Route::delete('/{id}', [ProductController::class, 'destroy'])->name('product.delete');
        });

    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});