<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('home');
});

Route::post('add', 'Crudcontroller@tambahdata');

Route::get('read', 'Crudcontroller@bacadata');

Route::get('delete/{id}', 'Crudcontroller@hapusdata');

Route::get('edit/{id}', 'Crudcontroller@ubahdata');

Route::post('editprocess', 'Crudcontroller@proseseditdata');

// Route::get('login', function() {
// 	return view('login');
// });