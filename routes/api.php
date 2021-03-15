<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExercisesController;

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

Route::get('/exercises', [ExercisesController::class, 'index']);
Route::get('/exercise/{id}', [ExercisesController::class, 'show']);
Route::post('/exercise', [ExercisesController::class, 'store']);
Route::put('/exercise/{id}', [ExercisesController::class, 'update']);
Route::delete('/exercise/{id}', [ExercisesController::class, 'destroy']);


