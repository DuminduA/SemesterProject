<?php

namespace App\Http\Controllers;

use App\CancelledOrder;
use App\Customer;
use App\Item;
use App\Order;
use App\Cart;
use Illuminate\Support\Facades\Hash;
use App\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class OrderController extends Controller
{


    public function PlaceAnOrder(Request $request){
        $sucess2=false;
        $sucess1=false;//
        $customer = Auth::user();

        $cartitems=Cart::where('customer_id',$customer->id)->get();  // take the appropriate cart for the user

        $totalprice=0;
        $totalQuantity=0;

        for($i = 0; $i<sizeof($cartitems)  ;$i++){
            $totalprice += $cartitems[$i]->price*$cartitems[$i]->qunatity;
            $totalQuantity+= $cartitems[$i]->qunatity;
        }


        $Order = new Order();
        $Order->totalPrice= $totalprice;
        $Order->customer_id=$customer->id;
        $Order->tolalQuantity=$totalQuantity;
        $Order->status=false;
        $sucess1=$Order->save();



        for($i=0; $i<sizeof($cartitems);$i++){
            $cartitem =new CartItem();
            $item =Item::where('id',$cartitems[$i]->ItemID)->first() ;
            $cartitem->name=$cartitems[$i]->name;
            $cartitem->itemID=$cartitems[$i]->ItemID;
            $cartitem->category=$item->category;
            $cartitem->sellPrice=$item->sellPrice;
            $cartitem->quantity=$cartitems[$i]->qunatity;
            $sucess2=$Order->cartitems()->save($cartitem);
        }

        $ItemToRemove= Cart::where('customer_id',Auth::user()->id)->get();



        if($sucess1 && $sucess2){
            foreach ($ItemToRemove as $Item)
                $Item->delete();
            $message= "Order Succesfull.";
             //after order proceed cart should be empty s

        }
        else{$message= "Order Unsuccefull. ";}


        return view('/Pages_my/ThankYou')->with('message',$message);
    }


    public function getPlaceOrderPage(){
        return view('Pages_my.PlaceOrder');
    }



    public function CancelAnOrder(Request $request){


        $password = $request['password'];
        $btn_id=$request['btn_id'];

        if(Hash::check($password,Auth::user()->password)){

            $Orders=Order::where("customer_id",Auth::user()->id)->get();

            foreach ($Orders as $TheOrder){
                if($btn_id==$TheOrder->id){

                    $TheOrder->Cancel="Cancelled";
                    $TheOrder->save();
                    $messege="Your Order has been Removed..";
                    return view('Pages_my.UpdateOrder')->with(['message',$messege]);
                }
            }


            


//              $cancelled_Order = new CancelledOrder();
//              $cancelled_Order->customer_id=$Orders->customer_id;
//              $cancelled_Order->totalPrice=$Orders->totalPrice;
//              $cancelled_Order->tolalQuantity=$Orders->tolalQuantity;
//              $cancelled_Order->status=$Orders->status;
//              $cancelled_Order->save();    //save in cancelled order table
//
//            $CartItems=CartItem::where("order_id",$Orders->id)->get();
//
//            foreach($CartItems as $item){
//
//                $item->delete();
//            } // delete from cartItems table
//
//           $Orders->delete();  //delete the order


        }
        else{

            $messege=" Password Is Incorrect.";
            Return view('Pages_my.cancellationConfirm',['btn_id'=>$btn_id])->with(['message',$messege]);
        }

    }




    public function getcancellationConfirm($btn_id){


        return view('Pages_my/cancellationConfirm')
            ->with(['btn_id'=>$btn_id]);
    }



    public function getSearchItem(){
        
        $heading="Available Items";
        $items= Item::all();
        return view('searchItem',['heading'=>$heading,'items'=>$items]);
    }

    
    
    public function editOrder($btn_id){

        return view('Pages_my.UpdateOrder2')
            ->with(['btn_id'=>$btn_id]);
    }

    public function UpdateAnOrder(Request $request){
        
        $Cancel = $request['order_cancel'];

        if($Cancel!="Cancelled"){

            $Quantity = $request['Quantity'];
            $ItemId = $request['item_id'];
            echo $Quantity;
            CartItem::where('id',$ItemId )
                ->update(['quantity' => $Quantity]);
            return view('Pages_my.UpdateOrder');
        }else{
            return view('Pages_my.UpdateOrder')->with(['message',"You Have Cancelled This Order"]);
       }



    }

    
    public function removeOrderItem(Request $request)
    {
        $Item=$request['item_id'];
        echo $Item;
        $todel=CartItem::where('id',$Item)->first();
        $todel->delete();
        return view('Pages_my/UpdateOrder');
    }
    
    public function test(){
        
        return "nsnsnsnsnssn";
    }


    

}
