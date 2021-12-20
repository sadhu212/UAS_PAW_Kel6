<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Term & How To Register</title>
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
        <div class="masthead-subheading animate__animated animate__rotateInUpLeft">PAW CEPAT</div>
        <div class="masthead-heading text-uppercase animate__animated animate__rotateInUpRight">Term</div>
    </div>
    <div class="overlay">
    </div>
</header>

<!-- ISI TERM (KETENTUAN ) -->
<section class="page-visi">
    <div class="container visi text-center mt-5 animated__animate animate__fadeIn">
        <h3>Kentetuan untuk pengiriman barang</h3>
        <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active animate__animated animate__rotateInUpRight" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ketentuan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link  animate__animated animate__rotateInUpLeft" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cara Registrasi</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContetn">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="animate__animated animate__fadeIn container misi mt-5 mb-5">
                    <div class="row justify-content-center align-items-center">
                        <div class="content-card">
                            <h2 class="font-weight-bold text-center  mb-5" style="color:#7D2639;">Ketentuan Pengiriman Barang</h2>
                            <ul type="number" class="text-left" style=" line-height:30px; box-shadow: 7px 10px 25px -9px rgb(0 0 0 / 52%);">
                                <li>Pengirim harus mengemas paket dengan benar untuk melindungi isi paket sebelum dikirimkan, untuk menghindari timbulnya kerusakan dengan paket</li>
                                <li>Pengirim harus memberitahukan dengan jelas dari isi paket yang akan dikirimkan</li>
                                <li>PAW CEPAT melarang pengiriman barang seperti hewan, obat-obatan, senjata, dan bahan yang mudah terbakar</li>
                                <li>PAW CEPAT berhak untuk memeriksa paket pengirim yang ingin dikirim (opsional) </li>
                                <li>Dalam proses pengiriman, PAW CEPAT tidak menjamin seluruh proses yang akan berjalan, jika terjadi sesuatu yang tidak diinginkan bukan menjadi tanggung jawab kami</li>
                                <li>Pengirim bertanggung jawab untuk melindungi paket dengan asuransi yang memadai</li>
                                <li>PAW CEPAT tidak akan memberikan ganti rugi terhadap pengirim akibat kejadian atau hal hal yang tidak diinginkan</li>
                                <li>Jika tidak ada komplain dari penerima saat paket dikirimkan, maka paket dianggap telah diterima dengan baik dan benar</li>
                                <li>Pengaduan atas kehilangan atau kerusakan harus disampaikan oleh pengirim paling lambat 3 hari setelah paket sampai di penerima</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row justify-content-center align-items-center">
                    <div class="animate__animated animate__fadeIn content-card text-center">
                    <h2 class="font-weight-bold text-center mb-5" style="color:#7D2639;">Ketentuan Pendaftaran Customer</h2>
                    <ul type="number" class="text-left" style=" line-height:30px; box-shadow: 7px 10px 25px -9px rgb(0 0 0 / 52%);">
                                <li>Pengguna wajib memilih opsi Login pada Navbar diatas</li>
                                <li>Pengguna wajib mengisi form yang tersedia seperti Nama, Email, dan Password</li>
                                <li>Pengguna wajib menggunakan email yang telah aktif</li>
                                <li>Pengguna wajib memverifikasi email yang telah di daftarkan</li>
                                <li>Setelah itu pengguna bisa melakukan transaksi</li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include ('komponen.footer')

@include('layouts.js')