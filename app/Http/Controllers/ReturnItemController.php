<?php

namespace App\Http\Controllers;
use App\CartItem;
use App\Order;
use App\ReturnItems;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class ReturnItemController extends Controller
{
    public function getReturn(){
        $order =null ;
        $items = array();
        $msg = "";
        return view('returnItem',['items'=>$items,'order'=>$order,'msg'=>$msg]);
    }

    public function table(Request $request){
        $this->validate($request,[
            'orderid' => 'required',
        ]);
        $order = Order::where('id',$request['orderid'])->first();
        $items = CartItem::where('order_id',$request['orderid'])->get();
        if(!isset($order)){
            $order = array();
            $items = array();
            $msg = "Order Does Not Exist.";
            return view('returnItem',['items'=>$items,'order'=>$order,'msg'=>$msg]);
        }
        if(sizeof($items)==0){
            $order = array();
            $items = array();
            $msg = "This Order does not consist any item.";
            return view('returnItem',['items'=>$items,'order'=>$order,'msg'=>$msg]);
        }
        if ($order->Cancel=="Cancelled"){
            $order = array();
            $items = array();
            $msg = "This Order was canceled.";
            return view('returnItem',['items'=>$items,'order'=>$order,'msg'=>$msg]);
        }
        if ($order->status==null&&$order->Cancel==null){
            $order = array();
            $items = array();
            $msg = "This Order not proceeded Yet.";
            return view('returnItem',['items'=>$items,'order'=>$order,'msg'=>$msg]);
        }
        if ($order->Cancel=="Proceeded"&&$order->status==true){
            $order = array();
            $items = array();
            $msg = "This Order is Not Reached you.";
            return view('returnItem',['items'=>$items,'order'=>$order,'msg'=>$msg]);
        }
        if ($order->Cancelled=="Returned"){
            $order = array();
            $items = array();
            $msg = "This Order already has a return request.";
            return view('returnItem',['items'=>$items,'order'=>$order,'msg'=>$msg]);
        }
        $returnItem = new ReturnItems();
        $returnItem->order_id = $request['orderid'];
        $returnItem->reason = $request['reason'];
        $customer = Auth::user();
        $returnItem->customer_id = $customer->id;
        $returnItem->save();
        $msg = "Request sent for return. We will inform you further about this. Thank You";
        return view('returnItem',['items'=>$items,'order'=>$order,'msg'=>$msg]);
    }


}