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

Route::get('/', 'Content\MainController@mainPage');
Route::get('/token', 'Content\MainController@contentToken');

Route::get('/rest', 'Content\MainController@rest');

Route::get('/api_client', 'Content\MainController@showInfoApiClient');
Route::get('/client', 'Content\MainController@contentClient');


