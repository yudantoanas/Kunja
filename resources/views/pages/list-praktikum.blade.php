@extends('app')

@section('header')
@include('include.header')
@endsection

@section('content')
<main class="container">
	<div>
		<ul class="collection-with-header">
			<li class="collection-header"><h5>List Praktikum</h5></li>
			@foreach($datas as $praktikum)
	      	<li class="collection-item" style="line-height: 50px;">
	      		<div>
	      			{{ $praktikum->nama_praktikum }} - <strong style="color: #9e9e9e; font-weight: normal;">{{ $praktikum->jumlah_modul }} Modul</strong>
	      			
	      			{{-- Check id_praktikum occurences in Modul's table --}}
	      			@php
	      				$occur = $modul->where('id_praktikum', $praktikum->id)->get();
	      			@endphp
	      			{{-- if theres is no occurences, then the button below is disabled. Vise versa --}}
	      			@if (count($occur) == 0) 
		      		<a href="/list-modul/{{ $praktikum->id }}" class="secondary-content waves-effect waves-light btn disabled">	
		      			<i class="material-icons left">list</i>List Modul
		      		</a>
		      		@else 
		      		{{-- end --}}

		      		<a href="/list-modul/{{ $praktikum->id }}" class="secondary-content waves-effect waves-light btn">	
		      			<i class="material-icons left">list</i>List Modul
		      		</a>
		      		@endif


		      		{{-- When User is admin --}}
		      		<a href="/add-modul/{{ $praktikum->id }}" class="secondary-content waves-effect waves-light btn" style="margin-right: 5px;">
		      			<i class="material-icons left">add</i>Add Modul
		      		</a>
		      		{{-- End --}}
	      		</div>

	      		{{-- @php
	      			$occur = $modul->where('id_praktikum', $praktikum->id)->get();
	      		@endphp 
	      		<div>
	      			Modul : 
	      			@for($i=0; $i < count($occur); $i++)
	      			<div class="chip">
					    {{ $occur[$i]->judul_modul }}
				  	</div>
	      			@endfor
	      		</div> --}}
	  		</li>
	  		@endforeach
	    </ul>
	</div>
</main>
@endsection

@section('footer')
@include('include.footer')
@endsection