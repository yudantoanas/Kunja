@extends('app')

@section('content')
  @include('include.header')
  <main class="container">
    <div class="row" style="margin-top: 20px">
        <div class="col s12 m6 push-m3">
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title blue-text">Login Asisten</span>
              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}
                <div class="input-field col m12 s12">
                  <i class="material-icons prefix blue-text">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate" name="username">
                  <label for="icon_prefix">Username</label>
                </div>
                <div class="input-field col m12 s12">
                  <i class="material-icons prefix blue-text">lock</i>
                  <input id="icon_telephone" type="password" class="validate"  name="password">
                  <label for="icon_telephone">Password</label>
                </div>
                <hr>
                <button type="submit" name="button" class="btn blue" style="width: 100%">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    {{-- <div class="row">
      <div class="col m12">
        <h4>Login Asisten</h4>
      </div>
    </div>
    <div class="row">
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
        <div class="input-field col m12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="username">
          <label for="icon_prefix">Username</label>
        </div>
        <div class="input-field col m12">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate"  name="password">
          <label for="icon_telephone">Password</label>
        </div>
        <button type="submit" name="button" class="btn blue" style="width: 100%">Sign in</button>
      </form>
    </div> --}}
  </main>
  @include('include.footer')
@endsection
