@extends('app')

@slot("title")

@endslot

@section('header')
    @include('include.header')
@endsection

@section('content')

    <main class="container">
        <div class="row">
            <h5>Tambah Praktikum</h5>
        </div>

        @if($errors->has('nama_praktikum'))
            <p>{{$errors->first('nama_praktikum')}}</p>
        @endif
        @if($errors->has('jumlah_modul'))
            <p>{{$errors->first('jumlah_modul')}}</p>
        @endif

        <div class="row">
            <form method="post" action="/store-praktikum">
                {{ csrf_field() }}

                <div class="row">
                    <div class="input-field col s12 m10">
                        <input id="nama_praktikum" type="text" class="validate" name="nama_praktikum">
                        <label for="nama_praktikum">Nama Praktikum</label>
                    </div>

                    <div class="input-field col s12 m2">
                        <input id="jumlah_modul" type="text" class="validate" name="jumlah_modul">
                        <label for="jumlah_modul">Jumlah Modul</label>
                    </div>
                </div>


                <button class="btn waves-effect waves-light blue" type="submit" name="action">
                    Submit <i class="material-icons right">send</i>
                </button>
            </form>
        </div>
    </main>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@section('other-js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.modal').modal();
        });
    </script>
@endsection