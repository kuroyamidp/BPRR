@extends('inc.sidebar')

@section('title','laman Data')

@section('container')
<head>
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
</head>
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('lamancrud.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-1">
                            <div class="col-lg-3">
                                <label for="form-control">Date</label>
                                <input type="date" name="tanggal_mulai" class="form-control" placeholder="dd-mm-yyyy">
                                @if($errors->has('tanggal_mulai'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tanggal_mulai') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-3">
                                <label for="form-control">Date Expired</label>
                                <input type="date" name="tanggal_selesai" class="form-control" placeholder="dd-mm-yyyy">
                                @if($errors->has('tanggal_selesai'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tanggal_selesai') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-3">
                                <label for="form-control">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">Pilih salah satu</option>
                                    <option value="0">Tidak aktif</option>
                                    <option value="1">Aktif</option>
                                </select>
                                @if($errors->has('status'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('status') }}
                                </div>
                                @endif
                            </div>
                        </div>
                                <div class="row mb-1">
                                <div class="col-lg-3">
                                    <label for="form-control">Title</label>
                                    <input type="text" class="form-control" name="title">
                                    @if($errors->has('title'))
                                    <div class="error" style="color: red; display:block;">
                                        {{ $errors->first('title') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-lg-3">
                                    <label for="form-control">Banner</label>
                                    <input type="file" name="banner" class="form-control">
                                    @if($errors->has('banner'))
                                    <div class="error" style="color: red; display:block;">
                                        {{ $errors->first('banner') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-lg-8">
                                    <label for="form-control">Content</label>
                                    <input type="text" class="form-control" name="content">
                                    @if($errors->has('content'))
                                    <div class="error" style="color: red; display:block;">
                                        {{ $errors->first('content') }}
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