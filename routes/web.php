<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/login', 'UserController@login')->name('login');
Route::get('/register', 'UserController@register');
Route::get('/fail', 'UserController@fail')->name('fail');

Route::get('/pinpoint', 'PinpointController@index');
Route::get('/license', 'PinpointController@license');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login-user', 'AccountController@login');
Route::post('/register-user', 'AccountController@register');
