<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestaurantController;
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

//Route::post('/test', [RestaurantController::class,'getRestaurantFilter']);

Route::get('/caption-banner', [HomeController::class,'getCaptionBanner']);
Route::get('/config', [HomeController::class,'getConfig']);
Route::get('/current-province', [HomeController::class,'getProvince']);
Route::post('/current-province', [HomeController::class,'setProvince']);


Route::get('/deal-today', [RestaurantController::class,'getDealToday']);
Route::get('/filter-option', [RestaurantController::class,'getFilterOption']);
Route::post('/restaurant-filter', [RestaurantController::class,'getRestaurantFilter']);
Route::get('/restaurant-home', [RestaurantController::class,'getAllRestaurantHome']);
Route::post('/restaurant-home', [RestaurantController::class,'getAllRestaurantHome']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
