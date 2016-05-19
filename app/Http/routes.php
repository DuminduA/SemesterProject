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
use App\Attendance;
use App\attsheet;

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

    Route::get('/signup', function () {                   //open signup form
        return view('signup');
    });


    Route::post('/signup',[                               //signup form filled Customer Signed Up
        'uses'=>'CustomerController@postSignUp',
        'as'=> 'signup'
    ]);

    Route::get('/', function () {                          //get the Sign in Form
        return view('signinform');
    })->name('home');
    
    Route::post('/signin',[                                //Sign In Request From Customer
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

    Route::put('getTotalPrice', [
        'as' => 'getTotalPrice',
        'uses' => 'OrderController@getTotalPrice'
    ]);

    Route::get('proceedOrder',[
        'uses' => 'OrderController@PlaceAnOrder',
        'as' => 'proceedOrder',

    ]);

    Route::get('/placeanorder',[
        'uses' => 'OrderController@getPlaceOrderPage',
        'as' => 'placeanorder',

    ]);

    Route::get('/UpdateOrder', [
        'as' => 'UpdateOrder',
        'uses' => 'OrderController@UpdateAnOrder'
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


    Route::get('/PlaceOrder', [
        'as' => 'PlaceOrder',
        'uses' => 'CartController@getPlaceOrder']
    );

    /*/////////////////////////////////////////////////////////////////////////////////////////////////*/
    //Update The Order Button
    Route::get('/Updatebutton/{btn_id}', [
            'as' => 'Updatebutton',
            'uses' => 'OrderController@editOrder']
    );

    //Cancel the order button
    Route::get('/Cancelbutton/{btn_id}', [
            'as' => 'Cancelbutton',
            'uses' => 'OrderController@getcancellationConfirm']
    );

    //ThankU Page buttons///////////////////////////////////////////////////////
    Route::get('back', [
            'as' => 'back',
            'uses' => 'OrderController@getSearchItem']
    );

    Route::get('OK', [
            'as' => 'OK',
            'uses' => 'OrderController@CancelAnOrder']
    );
    /////////////////////////////////////////////////////////////////////////////

        /// confirm the password to cancel the order
    Route::post('confirmpassword', [
            'as' => 'confirmpassword',
            'uses' => 'OrderController@CancelAnOrder']
    );

//////////////////////to Update Order change quantity

    Route::post('ChangeQuantity', [
            'as' => 'ChangeQuantity',
            'uses' => 'OrderController@UpdateAnOrder']
    );

    Route::post('removeToUpdateorder', [
            'as' => 'removeToUpdateorder',
            'uses' => 'OrderController@removeOrderItem']
    );



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

Route::get('aboutUs',function(){
    return view ('aboutUs');

});



