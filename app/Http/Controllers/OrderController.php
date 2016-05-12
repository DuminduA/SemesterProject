<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

use App\Http\Requests;

class OrderController extends Controller
{

    //For Cart Model
   

    public function getNumOfItems($CartItems){

        return sizeof($CartItems);

    }

    public function setCartItems(){
        return ;
    }

    ///////////////////////////////////////////////////////////////////////


}
