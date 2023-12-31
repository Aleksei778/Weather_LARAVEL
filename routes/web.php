<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\WeatherController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'welcome']);
Route::get('/form', [MainController::class, 'form']);
Route::get('/weather', [MainController::class, 'weather']);
Route::post('/form/submit', [WeatherController::class, 'submit']);
