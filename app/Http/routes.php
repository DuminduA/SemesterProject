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

Route::group(['middleware'=>['web']],function(){

    
    Route::post('/search',[
        'uses' => 'ItemController@search',
        'as' => 'search'
    ]);
    
    Route::get('/searchItem',[
        'uses' => 'ItemController@getsearchItem',
        'as' => 'searchItem',
        'middleware'=>'auth'
    ]);

    Route::post('/addToCart/{item}',[
        'uses' => 'CartController@addToCart',
        'as' => 'addToCart'
    ]);

    //load Signup Form
    Route::get('/signup', function () {
        return view('signup');
    });

    //delete an item from the cart
    Route::get('/deletefromCart/{btn_id}',[
        'uses' => 'CartController@removeFromCart',
        'as' => 'deletefromCart'
    ]);

    //signup form filled
    Route::post('/signup',[
        'uses'=>'CustomerController@postSignUp',
        'as'=> 'signup'
      ]);

    Route::get('/signinform', function () {
        return view('signinform');
    })->name('home');
    
    Route::post('/signin',[
        'uses'=>'CustomerController@postSignin',
        'as'=> 'signin'
    ]);
    
    Route::get('/dashbord',[
        'uses'=>"CustomerController@getDashbord",
        'as'=> "dashbord"
    ]);
    
    Route::get('/staffsignin', function () {
        return view('staffsignin');
    });
    
    Route::post('/staffsigninaction',[
        'uses'=>'StaffController@postSignIn',
        'as'=>'staffsigninaction'
    ]);

    Route::put('getTotalPrice', [
        'as' => 'getTotalPrice',
        'uses' => 'OrderController@getTotalPrice'
    ]);

    Route::get('/placeOrder',[
        'uses'=>"OrderController@placeOrder",
        'as'=> 'PlaceOrder'
    ]);


});


