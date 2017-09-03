@extends('app')

@section('content')
    @include('include.header')
    <main class="container">
        <div class="row" style="margin-top: 20px">
            <div class="col s12 m6 push-m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title blue-text">Login Asisten</span>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="row" style="margin-top: 20px;">
                                <div class="col m1 s1" style="margin: 0px;">
                                    <img src="{{asset('imgs/round-account-button-with-user-inside.png')}}">
                                </div>
                                <div class="input-field col m11 s11" style="margin: 0px;">
                                    <input id="icon_prefix" type="text" name="username">
                                    <label for="icon_prefix">Username</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m1 s1" style="margin: 0px;">
                                    <img src="{{asset('imgs/padlock.png')}}">
                                </div>
                                <div class="input-field col m11 s11" style="margin: 0px;">
                                    <input id="icon_telephone" type="password" class="validate" name="password">
                                    <label for="icon_telephone">Password</label>
                                </div>
                            </div>
                            <button type="submit" name="button" class="btn blue" style="width: 100%">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('include.footer')
@endsection