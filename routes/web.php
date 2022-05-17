<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/countries/index', [App\Http\Controllers\CountryController::class, 'index'])->name('countries.index');
Route::get('/cities/index', [App\Http\Controllers\CityController::class, 'index'])->name('cities.index');

Route::get('/countries/vue', [App\Http\Controllers\CountryController::class, 'vue'])->name('countries.vue');
