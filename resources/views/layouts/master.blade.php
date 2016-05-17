<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <!-- Compiled and minified CSS -->
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">--}}
    <link rel="stylesheet" href="{{ URL::to('src/css/error.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/materialize.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import Google Icon Font-->
    {{--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">--}}


    <style>
        nav {background-color: #1a38ff}
    </style>
</head>

<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<!-- Compiled and minified JavaScript -->

<script src="/src/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/edit.js"></script>
{{--<script src="{{ URL:: to ('src/js/edit.js') }}"></script>--}}


@include('includes.header')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>--}}

<div class="container">
    @yield('contain')

</div>
</body>


</html>
