<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IndexController;

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

Route::get('/calculate-hamming-distance', [IndexController::class, 'calculateHammingDistance'])->name('calculateHammingDistance');
Route::post('/calculate-levenshtein-distance', [IndexController::class, 'calculateLevenshteinDistance'])->name('calculateLevenshteinDistance');
