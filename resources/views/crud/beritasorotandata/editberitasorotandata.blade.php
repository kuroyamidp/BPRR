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
                            <div class="col-lg-4">
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
                            <div class="col-lg-4">
                                <label for="form-control">Tag</label>
                                <select class="form-control" name="tag">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($beritasorotancrud as $key => $value)
                                    @if($beritasorotancrud['tag'] == $value->id)
                                    <option value="{{$value->id}}" selected>{{$value->tag}}</option>
                                    @else
                                    <option value="{{$value->id}}">{{$value->tag}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                @if($errors->has('tag'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tag') }}
                                </div>
                                @endif
                            </div>
                            <!-- <div class="form-group">
                                <label for="tag">Tag</label>
                                <select class="form-control" name="tag[]" multiple>
                                @foreach($beritasorotancrud as $item)
                                <option value="{{ $item->id }}" {{ in_array($item->id, $item->tags) ? 'selected' : '' }}>{{ $item->tags }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('tag'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('tag') }}</strong>
                                </span>
                                @endif
                            </div> -->
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4">
                                <label for="form-control">Gambar</label>
                                <input type="file" name="banner" class="form-control">
                                @if($errors->has('banner'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('banner') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Date</label>
                                <input type="date" name="tanggal_mulai" class="form-control" placeholder="dd-mm-yyyy" value="{{$beritasorotancrud['tanggal_mulai']}}">
                                @if($errors->has('tanggal_mulai'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tanggal_mulai') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Date Expired</label>
                                <input type="date" name="tanggal_selesai" class="form-control" placeholder="dd-mm-yyyy" value="{{$beritasorotancrud['tanggal_selesai']}}">
                                @if($errors->has('tanggal_selesai'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tanggal_selesai') }}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-1">
                            <div class="col-lg-12">
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
    CKEDITOR.editorConfig = function(config) {
        config.autoParagraph = false;
    };
    CKEDITOR.replace('content', {
        height: 200
    });
</script>
@endsection