@extends('dasbor.layout.app')
@section('content')
<!-- start page content wrapper-->
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/halaman') }}">Halaman</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah</h4>
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
                {{-- <form action="{{ route('dasbor.halaman.store') }}" method="post" enctype="multipart/form-data"> --}}
                {!! Form::open(array('url' => route('dasbor.halaman.store'),'files'=>'true')) !!}
                @csrf

                <div class="row">
                    <div class="col-md-8">
                
                        <div class="mb-3">
                            <label for="judul_berita" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                            {!! Form::text('judul_berita',null,['required','id'=>'judul_berita','class'=>'form-control','placeholder'=>'Judul berita'])!!}
                        </div>
                        <!-- input item end-->
                        
                        <div class="form-group">
                            <label for="category_id" class="form-label d-block">Kategori <span class="text-danger">*</span></label>
                            <select class="form-control col-md-3" name="category_id" id="exampleFormControlSelect1">
                                <option>Kategori</option>
                                @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- input item end-->
                
                        <div class="mb-3">
                            <label for="konten_singkat" class="form-label">Konten Singkat</label>
                            <textarea name="konten_singkat" class="form-control" id="konten_singkat" value="{{ old('konten_singkat') }}" cols="30" rows="3">{{ old('konten_singkat') }}</textarea>
                        </div>
                        <!-- input item end-->
        
                        <div class="mb-3">
                            <label for="konten" class="form-label">Konten <span class="text-danger">*</span></label>
                            <textarea name="konten" class="ckeditor form-control" id="konten" value="{{ old('konten') }}" cols="30" rows="10">{{ old('konten') }}</textarea>
                        </div>
                        <!-- input item end-->
                
                        <div class="form-group">
                            <label for="status" class="form-label d-block">Status <span class="text-danger">*</span></label>
                            <select class="form-control col-md-3" name="status" id="exampleFormControlSelect1">
                                <option>Status</option>
                                <option value="Publish">Active</option>
                                <option value="Draft">Inactive</option>
                            </select>
                        </div>
                        <!-- input item end-->

                    </div>
                    <!-- .col end-->

                    <div class="col-md-4">
                
                        <div class="mb-3">
                            <div class="mb-2">
                                <img src="{{ asset('gambar/berita/00.jpg') }}" alt="Gambar" class="img-thumbnail img-fluid">
                            </div>
                            <label for="gambar" class="form-label d-block">Gambar <span class="text-danger">*</span></label>
                            <div class="custom-file w-100">
                                <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <!-- input item end-->
                        
                    </div>
                    <!-- .col end-->

                </div>

                {{-- <div class="mb-3">
                    <label for="role_id" class="form-label">Kategori <span class="text-danger">*</span></label>
                    {!! Form::select('category_id', $kategoris, [], ['required','id'=>'category_id','class'=>'form-control']) !!}
                </div> --}}

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->


</div>
<!--end wrapper-->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
                <a href="{{ route('dasbor.halaman') }}" class="btn btn-light">
                    <i class="mdi mdi-arrow-left mr-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
{!! Form::close() !!}

@stop

@push('script-header')
<!-- Plugins css-->
<link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<!-- <link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('assets/admin/assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" /> -->
<link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush


@push('script-footer')
<!-- Select2 js-->
<script src="{{ asset('assets/admin/assets/js/vendor.min.js')}}"></script>
<script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
<!-- Quill js -->
<script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>
<!-- Init js -->

<script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
<!-- Dropzone file uploads-->
<!-- <script src="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
        <script src="{{ asset('assets/admin/assets/libs/dropify/js/dropify.min.js')}}"></script>
    -->

<!-- Init js-->
<script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>


<script src="{{ asset('assets/admin/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });


  @endpush
