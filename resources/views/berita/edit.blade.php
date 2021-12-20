@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
<h1 class="m-0 text-dark">Edit User</h1>
@stop
@section('content')
<form action="{{route('news.update', $user)}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" name="title" class="form-control @error('title`') is-invalid @enderror" value="{{$user->title ?? old('title')}}">
                        @error('title') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">Masukan Foto</label>
                        <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror">
                        @error('thumbnail') <span class="text-danger">{{$message}}</span> @enderror
                        <label for="thumbnail" class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <img width="100" src="{{ url('/uploads/foto'.$user->thumbnail) }}">
                        </div>
                        <input hidden name="old_image_name" type="text" value="{{ $user->thumbnail}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Masukan URL</label>
                        <input type="text" name="slug_title" class="form-control @error('slug_title') is-invalid @enderror" value="{{$user->slug_title ?? old('slug_title')}}">
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