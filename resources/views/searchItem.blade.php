@extends('layouts.master')

@section('title')

@endsection
<style>
    #proceed_btn{
        position: absolute;
        right: 50px;

    }
    #request_btn{
        position: absolute;
        right:200px;

    }

</style>
@section('contain')
    @include('includes.messageError')
    <section>

        <div class="nav-wrapper">
            <form action="{{ route('search')}}" method="post">
                 <div class="row">

                    <div class="input-field col s4 ">
                        <label for="search">Search by</label>
                        <input class="form-control " type="text" name="search" id="search" required>
                    </div>
                     <div class="input-field col s4">
                         <select class="browser-default" name="searchOption" required>
                             <option value="1">Name</option>
                             <option value="2">Category</option>
                         </select>
                     </div>
                 </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a id="proceed_btn" href="{{route('PlaceOrder')}}" class="btn waves-effect waves-light" name="action">Proceed </a>
                    <a id="request_btn" href="{{route('request')}}" class="btn waves-effect waves-light" name="action">Request </a>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token()}}">
            </form>
        </div>


        <div class="row">
            <div class="col-md-6 col-md-3-offset">
                <div class="row">
                    <header><h3> {{$heading}} </h3></header>
                </div>

                <div class="row">
                    @foreach($items as $item)
                        <div class="col s4">
                            <h5>{{$item->name}}</h5>
                            Category: {{$item->category}}<br>
                            Availabe Quantity: {{$item->quantity}}<br>
                            LKR.{{$item->sellPrice}}
                            <div class="row">
                                <form action="{{ route('addToCart',['item'=>$item])}}" method="post">
                                    <div class="form-group">
                                        <label for="quantity" class="active" >Quantity</label>
                                        <input class="validate " type="number" min="1" name="quantity" id="quantity" required>

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control">Add To Cart</button>
                                        <input type="hidden" name="_token" value="{{ Session::token()}}">

                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </section>
@endsection