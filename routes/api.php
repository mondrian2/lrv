<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExerciciosController;
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

Route::resource('items', 'Api\ItemsController');

Route::get('/exercises-alternative', [ExercisesAlternativeController::class, 'index']);
Route::get('/exercise-alternative/{id}', [ExercisesAlternativeController::class, 'show']);
Route::post('/exercise-alternative', [ExercisesAlternativeController::class, 'store']);
Route::put('/exercise-alternative/{id}', [ExercisesAlternativeController::class, 'update']);
Route::delete('/exercise-alternative/{id}', [ExercisesAlternativeController::class, 'destroy']);

Route::get('/exercises-complete', [ExercisesCompleteController::class, 'index']);
Route::get('/exercise-complete/{id}', [ExercisesCompleteController::class, 'show']);
Route::post('/exercise-complete', [ExercisesCompleteController::class, 'store']);
Route::put('/exercise-complete/{id}', [ExercisesCompleteController::class, 'update']);
Route::delete('/exercise-complete/{id}', [ExercisesCompleteController::class, 'destroy']);

Route::get('/exercicios', [ExerciciosController::class, 'index']);
Route::get('/exercicio/{id}', [ExerciciosController::class, 'show']);
Route::post('/exercicio', [ExerciciosController::class, 'store']);
Route::put('/exercicio/{id}', [ExerciciosController::class, 'update']);
Route::delete('/exercicio/{id}', [ExerciciosController::class, 'destroy']);

Route::get('/itens', [ItemsController::class, 'index']);
Route::get('/item/{id}', [ItemsController::class, 'show']);
Route::post('/item', [ItemsController::class, 'store']);
Route::put('/item/{id}', [ItemsController::class, 'update']);
Route::delete('/item/{id}', [ItemsController::class, 'destroy']);



