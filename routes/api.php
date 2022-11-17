<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('categories', CategoryController::class);
Route::group([
    'controller' => CategoryController::class,
    'prefix' => 'categories',
], static function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{category}', 'show');
    Route::put('/{category}', 'update');
    Route::delete('/{category}', 'destroy');
});

//Route::apiResource('products', ProductController::class);
Route::group([
    'controller' => ProductController::class,
    'prefix' => 'products',
], static function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{product}', 'show');
    Route::put('/{product}', 'update');
    Route::delete('/{product}', 'destroy');
});
