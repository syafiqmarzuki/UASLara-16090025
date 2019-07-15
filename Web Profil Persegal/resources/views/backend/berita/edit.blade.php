@extends('backend.default')
@section('main')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Form Edit Berita</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Berita</a>
                            </li>
                            <li class="breadcrumb-item active">Form Edit Berita</li>
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
                            <form action="{{route('berita.update',$berita->id)}}" method="post"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                {{method_field('PATCH')}}
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="judul" value="{{$berita->judul}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if($category->id == $berita->id_kategori){{"selected"}} @endif>{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input name="old_foto" type="hidden" value="{{$berita->foto}}">
                                        <input class="form-control filestyle" type="file"
                                               data-buttonname="btn-secondary" name="foto"></div>
                                </div>

                                <h4 class="mt-0 header-title">Isi Berita</h4>
                                <textarea class="form-control" rows="9" name="isi_konten"
                                          value="{{$berita->isi_konten}}">{{$berita->isi_konten}}</textarea>
                                <br>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button href="{{url('berita')}}" type="button" class="btn btn-success">Kembali</button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- end col --></div>
            <!-- end row --></div>
        <!-- container-fluid --></div>
@endsection