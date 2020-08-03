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
Route::get('profile', 'ProfileController@index');
Route::get('new', 'ProfileController@new');
Route::post('tambah', 'ProfileController@tambah');
Route::get('/{id}/edit', 'ProfileController@edit');
Route::post('/{id}/update', 'ProfileController@update');
Route::get('/{id}/hapus', 'ProfileController@hapus');
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/cetak_pdf', 'ProfileController@cetak_pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
