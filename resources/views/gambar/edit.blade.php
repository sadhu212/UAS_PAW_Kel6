@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit User</h1>
@stop
@section('content')
    <form action="{{route('images.update', $user)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                            <label for="exampleInputName">Nama Pengirim</label>
                            <input type="text" name="nama" class="form-control @error('nama`') is-invalid @enderror" placeholder="Nama Pengirim" value="{{$user->nama ?? old('nama`')}}" required>
                            @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Deskripsi Barang</label>
                            <input type="text" name="barang" class="form-control @error('barang') is-invalid @enderror" placeholder="Barang yang dikirimkan" value="{{$user->barang ?? old('barang')}}" required>
                            @error('barang') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <label for="exampleInputName">Paket yang Digunakan</label>
                        <div class="input-group mb-3">
                            <select class="form-control" name="paket" class="form-control {{ $errors->has('paket') ? 'is-invalid' : '' }}" value="{{$user->paket ??  old('paket') }}">
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
                            <textarea class="form-control" name="pesan" id="" placeholder="Isi Pesan" cols="30" rows="10" value="{{$user->pesan ??  old('pesan') }}"></textarea>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('users.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop