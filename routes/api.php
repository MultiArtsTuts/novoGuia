<?php

use Illuminate\Http\Request;

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

Route::prefix('v1')->group(function(){
    // Clients
    Route::get('clients', 'ClientController@index');
    Route::get('clients/{client}', 'ClientController@show');
    Route::get('clients/showapi/{client}', 'ClientController@showApi');

    // Categories
	Route::get('category', 'CategoryController@index');
	Route::get('category/{category}', 'CategoryController@show');
	Route::get('categorias', 'CategoryController@apiList');
});
