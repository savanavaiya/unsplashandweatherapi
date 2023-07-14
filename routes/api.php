<?php

use App\Http\Controllers\UnsplashController;
use App\Http\Controllers\WeatherController;
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

Route::get('/unsplash/photos', [UnsplashController::class,'photos']);

Route::get('/unsplash/collections', [UnsplashController::class,'collections']);

Route::get('/unsplash/collections/photos', [UnsplashController::class,'collectionsphotos']);

Route::get('/weather/locations/cities/geoposition/search', [WeatherController::class,'getkey']);

Route::get('/weather/currentconditions', [WeatherController::class,'curcondition']);

Route::get('/weather/forecasts/hourly/24hour', [WeatherController::class,'houredata']);

Route::get('/weather/forecasts/daily/15days', [WeatherController::class,'daysdata']);

Route::get('/weather/location/city/search', [WeatherController::class,'serchloca']);

Route::get('/weather/aggcommon/globalAirQuality/aqi', [WeatherController::class,'aqi']);