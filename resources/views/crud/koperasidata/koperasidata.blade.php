@extends('inc.sidebar')

@section('title','Koperasi Data')

@section('container')
<head>
    <!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="background-color: white;">
                <a href="{{Route('koperasicrud.create')}}" class="btn btn-primary btn-sm">Tambah</a>
                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Upload data mata kuliah</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="form-control">Upload file</label>
                                                <input type="file" class="form-control" name="excel_file">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="form-control">Unduh excel untuk import data mata kuliah</label>
                                                <a title="Unduh" href="excel/DATA IMPORT MATA KULIAH STIMIK PATI.xlsx" target="_blank" download>
                                                    <i class="bx bxs-download"></i> Unduh
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Upload file</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- endmodal -->
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-hover" id="default-ordering">
                                <thead>
                                    <tr class="text-center">
                                    <th>No</th>
                                        <th>Judul</th>
                                        <th>Berita</th>
                                        <th>Tanggal</th>
                                        <th>Gambar</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($koperasicrud as $key => $value)
                                    <tr>
                                        <td width="1%">{{$key + 1}}</td>
                                        <td class="text-center">{{$value->judul}}</td>
                                        <td class="text-center">{{$value->deskripsi}}</td>
                                        <td class="text-center">{{$value->tanggal}}</td>
                                        <td class="text-center">{{$value->gambar}}</td>
                                        <td class="text-center" style="display: flex; justify-content: center;">

                                            <a href=" {{ route('koperasicrud.show', $value->id) }}" class="btn btn-warning mb-1 mr-1 rounded-circle" data-toggle="tooltip" title='Update'><i class="fas fa-edit"></i></a>

                                            <form action="{{ route('koperasicrud.destroy', $value->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger mb-1 mr-1 rounded-circle show_confirm" data-toggle="tooltip" title='Delete' type="submit"><i class="fas fa-trash-alt"></i></button>
                                            </form> 
                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection