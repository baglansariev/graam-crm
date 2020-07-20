<?php

use Illuminate\Http\Request;

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


Route::prefix('client')->group(function () {
    Route::get('/create/{id}', 'Api\ClientController@create');
});
Route::prefix('manager')->group(function () {
    Route::get('/get/{id}', 'Api\ManagerController@get');
});
Route::prefix('deal')->group(function () {
    Route::get('/client/{id}', 'Api\DealController@getByClient');
});
Route::prefix('offer')->group(function () {
    Route::get('/product/{name}/{type}/{weight}', 'Api\OfferController@getOffers');
});
