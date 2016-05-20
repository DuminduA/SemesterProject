<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('/src/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('src/css/materialize.min.css') }}">
    {{--<link rel="stylesheet" href="{{ URL::to('src/css/materialize.min.css') }}">--}}


            <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style type="text/css">
        nav {background-color: #1a38ff}

    </style>
</head>
<body>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
<script type="text/javascript" src="{{ URL::asset('/src/js/jquery.min.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>--}}
<script type="text/javascript" src="{{ URL::asset('/src/js/materialize.min.js') }}"></script>

<div class="container">
    @yield('contain')

</div>
</body>


</html>
