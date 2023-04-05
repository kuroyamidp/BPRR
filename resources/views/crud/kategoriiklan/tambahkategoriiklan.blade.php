@extends('inc.sidebar')

@section('title','Kategori Iklan Data')

@section('container')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-end">
                    <a href="" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('kategoriiklancrud.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-1">
                            <div class="col-lg-3">
                                <label for="form-control">Kategori</label>
                                <input type="text" class="form-control" name="kategori">
                                @if($errors->has('kategori'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('kategori') }}
                                </div>
                                @endif
                            </div>
                            <!-- <div class="col-lg-3">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option value="e">E</option>
                                    <option value="f">F</option>
                                    <option value="g">G</option>
                                    <option value="h">H</option>
                                </select>
                                @if($errors->has('status'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('status') }}
                                </div>
                                @endif
                            </div> -->

                        </div>
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