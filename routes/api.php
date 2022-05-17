<?php

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

Route::get('/countries/index', [App\Http\Controllers\Api\CountryController::class, 'index'])->name('countries.index');
Route::get('/countries/{city_id}/getCities', [App\Http\Controllers\Api\CountryController::class, 'getCities'])->name('countries.getCities');
