@extends('layouts.base_panel')
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
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dasbor</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}"></a>Mengelola Berita</li>
                                <li class="breadcrumb-item active">Sunting</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sunting Berita </h4>
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
                            <h1></h1>
                            <form action="{{route('berita.update',['berita' => $berita->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Judul <span class="text-danger">*</span></label>
                                            {!! Form::text('title',$berita->title,['required','id'=>'title','class'=>'form-control','placeholder'=>'Judul Berita ']) !!}
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Konten <span class="text-danger">*</span></label>
                                            <textarea name="body" class="form-control" rows="8" placeholder="Isi konten">{{ old('body',$berita->body) }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="category" class="form-label">Kategori <span class="text-danger">*</span></label>
                                            <select name="category_id" class="form-control">
                                                <option value="{{ $berita->kategori->id }}" selected>{{ $berita->kategori->name }}</option>
                                                @foreach ($kategori as $c )
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                            <select name="status" class="form-control">
                                                <option value="{{ $berita->status }}" selected>{{ $berita->status }}</option>
                                                <option value="draft">Draft</option>
                                                <option value="publish">Publish</option>

                                            </select>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-4">
                                        <div class="card-box">
                                            <div class="mb-3">
                                                <label for="pic">Gambar <span class="text-danger">*</span></label>
                                                <div class="d-block mb-3">
                                                    @if(!$berita->image)
                                                    <img src="{{asset('assets/admin/assets/images/upload.png')}}" id="preview-image"
                                                    alt="Profile Picture" class="img-thumbnail w-50">
                                                    @else
                                                    <img src="{{asset('file/berita')}}/{{ $berita->image }}" id="preview-image"
                                                    alt="Profile Picture" class="img-thumbnail w-50">
                                                    @endif
                                                </div>

                                                <div class="input-group">
                                                    <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image" id="image">

                                                    </div>
                                                    @error('picture')
                                                        <p class="form-text text-danger text-xs mt-1"><small>{{$message}}</small></p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end card group -->
                                    </div>

                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col">
                                        <div class="card-box">
                                            <button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
                                            <a href="{{ route('berita.index') }}" class="btn btn-light">
                                                <i class="mdi mdi-arrow-left mr-1"></i>Kembali
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
        <script type="text/javascript">
            $(document).ready(function (e) {
               $('#image').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });
        </script>

  @endpush
