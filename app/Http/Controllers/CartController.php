<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
        public function getPlaceOrder(){
             $CartItems= array(1,2,3);
             $nameOfproduct=array();
            $QuantityOfItems=array();
             $TotalPrice=0;
             $TotalItems=0;


            for($i = 0; $i< sizeof($CartItems) ;$i++){
                $TotalPrice = 100;//$CartItems[$i]->price;
                $TotalItems =+ 1;
                $nameOfproduct[$i]= $CartItems[$i]->name;
                $QuantityOfItems[$i]= $CartItems[$i]->quantity;
            }

            return view('Pages_my.PlaceOrder')
                ->with(['totalprice'=> $TotalPrice])
                ->with(['totalitems'=>$TotalItems])
                ->with(['namesarray'=>$nameOfproduct])
                ->with(['quntityarray'=>$QuantityOfItems]);








        }






}
