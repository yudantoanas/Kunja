@extends('app')

@section('title')
{{ $modul->judul }}
@endsection

@section('other')
<script src="{{ URL::asset('js/pdfobject.js') }}"></script>
<script>
	PDFObject.embed("{{ asset('storage/'.$modul->modul_file) }}", document.body);
</script>
@endsection