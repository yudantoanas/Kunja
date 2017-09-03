@extends('app')

@section('header')
    @include('include.header')
@endsection

@section('content')
    <main class="container">
        {{-- Display error when validating form --}}
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <h5>Tambah Modul : {{ $dataPraktikum->nama_praktikum }}</h5>
                <input type="hidden" name="id_praktikum" value="{{ $dataPraktikum->id }}">
            </div>

            <div class="row">
                <div class="input-field col s1">
                    <input id="no_modul" type="text" 1lass="validate" name="no_modul">
                    <label for="no_modul">No</label>
                </div>

                <div class="input-field col s11">
                    <input id="judul" type="text" class="validate" name="judul_modul">
                    <label for="judul">Judul Modul</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input id="penyusun" type="text" class="validate" name="penyusun_modul">
                    <label for="penyusun">Penyusun</label>
                </div>
            </div>

            <div class="row">
                <div class="file-field input-field col s12 m6">
                    <div class="btn blue" style="border-radius: 5px;">
                        <span><i class="material-icons">insert_photo</i></span>
                        <input type="file" name="modul_image">
                    </div>
                    <div class="file-path-wrapper">
                        <input placeholder="Upload Cover Image" class="file-path validate" type="text">
                    </div>
                </div>

                <div class="file-field input-field col s12 m6">
                    <div class="btn blue" style="border-radius: 5px;">
                        <span><i class="material-icons">cloud_upload</i></span>
                        <input type="file" name="modul_file">
                    </div>
                    <div class="file-path-wrapper">
                        <input placeholder="Upload Modul .pdf" class="file-path validate" type="text">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="file-field input-field col s12 m6">
                    <div class="btn blue" style="border-radius: 5px;">
                        <span><i class="material-icons">insert_drive_file</i></span>
                        <input type="file" name="tesawal_file">
                    </div>
                    <div class="file-path-wrapper">
                        <input placeholder="Upload Tes Awal .pdf" class="file-path validate" type="text" style="color: ;">
                    </div>
                </div>
            </div>

            <div class="row">
                <button class="btn waves-effect waves-light blue" type="submit" name="action" style="width: 100%;">
                    Submit
                </button>
            </div>
            </div>
        </form>
    </main>
@endsection

@section('footer')
    @include('include.footer')
@endsection
