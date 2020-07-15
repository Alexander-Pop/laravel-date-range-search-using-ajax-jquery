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

Route::get(
	'/daterange', 
	'DateRangeController@index'
);

Route::post(
	'/daterange/fetch_data', 
	'DateRangeController@fetch_data'
)->name('daterange.fetch_data');
