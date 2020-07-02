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
    return view('auth.login');
});

Auth::routes();

Route::get('/checkout/{data}', 'MollieController@preparePayment');

// Dashboard Auth group
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/pretest', ['as' => 'pretest.index', 'uses' => 'PretestController@index']);
    Route::patch('/home/update', ['as' => 'home.update', 'uses' => 'BinnentuinController@update']);
	Route::patch('/home/aanpassen', ['as' => 'home.aanpassen', 'uses' => 'ReserveertijdenController@update']);

	// Producten
	Route::resource('producten', 'ProductenController', ['names' => 'producten']);
	Route::resource('bestellingen', 'BestellingenController', ['names' => 'bestellingen']);
});

// Profile Auth group
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::post('/user/destroy', ['as' => 'user.destroy', 'uses' => 'UserController@destroy']);
});
Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});
