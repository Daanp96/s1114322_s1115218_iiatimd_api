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


Route::group(['middleware' => 'jwt.auth'], function () {
  Route::get('/food', 'FoodController@index');
  Route::get('/ingredient', 'IngredientController@index');
  Route::get('/favorite', 'FavoriteController@index');

  Route::post('/addfavorite', 'FavoriteController@add');
  Route::post('/removefavorite', 'FavoriteController@remove');
});


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');;
Route::post('user', 'AuthController@getAuthUser');
