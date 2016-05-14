@extends('layouts.master')

@section('title')

@endsection
@section('contain')
    @include('includes.messageError')
    <section >

            <div class="nav-wrapper">
                <form action="{{ route('search')}}" method="post">
                    <div class="input-field col s6 ">
                        <label for="serch">Search</label>
                        <input class="form-control " type="text" name="search" id="search">
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token()}}">
                </form>
            </div>


        <div class="row">
            <div class="col-md-6 col-md-3-offset">
                <div class="row">
                    <header><h3> {{$heading}} </h3></header>
                </div>
                <form  method="post">
                    <div class="row">
                        @foreach($items as $item)
                            <div class="col s4">
                                <h5>{{$item->name}}</h5>
                                <p>Category: {{$item->category}}</p>
                                SLK.{{$item->sellPrice}}
                                <div class="row">
                                    <form action="{{ route('addToCart',['item'=>$item])}}" method="post">
                                        <div class="input-field col s6 ">
                                            <label for="quantity">Quantity</label>
                                            <input class="form-control " type="number" min="1" name="quantity" id="quantity" required>
                                            <button type="submit" class="input-group-addon">Add To Cart</button>
                                        </div>
                                        <input type="hidden" name="_token" value="{{ Session::token()}}">
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <a id="proceed_btn" href="{{route('PlaceOrder')}}" class="btn waves-effect waves-light" name="action">Proceed </a>
        </div>
    </section>
@endsection