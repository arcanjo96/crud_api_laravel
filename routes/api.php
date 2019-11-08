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

Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {
    Route::get('users', 'UserController@index');
    Route::get('user/{id}', 'UserController@show');
    Route::post('user', 'UserController@store');
    Route::put('user/{id}', 'UserController@update');
    Route::delete('user/{id}', 'UserController@destroy');
});

Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {
    Route::get('skills', 'SkillController@index');
    Route::get('skill/{id}', 'SkillController@show');
    Route::post('skill', 'SkillController@store');
    Route::put('skill/{id}', 'SkillController@update');
    Route::delete('skill/{id}', 'SkillController@destroy');
});

Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {
    Route::get('admins', 'AdminController@index');
    Route::get('admin/{id}', 'AdminController@show');
    Route::post('admin', 'AdminController@store');
    Route::put('admin/{id}', 'AdminController@update');
    Route::delete('admin/{id}', 'AdminController@destroy');
});
