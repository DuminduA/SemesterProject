<?php

namespace App\Http\Controllers;

use App\Item;
use App\Order;
use App\Cart;
use App\CartItem;
use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;

class OrderController extends Controller
{
    public function PlaceAnOrder(Request $request){
        $sucess2=false;
        $sucess1=false;
        $cartitems=Cart::where('id',Auth::customer()->id);
        $totalprice=0;
        $customer_id=$request['cus'];;

        for($i = 0; $i<sizeof($cartitems)  ;$i++){
            $totalprice += $cartitems[$i]->price*$cartitems[$i]->qunatity;
        }



        $Order = new Order();
        $Order->orderPrice= $totalprice;
        $Order->status=false;
        $sucess1=$Order->save();


        for($i=0; $i<sizeof($cartitems);$i++){
            $item =new CartItem();
            $item->itemID=$cartitems[$i]->itemID;
            $item->name=$cartitems[$i]->name;
            $item->category=$cartitems[$i]->category;
            $item->sellPrice=$cartitems[$i]->sellPrice;
            $item->quantity=$cartitems[$i]->quantity;
            $sucess2=$request->$Order->cartitems()->save($item);
        }

        if($sucess1&&$sucess2){
            $message= "Order Succefull ";
            $ItemToRemove= Cart::where('customer_id',$customer_id)->first();
            $ItemToRemove->delete();
        }
        else{$message= "Order Unsuccefull. ";}

        return redirect()->route('/placeanorder');
    }
    
    public function getPlaceOrderPage(){
        return view('Pages_my.PlaceOrder');
    }
    
    public function UpdateAnOrder(){
        
        return view('Pages_my.UpdateOrder');
    }

    public function CancelAnOrder(){
        return 'this is cancel n order method';
    }
}
