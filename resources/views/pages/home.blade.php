@extends('app')

@section('header')
@include('include.header')
@endsection

@section('css')
<style media="screen">
  .full-height {
    min-height: 600px;
  }
  .parallax-container {
      height: 600px;
    }
</style>
@endsection

@section('content')
<main class="container">
  <div class="row full-height valign-wrapper">
    <div class="col m12 center" style="padding: 100px;">
      <img src="{{ asset('imgs/logo-ead-trans.png') }}" width="50%">
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col m12">
      <h3>Tentang Kami</h3>
      <p align="justify">Laboratorium Enterprise Application Development (EAD) merupakan salah satu laboratorium yang berada di bawah naungan Fakultas Rekayasa Industri dan termasuk laboratotium prodi Sistem Informasi. Laboratorium EAD merupakan pecahan dari Laboratorium PRODASE.
         Praktikum yang di handle oleh EAD berjumlah 5 praktikum, diantaranya yaitu Object-Oriented Programming (OOP), Basis Data (Basdat) SI, Basis Data (Basdat) TI, Web Application Development (WAD), dan Mobile Application Development.</p>
    </div>
  </div>
  <hr>
  <h3>Daftar Asisten</h3>
  <div class="row">
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/tfd.png')}}">
    <p class="name">TFD</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/ncp.png')}}">
    <p class="name">NCP</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/aha.png')}}">
    <p class="name">AHA</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/rft.png')}}">
    <p class="name">RFT</p>
    </div>

    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/igo.png')}}">
    <p class="name">IGO</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/san.png')}}">
    <p class="name">SAN</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/oji.png')}}">
    <p class="name">OJI</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/gwd.png')}}">
    <p class="name">GWD</p>
    </div>

    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/aul.png')}}">
    <p class="name">AUL</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/kna.png')}}">
    <p class="name">KNA</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/maa.png')}}">
    <p class="name">MAA</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/bay.png')}}">
    <p class="name">BAY</p>
    </div>

    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/ken.png')}}">
    <p class="name">KEN</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/ham.png')}}">
    <p class="name">HAM</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/naj.png')}}">
    <p class="name">NAJ</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/nub.png')}}">
    <p class="name">NUB</p>
    </div>

    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/vny.png')}}">
    <p class="name">VNY</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/dnn.png')}}">
    <p class="name">DNN</p>
    </div>
    <div class="col m3">
    <img class="profpic" src="{{ asset('imgs/foto/zak.png')}}">
    <p class="name">ZAK</p>
    </div>
    <div class="col m3"></div>
  </div>
</main>
@endsection

@section('footer')
@include('include.footer')
@endsection

@section('other')
  <script type="text/javascript">
  $(document).ready(function(){
    $('.parallax').parallax();
  });
  </script>
@endsection
