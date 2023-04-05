@extends('inc.sidebar')

@section('title','Kategori Berita Data')

@section('container')
<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('kategoriberitacrud.index')}}" class="btn btn-dark btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('kategoriberitacrud.update', $kategoriberitacrud['id'])}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row mb-1">
                            <div class="col-lg-3">
                                <label for="form-control">Kategori</label>
                                <input type="text" class="form-control" name="kategori" value="{{$kategoriberitacrud['kategori']}}">
                                @if($errors->has('kategori'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('kategori') }}
                                </div>
                                @endif
                            </div>
                            <!-- <div class="col-lg-3">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                </select>
                                @if($errors->has('status'))
                                <div class="error" style="color: red; display:block;">
                                    {{ $errors->first('status') }}
                                </div>
                                @endif
                            </div> -->

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