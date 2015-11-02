<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

// Home
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
    ]);

// Authentication routes...
Route::get('login', [
    'uses'=>'Auth\AuthController@getLogin',
    'as' => 'login'
    ]);
Route::post('login', 'Auth\AuthController@postLogin');


Route::get('logout', [
    'uses'=>'Auth\AuthController@getLogout',
    'as' => 'logout'
    ]);

// Registration routes...
Route::get('register', [
    'uses' =>'Auth\AuthController@getRegister',
    'as' => 'register'
    ]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', [    
    'uses' => 'Auth\PasswordController@getEmail',
    'as' => 'password/email']);
Route::post('password/email', 'Auth\PasswordController@postEmail');


// Password reset routes...
Route::get('password/reset/{token}', [
    'uses' => 'Auth\PasswordController@getReset',
    'as' => 'password/reset/{token}'
    ]);
Route::post('password/reset', 'Auth\PasswordController@postReset');
