@extends('backend.default')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Data Berita</h4>
                        <ol class="breadcrumb">


                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <a href="{{route("berita.create")}}">
                                    <button class="btn btn-primary arrow-none waves-effect waves-light" type="button"
                                            aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-plus mr-2"></i>
                                        Tambahkan Berita
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Isi Berita</th>
                                    <th>Kategori</th>
                                    <th>Foto</th>
                                    <th width="100px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; ?>
                                @foreach($berita as $beritas)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$beritas->judul}}</td>
                                        <td>{{str_limit($beritas->isi_konten, 10)}}</td>
                                        @foreach($categories as $cat)
                                            @if($cat->id == $beritas->id_kategori)
                                                <td>{{$cat->category}}</td>
                                            @endif
                                        @endforeach
                                        <td><img src="{{asset('images/'.$beritas->foto)}}" width="50" height="50"></td>
                                        <td class="text-center">
                                            <a href="{{route('berita.edit',$beritas->id)}}"
                                               class="btn btn-warning"><span class="ti-pencil"
                                                                             aria-hidden="true"></span></a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal"
                                               data-target=".bs-example-modal-lg"><span class="ti-trash"
                                                                                        aria-hidden="true"></span></a>

                                            <!--  Modal content for the above example -->
                                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                                 aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Hapus
                                                                Berita</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('berita.destroy', $beritas->id) }}" method="GET">
                                                                @csrf
                                                                <p>
                                                                    Apakah Anda Mau Menghapus Berita ?
                                                                </p>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Ya
                                                                    </button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Kembali
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                        </td>

                                    </tr>
                                    <?php $no++ ?>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection