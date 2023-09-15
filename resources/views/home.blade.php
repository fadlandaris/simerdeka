{{-- @dd(session()->all('')) --}}
{{-- {{ session()->get('mode') }} --}}
@extends('layouts.main')
@section('navbar')
    

 {{-- pop up start --}}
<style>
div#popup.popup{
    padding: 7px;
    justify-content: center;
    display: flex;
    
    
}
.popup p {
    display: inline;
    text-align: center;
    margin: 2px;

}
.popup {
    font-size: 16px;
    display: block;
    position: fixed;
    width: 25%;
    top: 90px;
    height: 40px;
    background-color: rgba(113, 216, 166 ,0.98);
    color:#ffffff;
    border-radius: 4px;
    transition: opacity 0.8s ease-in-out; / Smooth fade transition */
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    z-index: 200;

}

.popup-content {
    text-align: center;
    padding-right: 10px;
    width: 100%;    
}
</style>

<div style="display:flex; justify-content:center;">
    <div id="popup" class="popup">
         <p>SELAMAT DATANG,</p>
         <p style="font-weight: 500;">{{ session()->get('nama') }} !</p>
    </div>
</div>

{{-- popupend --}}


   <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ URL::to('img/carousel-bg-1.jpg'); }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">AKADEMIK KEMAHASISWAAN</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown" style="letter-spacing: 2px">SISTEM INFORMASI LAYANAN ADMINISTRASI MAHASISWA</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="{{ URL::to('img/logo-unj.png'); }}" width="300px" style="margin-left: 150px"  alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ URL::to('img/carousel-bg-2.jpg'); }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Tata Cara Pendaftaran</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown" style="letter-spacing: 2px">PANDUAN LENGKAP DALAM PENDAFTARAN KEGIATAN</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Baca Selengkapnya <i class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Carousel End -->

    <!-- NON-MBKM -->

        <div class="container" style="margin-top: -50px">
            <div style="padding-left: 10px">
                <div class="col-md-6 col-lg-4 text-left wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-black mb-0" >Daftar Kegiatan</h2>
                    <p class="text-black mb-0 " >Berikut Kegiatan <b style="color: #71D8A6">  non-MBKM </b> yang Bisa Anda Lakukan Sesuai dengan Progress Perkuliahan Anda</p>  
                    <div>
                        <hr style="height: 7px; color:#71D8A6; width:30%">
                    </div>   
                </div>
            </div>
        </div>
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-chalkboard-user fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Laporan akhir studi</h5>
                            <p>Dapat digunakan untuk perijianan Kerja Praktik di instansi, disertai dengan Surat Tugas Kerja Praktik bagi yang membutuhkan.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/laporan-akhir-studi">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-chalkboard-user fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Bimbingan Akademis</h5>
                            <p>Dapat digunakan untuk melakukan pendaftaran beasiswa seperti PPA,BBM, disertakan persyaratan yang dibutuhkan.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/bimbingan-akademis">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-book-open-reader fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Tesis</h5>
                            <p>Dapat digunakan untuk pengajuan cuti untuk mahasiswa Sarjana, Magister maupun Doktor dengan syarat yang berlaku.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/tesis">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-book-open-reader fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Disertasi</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/disertasi">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-book-open-reader fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Skripsi</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/skripsi">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-book-open-reader fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Tugas Akhir</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/tugas-akhir">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-person-digging fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Kerja Praktik / PKL</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/kerja-praktik">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-person-digging fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Kuliah Kerja Nyata</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/kuliah-kerja-nyata">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-brush fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Program Kreativitas Mahasiswa</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/program-kreativitas-mahasiswa">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-trophy fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Kompetisi</h5>
                            <p>Dapat digunakan untuk perijianan Kerja Praktik di instansi, disertai dengan Surat Tugas Kerja Praktik bagi yang membutuhkan.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/kompetisi">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-users-line fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Aktivitas Kemahasiswaan</h5>
                            <p>Dapat digunakan untuk melakukan pendaftaran beasiswa seperti PPA,BBM, disertakan persyaratan yang dibutuhkan.</p>
                            <a class="text-secondary border-bottom" href="/nonmbkm/aktivitas-kemahasiswaan">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <!-- NON-MBKM -->


                
                <!--  MBKM -->
                <div style="margin-top: 0px">
                    <div class="col-md-6 col-lg-4 text-left wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-check fa-2x text-white mb-3"></i>
                        <h2 class="text-black mb-0 " >Daftar Kegiatan MBKM</h2>
                        <p class="text-black mb-0 " >Berikut Kegiatan <b style="color: #71D8A6">  MBKM </b> yang Bisa Anda Lakukan Sesuai dengan Progress Perkuliahan Anda</p>  
                        <div>
                            <hr style="height: 7px; color:#71D8A6; width:30%">
                        </div>      
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-chalkboard-user fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3"> Asistensi Mengajar di Satuan Pendidikan (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk pengajuan cuti untuk mahasiswa Sarjana, Magister maupun Doktor dengan syarat yang berlaku.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-graduation-cap fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Pertukaran Pelajar (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-book-open-reader fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Penilitian / Riset (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-book-open-reader fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3"> Kegiatan Penilitian Reguler (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-person-digging fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Membangun Desa / Kuliah Kerja Nyata Tematik (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-person-digging fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Magang / Praktik Kerja (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-store fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Kegiatan Wirausaha (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk pengajuan permohonan data ke instansi baik untuk penelitian, Tugas Akhir, Thesis, Disertasi, dll.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-users-line fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Proyek Kemanusiaan (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk perijianan Kerja Praktik di instansi, disertai dengan Surat Tugas Kerja Praktik bagi yang membutuhkan.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-trophy fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Studi / Proyek Independen (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk melakukan pendaftaran beasiswa seperti PPA,BBM, disertakan persyaratan yang dibutuhkan.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 40px">
                    <div class="d-flex py-5 px-4" style="background-color: whitesmoke">
                        <i class="fa fa-person-military-rifle fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Bela Negara (Kampus Merdeka)</h5>
                            <p>Dapat digunakan untuk pengajuan cuti untuk mahasiswa Sarjana, Magister maupun Doktor dengan syarat yang berlaku.</p>
                            <a class="text-secondary border-bottom" href="">Baca Selengkapnya ▸</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-laptop fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">215</h2>
                    <p class="text-white mb-0">Pengunjung Hari Ini</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">207890</h2>
                    <p class="text-white mb-0">Total Pengunjung</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-explosion fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">378</h2>
                    <p class="text-white mb-0">Hits Hari Ini</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-user fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">12</h2>
                    <p class="text-white mb-0">Pengunjung Online</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        
document.addEventListener("DOMContentLoaded", function () {
    const popup = document.getElementById("popup");

    // Show the popup with a slight delay
    setTimeout(() => {
        popup.style.opacity = 1;
    }, 100);

    // Function to remove the popup
    function closePopup() {
        popup.style.opacity = 0;
        setTimeout(() => {
            popup.style.display = "none";
        }, 500); // Wait for the transition to complete before hiding
    }

    // Automatically close the popup after 3 seconds
    setTimeout(closePopup, 3000);
});


    </script>
    <!-- Fact End -->

    @endsection