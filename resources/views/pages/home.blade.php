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
    <div class="col m12 center">
      <h4>Dasar Pemrograman Lab</h4>
      <p class="flow-text">Impossible is nothing</p>
    </div>
  </div>

  <div class="row">
    <div class="col m12">
      <h5>Tentang Kami</h5>
      <p>Laboratorium Dasar Pemrograman (DASPRO) merupakan salah satu laboratorium yang berada di bawah naungan Fakultas Rekayasa Industri dan termasuk laboratotium prodi Sistem Informasi. Laboratorium Daspro mulai berdiri pada tahun 2016. Laboratorium Daspro merupakan pecahan dari Laboratorium PRODASE. Sesuai dengan namanya, Daspro bergerak di bidang dasar programming seperti algoritma pemrograman dll.
         Praktikum yang di handle oleh Daspro berjumlah 4 praktikum, diantaranya Algoritma Pemrograman (ALPRO) TI, Algoritma Pemrograman (ALPRO) SI, Struktur Data (Strukdat), Basis Data (Basdat) TI. Laboratorium Daspro beranggotakan mahasiswa dari tahun 1 hingga tahun ke 3 semester 5. Untuk periode saat ini Laboratorium Daspro memiliki  orang asisten aktif yang terdiri dari 18 orang asisten angkatan 2015.</p>
    </div>
  </div>
  <div class="row">
    <div class="col m12">
      <h5>Daftar Asisten</h5>
      <table class="table">
        <thead>
          <tr>
            <th>Kode Asisten</th>
            <th>Nama Lengkap</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>TFD</td>
            <td>Taufan Fadhilah Iskandar</td>
          </tr>
          <tr>
            <td>NCP</td>
            <td>Nur Cahyadi Perdana</td>
          </tr>
          <tr>
            <td>AUL</td>
            <td>Siti Aulia Noor</td>
          </tr>
          <tr>
            <td>ZAK</td>
            <td>Muhammad Reza Effendy</td>
          </tr>
          <tr>
            <td>KEN</td>
            <td>Niken Febriani Kusumawati</td>
          </tr>
          <tr>
            <td>RFT</td>
            <td>Siti Raftiana Putri</td>
          </tr>
          <tr>
            <td>AHA</td>
            <td>Amri Hanif</td>
          </tr>
          <tr>
            <td>OJI</td>
            <td>Aji Nur Laksono</td>
          </tr>
          <tr>
            <td>BAY</td>
            <td>Bayu Ariantika Irsan</td>
          </tr>
          <tr>
            <td>IGO</td>
            <td>Yudanto Anas Nugroho</td>
          </tr>
          <tr>
            <td>KNA</td>
            <td>Khania Putri Kusuma Dewi</td>
          </tr>
          <tr>
            <td>GWD</td>
            <td>Ginanjar Widya Pamungkas</td>
          </tr>
          <tr>
            <td>NUB</td>
            <td>Ghuniyu Fattah Rozaq</td>
          </tr>
          <tr>
            <td>HAM</td>
            <td>Muhammad Ilham</td>
          </tr>
          <tr>
            <td>VNY</td>
            <td>Veny Amilia Fitri</td>
          </tr>
          <tr>
            <td>SAN</td>
            <td>Muhamad Ikhsan Laisa</td>
          </tr>
          <tr>
            <td>MAA</td>
            <td>Moh. Akbar Anshory</td>
          </tr>
          <tr>
            <td>DNN</td>
            <td>Filhan Dennis</td>
          </tr>
        </tbody>
      </table>
    </div>
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
