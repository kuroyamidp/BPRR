@extends('inc.sidebar')

@section('title','Laman Berita Data')

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
                    <form action="{{route('sorotancrud.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-1">
                            <div class="col-lg-4">
                                <label for="form-control">Kategori</label>
                                <select class="form-control" name="title_id">
                                    <option value="">Pilih salah satu</option>
                                    @foreach($kategori as $key => $value)
                                    <option value="{{$value->id}}">{{$value->title}}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('title_id'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('title_id') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Tanggal Mulai</label>
                                <input type="date" name="tanggal_mulai" class="form-control" placeholder="dd-mm-yyyy">
                                @if($errors->has('tanggal_mulai'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tanggal_mulai') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-4">
                                <label for="form-control">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" class="form-control" placeholder="dd-mm-yyyy">
                                @if($errors->has('tanggal_selesai'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('tanggal_selesai') }}
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