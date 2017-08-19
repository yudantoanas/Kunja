<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>
            {{ $title or "Aplikasi Praktikum SI 2017"}}
        </title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/custom.css') }}"  media="screen,projection"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('css')
    </head>
    <body>
        @yield('header')
        @yield('content')
        @yield('footer')


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/materialize.js') }}"></script>
        {{-- Other Scripts --}}
        @yield('other')
    </body>
</html>
