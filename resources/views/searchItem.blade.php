@extends('layouts.master')

@section('title')

@endsection
@section('contain')
    @include('includes.messageError')
    <section>

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


        <script type="text/javascript">
            function test() {
                console.log("Test Line");
            }
        </script>

        <div class="row">
            <div class="col-md-6 col-md-3-offset">
                <div class="row">
                    <header><h3> {{$heading}} </h3></header>
                </div>

                <div class="row">
                    <form onsubmit="test()" method="post">
                        @foreach($items as $item)
                            <div class="col s4">
                                <h5>{{$item->name}}</h5>
                                <p>Category: {{$item->category}}</p>
                                SLK.{{$item->sellPrice}}
                                <div class="row">
                                    <form action="{{ route('addToCart',['item'=>$item])}}" method="post">
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input class="form-control " type="number" min="1" name="quantity"
                                                   id="quantity" required>

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="form-control">Add To Cart</button>
                                            <input type="hidden" name="_token" value="{{ Session::token()}}">

                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </form>
                </div>

            </div>
            <a id="proceed_btn" href="{{route('PlaceOrder')}}" class="btn waves-effect waves-light" name="action">Proceed </a>
        </div>
        {{--{{Auth::user()->first_name}}--}}
    </section>
@endsection