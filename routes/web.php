<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MovieController;
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

Route::mediaLibrary();

Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::get('/{slug}', [MovieController::class, 'index'])->name('movie.details');
