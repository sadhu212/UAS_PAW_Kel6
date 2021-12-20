<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>TEAM PAW CEPAT</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
</head>

<!-- Navigation-->
@include('komponen.navbar')
<!-- Masthead-->
<header class="masthead">
  <div class="container con_background">
    <div class="masthead-subheading animate__animated animate__rotateInUpLeft">PAW CEPAT</div>
    <div class="masthead-heading text-uppercase animate__animated animate__rotateInUpRight">SUPER TEAM</div>
  </div>
  <div class="overlay">
  </div>
</header>

<!-- BODY Berita -->

<div class="container-fluid animate__animated animate__fadeInRight p-5">
  <h3 class="text-center p-5">ALL TEAM</h3>
  @if ($news->isEmpty())

  <div class="row justify-content-center align-items-center">
    <h2 class="text-center"> <span style="background-color:rgb(129, 41, 41); border-radius: 20px; padding:5px 20px;" class="wow animate__animated animate__fadeIn animate__slow badge badge-secondary">Berita
        Belum Ada</span></h2>
  </div>
  @endif
  <div class="container">
    <div class="row">
      @foreach ($news as $new)
      <div class="col-md-6 col-lg-4">
        <!-- Bootstrap 5 card box -->
        <div class="card-box">
          <div class="card-thumbnail">
            <img src="{{ url('/uploads/foto/'.$new->thumbnail) }}" class="img-fluid" alt="">
          </div>
          <h3><a href="{{$new->slug_title}}" class="mt-2 text-danger">{{Str::limit($new->title,40)}}</a></h3>
          <a href="{{$new->slug_title}}" class="btn btn-sm btn-danger float-right">Link Instagram</a>
        </div>
      </div>
      @endforeach

    </div>
  </div>

</div>


<img class="img-fluid" width="100%" src="{{asset('img/WaveBawah.png')}}" alt="">
@include('komponen.footer')

<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>