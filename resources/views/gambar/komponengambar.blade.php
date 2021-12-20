<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/stykegambar.css') }}">

<section class="hero-section">
    <div class="card-grid">
        @foreach($images as $image)
        <a class="card" href="#">
            <div class="card__background" style="background-image: url('{{url('/uploads/'.$image->thumbnail)}}');"></div>
            <div class="card__content">
                <p class="card__category">{{$image->title}}</p>
            </div>
        </a>
        @endforeach
    </div>
</section>
@if ($images->isEmpty())
@else
<div class="text-center">
    <a href="/gambar" class="btn btn-danger mb-3  ">
        <h5 class="">Gambar Lain</h5>
    </a>
</div>
@endif