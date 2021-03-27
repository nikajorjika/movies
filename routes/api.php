<?php

use App\Http\Controllers\Api\TitleController;
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

Route::get('/titles', [TitleController::class, 'index'])->name('api.titles.index');
Route::get('/titles/{title}', [TitleController::class, 'show'])->name('api.titles.show');