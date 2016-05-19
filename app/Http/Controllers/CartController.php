<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class CartController extends Controller
{
        public function getPlaceOrder(){
             $TotalPrice=0;
             $TotalItems=0;
             $userId=   Auth::user();
             $CartItems= Cart::where('customer_id',$userId->id)->get();
            
            for($i = 0; $i<sizeof($CartItems)  ;$i++){
                $TotalPrice += $CartItems[$i]->price*$CartItems[$i]->qunatity;
                $TotalItems += 1;
            }

             return view('Pages_my.PlaceOrder')
               ->with(['totalprice'=> $TotalPrice])
                ->with(['totalitems'=>$TotalItems])
                ->with(['CartItems'=>$CartItems->all()]);
    }
    
    public function addToCart(Item $item,Request $request){
        $cart = new Cart();
        $customer = Auth::user();
        $cart->name = $item->name;
        $cart->Price = $item->sellPrice;
        $cart->qunatity = $request['quantity'];
        $cart->ItemID=$item->id;
        $customer->cart()->save($cart);
        return redirect()->route('searchItem');
    }
    
    public function removeFromCart($btn_id){

        
        
        $ItemToRemove= Cart::where('id',$btn_id)->first();
        $ItemToRemove->delete();
        return redirect()->route('PlaceOrder');
    }
}
