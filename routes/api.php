<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::post('register', 'Auth\AuthControllers@register');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('register', 'Auth\AuthControllers@register');
    Route::post('login', 'Auth\AuthControllers@login');
    Route::get('refresh-token', 'Auth\AuthControllers@refresh');

});

Route::group([

    'middleware' => 'api',
    'prefix' => 'home'

], function ($router) {

    Route::get('list', 'HomeController@getListRenta');

});
