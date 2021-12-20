<!doctype html>
<html lang="en">

<head>
    <title>Carousel 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="css/stylecard.css">
</head>

<body>

    <section class="ftco-section wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-section mb-3 font-weight-bold  text-center">Our Team</h2>
                    <hr class="garis">
                </div>
                @if ($news->isEmpty())

                <div class="row justify-content-center align-items-center">
                    <h2 class="text-center"> <span style="background-color:rgb(129, 41, 41); border-radius: 20px; padding:5px 20px;" class="wow animate__animated animate__fadeIn animate__slow badge badge-secondary">Berita
                            Belum Ada</span></h2>
                </div>
                @endif
                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">
                        @foreach($news as $new)
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center" style="background-image: url('{{url('/uploads/foto/'.$new->thumbnail)}}');">
                                    <div class="text w-100">
                                        <span class="cat">Team From PAW CEPAT</span>
                                        <h3><a href="{{$new->slug_title}}">{{$new->title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if ($news->isEmpty())
                    @else
                    <div class="text-center">
                        <a href="/berita" class="btn btn-danger my-3  ">
                            <h5 class="">Other Team</h5>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>