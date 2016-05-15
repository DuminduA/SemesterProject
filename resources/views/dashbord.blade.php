@extends('layouts.master')



@section('title')
    DashBord
@endsection

Successfully Signed Up. as
{{Auth::user()->first_name}} {{Auth::user()->last_name}}


@section('contain')
@endsection