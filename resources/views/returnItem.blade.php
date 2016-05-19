@extends('layouts.master')
@section('title')
    Return Items
@endsection

@section('contain')


    <div class="col-sm-6"></div>
    <h3>Request</h3>
    <form action="{{route('placeRequest')}}" method="post">
        <div class="row">
            <div class="input-field col s4 ">
                <label for="search">Search by</label>
                <input class="form-control " type="text" name="search" id="search" required>
            </div>
            <div class="input-field col s4">
                <button type="submit" class="btn btn-primary">Search</button>
                <input type="hidden" name="_token" value="{{ Session::token()}}">
            </div>
        </div>
    </form>
    <form>
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

        <div class="row">
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <button type="submit" class="btn waves-effect waves-light left submit " >Request</button>
        </div>
    </form>

    </div>
@endsection


