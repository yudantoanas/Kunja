<!doctype html>
<html lang="{{ app()->getLocale() }}">

<style>
    body{
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main{
        flex: 1 0 auto;
    }

    #error_message{
        color: red;
        margin-bottom: 0px;
        margin-top: 0px;
    }
</style>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>
        {{ $title or "Aplikasi Praktikum SI 2017"}}
    </title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}" media="screen,projection"/>

    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
</head>
<body>

@yield('header')
@yield('content')
@yield('footer')

{{-- Other Scripts --}}
@yield('other-js')
</body>
</html>
