@extends('layouts.master')
@section('title')
    THANK YOU!!!
@endsection
<style>
    #text{
        position: absolute;
        top: 35% ;
        font-family: GillSans, Calibri, Trebuchet, sans-serif;
    }
</style>

@section('contain')



    @if($message == "Order Succesfull.")

    <h3 id="text"> Thank you. It is a pleasure to help you</h3>

    @else
        <h3 id="text"> Some Error Occured. Please Try Again.</h3>

    @endif

    <div class="row">
        <a id="request_btn" href="{{route('searchItem')}}" class="btn waves-effect waves-light" name="action">Back Home </a>
    </div>


@endsection