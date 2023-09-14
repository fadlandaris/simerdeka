<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIMERDEKA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --->
    <script src="https://kit.fontawesome.com/b5f1e7184e.js" crossorigin="anonymous"></script>

    <!-- Libraries Stylesheet -->
    <link href="{{ URL::to('lib/animate/animate.min.css'); }}" rel="stylesheet">
    <link href="{{ URL::to('lib/owlcarousel/assets/owl.carousel.min.css'); }}" rel="stylesheet">
    <link href="{{ URL::to('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); }}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::to('css/bootstrap.min.css'); }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ URL::to('css/style.css'); }} ">
</head>

<body>
    <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading</span>
        </div>
        </div>
    <!-- Spinner End -->



    <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="{{ URL::to('img/logo-unj.png'); }}" alt="logo UNJ" width="40px">
        <h2 class="m-0 text-secondary "><i class=" me-3" style="margin-left: -10px"  ></i>SIMERDEKA</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="/home" class="nav-item nav-link {{ Request::is('home') ? 'active' : '' }}">Home</a>
        <div> 
        <a href="{{ $post[0]->category->slug }}" class="nav-item nav-link {{ Request::is('kegiatan-nonmbkm*') ? 'active' : '' }}">Kegiatan non-MBKM</a>  
        <div>
        </div>
        </div>
        <div>
        <a href="{{ $post[0]->category->find(2)->slug }}" class="nav-item nav-link {{ Request::is('kegiatan-mbkm*') ? 'active' : '' }}">Kegiatan MBKM (KAMPUS MERDEKA)</a>
        <div>
        </div>
        </div>
        </div>
        <a href="/login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-arrow-right-from-bracket ms-2"></i></a>
        </div>
        </nav> 
    <!-- Navbar End -->

        
    
    @yield('navbar')
    <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
        <div class="colg-5">
        <div class="">
         <h4 class="text-light mb-4" style="margin-left: 15px">Hubungi Kami</h4>

        <p class="mb-2"><i class="fa fa-map-marker-alt me-3" style="margin-left: 15px"></i> Jl. R.Mangun Muka Raya No.11, RT.11/RW.14, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</p>
        <p class="mb-2"><i class="fa fa-phone-alt me-3" style="margin-left: 15px"></i> humas@unj.ac.id</p>
        <p class="mb-2"><i class="fa fa-envelope me-3" style="margin-left: 15px"></i> (021) 4898486</p>
        <div class="d-flex pt-2">
        </div>
        </div>
        <div class="container">
        <div class="copyright">
        <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        &copy; <a class="border-bottom" href="#" >UPT Teknologi Informasi dan Komunikasi (UPT TIK) UNJ</a>, All Right Reserved.

        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
         Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
        </div>
        </div>
        </div>
        </div>
        </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up">↑</a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('lib/wow/wow.min.js'); }}"></script>
    <script src="{{ URL::to('lib/easing/easing.min.js'); }}"></script>
    <script src="{{ URL::to('lib/waypoints/waypoints.min.js'); }}"></script>
    <script src="{{ URL::to('lib/counterup/counterup.min.js'); }}"></script>
    <script src="{{ URL::to('lib/owlcarousel/owl.carousel.min.js'); }}"></script>
    <script src="{{ URL::to('lib/tempusdominus/js/moment.min.js'); }}"></script>
    <script src="{{ URL::to('lib/tempusdominus/js/moment-timezone.min.js'); }}"></script>
    <script src="{{ URL::to('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); }}"></script>

    <!-- Template Javascript -->
    <script src="{{ URL::to('js/main.js'); }}"></script>
</body>

</html>