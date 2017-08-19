@extends('app')

@section('header')
@include('include.header')
@endsection

@section('content')
<main class="container">
    <div class="center">
      <h5>Modul {{ $nama_praktikum }}</h5>
    </div>
    <div class="row">
    	@foreach($datas as $modul)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{ asset('storage/' . $modul->modul_image) }}">
              
              <!-- check if test akhir status is checked -->
              <!-- <a class="btn-floating halfway-fab waves-effect waves-light red" style="right: 120px;"><i class="material-icons">add</i></a> -->

              <a href="{{ URL('modul/' . $modul->no_modul) . '/' . 'test/' }}" class="btn-floating halfway-fab waves-effect waves-light red" style="right: 72px;"><i class="material-icons">assignment</i></a>
              <a href="{{ URL('modul/' . $modul->id) }}" target="_blank" class="btn-floating btn-large halfway-fab waves-effect waves-light blue" style="right: 10px;"><i class="material-icons">open_in_new</i></a>
            </div>
            <div class="card-content" style="background-color: ghostwhite;">
              <span class="card-title" style="color: black;">{{ $modul->judul_modul }}</span>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    @if(Auth::user())
    <div>
      <a href="{{ URL($id_praktikum . '/add-modul') }}" class="btn-floating fab-bottom-right btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
    </div>
    @endif
</main>
@endsection

@section('footer')
@include('include.footer')
@endsection