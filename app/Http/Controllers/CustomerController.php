<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
{
    public function postSignUp(Request $request){

        $this->validate($request,[
                

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

}
