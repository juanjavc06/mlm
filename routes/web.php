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
use App\User;
Route::get('/','LogInController@index')->name('index');
Route::post('/','LogInController@index')->name('login');

Route::get('/registro','RegisterController@registerFormWithoutId')->name('registro');
Route::get('/registro/{id}','RegisterController@registerFormWithId')->where('id', '[0-9]+')->name('registroid');
Route::post('/registro','RegisterController@create')->name('registrar');


Route::get('/forget-password','RegisterController@registerFormWithoutId')->name('forget-password');
Route::get('/email_exist','RegisterController@emailExist')->name('email-exist');


Route::get('/countries', 'Localization@index')->name('countries');
Route::get('/states', 'CountriesAndStatesController@getStates')->name('states');

Route::get('user/{id}', function ($id) {
});