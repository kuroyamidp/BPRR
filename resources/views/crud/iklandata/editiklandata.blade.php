@extends('inc.sidebar')

@section('title','Iklan Data')

@section('container')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('iklancrud.index')}}" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('iklancrud.update', $iklancrud['id'])}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <form action="{{route('iklancrud.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-1">
                                    <div class="col-lg-3">
                                        <label for="form-control">Gambar</label>
                                        <input type="file" name="gambar" class="form-control">
                                        @if($errors->has('gambar'))
                                        <div class="error" style="color: red; display:block;">
                                            {{ $errors->first('gambar') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="form-control">Tanggal Mulai</label>
                                        <input type="date" name="tanggal_mulai" class="form-control" placeholder="dd-mm-yyyy" value="{{$iklancrud['tanggal_mulai']}}">
                                        @if($errors->has('tanggal_mulai'))
                                        <div class="error" style="color: red; display:block;">
                                            {{ $errors->first('tanggal_mulai') }}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="form-control">Tanggal Selesai</label>
                                        <input type="date" name="tanggal_selesai" class="form-control" placeholder="dd-mm-yyyy" value="{{$iklancrud['tanggal_selesai']}}">
                                        @if($errors->has('tanggal_selesai'))
                                        <div class="error" style="color: red; display:block;">
                                            {{ $errors->first('tanggal_selesai') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-lg-8">
                                        <label for="form-control">Deskripsi</label>
                                        <input type="label" class="form-control  h-100" name="deskripsi" value="{{$iklancrud['deskripsi']}}">
                                        @if($errors->has('deskripsi'))
                                        <div class="error" style="color: red; display:block;">
                                            {{ $errors->first('deskripsi') }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-end">
                                        <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>

    </div>
    @endsection