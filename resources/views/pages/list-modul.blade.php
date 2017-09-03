@extends('app')

@section('header')
    @include('include.header')
@endsection

@section('content')

    <main class="container">
        <div class="center">
            <h4>Modul {{ $nama_praktikum }}</h4>
        </div>
        <div class="row">
            @foreach($datas as $modul)
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('storage/modul-oop.png') }}">

                            <!-- check if test akhir status is checked -->
                            <!-- <a class="btn-floating halfway-fab waves-effect waves-light red" style="right: 120px;"><i class="material-icons">add</i></a> -->

                            <a href="{{ URL('modul/' . $modul->no_modul) . '/' . 'test/' }}"
                               class="btn-floating halfway-fab waves-effect waves-light red" style="right: 72px;"><i
                                        class="material-icons">assignment</i></a>
                            <a href="{{ URL('modul/' . $modul->id) }}" target="_blank"
                               class="btn-floating btn-large halfway-fab waves-effect waves-light blue"
                               style="right: 10px;"><i class="material-icons">open_in_new</i></a>
                        </div>
                        <div class="card-content" style="background-color: ghostwhite;">
                            <span class="card-title"
                                  style="color: black;">Modul {{ $modul->no_modul. ' : ' .$modul->judul_modul }}</span>
                            @if(Auth::user())
                                <a href="{{ route('edit', ['id' => $modul->id]) }}}">Edit</a>
                            @endif
                        </div>
                    </div>
                </div>

                @if(Auth::user())
                    <div>
                        <a href="{{ URL($id_praktikum . '/add-modul') }}"
                           class="btn-floating fab-bottom-right btn-large waves-effect waves-light red"><i
                                    class="material-icons">add</i></a>
                    </div>
        @endif
    </main>
@endsection

@section('footer')
    @include('include.footer')
@endsection

@section('other-js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.tooltipped').tooltip({delay: 50});
        });
    </script>
@endsection
