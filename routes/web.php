<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Redeemer\RedemeerProductController as RedeemerRedeemProductController;
use App\Http\Controllers\GarbageController;
use App\Http\Controllers\GarbageTransactionController;
use App\Http\Controllers\RedeemProductController;
use App\Http\Controllers\RedeemTransactionController;


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
    return view('user.visitor_homepage');
    // return view('index');
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




Route::get('/garbageList', [GarbageController::class, 'index'])->name('garbageList.index');
Route::post('/garbageList', [GarbageController::class, 'store'])->name('garbageList.store');
Route::get('/garbageList/create', [GarbageController::class, 'create'])->name('garbageList.create');
Route::get('/garbageList/{garbage}', [GarbageController::class, 'show'])->name('garbageList.show');
Route::patch('/garbageList/{garbage}', [GarbageController::class, 'update'])->name('garbageList.update');
Route::delete('/garbageList/{garbage}', [GarbageController::class, 'destroy'])->name('garbageList.destroy');
Route::post('/garbageList/{garbage}/edit', [GarbageController::class, 'store'])->name('garbageList.edit');

Route::get('/redeemProducts', [RedeemProductController::class, 'index'])->name('redeemProduct.index'); // CHECKED
Route::get('/redeemProducts/{redeemProduct}', [RedeemProductController::class, 'show'])->name('redeemProduct.show'); //CHECKED
Route::get('/redeemProducts/create', [RedeemProductController::class, 'create'])->name('redeemProduct.create');
Route::post('/redeemProducts', [RedeemProductController::class, 'store'])->name('redeemProduct.store');
Route::post('/redeemProducts/{redeemProduct}/edit', [RedeemProductController::class, 'edit'])->name('redeemProduct.edit');
Route::patch('/redeemProducts/{redeemProduct}', [RedeemProductController::class, 'update'])->name('redeemProduct.update');
Route::delete('/redeemProducts/{redeemProduct}', [RedeemProductController::class, 'destroy'])->name('redeemProduct.destroy');

Route::get('/redeemTransactions', [RedeemTransactionController::class, 'index'])->name('redeemTransaction.index');
Route::get('/garbageTransactions', [GarbageTransactionController::class, 'index'])->name('garbageTransactions.index'); // ADMIN DASHBOARD
Route::get('/garbageTransactions/create', [GarbageTransactionController::class, 'create'])->name('garbageTransactions.create');
Route::post('/garbageTransactions/{garbageTransaction}', [GarbageTransactionController::class, 'store'])->name('garbageTransactions.store');

Route::get('/garbageList', [GarbageController::class, 'index'])->name('garbageList.index');
Route::get('/garbageList/create', [GarbageController::class, 'create'])->name('garbageList.create');
Route::get('/garbageList/{garbage}', [GarbageController::class, 'show'])->name('garbageList.show');
Route::post('/garbageList', [GarbageController::class, 'store'])->name('garbageList.store');
Route::post('/garbageList/{garbage}/edit', [GarbageController::class, 'store'])->name('garbageList.edit');
Route::patch('/garbageList/{garbage}', [GarbageController::class, 'update'])->name('garbageList.update');
Route::delete('/garbageList/{garbage}', [GarbageController::class, 'destroy'])->name('garbageList.destroy');


Route::get('/visitorHomepage', [RedeemTransactionController::class, 'index'])->name('visitor.homepage');
Route::get('/katalogProduk', [RedeemTransactionController::class, 'show'])->name('visitor.katalogProduk');

// Redeemer ROLE ======================================================================================================
Route::group([
    'middleware' => 'redeemer',
    'prefix' => 'redeemer',
    'as' => 'redeemer.'
], function () {
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



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
