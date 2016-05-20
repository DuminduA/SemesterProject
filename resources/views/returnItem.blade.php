@extends('layouts.master')
@section('title')
    Return Items
@endsection

@section('contain')
    <div class="col-sm-6"></div>
    <h4>Request</h4>
    <form action="{{route('table')}}" method="post">
        <div class="row">
            <div class="input-field col s4 ">
                <label for="search">Order ID</label>
                <input class="form-control " type="number" name="orderid" id="orderid" required>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="reason" name="reason" type="text" class="materialize-textarea" required></textarea>
                            <label for="reason" class="active">Reason for return items</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-field col s4">
                <button type="submit" class="btn waves-effect waves-light left submit " >Request</button>
                <input type="hidden" name="_token" value="{{ Session::token()}}">
            </div>
        </div>
    </form>
    @if($msg=="Request sent for return. We will inform you further about this. Thank You")
        <h4> Order ID : {{$order->id}}</h4>
    @endif
    <div id="t" class="row" >
        <table class="striped">
            <thead>
            <tr>
                <th data-field="name">Item Name</th>
                <th data-field="category">Item Category</th>
                <th data-field="sellPrice">Price</th>
                <th data-field="quantity">Quantity</th>
                <th>
                    <table>
                        <th data-fiels="action"></th>
                    </table>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr >
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->category }}</td>
                    <td>{{ $item->sellPrice }}</td>
                    <td>{{ $item->quantity }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @if($msg=="Request sent for return. We will inform you further about this. Thank You")
        <div class="row">
            <h5> Total Quantity : {{$order->tolalQuantity}}</h5>
            <h5> Total Price : {{$order->totalPrice}}</h5>
        </div>
    @endif
    <h4> {{$msg}}</h4>
@endsection


