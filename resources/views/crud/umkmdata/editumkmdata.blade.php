@extends('inc.sidebar')

@section('title','Umkm Data')

@section('container')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('umkmcrud.index')}}" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('umkmcrud.update', $umkmcrud['id'])}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row mb-1">
                            <div class="col-lg-3">
                                <label for="form-control">Judul</label>
                                <input type="text" class="form-control" name="judul" value="{{$umkmcrud['judul']}}">
                                @if($errors->has('judul'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('judul') }}
                                </div>
                                @endif
                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-11">
                                    <label for="form-control">Gambar</label>
                                    <input type="file" name="gambar" class="form-control" >
                                    @if($errors->has('gambar'))
                                    <div class="error" style="color: red; display:block;">
                                        {{ $errors->first('gambar') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label for="form-control">Tanggal Terbit</label>
                                <input type="date" name="tanggal" class="form-control" placeholder="dd-mm-yyyy" value="{{$umkmcrud['tanggal']}}">
                                @if($errors->has('tanggal'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tanggal') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-1">
                        <div class="col-lg-8">
                            <label for="form-control">Deskripsi</label>
                            <input type="label" class="form-control  h-100" name="deskripsi" value="{{$umkmcrud['deskripsi']}}">
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