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

Route::get('/', function () {
    return view('welcome');
});

Route::get('attendance','attendanceController@show');

Route::post('admin/attendance_database','addatsheetController@index');

 

    
   




