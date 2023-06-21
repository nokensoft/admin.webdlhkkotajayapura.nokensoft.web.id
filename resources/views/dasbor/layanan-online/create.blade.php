@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/layanan-online') }}">Layanan Online</a></li>
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

<!--
| ===============================================
| FROM START
| ===============================================
-->

<form action="{{ route('dasbor.layananonline.store') }}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                        <div class="row">

                            <div class="col-md-8">

                                <div class="form-group">
                                    <label for="judul" class="form-label">Judul <span class="text-danger">*</span></label>
                                    <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" value="{{ old('judul') }}">

                                    @if ($errors->has('judul'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('judul') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input item end -->

                                <div class="form-group">
                                    <label for="url" class="form-label">Tautan / URL  <span class="text-danger">*</span></label>
                                    <input type="text" id="url" name="url" class="form-control" placeholder="Misal : halaman/informasi-lingkungan " value="{{ old('url') }}">

                                    @if ($errors->has('url'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('url') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input item end -->

                                <div class="form-group">
                                    <label for="keterangan_singkat" class="form-label">Keterangan Singkat</label>
                                    <textarea name="keterangan_singkat" id="keterangan_singkat" rows="3" class="form-control" placeholder="Keterangan Singkat">{{ old('keterangan_singkat') }}</textarea>
                                    @if ($errors->has('keterangan_singkat'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('keterangan_singkat') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input item end -->

                                <div class="form-group">
                                    <label for="keterangan_lengkap" class="form-label">Keterangan Lengkap <span class="text-danger">*</span></label>
                                    <textarea name="keterangan_lengkap" class="ckeditor form-control" id="keterangan_lengkap" cols="30" rows="10">{{ old('keterangan_lengkap') }}</textarea>
                                    @if ($errors->has('keterangan_lengkap'))
                                    <span class="text-danger" role="alert">
                                        <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('keterangan_lengkap') }}</small>
                                    </span>
                                    @endif
                                </div>
                                <!-- input item end -->

                                <div class="form-group">
                                    <label for="status" class="form-label d-block">Status <span class="text-danger">*</span></label>
                                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                                        <option value="" hidden>Pilih</option>
                                        <option value="publish" @if(old('status') == 'publish') Selected @endif>Active</option>
                                        <option value="draft" @if(old('status') == 'draft') Selected @endif>Inactive</option>
                                    </select>

                                    @if ($errors->has('status'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('status') }}</small>
                                        </span>
                                    @endif
                                </div>
                                <!-- input item end -->

                            </div> <!-- end col -->

                            <div class="col-md-4">

                                <div class="form-group">

                                    <div class="mb-2">
                                        <img src="{{ asset('gambar/berita/00.jpg') }}" alt="Gambar" id="preview-gambar" class="img-thumbnail w-100">
                                    </div>
                                    <label for="gambar" class="form-label d-block">Gambar <span class="text-danger">*</span></label>
                                    @if ($errors->has('gambar'))
                                        <span class="text-danger" role="alert">
                                            <small class="pt-1 d-block"><i class="fe-alert-triangle mr-1"></i> {{ $errors->first('gambar') }}</small>
                                        </span>
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="gambar" accept="image/*">

                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>

                                </div>
                                <!-- input item end -->

                            </div> <!-- ebd col -->

                        </div> <!-- end row -->

                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->


    </div>
    <!-- end row -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-lg btn-primary waves-effect waves-light">
                        <i class="fe-save mr-1"></i> Simpan
                    </button>
                    <a href="{{ route('dasbor.layananonline') }}" class="btn btn-lg btn-lg btn-light">
                        <i class="fe-arrow-left mr-1"></i> Kembali
                    </a>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</form>

<!--
| ===============================================
| FROM END
| ===============================================
-->


@stop

@push('script-header')
<!-- Plugins css-->
<link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush

@push('script-footer')
<!-- Select2 js-->
<script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
<!-- Quill js -->
<script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>
<!-- Init js -->
<script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
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

   CKEDITOR.config.height='400px';
</script>

@endpush
