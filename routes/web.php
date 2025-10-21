<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::post('/generate-exercises', [MainController::class, 'generateExercises'])->name('generateExercises');

Route::get('/print-exercises', [MainController::class, 'printExercises'])->name('printExercises');
Route::get('/export-exercises', [MainController::class, 'exportExercises'])->name('exportExercises');
