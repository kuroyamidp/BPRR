@extends('inc.sidebar')

@section('title','Laman Iklan Data')

@section('container')

<head>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <link href="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/<your-api-key>/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('lamaniklancrud.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <label for="form-control">Title</label>
                                <input type="text" class="form-control" name="title">
                                @if($errors->has('title'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('title') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Kategori</label>
                                <select class="form-control" name="kategiklan_id">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($kategori as $key => $value)
                                    <option value="{{$value->id}}">{{$value->kategori}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('kategiklan_id'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('kategiklan_id') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-lg-4">
                                <label for="form-control">Tag</label>
                                <select class="form-control" name="tag[]" multiple="multiple" id="tag">
                                    @foreach($iklans as $value)
                                    <option value="{{$value->id}}">{{$berita->tag}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('tag'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tag') }}
                                </div>
                                @endif
                            </div>
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
                                <input type="date" name="tanggal_mulai" class="form-control" placeholder="dd-mm-yyyy">
                                @if($errors->has('tanggal_mulai'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tanggal_mulai') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Date Expired</label>
                                <input type="date" name="tanggal_selesai" class="form-control" placeholder="dd-mm-yyyy">
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
                                <textarea class="form-control ckeditor" name="content"></textarea>
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
    config.autoParagraph = true;
    config.enterMode = CKEDITOR.ENTER_BR;
    config.shiftEnterMode = CKEDITOR.ENTER_BR;
};

    CKEDITOR.replace('content', {
        height: 200
    });
    $('#tag').select2({
        placeholder: 'Pilih tag',
        tags: true,
        // tokenSeparators: [',', ' '],
        // createTag: function(newTag) {
        //     return {
        //         id: newTag.term,
        //         text: newTag.term,
        //         newTag: true
        //     };
        // }
    });

    // $('#tag').on('change', function() {
    //     var tags = $('#tag').val();
    //     var newTags = [];
    //     tags.forEach(function(tag) {
    //         var tagData = $('#tag option[value="' + tag + '"]').data('tag');
    //         if (tagData && tagData.newTag) {
    //             newTags.push(tagData.text);
    //         }
    //     });
    //     $('#tag').val(newTags);
    // });
</script>

@endsection