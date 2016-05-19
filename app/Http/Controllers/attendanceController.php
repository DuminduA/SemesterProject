<?php

namespace App\Http\Controllers;

use App\Attendance;

use Illuminate\Http\Request;

use App\Http\Requests;

class attendanceController extends Controller
{
    public function show(){

        $attendance= Attendance::all();

        return view('Admin.attendance',['items'=>$attendance]);
    }

}
