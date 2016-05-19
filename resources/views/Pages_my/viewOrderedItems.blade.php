<?php
?>
@extends('layouts.master')

@section('title')

 view order items

@endsection

@section('contain')

    <table>
        <thead>
        <tr>
            <th data-field="Item_id">Item_ID</th>
            <th data-field="Item_name">Item Name</th>
            <th data-field="Price">Item Price</th>
            <th data-field="Quantity">Item Quatity</th>
        </tr>
        </thead>

        {{$OrderedItems = CartItems::where('order_id',Auth::user()->id)->get()}}

        <tbody>
        @foreach($OrderedItems as $Item)
        <tr>
            <td>{{$Item->itemID}}</td>
            <td>{{$Item->name}}</td>
            <td>{{$Item->price}}</td>
            <td><input type="number" id="quantity" ></td>
        </tr>
        </tbody>
    </table>



@endsection
