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
        <div class="masthead-heading text-uppercase animate__animated animate__rotateInUpRight">ORDER PENGIRIMAN</div>
    </div>
    <div class="overlay">
    </div>
</header>

<section class="page-visi">
    <div class="container visi text-center mt-5 animated__animate animate__fadeIn">
        <ul class="nav nav-pills mb-5 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active animate__animated animate__rotateInUpRight" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Order Pengiriman</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link  animate__animated animate__rotateInUpLeft" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Data Pengiriman</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContetn">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="animate__animated animate__fadeIn container misi mt-5 mb-5">

                    <div class="content-card">
                        <h2 class="font-weight-bold text-center  mb-5" style="color:#7D2639;">Order Pengiriman Barang</h2>
                        <form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card text-left">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputName">Nama Pengirim</label>
                                                <input type="text" name="nama" class="form-control @error('nama`') is-invalid @enderror" value="{{old('nama`')}}" required>
                                                @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName">Lokasi Pengiriman</label>
                                                <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{old('lokasi')}}" required>
                                                @error('lokasi') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName">Nama Penerima</label>
                                                <input type="text" name="penerima" class="form-control @error('penerima') is-invalid @enderror" value="{{old('penerima')}}" required>
                                                @error('penerima') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName">Tanggal Pengiriman</label>
                                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}" required>
                                                @error('tanggal') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName">Harga</label>
                                                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{old('harga')}}" required>
                                                @error('harga') <span class="text-danger">{{$message}}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="{{route('file.index')}}" class="btn btn-default">
                                                Batal
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row justify-content-center align-items-center">
                    <div class="animate__animated animate__fadeIn content-card text-center">
                        <h2 class="font-weight-bold text-center mb-5" style="color:#7D2639;">Customer Order</h2>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-hover table-bordered table-stripped" id="example2">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Pengirim</th>
                                                    <th>Lokasi Pengirim</th>
                                                    <th>Nama Penerima</th>
                                                    <th>Tanggal Pengiriman</th>
                                                    <th>Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($moneyreport as $key => $user)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$user->nama}}</td>
                                                    <td>{{$user->lokasi}}</td>
                                                    <td>{{$user->penerima}}</td>
                                                    <td>{{$user->tanggal}}</td>
                                                    <td>{{$user->harga}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>

</section>


<img class="img-fluid" width="100%" src="{{asset('img/WaveBawah.png')}}" alt="">
@include('komponen.footer')

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush

<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>