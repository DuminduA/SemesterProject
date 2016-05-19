<?php

namespace App\Http\Controllers;
use App\Staff;
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
    
    
    public function addToCart( Item $item,Request $request){
        if (($item->quantity - $request['quantity'])<=0){
            $message = "There are no sufficient item.";
            return redirect()->route('searchItem')->with(['message'=>$message]);
        }
        $cart = new Cart();
        $customer = Auth::user();
        $cart->name = $item->name;
        $cart->Price = $item->sellPrice;
        $cart->qunatity = $request['quantity'];
        $cart->ItemID=$item->id;
//        $cart->itemID = $item->itemID;
        $customer->cart()->save($cart);
        $newQuantity = $item->quantity - $request['quantity'];
        Item::where('id',$item->id)->update(['quantity'=>$newQuantity]);
        $message = "Item added to cart succesfully.";
        return redirect()->route('searchItem')->with(['massage'=>$message]);
    }

    public function removeFromCart($btn_id){
                
        $ItemToRemove= Cart::where('id',$btn_id)->first();
        $ItemToRemove->delete();
        return redirect()->route('PlaceOrder');
    }


}
