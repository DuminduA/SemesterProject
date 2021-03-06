<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Item;
use App\Customer;
use App\CustomerRequest;
use Mockery\Exception;

class CustomerRequestController extends Controller{
    
    public function placeRequest(Request $request){

        $this->validate($request,[
            'name' => 'required|max:20',
            'discribe' => 'required|max:20',
            'quantity' => 'required',
            'due' => 'required',
        ]);
        $heading = "Available Item";
        $items = Item::all();
        $currentDate = date('Y-m-d');
        $placedate = $request['due'];
        if ($placedate<=$currentDate){
            return view('request', ['items' => $items,'heading'=>$heading])->with('Error',"Date should be greater than current date.");
        }
        $place = new CustomerRequest();
        $place->name = $request['name'];
        $place->discribe = $request['discribe'];
        $place->quantity = $request['quantity'];
        $place->due = $request['due'];
        $place->status = 1;
        $customer = Auth::user();
        $place->customer_id = $customer->id;
        $place->save();
        $heading = "Available Item";
        $items = Item::all();
        return view('searchItem', ['items' => $items,'heading'=>$heading]);

    }
    
    public function request(){
        return view('request');
    }

}