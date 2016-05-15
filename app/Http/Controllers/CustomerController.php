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

        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $email = $request['email'];
        echo $email;
        $phone = $request['phone'];
        $password = bcrypt($request['password1']);
//        $first_name = $request['first_name'];
//        $first_name = $request['first_name'];
        $customer = new Customer();
        $customer->first_name=$first_name;
        $customer->last_name =$last_name;
        $customer->email=$email;
        $customer->phone=$phone;
        $customer->password=$password;

        $customer->save();
        return redirect()-> back();

    }
    public function postSignIn(Request $request){

        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect()->route('dashbord');
        }
        else{
            //$Error=array('error' => 'Password Doesnt match');
            return Redirect::back()->with('Error',"Email and Password didn't match");

        }

    }
    public function signOut(){
        
        Auth::logout();
       return view('/dashbord');
    }

}
