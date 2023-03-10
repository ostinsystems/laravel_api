<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\HumidController;

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

Route::get('/', [WeatherController::class, 'index']);
Route::get('home', ['uses'=>'App\Http\Controllers\WeatherController@index', 'as'=>'home.index']);
Route::get('/search', [WeatherController::class, 'search'])->name('search');
Route::get('history', ['uses'=>'App\Http\Controllers\HumidController@index', 'as'=>'history.index']);