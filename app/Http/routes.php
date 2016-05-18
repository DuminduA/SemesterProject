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


    Route::post('/search',[                              //Search Results
        'uses' => 'ItemController@search',
        'as' => 'search'
    ]);
    
    Route::get('/searchItem',[                          //Search Page--Also call Search function

        'uses' => 'ItemController@getsearchItem',
        'as' => 'searchItem',
    ]);

    Route::post('/addToCart/{item}',[
        'uses' => 'CartController@addToCart',
        'as' => 'addToCart',
        'middleware'=>'auth'
    ]);
    
    Route::get('/deletefromCart/{btn_id}',[             //delete an item from the cart
        'uses' => 'CartController@removeFromCart',
        'as' => 'deletefromCart'
    ]);
    Route::get('/placeanorder',[                        //place an order
        'uses' => 'OrderController@PlaceAnOrder',
        'as' => 'PlaceAnOrder'
    ]);

    Route::get('/signup', function () {                     //open signup form
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

    Route::get('/', function () {                 //get the Sign in Form
        return view('signinform');

    })->name('home');
    Route::post('/signin',[                                 //Sign In Request From Customer
        'uses'=>'CustomerController@postSignin',
        'as'=> 'signin'
    ]);
    Route::get('/dashbord',[                                //Go To The DashBord
        'uses'=>"CustomerController@getDashbord",
        'as'=> "dashbord"
    ]);

    Route::get('/signout',[
        'uses'=>'CustomerController@signOut',
        'as'=> 'signout'
    ]);

    Route::get('password/reset/{token}?',"Auth\PasswordController@showResetForm");                      //Reset Passwords
    Route::post('password/email','Auth\PasswordController@sendResetLinkEmail');
    Route::post('password/reset','Auth\PasswordController@Reset');

    Route::put('getTotalPrice', [
        'as' => 'getTotalPrice',
        'uses' => 'OrderController@getTotalPrice'
    ]);

    Route::get('/placeOrder',[
        'uses'=>"OrderController@placeOrder",
        'as'=> 'PlaceOrder'
    ]);

    Route::post('/placeRequest',[
        'uses'=>'CustomerRequestController@placeRequest',
        'as'=>'placeRequest',
        'middleware' => 'auth'
    ]);
    
    Route::get('/request',[
       'uses'=>'CustomerRequestController@request',
        'as' => 'request',
        'middleware' => 'auth'
    ]);

    Route::get('/profile',[
       'uses'=>'MyProfileController@getProfile',
        'as'=>'profile'
    ]);
    
    Route::post('/nameEdit',[
        'uses'=>'MyProfileController@nameEdit',
        'as'=>'nameEdit'
    ]);

    Route::post('/mailEdit',[
        'uses'=>'MyProfileController@mailEdit',
        'as'=>'mailEdit'
    ]);

    Route::post('/phoneEdit',[
        'uses'=>'MyProfileController@phoneEdit',
        'as'=>'phoneEdit'
    ]);

    Route::post('/adressEdit',[
        'uses'=>'MyProfileController@adressEdit',
        'as'=>'adressEdit'
    ]);
           
});


