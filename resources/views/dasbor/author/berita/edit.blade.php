@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Kelola Berita</a></li>
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </div>
            <h4 class="page-title">Ubah</h4>
        </div>
    </div>
</div>

{{-- @if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                {!! Form::model($berita,array('url'=>'dasbor/halaman/'.$berita->id,'method'=>'put','files'=>'true'))!!}
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                    {!!
                    Form::text('judul',null,['required','id'=>'judul','class'=>'form-control','placeholder'=>'Judul Halaman'])
                    !!}
                </div>

                <div class="mb-3">
                    <label for="konten_singkat" class="form-label">Kontent Singkat</label>
                    {!!
                    Form::text('konten_singkat',null,['required','id'=>'konten_singkat','class'=>'form-control','placeholder'=>'Sub Judul'])
                    !!}
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten <span class="text-danger">*</span></label>
                    <textarea name="konten" class="ckeditor form-control" id="konten" value="{{ old('konten') }}" cols="30" rows="10">{{ $berita->konten}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar <span class="text-danger">*</span></label>
                    <div class="custom-file">
                        <input type="file" name="gambar" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>

                @if(!$berita->gambar)
                    <img src="{{ asset('gambar/halaman/00.jpg') }}" alt="image" class="img-thumbnail mb-3" width="300px" alt="Gambar">
                @else
                    <img src="{{ asset($berita->gambar) }}" class="img-thumbnail mb-3" width="300px" alt="Gambar">
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

<div class="row">
    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
            <a href="{{ route('dasbor.berita') }}" class="btn btn-light">
                <i class="mdi mdi-arrow-left mr-1"></i>Kembali
            </a>
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
