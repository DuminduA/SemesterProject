<?php

namespace App\Http\Controllers;
use App\Staff;
use App\Cart;
use App\Item;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

class ReturnItemController extends Controller
{
    public function getReturn(){
        return view('returnItem');
    }
    
    
    
    
    
}