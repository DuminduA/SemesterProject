<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Http\Requests;

class OrderController extends Controller
{

    public function placeOrder(){
        $TotalPrice=0;
        $TotalItems=0;
        $CartItems= Cart::all();

        for($i = 0; $i<sizeof($CartItems)  ;$i++){
            $TotalPrice += $CartItems[$i]->price*$CartItems[$i]->qunatity;
            $TotalItems += 1;
        }

        return view('Pages_my.PlaceOrder',['totalprice'=> $TotalPrice,'totalitems'=>$TotalItems,'CartItems'=>$CartItems]);
    }

}
