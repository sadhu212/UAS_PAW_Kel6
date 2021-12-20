@extends('adminlte::page')
@section('title', 'Tambah Laporan')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Team PAW</h1>
@stop
@section('content')
    <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" name="title" class="form-control @error('title`') is-invalid @enderror" value="{{old('title`')}}">
                        @error('title') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Masukan Foto</label>
                        <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" value="{{old('thumbnail')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Masukan URL</label>
                        <input type="text" name="slug_title" class="form-control @error('slug_title') is-invalid @enderror" value="{{old('slug_title')}}">
                        @error('slug_title') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('news.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop