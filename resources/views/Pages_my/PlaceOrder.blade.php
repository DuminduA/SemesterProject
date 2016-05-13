@extends('layouts.master')

<?php
use App\Http\Controllers\CartController;
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
                        <p>Price  :</br>
    </p>
                    </div>
                    <div class="card-action">
                        items :
                    </div>
                </div>
            </div>
        </div>

  <?/*      <div class="collection">

            @foreach($CartItems as $name)
            <a href="#!" class="collection-item">Item : {{$CartItems->$name}}  </br>
            Qunatity : {{$CartItems->$quantity}}
                <a id="remove button" class="waves-effect waves-light btn">Remove</a>
            </a>
            @endforeach*/?>
        </div>

        <!--order proceed button-->
    <a id="proceed_btn"class="waves-effect waves-light btn">Proceed the order</a>
        <button class="btn waves-effect waves-light" type="submit" name="action">Proceed the order
            <i class="material-icons right">send</i>
        </button>



@endsection

