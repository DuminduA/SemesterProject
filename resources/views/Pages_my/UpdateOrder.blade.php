@extends('layouts.master');
<?php
use App\Http\Controllers\OrderController;
use App\Order;
use Illuminate\Support\Facades\Auth;
?>



@section('title')
    Select your Order here..
@endsection

@section('contain')


    <h3>Update your order here..</h3>

    <table id="Update_table"class="striped">
        <thead>
        <tr>
            <th data-field="Order_id">ID</th>
            <th data-field="Total Price">Total price</th>
            <th data-field="Total Quantity">Total Quantity</th>
            <th data-field="Status">Status of Your Order</th>
            <th data-field="Ordered_date">Ordered date</th>

        </tr>
        </thead>

        <?php $Order_id= Order::where('customer_id',Auth::user()->id)->get();?>

        <tbody>

        @foreach($Order_id as $Order)
        <tr>
            <td>{{$Order->id}}</td>
            <td>{{$Order->totalPrice}}</td>
            <td>{{$Order->tolalQuantity}}</td>
            <td>{{$Order->Cancel}}</td>
            <td>{{date('F d, Y', strtotime($Order->created_at))}}</td>
            <td>@if(($Order->Cancel=="New Order")||($Order->Cancel=="Proceeded"))
                    <a href="{{route('Updatebutton',['btn_id'=>$Order->id])}}"
                       class="waves-effecst waves-light btn">Update</a>
                @endif
            </td>
            <td>@if(($Order->Cancel=="New Order"))
                    <a href="{{route('Cancelbutton',['btn_id'=>$Order->id])}}"
                        class="waves-effect pink btn">Cancel</a>
                @endif
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>




@endsection