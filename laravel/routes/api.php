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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/openingstijden_binnentuin','BinnentuinController@index'); // tijdelijke openingstijden binnentuin

Route::get('/openingstijden_theroof','TheRoofController@index'); // tijdelijke openingstijden the roof

Route::post('login', [AccessTokenController::class, 'issuetoken'])
    ->middleware(['api-login', 'throttle']);

Route::get('test', 'TestController@index');