@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/pengguna') }}">Pengguna</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <h4 class="page-title">Detail Pengguna </h4>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    
                    <div class="col-md-8">

                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Nama Lengkap</label>
                            <div class="border-bottom py-1">
                                {{ $user->name ?? '' }}
                            </div>
                        </div>
                        <!-- item end -->

                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Alamat Email</label>
                            <div class="border-bottom py-1">
                                {{ $user->email ?? '' }}
                            </div>
                        </div>
                        <!-- item end -->

                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Peran</label>
                            <div class="border-bottom py-1">
                                {{ implode($user->roles()->pluck('display_name')->toArray()) ?? '' }}
                            </div>
                        </div>
                        <!-- item end -->      

                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Status</label>
                            <div class="border-bottom py-1">
                                {{ $user->status ?? '' }}
                            </div>
                        </div>
                        <!-- item end -->    
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Tanggal Terbit</label>
                            <div class="border-bottom py-1">
                                {{ $user->created_at ?? '' }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Tanggal Diubah</label>
                            <div class="border-bottom py-1">
                                {{ $user->updated_at ?? '' }}
                            </div>
                        </div>
                        <!-- item end -->              

                    </div>
                    <div class="col-md-4 order-sm-first order-md-last">
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Gambar</label>
                            <div class="border-bottom py-1">
                                @if(empty($user->picture)) 
                                <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="Gambar" class="w-100">
                                @else 
                                <img src="{{ asset('gambar/pengguna/' . $user->picture ) }}" alt="Gambar" class="w-100">
                                @endif
                            </div>
                        </div>
                        <!-- item end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('dasbor/pengguna/' . $user->slug.'/edit') }}" class="btn btn-lg btn-primary waves-effect waves-light">
                    <i class="fe-edit"></i> Ubah
                </a>
                <a href="{{ url('dasbor/pengguna') }}" class="btn btn-lg btn-light waves-effect waves-light border">
                    <i class="fe-arrow-left mr-1"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@stop


