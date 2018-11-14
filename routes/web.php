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

Route::get('/','ControllerIndex@index');

Route::get('/register','ControllerIndex@index');

Route::get('/register/{id}','ControllerIndex@index');

Route::get('/dashboard/{id}','ControllerIndex@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
