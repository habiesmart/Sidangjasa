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
    Route::get('/cashier/all', [CashierController::class, 'all'])->name('cashier.all');
    Route::resource('cashier', CashierController::class);
    Route::resource('cart', CartController::class);
    Route::resource('order', OrderController::class);
});


