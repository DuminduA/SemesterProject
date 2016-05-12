<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class pageController extends Controller
{

    public function getIndex(){

        return view('Pages_my.index');
    }


    public function getPlaceOrder(){
        return view('Pages_my.PlaceOrder');
    }

    public function CancelOrder(){

        return view('Pages_my.CancelOrder');

    }

    
    

}