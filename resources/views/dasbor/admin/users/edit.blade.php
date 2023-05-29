@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('dasbor')}}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{route('pengguna.index')}}">Kelola Pengguna</a></li>
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </div>
            <h4 class="page-title">Ubah</h4>
        </div>
    </div>
</div>
<!-- end row -->

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
                <h5 class="mb-3"></h5>
                <form action="{{route('pengguna.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
                                    {!!
                                    Form::text('name',$user->name,['required','id'=>'name','class'=>'form-control','placeholder'=>'Nama'])
                                    !!}
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    {!!
                                    Form::text('email',$user->email,['required','id'=>'email','class'=>'form-control','placeholder'=>'Email'])
                                    !!}
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Kata Sandi </label>
                                    {!!
                                    Form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Password'])
                                    !!}
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm-password" class="form-label">Konfirmasi Kata Sandi</label>
                                    {!!
                                    Form::password('confirm-password',['id'=>'confirm-password','class'=>'form-control','placeholder'=>'Konfirmasi
                                    Password']) !!}
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="role_id" class="form-label">Peran <span class="text-danger">*</span></label>
                                <select id="role_id" name="role_id" class="form-control">

                                    @foreach ($roles as $role)
                                    @if ( implode('',$user->roles()->pluck('role_id')->toArray()) == $role->id)
                                    <option selected value="{{$role->id}}">{{$role->display_name}}</option>
                                    @else
                                    <option value="{{$role->id}}">{{$role->display_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-md-6">
                            <div class="card-box">
                                <div class="mb-3">
                                    <label for="pic">Foto Profil</label>
                                    <div class="d-block mb-3">
                                        @if ($user->picture)
                                        <img src="{{asset('gambar/pengguna')}}/{{$user->picture}}" alt="allal"
                                            class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                        @else
                                        <img src="{{asset('gambar/pengguna/00.jpg')}}" id="preview-picture"
                                            alt="Profile Picture" class="img-thumbnail w-50">
                                        @endif
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="picture" id="picture">
                                            <label class="custom-file-label" for="picture">Pilih Foto Profil</label>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card group -->
                        </div>

                    </div> <!-- end row -->

                    <div class="row">
                        <div class="col">
                            <div class="card-box">
                                <button type="submit"
                                    class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
                                <a href="{{ route('pengguna.index') }}" class="btn btn-light">
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
<!-- end row -->

@stop

@push('script-header')
<!-- Plugins css-->
<link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
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
    CKEDITOR.config.height='400px';
</script>

@endpush
