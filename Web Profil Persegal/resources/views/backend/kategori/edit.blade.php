@extends('backend.default')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Form Edit Kategori</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Kategori</a>
                            </li>
                            <li class="breadcrumb-item active">Form Edit Kategori</li>
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
                            <form action="{{route('category.update',$categories->id)}}" method="post">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="category" value="{{$categories->category}}"></div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{route('category')}}" class="btn btn-success">Kembali</a>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- end col --></div>
            <!-- end row --></div>
        <!-- container-fluid --></div>
@endsection