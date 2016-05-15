<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
        public function getPlaceOrder(){
             $TotalPrice=0;
             $TotalItems=0;
             $CartItems= Cart::where('customer_id',Auth::user()->id)->get();
            
            for($i = 0; $i<sizeof($CartItems)  ;$i++){
                $TotalPrice += $CartItems[$i]->price*$CartItems[$i]->qunatity;
                $TotalItems += 1;
            }

             return view('Pages_my.PlaceOrder')
               ->with(['totalprice'=> $TotalPrice])
                ->with(['totalitems'=>$TotalItems])
                ->with(['CartItems'=>$CartItems->all() ]);
    }
    
    public function removeFromCart($btn_id){

        
        
        $ItemToRemove= Cart::where('id',$btn_id)->first();
        $ItemToRemove->delete();
        return redirect()->route('PlaceOrder');
    }


}


