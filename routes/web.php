<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'JackController@index');
Route::get('/channel/{id}', 'JackController@channel');
Route::get('/video/{id}', 'JackController@video');
Route::get('/edit', 'JackController@edit');
Route::post('/edit', 'JackController@update');