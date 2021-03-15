<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExerciciosController;
use App\Http\Controllers\Api\ExerciseAlternativeController;
use App\Http\Controllers\Api\ExerciseCompleteController;
use App\Http\Controllers\Api\ItemsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/exercises', [ExerciseAlternativeController::class, 'index']);
Route::get('/exercise/{id}', [ExerciseAlternativeController::class, 'show']);
Route::post('/exercise', [ExerciseAlternativeController::class, 'store']);
Route::put('/exercise/{id}', [ExerciseAlternativeController::class, 'update']);
Route::delete('/exercise/{id}', [ExerciseAlternativeController::class, 'destroy']);


