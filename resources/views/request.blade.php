@extends('layouts.master')
@section('title')
    Place Request
    @endsection

    @section('contain')


        <div class="col-sm-6"></div>
            <h3>Request</h3>
        <form action="{{route('placeRequest')}}" method="post">
            <div class="row">
                <div class="input-field col s6">

                    <label for="name">Item Name</label><br>
                    <input class="validate" type="text" data-success="I Like it.."name="name" id="name" required>
                </div>
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="discribe" name="discribe" type="text" class="materialize-textarea" required></textarea>
                                <label for="discribe">Brief Discription About Item</label>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="quantity" name="quantity" type="number" class="validate " required >
                    <label for="quantity" class="active"  >Quantity</label>

                </div>
                <div class="input-field col s6">
                    <input id="due" name="due" type="date" class="validate" required >
                    <label for="phone" class="active"  data-success="I Like it..">Expected Date</label><br>

                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
                <button type="submit" class="btn waves-effect waves-light left submit " >Submit</button>
            </div>
        </form>

    </div>
@endsection


