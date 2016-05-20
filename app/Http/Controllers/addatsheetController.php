<?php

namespace App\Http\Controllers;

use App\Attendance;

use Illuminate\Http\Request;

use App\Http\Requests;

class addatsheetController extends Controller
{
    public function index(){

        $attendance= Attendance::all();


        return ($attendance);
}

}
