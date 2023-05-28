@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </div>
            <h4 class="page-title">Ubah</h4>
        </div>
    </div>
</div>

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
                {!! Form::open(array('url' => route('dasbor.berita.update',['id'=> $data->id]),'files'=>'true')) !!}
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-8">

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul Berita <span class="text-danger">*</span></label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul',$data->judul) }}" placeholder="Judul Berita">
                            @if ($errors->has('judul'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-3">{{ $errors->first('judul') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end-->

                        <div class="form-group">
                            <label for="category_id" class="form-label d-block">Pilih <span class="text-danger">*</span></label>
                            <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                <option value="{{ $data->kategori->id }}" hidden>{{ $data->kategori->name }}</option>
                                @foreach ($kategori as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-3">{{ $errors->first('category_id') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end-->

                        <div class="mb-3">
                            <label for="konten_singkat" class="form-label">Konten Singkat</label>
                            <textarea name="konten_singkat" class="form-control" placeholder="Konten singkat berita" rows="3">{{ old('konten_singkat',$data->konten_singkat) }}</textarea>
                            @if ($errors->has('konten_singkat'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-3">{{ $errors->first('konten_singkat') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end-->

                        <div class="mb-3">
                            <label for="konten" class="form-label">Konten <span class="text-danger">*</span></label>
                            <textarea name="konten" class="ckeditor form-control" placeholder="Konten Berita" rows="10">{{ old('konten',$data->konten) }}</textarea>
                            @if ($errors->has('konten'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-3">{{ $errors->first('konten') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end-->

                        <div class="form-group">
                            <label for="status" class="form-label">Status {{$data->status}} </label>
                            <select name="status" class="form-control">
                                <option value="" hidden></option>
                                <option value="Draft" @if($data->status == 'Draft') Selected @endif>Draft</option>
                                <option value="Publish" @if($data->status == 'Publish') Selected @endif>Publish</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-3">{{ $errors->first('status') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end -->


                    </div>
                    <!-- .col end-->

                    <div class="col-md-4">

                        <div class="mb-3">
                            <div class="mb-2">
                                @if(!$data->gambar)
                                <img src="{{ asset('gambar/berita/00.jpg') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                                @else
                                <img src="{{ asset('gambar/berita/'.$data->gambar) }}" alt="Gambar" id="preview-gambar" class="img-thumbnail img-fluid">
                                @endif
                            </div>
                            <label for="gambar" class="form-label d-block">Gambar <span class="text-danger">*</span></label>
                            <div class="custom-file w-100">
                                <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                <small class="text-muted mt-2 d-block">Pilih gambar baru dari komputer Anda</small>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                            @if ($errors->has('gambar'))
                                <span class="text-danger" role="alert">
                                    <small class="pt-3">{{ $errors->first('gambar') }}</small>
                                </span>
                            @endif
                        </div>
                        <!-- input item end-->

                    </div>
                    <!-- .col end-->

                </div>


            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->


</div>
<!--end wrapper-->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                    <i class="fe-save"></i> Simpan
                </button>
                <a href="{{ route('dasbor.berita') }}" class="btn btn-lg btn-light">
                    <i class="mdi mdi-arrow-left mr-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
</form>

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
    $(document).ready(function (e) {
               $('#gambar').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-gambar').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });

</script>
@endpush
