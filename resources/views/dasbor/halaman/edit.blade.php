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
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </div>
            <h4 class="page-title">Ubah</h4>
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

                <!-- <form action="{{ url('dasbor/halaman') }}" method="POST" enctype="multipart/form-data"> -->
                {!! Form::model($data,array('url'=>'dasbor/halaman/'.$data->id,'method'=>'put','files'=>'true'))!!}
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="judul_halaman" class="form-label">Judul Halaman <span class="text-danger">*</span></label>
                    {!!
                    Form::text('judul_halaman',null,['required','id'=>'judul_halaman','class'=>'form-control','placeholder'=>'Judul Halaman'])
                    !!}
                </div>

                <div class="mb-3">
                    <label for="sub_judul" class="form-label">Sub Judul</label>
                    {!!
                    Form::text('sub_judul',null,['required','id'=>'sub_judul','class'=>'form-control','placeholder'=>'Sub Judul'])
                    !!}
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten <span class="text-danger">*</span></label>
                    <textarea name="konten" class="ckeditor form-control" id="konten" value="{{ old('konten') }}" cols="30" rows="10">{{ $data->konten}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar <span class="text-danger">*</span></label>
                    <input type="file" name="gambar" class="form-control" id="customFile">
                </div>

                @if(!$data->gambar)
                    <img src="{{ asset('gambar/halaman/00.jpg') }}" alt="image" class="img-thumbnail mb-3" width="300px" alt="Gambar">
                @else
                    <img src="{{ asset($data->gambar) }}" class="img-thumbnail mb-3" width="300px" alt="Gambar">
                @endif

                <div class="mb-3">
                    <label for="product-category" class="form-label">Status <span class="text-danger">*</span></label>
                    {!! Form::select('status', [''=>'Status ...','Publish'=>'Active','Draf'=>'Inactive'],
                    null,['class'=>'form-control select2','id'=>'status','required']) !!}
                </div>

            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->


</div>
<!-- end row -->
<!--end wrapper-->

<div class="row">
    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
            <a href="{{ route('dasbor.halaman') }}" class="btn btn-light">
                <i class="mdi mdi-arrow-left mr-1"></i>Kembali
            </a>
        </div>
    </div>
</div>
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
