@extends('backend.default')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Form Edit Squad</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Squad</a>
                            </li>
                            <li class="breadcrumb-item active">Form Edit Squad</li>
                        </ol>
                    </div>

                </div>
            </div>
            <!-- end row -->

            <!-- end row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('squad.update',$squad->id)}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nama" value="{{$squad->nama}}"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Posisi</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="posisi" value="{{$squad->posisi}}"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="tgl_lahir" value="{{$squad->tgl_lahir}}"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nomor Punggung</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="nomor_punggung" value="{{$squad->nomor_punggung}}"></div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="id_kategori">
                                            @foreach($categories as $category)
                                                <option name="category" value="{{$category->id}}">{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input name="old_foto" type="hidden" value="{{$squad->foto}}">
                                        <input class="form-control filestyle" type="file"
                                               data-buttonname="btn-secondary" name="foto"></div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button href="#" type="button" class="btn btn-success">Kembali</button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- end col --></div>
            <!-- end row --></div>
        <!-- container-fluid --></div>
@endsection