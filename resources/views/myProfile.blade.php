@extends('layouts.master')
@section('title')
    {{--{{$customer->first_name}} {{$customer->last_name}}--}}
@endsection
<style>
    #data{
        float: left;
        width: 500px;

    }
    #button{
        float: right;
        right: 100px;
    }
    #hidden{
        display: none;
    }
</style>

<script>
    $(editbtn).onclick(function() {
        $('#name').attr("disabled",true);
//        $('#ok').addClass('hidden');
    })
</script>

@section('contain')
    <div class="card">
        <div class="card-header">
            <img src=""/>
        </div>
        <div class="card-content">
            <h2>{{$customer->last_name}}</h2>

            <div class="row">
                <div id="data">
                    <h4> Full Name : {{$customer->first_name}} {{$customer->last_name}} </h4>
                </div>
                <div id="button">
                    <button id="b1" onclick="Editd('b1','c1','t0','t1');" class="sideviewtoggle myButton">Edit</button>
                </div>
                <div class="row">
                    <form action="{{route('nameEdit')}}" method="post">
                        <input class="active" id="t0" name="t0" type="text" style="display: none" required onblur="this.value=this.value.toUpperCase()">
                        <input class="active" id="t1" name="t1" type="text" style="display: none" required onblur="this.value=this.value.toUpperCase()">
                        <button id="c1" type="submit" onclick="OKd('b1','c1','t0','t1');" class="sideviewtoggle myButton" style='display:none;'>OK</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>
                </div>
            </div>

            <div class="row">
                <div id="data">
                    <h4> E-mail : {{$customer->email}} </h4>
                </div>
                <div id="button">
                    <button id="b2" onclick="Edit('b2','c2','t2');" class="sideviewtoggle myButton">Edit</button>
                </div>
                <div class="row">
                    <form action="{{route('mailEdit')}}" method="post">
                        <input class="active" id="t2" name="t2" type="text" style="display: none">
                        <button id="c2" type="submit" onclick="OK('b2','c2','t2');" class="sideviewtoggle myButton" style='display:none;'>OK</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>
                </div>
            </div>

            <div class="row">
                <div id="data">
                    <h4> Phone number : {{$customer->phone}} </h4>
                </div>
                <div id="button">
                    <button id="b3" onclick="Edit('b3','c3','t3');" class="sideviewtoggle myButton">Edit</button>
                </div>
                <div class="row">
                    <form action="{{route('phoneEdit')}}" method="post">
                        <input class="active" id="t3" name="t3" type="text" style="display: none">
                        <button id="c3" type="submit" onclick="OK('b3','c3','t3');" class="sideviewtoggle myButton" style='display:none;'>OK</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>
                </div>
            </div>

            <div class="row">
                <div id="data">
                    <h4> Address : {{$customer->adress1}} {{$customer->adress2}} {{$customer->adress3}} {{$customer->adress4}} </h4>
                </div>
                <div id="button">
                    <button id="b4" onclick="Edit('b4','c4','t4');" class="sideviewtoggle myButton">Edit</button>
                </div>
                <div class="row">
                    <form action="{{route('adressEdit')}}" method="post">
                        <input class="active" id="t4" name="t4" type="text" style="display: none" onblur="this.value=this.value.toUpperCase()">
                        <button id="c4" type="submit" onclick="OK('b4','c4','t4');" class="sideviewtoggle myButton" style='display:none;'>OK</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script >
        function Edit(b1,b2,t) {
            document.getElementById(b1).style.display = 'none';
            document.getElementById(b2).style.display = '';
            document.getElementById(t).style.display = '';
        }
        function OK(b1,b2,t) {
            document.getElementById(b1).style.display = '';
            document.getElementById(b2).style.display = 'none';
            document.getElementById(t).style.display = 'none';
        }
        function Editd(b1,b2,t1,t2) {
            document.getElementById(b1).style.display = 'none';
            document.getElementById(b2).style.display = '';
            document.getElementById(t1).style.display = '';
            document.getElementById(t2).style.display = ''
        }
        function OKd(b1,b2,t1,t2) {
            document.getElementById(b1).style.display = '';
            document.getElementById(b2).style.display = 'none';
            document.getElementById(t1).style.display = 'none';
            document.getElementById(t2).style.display = 'none';
        }
    </script>
@endsection
