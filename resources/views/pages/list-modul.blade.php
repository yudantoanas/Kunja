@extends('app')

@section('header')
@include('include.header')
@endsection

@section('content')
<main class="container">
    <div>
      <h5>Modul {{ $nama_praktikum }}</h5>
    </div>
    <div class="row">
    	@foreach($datas as $modul)
        <div class="col s12 m4">
          <div class="card small">
            <div class="card-image">
              <img src="{{ asset('storage/' . $modul->modul_image) }}">
              <span class="card-title" style="color: black;">{{ $modul->judul_modul }}</span>
            </div>
            <div class="card-content">
              <p>Penyusun : {{ $modul->penyusun_modul }}</p>
              <p>Praktikum : {{ $modul->praktikum->nama_praktikum }}</p>
            </div>
            <div class="card-action">
              <a href="{{ URL('modul/' . $modul->id) }}" target="_blank">Open</a>
              <a href="{{ URL('modul/' . $modul->no_modul) . '/' . 'test/' }}">Tes Awal</a>
              {{-- <a href="">Tes Akhir</a> --}}
            </div>
          </div>
        </div>
        @endforeach
      </div>
</main>
@endsection

@section('footer')
@include('include.footer')
@endsection