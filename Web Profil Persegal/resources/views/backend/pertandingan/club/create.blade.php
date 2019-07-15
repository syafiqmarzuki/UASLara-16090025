@extends('backend.default')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Form Club</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Club</a>
                            </li>
                            <li class="breadcrumb-item active">Form Club</li>
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
                            <form action="{{route('club.store')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Nama Club</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nama_club"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Daerah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="daerah"></div>
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
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Logo</label>
                                    <div class="col-sm-10">
                                        <input class="form-control filestyle" type="file" data-buttonname="btn-secondary" name="logo"></div>
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