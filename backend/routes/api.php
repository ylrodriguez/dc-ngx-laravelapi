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

// ----------- api/auth/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login'); //No auth needed
    Route::post('signup', 'AuthController@signup'); //No auth needed
    Route::post('logout', 'AuthController@logout'); 
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'product'
], function ($router) {
    Route::get('{id}', 'ProductController@show'); //No auth needed
    Route::get('offers', 'ProductController@getOffers'); //No auth needed
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'categories'
], function ($router) {
    Route::get('/', 'CategoryController@index'); //No auth needed
});

