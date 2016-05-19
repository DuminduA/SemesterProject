<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class MyProfileController extends Controller
{
    public function getProfile(){
        $customer = Auth::user();
        return view('myProfile',['customer'=>$customer]);
    }

    public function nameEdit(Request $request){
        $this->validate($request,[
            't0' => 'required',
            't1' => 'required',
        ]);
        $first = $request['t0'];
        $last = $request['t1'];
        $customer = Auth::user();
        Customer::where('id',$customer->id)->update(['first_name'=>$first]);
        Customer::where('id',$customer->id)->update(['last_name'=>$last]);
        return redirect()->route('profile');
    }

    public function mailEdit(Request $request){
        $this->validate($request,[
            't2' => 'required',
        ]);
        $mail = $request['t2'];
        $customer = Auth::user();
        Customer::where('id',$customer->id)->update(['email'=>$mail]);
        return redirect()->route('profile');
    }

    public function phoneEdit(Request $request){
        $this->validate($request,[
            't3' => 'required',
        ]);
        $phone = $request['t3'];
        $customer = Auth::user();
        Customer::where('id',$customer->id)->update(['phone'=>$phone]);
        return redirect()->route('profile');
    }

    public function adressEdit(Request $request){
        $this->validate($request,[
            't4' => 'required',
        ]);
        $adress = $request['t4'];
        $customer = Auth::user();
        Customer::where('id',$customer->id)->update(['adress1'=>$adress]);
        return redirect()->route('profile');
    }
}