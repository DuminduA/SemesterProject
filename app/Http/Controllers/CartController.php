<?php

namespace App\Http\Controllers;
use App\Staff;
use App\Cart;
use App\Item;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class CartController extends Controller
{

    public function addToCart( Item $item,Request $request){
        $cart = new Cart();
        $customer = Auth::user();
        $cart->name = $item->name;
        $cart->Price = $item->sellPrice;
        $cart->qunatity = $request['quantity'];
        $cart->itemID = $item->itemID;
        $customer->cart()->save($cart);
        $newQuantity = $item->quantity - $request['quantity'];
        Item::where('id',$item->id)->update(['quantity'=>$newQuantity]);
        return redirect()->route('searchItem');

    }

    public function removeFromCart($btn_id){
        
        $ItemToRemove= Cart::where('id',$btn_id)->first();
        $ItemToRemove->delete();
        return redirect()->route('PlaceOrder');
    }


}
