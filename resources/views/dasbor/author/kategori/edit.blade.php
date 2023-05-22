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
                                <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Berita</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('dasbor/berita/kategori') }}">Kategori</a></li>
                                <li class="breadcrumb-item active">Ubah</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ubah Kategori</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong><br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row">
                <div class="card">
                   <div class="col-lg-12">
                        <div class="card-body">

                            <form action="{{route('dasbor.kategori.update',['id' => $kategori->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="md-3">
                                            <label for="name" class="form-label">Judul Kategori <span class="text-danger">*</span></label>
                                            {!! Form::text('name',$kategori->name,['required','id'=>'name','class'=>'form-control','placeholder'=>'Judul Kategori']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="md-3">
                                            <label for="name" class="form-label">Status</label>
                                            <select name="status" class="form-control">

                                                <option value="{{ $kategori->status }}" selected>{{ $kategori->status }}</option>
                                                <option value="draft">Draft</option>
                                                <option value="publish">Publish</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                               <br>

                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="card-box">
                                            <button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
                                            <a href="{{ route('dasbor.kategori') }}" class="btn btn-light">
                                                <i class="mdi mdi-arrow-left"></i>
                                                Kembali
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


</div>
        </div>
    </div>
<!-- end row -->
<!--end wrapper-->



  @stop
