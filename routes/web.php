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

Route::get('/', function () {
    return view('welcome');
});

Route::get('sql_1', 'MenuController@index1');
Route::get('sql_2', 'MenuController@index2');
Route::get('sql_3', 'MenuController@index3');
Route::get('sql_filter', 'MenuController@index2filter')->name('sql.filter');
