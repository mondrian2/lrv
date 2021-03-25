<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExercisesController;
use App\Http\Controllers\Api\CompleteItemsController;
use App\Http\Controllers\Api\AnswersController;

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

Route::get('/complete-items', [CompleteItemsController::class, 'index']);
Route::get('/complete-item/{id}', [CompleteItemsController::class, 'show']);
Route::get('/complete-item-by-exercise/{id}', [CompleteItemsController::class, 'showByExercise']);
Route::post('/complete-item', [CompleteItemsController::class, 'store']);
Route::put('/complete-item/{id}', [CompleteItemsController::class, 'update']);
Route::delete('/complete-item/{id}', [CompleteItemsController::class, 'destroy']);

Route::get('/answer-items', [AnswersController::class, 'index']);
Route::get('/answer-item/{id}', [AnswersController::class, 'show']);
Route::get('/answer-item-by-exercise/{id}', [AnswersController::class, 'showByExercise']);
Route::post('/answer-item', [AnswersController::class, 'store']);
Route::put('/answer-item/{id}', [AnswersController::class, 'update']);
Route::delete('/answer-item/{id}', [AnswersController::class, 'destroy']);


