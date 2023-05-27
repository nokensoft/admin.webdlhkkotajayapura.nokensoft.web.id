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
                            <li class="breadcrumb-item"><a href="{{route('dasbor')}}">Dasbor</a></li>
                            <li class="breadcrumb-item"><a href="{{route('pengguna.index')}}">Mengelola Pengguna</a>
                            </li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Detail Pengguna</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="card">
                <div class="col-lg-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="name" class="form-label">Nama</label>
                                        {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>
                                        'Nama', 'readonly']) !!}
                                    </div>
                                    <br>
                                    <div class="col-md-12 mb-2">
                                        <label for="email" class="form-label">Email</label>
                                        {!!
                                        Form::text('email',$user->email,['class'=>'form-control','placeholder'=>'Email'])
                                        !!}
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Peran</label>
                                        {!!
                                        Form::text('email',implode('',$user->roles()->pluck('display_name')->toArray()),['class'=>'form-control','placeholder'=>'Email'])
                                        !!}
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <div class="d-block mb-3">
                                            @if(!$user->picture)
                                            <img src="{{asset('gambar/pengguna/00.jpg')}}"
                                                id="preview-picture" alt="Profile Picture" class="img-thumbnail w-50">
                                            @else
                                            <img src="{{asset('gambar/pengguna')}}/{{ $user->picture }}"
                                                id="preview-picture" alt="Profile Picture" class="img-thumbnail w-50">
                                            @endif
                                        </div>
                                    </div>
                                </div> <!-- end card group -->
                            </div>

                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col">
                                <div class="card-box">
                                    <a href="{{ route('pengguna.edit',['id' => $user->slug]) }}"
                                        class="btn btn-lg btn-outline-dark waves-effect waves-light">
                                        <i class="mdi mdi-account-edit mr-1"></i>Sunting
                                    </a>
                                    <a href="{{ route('pengguna.index') }}" class="btn btn-light">
                                        <i class="mdi mdi-arrow-left mr-1"></i>Kembali
                                    </a>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> <!-- end card -->

</div> <!-- end col -->





<!-- end row -->
<!--end wrapper-->



@stop
