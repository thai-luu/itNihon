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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::get('allFashion', 'API\FashionController@index');
Route::post('filterFashion', 'API\FashionController@filter');
Route::get('showFashion/{id}', 'API\FashionController@show');
Route::group(['middleware' => 'auth:api'], function() {
Route::get('details', 'API\UserController@details');
Route::post('updateUser/{id}', 'API\UserController@update');
Route::post('logout', 'API\UserController@logout');
Route::get('recommended', 'API\UserController@recommended');
Route::get('showRecommended/{id}', 'API\FashionController@showRecommended');
Route::post('doOrder', 'API\OrderController@store');
Route::get('showOrder/{id}', 'API\OrderController@show');
Route::get('showAllOrder', 'API\OrderController@showAllOrder');
});