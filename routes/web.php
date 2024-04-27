<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Redeemer\RedemeerProductController as RedeemerRedeemProductController;

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

Route::get('/', function () {
    return view('index');
});

// return view('admin.admin_detail.redeemableProductDetail');

// TrashBank ROLE ======================================================================================================
Route::group([
    'middleware' => 'trashbank',
    'prefix' => 'trashbank',
    'as' => 'trashbank.'
], function () {
    // Route::get('/admin', [AdminOrderController::class, 'index'])->name('admin');
    // Route::put('/admin/update/{order}', [AdminOrderController::class, 'updateToday'])->name('admin.update');

    // Route::get('/order_history', [AdminOrderController::class, 'history'])->name('order_history');
    // Route::put('/order_history/update/{order}', [AdminOrderController::class, 'updateHistory'])->name('order_history.update');
});

// Redeemer ROLE ======================================================================================================
Route::group([
    'middleware' => 'redeemer',
    'prefix' => 'redeemer',
    'as' => 'redeemer.'
], function () {
    // Route::get('/admin', [AdminOrderController::class, 'index'])->name('admin');
    // Route::put('/admin/update/{order}', [AdminOrderController::class, 'updateToday'])->name('admin.update');

    // Route::get('/order_history', [AdminOrderController::class, 'history'])->name('order_history');
    // Route::put('/order_history/update/{order}', [AdminOrderController::class, 'updateHistory'])->name('order_history.update');
});

// Member ROLE ======================================================================================================
Route::group([
    'middleware' => 'member',
    'prefix' => 'member',
    'as' => 'member.'
], function () {
    // Route::get('/admin', [AdminOrderController::class, 'index'])->name('admin');
    // Route::put('/admin/update/{order}', [AdminOrderController::class, 'updateToday'])->name('admin.update');

    // Route::get('/order_history', [AdminOrderController::class, 'history'])->name('order_history');
    // Route::put('/order_history/update/{order}', [AdminOrderController::class, 'updateHistory'])->name('order_history.update');
});

Route::group([
    'middleware' => 'redeemer',
    'prefix' => 'redeemer',
    'as' => 'redeemer.'
], function () {
    Route::get('/redeemProducts', [RedeemerRedeemProductController::class, 'index'])->name('redeemProduct.index');
    Route::get('/redeemProducts/{redeemProduct}', [RedeemerRedeemProductController::class, 'show'])->name('redeemProduct.show');
    Route::post('/redeemProducts', [RedeemerRedeemProductController::class, 'store'])->name('redeemProduct.store');
    Route::patch('/redeemProducts/{redeemProduct}', [RedeemerRedeemProductController::class, 'update'])->name('redeemProduct.update');
    Route::destroy('/redeemProducts/{redeemProduct}', [RedeemerRedeemProductController::class, 'destroy'])->name('redeemProduct.destroy');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
