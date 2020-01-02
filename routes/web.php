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

Route::get('/', 'HomeController@index');

Route::get('/p1','FrontEndController@p1');

Route::get('/p2','FrontEndController@p2');

Route::get('/p3','FrontEndController@p3');

Route::get('/p4','FrontEndController@p4');

Route::get('/p5','FrontEndController@p5');

Route::get('/p6','FrontEndController@p6');

