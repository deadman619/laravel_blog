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

// composer update to set up vendor folder
Route::get('/', 'PostsController@index');
Route::get('/add-post', 'PostsController@create');
Route::post('/store', 'PostsController@store');
Route::get('/post/{post}', 'PostsController@showPost');
Route::get('/edit/{post}', 'PostsController@edit');
Route::post('/update/{post}', 'PostsController@update');
Route::get('/delete/{post}', 'PostsController@destroy');
