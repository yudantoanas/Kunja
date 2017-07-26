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
    return redirect('list-modul');
});

// Route::get('/test-key', function () {
// 	$text = file_get_contents('storage/keys/'. str_replace(' ', '', "tes key") . '.txt');

// 	$correct = "aaaaaaaaaabbbbbbbbbb";

// 	$nilai = 0;
// 	for ($i=0; $i < strlen($text); $i++ ) { 
// 		if ($text[$i] == $correct[$i]) {
// 			$nilai++;
// 		}
// 	}

//     return view('test', compact('nilai'));
// });

Route::get('list-modul/{id}', 'ModulController@index');
Route::get('list-praktikum', 'PraktikumController@index');

Route::get('add-modul/{id}', 'ModulController@addModul');
Route::get('add-praktikum', 'PraktikumController@addPraktikum');

Route::get('modul/{id}', 'ModulController@showModul');
Route::get('modul/{id}/test', 'ModulController@showTest');

Route::post('store-modul', 'ModulController@store')->name('modul');
Route::post('store-praktikum', 'PraktikumController@store');
Route::post('eval-test/{noModul}', 'ModulController@evalTest');