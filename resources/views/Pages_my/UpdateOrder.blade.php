@extends('layouts.master');
<?php
use App\Http\Controllers\OrderController;
?>

@section('title')

    Update your Order here..

@endsection

@section('contain')

    <h1>Update your order here..</h1>


    <table class="striped">
        <thead>
        <tr>
            <th data-field="Order_id">ID</th>
            <th data-field="Total Price">Total price</th>
            <th data-field="Total Quantity">Item Price</th>
            <th data-field="Status">Status of Your Order</th>
            <th data-field="Expiraion_date">Expiration date</th>
        </tr>
        </thead>

        <?php $Order_id= Order::where('customer_id',Auth::user()->id)->get(); ?>

        <tbody>
        @foreach($Order_id as $Order)
        <tr>
            <td>{{$Order->id}}</td>
            <td>{{$Order->totalPrice}}</td>
            <td>{{$Order->totalQuantiy}}</td>
            <td>{{$Order->status}}</td>
            <td>{{date('F d, Y', strtotime($list->created_at))}}</td>


        </tr>
        @endforeach




        </tbody>
    </table>




@endsection