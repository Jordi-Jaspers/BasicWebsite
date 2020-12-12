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

Route::get('/home' , 'HomePageController@home');
Route::get('/home/resume', 'HomePageController@resume');
Route::get('/home/resume/download', 'HomePageController@getPDF');
Route::post('/home/submit', 'HomePageController@submit');
Route::get('/home/messages', 'HomePageController@getMessages');
Route::name('delete_message') -> delete('home/message/delete/{id}', 'HomePageController@delete');
Route::name('deleteAll_messages') -> delete('home/message/deleteall/', 'HomePageController@deleteAll');

Route::get('/blog/create', 'BlogController@createPost');
Route::get('/blog', 'BlogController@getBlog');
Route::post('/blog/submit', 'BlogController@submit');

Route::name('edit_blog') -> get('/blog/edit/{id}', 'BlogController@edit');
Route::name('update_blog') -> put('/blog/update/{id}', 'BlogController@update');
Route::name('delete_blog') -> delete('/blog/delete/{id}', 'BlogController@delete');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/logout', 'Auth\LoginController@logout');



Auth::routes();
