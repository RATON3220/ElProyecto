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

use App\Http\Controllers\AdmonController;

Route::get('/','AdmonController@index');


Route::get('/profile/{id}', 'ProfileController@index');

Route::get('/user', 'UsersController@index');
Route::resource('user', 'UsersController');
Route::resource('/', 'AdmonController');
