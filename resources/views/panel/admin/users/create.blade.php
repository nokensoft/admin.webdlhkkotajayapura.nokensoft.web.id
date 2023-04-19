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
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
                                <li class="breadcrumb-item active">Tambah Pengguna</li>
                            </ol>
                        </div>
                        <h4 class="page-title"></h4>
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
                            <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Tambah Pengguna</h5>
                            <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
                                                {!! Form::text('name',null,['required','id'=>'name','class'=>'form-control','placeholder'=>'Nama']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                {!! Form::text('email',null,['required','id'=>'email','class'=>'form-control','placeholder'=>'Email']) !!}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                                {!! Form::password('password',['required','id'=>'password','class'=>'form-control','placeholder'=>'Password']) !!}
                                            </div>
                                            <div class="col-md-6">
                                                <label for="confirm-password" class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
                                            {!! Form::password('confirm-password',['required','id'=>'confirm-password','class'=>'form-control','placeholder'=>'Konfirmasi Password']) !!}
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="role_id" class="form-label">Roles <span class="text-danger">*</span></label>
                                            {!! Form::select('role_id',$roles,[],['required','id'=>'role_id','class'=>'form-control']) !!}
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-6">
                                        <div class="card-box">
                                            <div class="mb-3">
                                                <label for="pic">Profile Picture</label>
                                                <div class="d-block mb-3">
                                                    <img src="{{asset('assets/admin/assets/images/upload.png')}}" id="preview-picture"
                                                    alt="Profile Picture" class="img-thumbnail w-50">
                                                </div>

                                                <label for="time" >Choose a profile picture</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="picture" id="picture">
                                                    <label class="custom-file-label" for="picture">Choose a picture</label>
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
                                            <a href="{{ route('users.index') }}" class="btn btn-light">Kembali</a>
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
               $('#picture').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                  $('#preview-picture').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
               });

            });
        </script>

  @endpush
