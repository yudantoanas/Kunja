@extends('app')

@section('header')
@include('include.header')
@endsection

@section('content')
<main class="container">
	<div class="row">
		@foreach($datas as $praktikum)
		<div class="col s12 m4">
          <div class="card blue">
            <div class="card-content white-text">
              <span class="card-title">
                <p style="font-size: 28pt;">Praktikum</p>
                <strong style="font-size: 28pt;">{{ $praktikum->nama_praktikum }}</strong>
                <p style="font-size: 12pt;">{{ $praktikum->jumlah_modul }} Modul</p>
              </span>
            </div>
            <div class="card-action white">
              <a href="{{ URL($praktikum->id . '/list-modul') }}" style="font-size: 16pt;">View</a>

              @if(Auth::user())
              <a href="{{ URL('edit-praktikum/' . $praktikum->id) }}">Edit</a>
              @endif
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
