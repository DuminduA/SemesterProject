@extends('layouts.master');
<?php
use App\CartItem;
use App\Order;
use Illuminate\Support\Facades\Auth;
?>



@section('title')
    Update
@endsection

<style>
    

    
    
</style>

@section('contain')



    <h3>Your Items of the Order You placed.</h3>
    <table id="Updating_table"class="striped">
        <thead>
        <tr>
            <th data-field="item_id">ID</th>
            <th data-field="name">name</th>
            <th data-field="category">category</th>
            <th data-field="sellPrice">sell Price</th>
            <th data-field="Quantity">Quantity</th>
        </tr>
        </thead>
        <?php $Order_id= Order::where('customer_id',Auth::user()->id)->get();
                $The_Order;
            foreach($Order_id as $Odr){
                if($Odr->id == $btn_id){
                    $The_Order=$Odr;}
            }
            $orderedItems = CartItem::where('order_id',$The_Order->id)->get();?>
        <tbody>
        @foreach($orderedItems as $Item)
            <tr>
            <td>{{$Item->id}}</td>
            <td>{{$Item->name}}</td>
            <td>{{$Item->category}}</td>
            <td>{{$Item->sellPrice}}</td>
            <form  action="{{route('ChangeQuantity')}}" method="post">
                <input type="hidden" name="item_id" value="{{$Item->id}}}">
                <td><input type="number" name="Quantity" ></td>
                <input type="hidden" name="order_cancel" value="{{$The_Order->Cancel}}}">
               <td> <button id="update" type="submit" href="{{route('ChangeQuantity')}}"
                        class="waves-effect waves-light btn">Update</button></td>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
            <form  action="{{route('removeToUpdateorder')}}" method="post">
            <input type="hidden" name="item_id" value="{{$Item->id}}">
            <td><button  id="remove" href="{{route('removeToUpdateorder')}}" class="waves-effect red btn">Remove Item</button>
                <input type="hidden" name="_token" value="{{Session::token()}}"></td>
            </form>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection