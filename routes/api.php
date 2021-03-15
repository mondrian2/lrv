<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExercisesController;
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

Route::get('/exercises', [ExercisesController::class, 'index']);
Route::get('/exercise/{id}', [ExercisesController::class, 'show']);
Route::post('/exercise', [ExercisesController::class, 'store']);
Route::put('/exercise/{id}', [ExercisesController::class, 'update']);
Route::delete('/exercise/{id}', [ExercisesController::class, 'destroy']);

Route::get('/items', [ItemsController::class, 'index']);
Route::get('/item/{id}', [ItemsController::class, 'show']);
Route::post('/item', [ItemsController::class, 'store']);
Route::put('/item/{id}', [ItemsController::class, 'update']);
Route::delete('/item/{id}', [ItemsController::class, 'destroy']);


