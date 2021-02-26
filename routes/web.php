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
Route::post('/verification', [App\Http\Controllers\HomePageController::class, 'verification']);
Route::get('/school/inscription', [App\Http\Controllers\HomePageController::class, 'ecoleInscription']);
Route::get('/school/connexion', [App\Http\Controllers\HomePageController::class, 'ecoleConnexion']);
Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about']);
Route::get('/dashboard', [App\Http\Controllers\HomePageController::class, 'dashboard']);
Route::get('/student/register', [App\Http\Controllers\HomePageController::class, 'studentForm']);
Route::get('/classes/register', [App\Http\Controllers\HomePageController::class, 'classeForm']);
// Route::get('/student/{}', [App\Http\Controllers\HomePageController::class, 'studentForm']);
Route::post('/school/inscription', [App\Http\Controllers\HomePageController::class, 'ecoleInscriptionPost'])->name('registerSchool');
Route::post('/school/connexion', [App\Http\Controllers\HomePageController::class, 'ecoleConnexionPost'])->name('loginSchool');

Route::post('/logout', [App\Http\Controllers\HomePageController::class, 'logout']);
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomePageController::class, 'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('levels', App\Http\Controllers\LevelController::class);

Route::resource('classes', App\Http\Controllers\ClasseController::class);

Route::resource('matieres', App\Http\Controllers\MatiereController::class);

Route::resource('matiereLevels', App\Http\Controllers\MatiereLevelController::class);

Route::resource('students', App\Http\Controllers\StudentController::class);

Route::resource('notes', App\Http\Controllers\NoteController::class);

Route::resource('trimesters', App\Http\Controllers\TrimesterController::class);