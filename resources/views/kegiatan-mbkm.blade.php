{{-- @dd(session()->all( )) --}}
{{-- @dd($data) --}}
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
    {!! $post->find(7)->body !!}
  </div>
  <div style=" width:30%; float:left" class="wow fadeIn">
    <i class="fa fa-hands-praying fa-3x text-primary flex-shrink-0" style="margin: 0px 0px 20px 0px"></i>
    <p class="p-color"><b>Melatih Kemandirian dalam dunia Kerja dan Masyarakat</b></p>
    {!! $post->find(5)->body !!}
  </div>
  <div style=" width:30%; margin: auto " class="wow fadeIn" >
    <i class="fa fa-chalkboard-user fa-3x text-primary flex-shrink-0" style="margin: 0px 0px 20px 0px"></i>
    <p class="p-color"><b>Mendapatkan Pengalaman yang Nyata Dalam Luar Kelas</b></p>
    {!! $post->find(6)->body !!}
  </div>
</div>
{{-- penjelasan program kegiatan selesai --}}


{{-- pilih kegiatan --}}
<div style="display: flex; justify-content:center" class="animated slideInDown">
  <div class="select">
    <select name="format" id="format" class="selects">
       <option selected disabled>Pilih Kegiatan Kampus Merdeka :</option>
       <option value="pdf">Magang / Praktik Kerja</option>
       <option value="txt">Asistensi Mengajar di Satuan Pendidikan</option>
       <option value="epub">Penelitian / Riset</option>
       <option value="fb2">Proyek Kemanusiaan</option>
       <option value="mobi">Kegiatan Wirausahaan</option>
       <option value="mobi">Studi / Proyek Independen</option>
       <option value="mobi">Membangun Desa / KKN Tematik</option>
       <option value="mobi">Bela Negara</option>
       <option value="mobi">Pertukaran Pelajar</option>
       <option value="mobi">Kegiatan Penelitian Reguler</option>
    </select>
  </div>
  </div>
  
  <div style="display: flex; justify-content:center; margin-top:30px">
    <a href="" class="btn btn-primary py-2 px-4 animated slideInDown">Daftar Sekarang <i class="fa fa-arrow-right ms-2"></i></a>
  </div> 
  {{-- pilih kegiatan selesai --}}

  
<!-- table -->
<div style=" margin: 50px 0px 0px 0px">
  <div class="div-box" >
    <table id="example" class="display" style="width:100%">
        <thead>
          <tr >
            <th>No</th>
            <th>Nama Kegiatan</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Alamat Rumah Tinggal</th>
            <th>Nomor Whatsapp</th>
            <th class="tracking">Progress Tracker </th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $data)
          <tr>
            <td>1</td>
            <td>Tesis</td>
            <td>{{ $nama }} </td>
            <td>{!! session()->get('username') !!}</td>
            <td>{{ $provinsi }}, {{ $kota }}, {{ $alamat }}, {{ $pos }}</td>
            <td>{{ $nomorHp }}</td>
            <td><div class="container-progress">
                <ol class="progress-meter">
                  <li class="progress-point done">Pengajuan</li><li class="progress-point done">Pemilihan Dosbing</li><li class="progress-point done">Pelaporan Nilai</li><li class="progress-point todo">Konversi KRS</li>
                </ol>
            </div>
            </td>
            <td>Belum Selesai</td>
          </tr>
          @endforeach
      </table>
    </div>
  </div>
      <script>
        new DataTable('#example');
      </script>
</body>
</html>
@endsection