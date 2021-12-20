<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PAW CEPAT</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('komponen.navbar')
    <!-- Masthead-->
    <header class="masthead">
        <div class="container con_background">
            <div class="masthead-subheading animate__animated animate__fadeInLeft">PAW CEPAT</div>
            <div class="masthead-heading text-uppercase animate__animated animate__fadeInRight">JASA ANTAR KIRIM SELURUH INDONESIA</div>
        </div>
        <div class="overlay">
        </div>
    </header>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="wow animate__animated animate__fadeInUp">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">PAW CEPAT</h2>
                </div>
                <div class="container isi">
                    <p class="text-center">PAW CEPAT adalah jasa pengiriman barang terpercaya nomor 1 di Indonesia dan sudah berdiri sejak tahun 1999. Jasa pengiriman barang ini didirikan
                        oleh 2 Mahasiswa Atma Jaya Yogyakarta yang bernama Maria Elvina Siti dan I Gusti Putu Pramudya Sadhu Dharma. Jasa pengiriman ini sudah dipercaya oleh masyarakat Indonesiadan menjadikan jasa pengirimanyang paling
                        laris dan mempunyai kelebihan dari layanan jasa antar yang lain.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="card">
        @include('InfoBerita')
    </section>

    <section class="card">
        @include('komponen.peta')
    </section>

    <img class="img-fluid" src="{{asset('img/WaveBawah.png')}}" width="100%" alt="">
    @include('komponen.footer')
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->

    <!-- Bootstrap core JS-->
</body>

@include('layouts.js')

</html>