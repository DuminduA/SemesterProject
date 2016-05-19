@extends('layouts.master')

<?php
use App\Http\Controllers\CartController;
use App\Cart;
use Illuminate\Support\Facades\Auth;
?>


@section('title')
    Cart
@endsection
<style>
    #proceed_btn{
        position: absolute;
        right: 20px;
        top:90px;
    }
    #remove button{
        position: absolute;
        right:50px;
    }

</style>

@section('contain')
    <h1> Cart </h1>

    <div id="priceAndQuantity">

        <div class="row">
            <div class="col s12 m6">
                <div class="card white darken-1">
                    <div class="card-content black-text">
                        <span class="card-title"></span>
                        <p>Price  :&nbsp; &nbsp; &nbsp;{{$totalprice}}</p></br>

                    </div>
                    <div class="card-action">
                      <p>  item types :&nbsp; &nbsp; &nbsp;{{$totalitems}}

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--price and quantity ends here. --}}


    {{--cart items adding using a loop--}}

    {{$CartItems=Cart::where('customer_id',Auth::user()->id)->get()}}

        {{--all cart items assinged by a loop--}}
       <div class="collection">
            @foreach($CartItems as $item)
            <a href="#!" class="collection-item">Item : {{$item->name}}  </br>
            Quantity : {{$item->qunatity}}  </br>
                Price of Items : {{$item->qunatity*$item->price}}

                <a href="{{route('deletefromCart',['btn_id' =>$item->id])}}"
                   class="waves-effect waves-light btn">Remove</a>
            </a>
            @endforeach
        </div>


    <a href="{{route('proceedOrder')}}" id="proceed_btn"
       class="waves-effect waves-light btn" type="submit" name="action">Proceed The Order<i class="material-icons right">send</i></a>

`

@endsection

