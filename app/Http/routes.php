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
    return view('welcome');
});

Route::put('getTotalPrice', [
    'as' => 'getTotalPrice',
    'uses' => 'OrderController@getTotalPrice'
]);

Route::get('index', [
    'as' => 'index',
    'uses' => 'pageController@getIndex'
]);

Route::get('PlaceOrder', [
    'as' => 'PlaceOrder',
    'uses' => 'CartController@getPlaceOrder'
]);



