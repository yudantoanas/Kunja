@extends('app')

@section('title')
{{ $modul->judul }}
@endsection

@section('header')
@include('include.header')
@endsection

@section('content')
<main>
	<div class="row" style="height: 85vh; margin: 0;">
		<div id="pdf" class="col s12 m7" style="padding: 0; height: 100%;"></div>
		<div class="col s12 m5">
			<div class="container" style="padding-top: 30px;">
				<form method="post" action="/eval-test/{{ $modul->no_modul }}">
					{{ csrf_field() }}
					<input type="hidden" name="test_id" value="{{ $modul->id }}">
					<input type="hidden" name="praktikum_id" value="{{ $modul->praktikum->id }}">
					<input type="hidden" name="praktikum" value="{{ $modul->praktikum->nama_praktikum }}">

					<div class="row">
						<div class="input-field col s12 m3">
							<input type="text" name="nama_praktikan" id="nama" required>
							<label for="nama">Nama</label>
						</div>
						<div class="input-field col s12 m3">
							<input type="text" name="nim_praktikan" id="nim" required>
							<label for="nama">NIM</label>
						</div>
						<div class="input-field col s12 m3">
							<input type="text" name="kelas_praktikan" id="kelas" required>
							<label for="kelas">Kelas</label>
						</div>
						<div class="input-field col s12 m3">
							<input type="text" name="shift_praktikan" id="shift" required>
							<label for="shift">Shift</label>
						</div>
					</div>

				    @for($i=0; $i < 10; $i++)
				    <div class="row">
			    		<strong class="col s2">{{ $i+1 }}</strong>

			    			{{-- Looping the options --}}
				    		@for($j=1; $j <= 5; $j++)
				    		@php
				    			$value = "";
				    			if ($j == 1) {
				    				$value = "a";
				    			} elseif ($j == 2) {
				    				$value = "b";
				    			} elseif ($j == 3) {
				    				$value = "c";
				    			} elseif ($j == 4) {
				    				$value = "d";
				    			} elseif ($j == 5) {
				    				$value = "e";
				    			}
				    		@endphp
				    		<div class="col s2 radio">
				    			<input name="answer[{{ $i }}]" type="radio" id="test{{ $i.$j }}" class="with-gap" value="{{ $value }}" />
					      		<label for="test{{ $i.$j }}">{{ strtoupper($value) }}</label>
				    		</div>
				    		@endfor
				    </div>
				    @endfor
				    <button class="btn waves-effect waves-light blue white-text right" type="submit" name="action" style="margin-bottom: 20px">Submit
				    	<i class="material-icons right">send</i>
				  	</button>
				    {{-- end of loop --}}
			    </form>
			</div>
		</div>
	</div>
</main>
@endsection

@section('footer')
@include('include.footer')
@endsection

@section('other-js')
<script src="{{ URL::asset('js/pdfobject.js') }}"></script>
<script type="text/javascript">
    PDFObject.embed("{{ asset('storage/' . $modul->tesawal_file) }}", '#pdf');
</script>
@endsection
