@extends('layouts.master')

@section('title')
    Welcome To Orchid Bookshop!
    @endsection

@section('contain')
    <!--<div class="welcome">Welcome To Our Store!!</div>-->
    <div class="row">
        <div class="col-sm-6"></div>
        <h3>Sign Up Form</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Your Email</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="firstName">Your First Name</label>
                <input class="form-control" type="text" name="firstname" id="firstname">
            </div>
            <div class="form-group">
                <label for="lastname">Your Last Name</label>
                <input class="form-control" type="text" name="lastname" id="lastname">
            </div>
            <div class="form-group">
                <label for="password">Your password</label>
                <input class="form-control" type="text" name="password" id="password">
            </div>
            <!-- confirm password-->
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input class="form-control" type="text" name="password" id="password">
            </div>
            <!-- confirm password-->
            <div class="form-group">
                <label for="password">Your Email</label>
                <input class="form-control" type="text" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        {{--<div class="col-sm-6"></div>--}}
        {{--<h3>Sign In Form</h3>--}}
        {{--<form action="#" method="post">--}}
            {{--<div class="form-group">--}}
                {{--<label for="email">Your Email</label>--}}
                {{--<input class="form-control" type="text" name="email" id="email">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label for="password">Your Email</label>--}}
                 {{--<input class="form-control" type="text" name="password" id="password">--}}
            {{--</div>--}}
            {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
        {{--</form>--}}
    {{--</div>--}}
    @endsection
<style>
    html , body {


    }

</style>

