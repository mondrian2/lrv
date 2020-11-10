<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('livros', 'Api\LivroController', ['except' => ['create', 'edit']]); 
Route::resource('pacotes', 'Api\PacoteController', ['except' => ['create', 'edit']]); 
Route::resource('questoes', 'Api\QuestaoController', ['except' => ['create', 'edit']]); 
Route::resource('items', 'Api\ItemsController', ['except' => ['create', 'edit']]); 
Route::resource('options', 'Api\OptionsController', ['except' => ['create', 'edit']]); 

