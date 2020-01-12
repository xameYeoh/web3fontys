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

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('users', 'API\UsersController@index');
Route::get('users/{user}', 'API\UsersController@show');
Route::post('users', 'API\UsersController@store');
Route::put('users/{user}', 'API\UsersController@update');
Route::delete('users/{user}', 'API\UsersController@delete');






