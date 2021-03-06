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
    return view('pages/home');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('{id}/add-modul', 'ModulController@addModul');
		Route::get('add-praktikum', 'PraktikumController@addPraktikum');
		Route::get('edit-praktikum/{id}', 'PraktikumController@editPraktikum');
		Route::get('edit-modul/{id}', 'ModulController@editModul')->name('edit');

		Route::post('store-modul', 'ModulController@store')->name('store');
		Route::post('update-modul', 'ModulController@update')->name('update');
		Route::post('store-praktikum', 'PraktikumController@store');
		Route::post('update-praktikum', 'PraktikumController@update');
});

Route::get('list-praktikum', 'PraktikumController@index');
Route::get('{id}/list-modul', 'ModulController@index');

Route::get('modul/{id}', 'ModulController@showModul')->name('show_modul');
Route::get('modul/{id}/test', 'ModulController@showTest')->name("modul_test");

Route::post('eval-test/{noModul}', 'ModulController@evalTest');
