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

// Mollie
Route::get('/checkout', 'MollieController@preparePayment')->name('checkout.get');
Route::post('webhooks/mollie', 'MollieController@handle')->name('webhooks.mollie');
Route::post('/checkout/save', 'MollieController@savebestelling')->name('bestelling.save');

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
