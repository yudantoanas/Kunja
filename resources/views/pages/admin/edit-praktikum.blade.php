@extends('app')

@section('header')
@include('include.header')
@endsection

@section('content')
<main class="container">
    <div class="row">
    	<h5>Edit Praktikum</h5>
    </div>
	
	{{-- Display error when validating form --}}
	@if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="row">
		<form method="post" action="/update-praktikum">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{$praktikum->id}}">

			<div class="row">
				<div class="input-field col s12 m10">
		          <input id="nama_praktikum" type="text" class="validate" name="nama_praktikum" value="{{$praktikum->nama_praktikum}}">
		          <label for="nama_praktikum">Nama Praktikum</label>
		        </div>

		        <div class="input-field col s12 m2">
		          <input id="jumlah_modul" type="text" class="validate" name="jumlah_modul" value="{{$praktikum->jumlah_modul}}">
		          <label for="jumlah_modul">Jumlah Modul</label>
		        </div>
			</div>

		    <button class="btn waves-effect waves-light" type="submit" name="action">
		    	Update <i class="material-icons right">send</i>
		  	</button>
		</form>
	</div>
</main>
@endsection

@section('footer')
@include('include.footer')
@endsection