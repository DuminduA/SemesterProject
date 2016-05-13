<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
        public function getPlaceOrder(){
             $CartItems= array();
             $nameOfproduct=array();
             $QuantityOfItems=array();
             $TotalPrice=100;
             $TotalItems=5000;

            /*sizeof($CartItems)
            for($i = 0; $i<2  ;$i++){
                $TotalPrice = 100;//$CartItems[$i]->price;
                $TotalItems =+ 1; 
                $nameOfproduct[$i]= $CartItems[$i]->name;
                $QuantityOfItems[$i]= $CartItems[$i]->quantity;
            }*/

             return view('Pages_my.PlaceOrder')
              /*  ->with(['totalprice'=> $TotalPrice])
                ->with(['totalitems'=>$TotalItems])
                ->with(['namesarray'=>$nameOfproduct])
                ->with(['quntityarray'=>$QuantityOfItems])*/;
        }
}
