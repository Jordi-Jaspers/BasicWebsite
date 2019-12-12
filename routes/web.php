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

Route::get('/home' , 'MessagesController@home');
Route::post('/home/submit', 'MessagesController@submit');
Route::get('/messages', 'MessagesController@getMessages');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/logout', 'Auth\LoginController@logout');
