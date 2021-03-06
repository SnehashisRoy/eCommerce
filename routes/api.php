<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SkuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('admin')->middleware(['auth:api' /*, 'role:admin'*/])->group(function () {

    Route::get('/products', [ProductController::class, 'index'])->name('create-product');

    Route::post('/product', [ProductController::class, 'store'])->name('create-product');

    Route::post('/sku', [SkuController::class, 'store'])->name('create-sku');

    
});

