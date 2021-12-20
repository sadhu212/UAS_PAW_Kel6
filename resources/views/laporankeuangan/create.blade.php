@extends('adminlte::page')
@section('title', 'Tambah Laporan')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah File Laporan Data Customer</h1>
@stop
@section('content')
    <form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="exampleInputName">Nama Pengirim</label>
                        <input type="text" name="nama" class="form-control @error('nama`') is-invalid @enderror" value="{{old('nama`')}}">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Lokasi Pengiriman</label>
                        <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" value="{{old('lokasi')}}">
                        @error('lokasi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Penerima</label>
                        <input type="text" name="penerima" class="form-control @error('penerima') is-invalid @enderror" value="{{old('penerima')}}">
                        @error('penerima') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Tanggal Pengiriman</label>
                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}">
                        @error('tanggal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Harga</label>
                        <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{old('harga')}}">
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
@stop