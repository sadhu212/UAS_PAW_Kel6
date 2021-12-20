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
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

</head>

<!-- Navigation-->
@include('komponen.navbar')
<!-- Masthead-->
<header class="masthead">
    <div class="container con_background">
        <div class="masthead-subheading animate__animated animate__rotateInUpLeft">PAW CEPAT</div>
        <div class="masthead-heading text-uppercase animate__animated animate__rotateInUpRight">Pengaduan Keluhan</div>
    </div>
    <div class="overlay">
    </div>
</header>

<div class="container my-5 animate__animated animate__fadeIn">
    <h4>ISI ADUAN</h4>
    <form action="{{route('images.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName">Nama Pengirim</label>
                            <input type="text" name="nama" class="form-control @error('nama`') is-invalid @enderror" placeholder="Nama Pengirim" value="{{old('nama`')}}" required>
                            @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Barang</label>
                            <input type="text" name="barang" class="form-control @error('barang') is-invalid @enderror" placeholder="Barang yang dikirimkan" value="{{old('barang')}}" required>
                            @error('barang') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <label for="exampleInputName">Paket yang Digunakan</label>
                        <div class="input-group mb-3">
                            <select class="form-control" name="paket" class="form-control {{ $errors->has('paket') ? 'is-invalid' : '' }}" value="{{ old('paket') }}">
                                <option>Reguler</option>
                                <option>Kilat</option>
                                <option>FastRespone</option>
                            </select>
                            @if($errors->has('paket'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('paket') }}</strong>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" name="pesan" id="" placeholder="Isi Pesan" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{route('images.index')}}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>

<img class="img-fluid" width="100%" src="{{asset('img/WaveBawah.png')}}" alt="">
@include('komponen.footer')

<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>