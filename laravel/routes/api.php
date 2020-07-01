<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AccessTokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('pretest', ['as' => 'pretest.create', 'uses' => 'PretestController@store']);

// Restaurant
Route::get('/openingstijden_binnentuin','BinnentuinController@index'); // tijdelijke openingstijden binnentuin
Route::get('/openingstijden_theroof','TheRoofController@index'); // tijdelijke openingstijden the roof
Route::get('/reserveertijden','ReserveertijdenController@index'); // tijdelijke heelveelheid mensen

Route::get('/producten','ProductenController@indexProducten'); // Producten van de menu pagina
Route::get('/producten/{categorie}', 'ProductenController@getProCat'); // Bepaalde categorie van producten



// Auth
Route::post('/login', [AccessTokenController::class, 'issuetoken'])
    ->middleware(['api-login', 'throttle']);
Route::post('/register', 'Api\AuthController@register');
Route::post('/v2/login', 'Api\AuthController@login'); // Test

// Test functie
Route::get('test', 'TestController@index');
