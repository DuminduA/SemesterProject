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

Route::group(['middleware' => ['web']],function(){
    Route::get('/', function () {
        return view('newItem');
    });

    Route::post('/addNewItem',[
        'uses' => 'ItemController@addNewItem',
        'as' => 'addNewItem'
    ]);

    Route::get('/test',[
        'uses' => 'ItemController@getTest',
        'as' => 'test'
    ]);

    Route::get('/newItem',[
        'uses' => 'ItemController@getnewItem',
        'as' => 'newItem'
    ]);

});