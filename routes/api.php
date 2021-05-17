<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

//Protected Routes

Route::group(['middleware' => ['auth:sanctum']], function () {
	Route::post('/products', [ProductController::class, 'ApiStore']);
	Route::put('/products/{id}', [ProductController::class, 'ApiUpdate']);
	Route::delete('/products/{id}', [ProductController::class, 'ApiDestroy']);
	Route::post('/logout', [AuthController::class, 'logout']);
});

//Public Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/products/search/{keyword}', [ProductController::class, 'ApiSearch']);
Route::get('/products', [ProductController::class, 'ApiIndex']);
Route::get('/products/{id}', [ProductController::class, 'ApiShow']);
