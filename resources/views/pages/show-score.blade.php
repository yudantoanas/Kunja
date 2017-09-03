@extends('app')

@section('title')
{{ $modul->judul }}
@endsection

@section('header')
@include('include.header')
@endsection

@section('content')
<main class="container" style="padding-top: 10%;">
	@php
		$say = "";
		$color = "#000000";
		if ($score == 15) {
			$say = "Excelent Work!";
			$color = "#8a2be2";
		} elseif ($score >= 13) {
			$say = "Good Work!";
			$color = "#1e90ff";
		} elseif ($score >= 11) {
			$say = "Well done, you passed the test!";
			$color = "#228b22";
		} elseif ($score < 11) {
			$say = "Sorry, you have to study more!";
			$color = "#90ee90";
		}
	@endphp
	<div class="row" style="text-align: center;">
		<h3>{{ $say }}</h3>
		<h5>Your Score</h5>
	</div>
	<div class="row" style="text-align: center;">
		<div>
			<i class="material-icons" style="color: {{ $color }}; font-size: 35px;">grade</i>
			<strong style="font-size: 50px; margin-left: 10px;">
				{{ $score }}
			</strong>
		</div>
	</div>
	<div class="row" style="text-align: center">
		<a href="{{ URL($id_praktikum . '/list-modul') }}" class="waves-effect center waves-light btn-large">Kembali</a>
	</div>
</main>
@endsection

@section('footer')
@include('include.footer')
@endsection

@section('other')
{{-- <script>setTimeout(function(){window.location.href="{{ URL($id_praktikum . '/list-modul') }}"},3000);</script> --}}
@endsection