@extends('layouts.master')

@section('title')
    Welcome To Orchid Bookshop!
    @endsection

@section('contain')
    <!--<div class="welcome">Welcome To Our Store!!</div>-->
    <div class="row">
        <div class="col-sm-6"></div>
        <h3>Sign Up Form</h3>
        <form action="{{route('signup')}}" method="post">
            <div class="row">
                <div class="input-field col s6">
                    {{--<i class="material-icons">perm_identity</i>--}}
                    <label for="first_name" class="active">Your Last Name</label>
                    <input class="validate" type="text" name="first_name" id="first_name">
                </div>
                <div class="input-field col s6">
                    {{--<i class="material-icons">perm_identity</i>--}}
                    <input id="last_name" type="text" class="validate valid" name="last_name">
                    <label for="last_name" class="active">Last Name</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    {{--<i class="material-icons">email</i>--}}

                    <input id="email" name="email" type="email" class="validate " required >
                    <label for="email" class="active" data-error="Invalid Email" data-success="I Like it..">Email here</label>

                </div>
                <div class="input-field col s6">
                    {{--<i class="material-icons">phone</i>--}}

                    <input id="phone" name="phone" type="tel" class="validate" required >
                    <label for="phone" class="active" data-error="Invalid phone" data-success="I Like it..">Enter Your phone Number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    {{--<i class="material-icons">mod_edit</i>--}}
                    <input id="password1" type="password" class="validate" name="password1" minlength="6" required>
                    <label for="password1" data-error="Length Should Be Greater than 6 characters" >Password</label>
                </div>
                <!-- confirm password-->
                <div class="input-field col s6">
                    {{--<i class="material-icons">mode_edit</i>--}}
                    <input id="password2" type="password" class="validate" name="password2">
                    <label for="password2" class="validate">Confirm Password</label>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <button type="submit" class="btn waves-effect waves-light left submit " >Submit</button>
            <script type="text/javascript">
                window.onload = function () {
                    document.getElementById("password1").onchange = validatePassword;
                    document.getElementById("password2").onchange = validatePassword;
                }
                function validatePassword(){
                    var pass2=document.getElementById("password2").value;
                    var pass1=document.getElementById("password1").value;
                    if(pass1!=pass2) {
                        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                    }
                    else
                        document.getElementById("password2").setCustomValidity('');
                }
            </script>
        </form>

    </div>
    @endsection


