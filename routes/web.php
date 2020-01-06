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
Route::get('/messages', 'MessagesController@getMessages');
Route::post('/home/submit', 'MessagesController@submit');

Route::get('/blog/create', 'BlogController@createPost');
Route::get('/blog', 'BlogController@getBlog');
Route::post('/blog/submit', 'BlogController@submit');

Route::name('edit_blog') -> get('/blog/edit/{id}', 'BlogController@edit');
Route::name('update_blog') -> put('/blog/update/{id}', 'BlogController@update');
Route::name('delete_blog') -> delete('/blog/delete/{id}', 'BlogController@delete');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();
