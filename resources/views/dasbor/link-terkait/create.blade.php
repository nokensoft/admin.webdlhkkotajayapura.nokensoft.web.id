@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/link-terkait') }}">Link Terkait</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah</h4>
        </div>
    </div>
</div>
<!-- end row -->

@if ($errors->any())
<div class="mb-3 alert alert-warning">
    <strong class="d-block mb-2 text-dark">Perhatian!</strong>
    <ul class="list-group">
        @foreach ($errors->all() as $error)
        <li style="list-style: none" class="mb-2">
            <i class="fe-alert-triangle mr-1"></i> {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {{-- <form action="{{ route('dasbor.halaman.store') }}" method="post" enctype="multipart/form-data">
                    --}}
                    {!! Form::open(array('url' => route('dasbor.link-terkait.store'),'files'=>'true')) !!}
                    @csrf

                    <div class="mb-3">
                        <label for="judul_link" class="form-label">Judul Link <span class="text-danger">*</span></label>
                        {!!
                        Form::text('judul_link',null,['required','id'=>'judul_link','class'=>'form-control','placeholder'=>'Judul
                        Link'])!!}
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">URL <span class="text-danger">*</span></label>
                        {!!
                        Form::text('url',null,['required','id'=>'url','class'=>'form-control','placeholder'=>'URL'])!!}
                    </div>

                    <div class="mb-3">
                        <label for="cover" class="form-label">Gambar</label>
                        <input type="file" name="cover" class="form-control" id="customFile">
                    </div>

                    <div class="mb-3">
                        <label for="product-category" class="form-label">Status <span
                                class="text-danger">*</span></label>
                        {!! Form::select('status', [''=>'Status ...','Publish'=>'Active','Draft'=>'Inactive'],
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
            <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                <i class="fe-save mr-1"></i> Simpan
            </button>
            <a href="{{ route('dasbor.link-terkait') }}" class="btn btn-lg btn-light">
                <i class="fe-arrow-left mr-1"></i> Kembali
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

    CKEDITOR.config.height='400px';

@endpush
