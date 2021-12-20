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
        <div class="masthead-subheading wow animate__animated animate__fadeInUp">Visi dan Misi</div>
        <div class="masthead-heading text-uppercase wow animate__animated animate__fadeInDown ">Garda Relawan Indonesia Semesta</div>
    </div>
    <div class="overlay">
    </div>
</header>
<!-- BODY VISI MISI -->
<section class="page-visi" id="about">
    <div class="container visi  mt-5">
        <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active animate__animated animate__rotateInUpRight" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Visi & Misi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link  animate__animated animate__rotateInUpLeft" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Prinsip Dasar</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContetn">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row justify-content-center align-items-center">
                    <div class="wow animate__animated animate__fadeIn content-card text-center">
                        <h2 class="font-weight-bold" style="color:#7D2639;">VISI</h2>
                        <p>Mencari figur pemimpin nasional guna mewujudkan indonesia lebih maju dan sejahtera berdasarkan PANCASILAdan UUD 1945.</p>
                    </div>
                </div>
                <div class="wow animate__animated animate__fadeIn container misi mt-5 mb-5">
                    <div class="row justify-content-center align-items-center">
                        <div class="content-card">
                            <h2 class="font-weight-bold text-center" style="color:#7D2639;">MISI</h2>
                            <ol type="none" style=" line-height:30px; ">
                                <li>Mempersiapkan kader terbaik bangsa di dalam organisasi guna memperjuangkan aspirasi masyarakat baik di tingkat daerah maupun nasional</li>
                                <li>Sebagai Organisasi relawan terdepan, garis aktif di dalam memberikan ide yang konstruktif kepada pemerintah guna memajukan Bangsa dan Negara</li>
                                <li>Menyelanggarakan kegiatan yang berkaitan dengan wawasan kebangsaan, praktek tentang UMKM serta memberikan pendampingan kepada masyarakat tentang Industrif Kreatif berbasis kearifan lokal</li>
                                <li>membentuk dan memperkuat jaringan Ekonomi, Sosial dan Budaya sampai dengan tingkat kelurahan atau desa</li>
                                <li>Menjalin komunikasi dan kerjasama dengan pihak pihak terkait guna mendukung tercapainya Visi dan Misi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row justify-content-center align-items-center">
                    <div class="wow animate__animated animate__fadeIn content-card text-center">
                        <h2 class="font-weight-bold mb-3" style="color:#7D2639;">PRINSIP DASAR</h2>
                        <img src="{{asset('img/prinsipdasar.png')}}" class="img-fluid" alt="...">
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