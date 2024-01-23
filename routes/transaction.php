<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CashierController;

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

Route::prefix('transaction')->group(function(){
    Route::get('/test', function(){});

    //cashier
    Route::resource('cashier', CashierController::class);

    //Cart
    Route::prefix('cart')->group(function(){
        Route::post('/add-product', [CartController::class, 'addProductToCart'])->name('cart.add-product');
    });
    Route::resource('cart', CartController::class);

    //Order
    Route::resource('order', OrderController::class);
});


