<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
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

// All Ajax Routes With Secure API;
Route::prefix('api/v1')->group(function () {
    Route::post('/register', [AuthController::class, 'registerSeller'])->name('auth.register');
    Route::get('/logout', [AuthController::class, 'logoutSeller'])->name('auth.logout');
    Route::post('verfiication', [AuthController::class, 'verifySeller'])->name('auth.verifySeller');
    
    Route::post('upload-product', [ProductsController::class, 'uploadProduct'])->name('auth.uploadProduct');
});

Route::prefix('admin')->group(function () {
    Route::get('/verification-form', [AuthController::class, 'verificationForm'])->name('auth.verificationForm');
    Route::get('/dashboard', [DashboardController::class, 'getDashboardPage'])->name('admin.dashboard');

    Route::prefix('products')->group(function () {
        Route::get('/all-products', [ProductsController::class, 'getAllProducts'])->name('admin.allProducts');
        Route::get('/add-new-product', [ProductsController::class, 'addNewProduct'])->name('admin.addNewProduct');
        Route::get('/draft-products', [ProductsController::class, 'draftProducts'])->name('admin.draftProducts');
    });

});
Route::get('/register', [AuthController::class, 'getRegisterPage'])->name('register');


// Sign Routes;