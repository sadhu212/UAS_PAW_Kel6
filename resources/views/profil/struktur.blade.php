<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GARDA RELAWAN INDONESIA SEMESTA</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
</head>

<!-- Navigation-->
@include('komponen.navbar')
<!-- Masthead-->
<header class="masthead">
    <div class="container con_background">
        <div class="masthead-subheading animate__animated animate__fadeInUp">Struktur Organisasi</div>
        <div class="masthead-heading text-uppercase animate__animated animate__fadeInDown">Garda Relawan Indonesia Semesta</div>
    </div>
    <div class="overlay">
    </div>
</header>
<!-- BODY VISI MISI -->
<section class="page-visi" id="about">
    <div class="container visi  mt-5">
        <ul class="nav nav-pills mb-5 justify-content-center animate__animated animate__backInDown" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-1" data-bs-toggle="pill" data-bs-target="#pills-struktur1" type="button" role="tab" aria-controls="pills-struktur1" aria-selected="true">DEWAN PIMPINAN PUSAT</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-2" data-bs-toggle="pill" data-bs-target="#pills-struktur2" type="button" role="tab" aria-controls="pills-struktur2" aria-selected="false">DEWAN PIMPINAN DAERAH</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-3" data-bs-toggle="pill" data-bs-target="#pills-struktur3" type="button" role="tab" aria-controls="pills-struktur3" aria-selected="false">DEWAN PIMPINAN CABANG</button>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContetn">
            <div class="tab-pane fade show active" id="pills-struktur1" role="tabpanel" aria-labelledby="pills-1">
                <div class="row justify-content-center align-items-center">
                    <div class="wow animate__animated animate__fadeIn content-card text-center">
                        <h2 class="font-weight-bold mb-3" style="color:#7D2639;">Dewan Pimpinan Pusat</h2>
                        <img src="{{asset('img/ContenPusat.png')}}" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-struktur2" role="tabpanel" aria-labelledby="pills-2">
                <div class="row justify-content-center align-items-center">
                    <div class="wow animate__animated animate__fadeIn content-card text-center">
                        <h2 class="font-weight-bold mb-3" style="color:#7D2639;">Dewan Pimpinan Daerah</h2>
                        <img src="{{asset('img/ContentDaerah.png')}}" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-struktur3" role="tabpanel" aria-labelledby="pills-3">
                <div class="row justify-content-center align-items-center">
                    <div class="wow animate__animated animate__fadeIn content-card text-center">
                        <h2 class="font-weight-bold mb-3" style="color:#7D2639;">Dewan Pimpinan Cabang</h2>
                        <img src="{{asset('img/ContentCabang.png')}}" class="img-fluid" alt="...">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<img class="img-fluid" width="100%" src="{{asset('img/WaveBawah.png')}}" alt="">
@include('komponen.footer')
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->

<!-- Bootstrap core JS-->
@include('layouts.js')