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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
	Route::get('', 'PeminjamanController@index');
    Route::get('edit/{id}', 'PeminjamanController@show_detail')->name('show_detail');
    Route::post('edit/{id}', 'PeminjamanController@edit')->name('edit');
});