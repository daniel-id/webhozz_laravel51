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
	if (Auth::user()) {
		if (Auth::user()->access_rights=='admin') {
			return view('home');
		} else {
			return view('home');
		}
	} else {
		return view('login');
	}
});

Route::get('login', function () {
	if (Auth::user()) {
		if (Auth::user()->access_rights=='admin') {
			return view('home');
		} else {
			return view('user');
		}
	} else {
		return view('login');
	}
});

Route::get('register', function() {
	if (Auth::user()) {
		if (Auth::user()->access_rights=='admin') {
			return view('home');
		} else {
			return view('user');
		}
	} else {
		return view('register');
	}
});

Route::get('user', function() {
	if (Auth::user()) {
		if (Auth::user()->access_rights=='admin') {
			return view('home');
		} else {
			return view('user');
		}
	} else {
		return view('login');
	}
});

Route::get('logout', 'Crudcontroller@logout');

Route::post('login', 'Crudcontroller@login');

Route::post('adduser', 'Crudcontroller@tambahuser');

Route::post('add', 'Crudcontroller@tambahdata');

Route::get('read', 'Crudcontroller@bacadata');

Route::get('delete/{id}', 'Crudcontroller@hapusdata');

Route::get('edit/{id}', 'Crudcontroller@ubahdata');

Route::post('editprocess', 'Crudcontroller@proseseditdata');