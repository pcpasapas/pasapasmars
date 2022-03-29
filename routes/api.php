<?php

use App\Http\Controllers\AlimentationsController;
use App\Http\Controllers\BoitiersController;

use App\Http\Controllers\ProcesseursController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/* |-------------------------------------------------------------------------- | API Routes |-------------------------------------------------------------------------- | | Here is where you can register API routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | is assigned the "api" middleware group. Enjoy building your API! | */
Route::get('alimentations', [AlimentationsController::class , 'show']);
Route::get('/alimentations/{id}', [AlimentationsController::class , 'showId']);
Route::get('alimentationsshowGTA', [AlimentationsController::class , 'showGTA']);
Route::get('boitiers', [BoitiersController::class , 'show']);
Route::get('boitiers/{id}', [BoitiersController::class , 'showId']);
Route::get('processeurs', [ProcesseursController::class , 'show']);
Route::get('processeurs/{id}', [ProcesseursController::class , 'showId']);
Route::get('cartemere', 'App\Http\Controllers\CarteMeresController@index');
Route::get('cartemere/{id}', 'App\Http\Controllers\CarteMeresController@showId');
Route::get('ssd', 'App\Http\Controllers\SsdController@index');
Route::get('ssd/{id}', 'App\Http\Controllers\SsdController@showId');
Route::get('cg', 'App\Http\Controllers\CgController@index');
Route::get('cg/{id}', 'App\Http\Controllers\CgController@showId');
Route::get('ram', 'App\Http\Controllers\RamController@index');
Route::get('ram/{id}', 'App\Http\Controllers\RamController@showId');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
