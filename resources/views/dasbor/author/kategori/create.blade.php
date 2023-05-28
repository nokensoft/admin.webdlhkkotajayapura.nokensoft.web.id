@extends('dasbor.layout.app')
@section('content')




<!-- start page content wrapper-->
<!-- start page title -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Kelola Berita</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('dasbor/berita/kategori') }}">Kategori</a></li>
                            <li class="breadcrumb-item active">Tambah</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tambah Kategori</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('dasbor.kategori.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="md-3">
                                            <label for="name" class="form-label">Judul Kategori <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Judul Kategori" required>
                                            @if ($errors->has('name'))
                                            <span class="text-danger" role="alert">
                                                <small>{{ $errors->first('name') }}</small>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="md-3">
                                            <label for="name" class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control" required>
                                                <option value="publish">Publish</option>
                                                <option value="draft">Draft</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <span class="text-danger" role="alert">
                                                    <small>{{ $errors->first('status') }}</small>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="deskripsi" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                                        <textarea name="deskripsi" class="form-control" rows="5" required placeholder="Deskripsi Kategori">{{ old('deskripsi') }}</textarea>
                                        @if ($errors->has('deskripsi'))
                                            <span class="text-danger" role="alert">
                                                <small>{{ $errors->first('deskripsi') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row mb-3">
                                <div class="col">
                                    <div class="card-box">
                                        <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
                                        <a href="{{ route('dasbor.kategori') }}" class="btn btn-light">
                                            <i class="mdi mdi-arrow-left"></i> Kembali
                                        </a>
                                    </div>
                                </div> <!-- end col -->
                            </div>

                        </form> <!-- end form -->
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

</div> <!-- end col -->






@stop
