<?php

use App\Http\Controllers\Api\V1\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// DDOS Protection
Route::group(['middleware' => 'throttle:60,1', 'prefix' => 'v1', 'as' => 'api.v1.'], function () {
    // Weather
    Route::get('weather', [WeatherController::class, 'index'])->name('weather');
});
