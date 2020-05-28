<?php

use Illuminate\Http\Request;
use App\Cart;
use App\User;
use App\Product;

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

/**
 * ===============
 * API AUTH
 * ===============
 */
Route::group([
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login'); //No auth needed
    Route::post('signup', 'AuthController@signup'); //No auth needed
    Route::post('logout', 'AuthController@logout'); 
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

/**
 * ====================
 *  DEEPCART APP
 * ====================
 */

Route::group([
    'prefix' => 'product'
], function ($router) {
    Route::get('search', 'ProductController@search'); //No auth needed
    Route::get('{id}', 'ProductController@show'); //No auth needed
    Route::get('offers/all', 'ProductController@getOffers'); //No auth needed
});

Route::group([
    'prefix' => 'categories'
], function ($router) {
    Route::get('/', 'CategoryController@index'); //No auth needed
    Route::get('{category_id}', 'CategoryController@show'); //No auth needed
});

Route::group([
    'prefix' => 'cart'
], function ($router) {
    Route::get('products', 'CartController@productsInCart');
    Route::get('items/total', 'CartController@getTotalNumberItemsCart');
    Route::post('add/{product_id}', 'CartController@addProductToCart');
    Route::delete('remove/{product_id}', 'CartController@removeProductInCart');
    Route::put('quantity/{product_id}', 'CartController@setQuantityPurchase');
});

/**
 * ====================
 *  WEATHERAPP APP
 * ====================
 */

Route::group([
    'prefix' => 'weatherapp'
], function ($router) {

    Route::group([
        'prefix' => 'cities'
    ], function ($router) {
        Route::get('/', 'WeatherAppControllers\CityController@getCity'); 
        Route::get('all', 'WeatherAppControllers\CityController@getCitiesFromUser'); 
        Route::post('add', 'WeatherAppControllers\CityController@addCityInUserList');
        Route::delete('remove/{city_id}', 'WeatherAppControllers\CityController@removeCityInUserList'); 
    });

});

