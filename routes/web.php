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

Route::get('about','postsController@about');

Route::get('bloq','postsController@blog');

Route::get('/','postsController@blog');

Route::get('bloq/laravel','postsController@welcome');

Route::get('bloq/show','postsController@index');

Route::post('bloq/show/','postsController@store');

Route::get('bloq/show/create','postsController@create');

Route::get('bloq/show/{id}','postsController@delete');

Route::get('bloq/{id}','postsController@post');

Route::get('bloq/insert/{id}','postsController@insert');

Route::post('bloq/insert/{id}','postsController@update');



