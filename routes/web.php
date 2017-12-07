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

Route::get('/login', 'UserController@login');
Route::get('/register', 'UserController@register');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login-user', 'UserController@login-user');
Route::post('/create-user', 'UserController@create-user');
