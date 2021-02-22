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



Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
Route::get('/verification', [App\Http\Controllers\HomePageController::class, 'verif']);
Route::get('/school/inscription', [App\Http\Controllers\HomePageController::class, 'ecoleInscription']);
Route::get('/school/connexion', [App\Http\Controllers\HomePageController::class, 'ecoleConnexion']);
Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about']);
Route::get('/dashboard', [App\Http\Controllers\HomePageController::class, 'dashboard']);
Route::post('/school/inscription', [App\Http\Controllers\HomePageController::class, 'ecoleInscriptionPost'])->name('registerSchool');
Route::post('/school/connexion', [App\Http\Controllers\HomePageController::class, 'ecoleConnexionPost'])->name('loginSchool');

Route::post('/logout', [App\Http\Controllers\HomePageController::class, 'logout']);
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);


