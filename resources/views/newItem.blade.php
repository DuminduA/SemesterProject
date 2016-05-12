@extends('layouts.master')

@section('title')

@endsection
@section('contain')
    @include('includes.messageError')

    <div class="row">
        <div class="col-md-7">
            <div class="text-center">
                <h2> New Item </h2>
            </div>
            <form action="{{route('addNewItem')}}" method="post">
                <div class="form-group {{ $errors->has('itemID')? 'has-error' : '' }}">
                    <label for="itemID">Item ID NO.</label>
                    <input class="form-control " type="text" name="itemID" id="itemID">
                </div>
                <div class="form-group {{ $errors->has('name')? 'has-error' : '' }}">
                    <label for="name">Item Name</label>
                    <input class="form-control" type="text" name="name" id="name">
                </div>
                <div class="form-group {{ $errors->has('category')? 'has-error' : '' }}">
                    <label for="category">Category</label>
                    <input class="form-control" type="text" name="category" id="category">
                </div>
                <!--<div class="row">
                    <div class="col-md-3">
                        <label for="category">Category of Item</label>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <form  role="form">
                                <label class="radio-inline">
                                    <input type="radio" name="category" value="Book">Book
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="category" value="Stationary">Stationary
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="category" value="Toy">Toy
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="category" value="Other">Other
                                </label>
                            </form>
                        </div>
                    </div>

                </div>-->
                <div class="form-group {{ $errors->has('buyPrice')? 'has-error' : '' }}">
                    <label for="buyPrice">Buying Price of one item</label>
                    <input class="validate" type="" name="buyPrice" id="buyPrice">
                </div>
                <div class="form-group {{ $errors->has('sellPrice')? 'has-error' : '' }}">
                    <label for="sellPrice">Selling Price of one item</label>
                    <input class="validate" type="number" name="sellPrice" id="sellPrice">
                </div>
                <div class="form-group {{ $errors->has('count')? 'has-error' : '' }}">
                    <label for="count">Quantity</label>
                    <input class="validate  " type="number" name="count" id="count">
                </div>
                <button type="submit" class="btn btn-primary">ADD</button>
                <input type="hidden" name="_token" value="{{ Session::token()}}">
            </form>
        </div>
        <table>
            <thead>
            <tr>
                <th data-field="itemID">Item ID</th>
                <th data-field="name">Item Name</th>
                <th data-field="category">Item Category</th>
                <th data-field="buyPrice">Buying Price</th>
                <th data-field="sellPrice">Selling Price</th>
                <th data-field="count">Quantity</th>
            </tr>
            </thead>

            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td> {{ $item->  }}</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection