<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{

    public function getDashbord()
    {
        return view('dashbord');
    }

    public function postSignUp(Request $request){
        $this->validate($request,[
            'email'=> 'required|email|unique:customers',
            'first_name'=>'required',
            'last_name'=>'required'

        ]);

        $customer = new Customer();
        $customer->first_name=$request['first_name'];
        $customer->last_name =$request['last_name'];
        $customer->email=$request['email'];
        $customer->phone=$request['phone'];
        $customer->password=bcrypt($request['password1']);

        $customer->save();
        Auth::login($customer);
        return redirect()-> route('searchItem');

    }
    public function postSignIn(Request $request){

        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->route('searchItem');
        }
        else{
            //$Error=array('error' => 'Password Doesnt match');
            return Redirect::back()->with('Error',"Email and Password didn't match");

        }

    }

}
