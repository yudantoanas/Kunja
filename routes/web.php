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
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
	return redirect('list-praktikum');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('{id}/add-modul', 'ModulController@addModul');
	Route::get('add-praktikum', 'PraktikumController@addPraktikum');
	Route::get('edit-praktikum/{id}', 'PraktikumController@editPraktikum');

	Route::post('store-modul', 'ModulController@store')->name('store');
	Route::post('store-praktikum', 'PraktikumController@store');
	Route::post('update-praktikum', 'PraktikumController@update');
});

Route::get('list-praktikum', 'PraktikumController@index');
Route::get('{id}/list-modul', 'ModulController@index');

Route::get('modul/{id}', 'ModulController@showModul');
Route::get('modul/{id}/test', 'ModulController@showTest');
Route::get('modul/{id}/test-akhir', 'ModulController@showAkhir');

Route::post('eval-test/{noModul}', 'ModulController@evalTest');