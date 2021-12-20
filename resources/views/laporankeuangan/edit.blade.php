@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit User</h1>
@stop
@section('content')
    <form action="{{route('file.update', $user)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama Pengirim</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="nama" value="{{$user->nama ?? old('nama')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Perubahan Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="exampleInputName" placeholder="Lokasi Pengiriman" name="lokasi" value="{{$user->lokasi ?? old('lokasi')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama Penerima</label>
                        <input type="text" class="form-control @error('penerima') is-invalid @enderror" id="exampleInputName" placeholder="Nama Penerima" name="penerima" value="{{$user->penerima ?? old('penerima')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Tanggal Pengiriman</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="exampleInputName" placeholder="Tanggal Pengiriman" name="tanggal" value="{{$user->tanggal ?? old('tanggal')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="exampleInputName" placeholder="Harga" name="harga" value="{{$user->harga ?? old('harga')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
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