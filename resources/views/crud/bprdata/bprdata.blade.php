@extends('inc.sidebar')

@section('title','BPR Data')

@section('container')

<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" style="background-color: white;">
                <a href="" class="btn btn-primary btn-sm">Tambah</a>
                    <a href="/cetaklihatjadwal" class="btn btn-success btn-sm">Print</a>
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
                                        <th>A</th>
                                        <th>B</th>
                                        <th>C</th>
                                        <th>D</th>
                                        <th>E</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    <tr style="text-align: center;">

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>


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