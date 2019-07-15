@extends('backend.default')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Data Hasil Pertandingan</h4>
                        <ol class="breadcrumb">


                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Club A</th>
                                    <th>Club B</th>
                                    <th>Kategori</th>
                                    <th>Skor</th>
                                    <th width="100px">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Persegal</td>
                                    <td>Persekat</td>
                                    <td>Liga 3 Zona Jateng 2019</td>
                                    <td>Skor</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning"><span class="ti-pencil" aria-hidden="true"></span></a>



                                    </td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection