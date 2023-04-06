@extends('inc.sidebar')

@section('title','Laman Berita Data')

@section('container')

<head>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <link href="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.css" rel="stylesheet">
</head>
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('beritasorotancrud.update', $beritasorotancrud['id'])}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-1">
                            <div class="col-lg-3">
                                <label for="form-control">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$beritasorotancrud['title']}}">
                                @if($errors->has('title'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('title') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Kategori</label>
                                <select class="form-control" name="kategberita_id">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($berita as $key => $value)
                                    @if($beritasorotancrud['kategberita_id'] == $value->id)
                                    <option value="{{$value->id}}" selected>{{$value->kategori}}</option>
                                    @else
                                    <option value="{{$value->id}}">{{$value->kategori}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if($errors->has('kategberita_id'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('kategberita_id') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-3">
                                <label for="form-control">Tag</label>
                                <input type="text" class="form-control" name="tag" value="{{$beritasorotancrud['tag']}}">
                                @if($errors->has('tag'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tag') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-10">
                                <label for="form-control">Gambar</label>
                                <input type="file" name="banner" class="form-control">
                                @if($errors->has('banner'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('banner') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-lg-10">
                                <label for="form-control">Deskripsi</label>
                                <textarea class="form-control ckeditor" name="content">{{$beritasorotancrud['content']}}</textarea>
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
<script>
    CKEDITOR.editorConfig = function( config ) {
        config.autoParagraph = false;
    };
    CKEDITOR.replace('content', {
        height: 200 
    });
</script>
@endsection