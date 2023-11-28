{{-- @dd(session()->all( )) --}}
{{-- @dd($kegiatanMBKM) --}}
@extends('layouts.main')
@section('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran </title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ URL::to('css/content.css'); }}">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 
     <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
     <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="{{ URL::to('lib/wow/wow.min.js'); }}"></script>
     <script src="{{ URL::to('lib/easing/easing.min.js'); }}"></script>
     <script src="{{ URL::to('lib/waypoints/waypoints.min.js'); }}"></script>
     <script src="{{ URL::to('lib/counterup/counterup.min.js'); }}"></script>
     <script src="{{ URL::to('lib/owlcarousel/owl.carousel.min.js'); }}"></script>
     <script src="{{ URL::to('lib/tempusdominus/js/moment.min.js'); }}"></script>
     <script src="{{ URL::to('lib/tempusdominus/js/moment-timezone.min.js'); }}"></script>
     <script src="{{ URL::to('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); }}"></script>
</head>
<body>


 <!-- bg image --> 
  <div class="banner2" >
    <div style="display: flex; justify-content:center;">
      <h3>PENDAFTARAN KEGIATAN MBKM (KAMPUS MERDEKA) </b></h3>
    </div>
  </div>
{{-- bg image end --}}


{{-- spacing penjelasan --}}
<h2 class="h2-spacing wow fadeInUp" style="margin-top:30px">Apa yang Kamu Dapatkan ?</h2>
<div class="div-2" >
<hr > 
</div>
<div class="div_1 wow fadeIn" >
  <div style=" width:30%; float:right;">
    <i class="fa fa-building fa-3x text-primary flex-shrink-0" style="margin: 0px 0px 20px 0px"></i>
    <p class="p-color"><b>Pengalaman Serta Pengembangan Dalam Dunia Kerja</b></p>
    <p>Kegiatan Kampus Merdeka memiliki beberapa fungsi penting yang dirancang untuk meningkatkan <mark>kualitas pendidikan tinggi, mempersiapkan mahasiswa untuk tantangan dunia kerja, dan memberikan dampak positif pada masyarakat</mark></p>
  </div>
  <div style=" width:30%; float:left" class="wow fadeIn">
    <i class="fa fa-hands-praying fa-3x text-primary flex-shrink-0" style="margin: 0px 0px 20px 0px"></i>
    <p class="p-color"><b>Melatih Kemandirian dalam dunia Kerja dan Masyarakat</b></p>
    <p>Kegiatan Kampus Merdeka adalah salah satu inisiatif pendidikan tinggi yang dicanangkan oleh pemerintah Indonesia. Inisiatif ini bertujuan untuk<mark>memberikan kemandirian dalam menghadapi tantangan di dunia kerja dan masyarakat.</mark></p>
  </div>
  <div style=" width:30%; margin: auto " class="wow fadeIn" >
    <i class="fa fa-chalkboard-user fa-3x text-primary flex-shrink-0" style="margin: 0px 0px 20px 0px"></i>
    <p class="p-color"><b>Mendapatkan Pengalaman yang Nyata Dalam Luar Kelas</b></p>
    <p>Kampus Merdeka didasarkan pada pendekatan yang lebih fleksibel terhadap pendidikan tinggi, <mark>memungkinkan mahasiswa untuk memilih mata kuliah lintas disiplin dan mendapatkan pengalaman nyata di luar kelas.</mark></p>
  </div>
</div>
{{-- penjelasan program kegiatan selesai --}}

  
<!-- table dan pilih kegiatan -->\
<form method="POST" action="{{ route('tambahMahasiswa') }}">
  @csrf
<div class="animated slideInDown" style="margin-top: -2rem;">
  <div class="select">
    <select name="jenis_kegiatan" id="kegiatanDropdown">
        <option value="none" selected disabled hidden>Pilih kegiatan Kampus Merdeka :</option>
        @foreach ($kegiatanMBKM as $kegiatan)
          <option value="{{ $kegiatan->kegiatan }}" >{{ $kegiatan->kegiatan }}</option>
        @endforeach
      </select>
    </div>
</div>
<div class="div-tambah">
    
    <input type="submit" value="Daftar Kegiatan Sekarang" class="button-tambah btn btn-primary px-4 py-2">
    {{-- <button class="button-tambah btn btn-primary px-4 py-2" method="post" action="/tambah-mahasiswa">Daftar Kegiatan Sekarang</button> --}}
  </div>
</form>

<div class="table-container" >
<p class="search-text">Search :  <input class="search-bar" id="myInput" type="text" placeholder="" onkeydown="searchTable()" /></p>
<table id="myTable" style="width: 100%">
  <thead>
    <tr>
      <th style="width: 10px">No</th>
      <th>Nama <br />Mahasiswa / NIM</th>
      <th style="width: 10rem;">Nama <br />Kegiatan</th>
      <th>No. Whatsapp</th>
      <th>Nama Prodi</th>
      <th>Progresss Tracker</th>
    </tr>
  </thead>
  <tbody id="table-body">
    <tr>
    </tr>
  </tbody>
</table>
</div>
<!-- table dan pilih kegiatan selesai -->

<script>
  function searchTable() {
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[2]; // Change the index to the column you want to search
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  let tableData = JSON.parse(localStorage.getItem("tableData")) || [];
  renderData();

  function renderData() {
    let dataHTML = "";

    for (i = 0; i < tableData.length; i++) {
      const data = tableData[i];
      const html = `
      <tr>
        <td>${i + 1}</td>
        <td>{{ $nama }} / {!! session()->get('username') !!}</td>
        <td>${data}</td>
        <td>{{ $nomorHp }}</td>
        <td>{{ $fakultas}} - {{ $prodi }} - {{ $jenjang }}</td>
        <td> <div class="container-progress">
              <ol class="progress-meter">
                <li class="progress-point done">Pengajuan</li><li class="progress-point todo">Pemilihan Dosbing</li><li class="progress-point todo">Pelaporan Nilai</li><li class="progress-point todo">Konversi KRS</li>
              </ol>
          </div>
        </td>
      </tr>`;
      dataHTML += html;
    }
    document.getElementById("table-body").innerHTML = dataHTML;
  }

  function addData() {
    const inputElement = document.getElementById("kegiatanDropdown");
    console.log(inputElement.value);
    const name = inputElement.value;
    if (name === "none") {
      return;
    } else {
      tableData.push(name);
      localStorage.setItem("tableData", JSON.stringify(tableData));
      renderData();
    }
  }
</script>
</body>
</html>
@endsection