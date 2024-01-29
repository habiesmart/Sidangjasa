<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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

Route::prefix('master')->group(function(){
    Route::get('/tier/all', [TierController::class, 'all'])->name('tier.all');
    Route::resource('tier', TierController::class);
    Route::post('/customer/find', [CustomerController::class, 'find'])->name('customer.find');
    Route::resource('customer', CustomerController::class);
    Route::post('/product/search', [ProductController::class, 'search'])->name('product.search');
    Route::resource('product', ProductController::class);
    Route::get('/test', function(){
        return view('HalamanAdmin.dataCostumer');
    });
});


