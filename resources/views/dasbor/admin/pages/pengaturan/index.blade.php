@extends('dasbor.layout.app')
@section('content')
    <!-- start page content wrapper-->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"> <a href="{{ url('dasbor') }}">Dasbor </a></li>
                        <li class="breadcrumb-item active"> Pengaturan </li>
                    </ol>
                </div>
                <h4 class="page-title">Pengaturan </h4>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                {{-- <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap"> --}}
                <div class="card-body">
                    <h5 class="card-title">Informasi Situs</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Judul Situs : <b class="d-block">{{ $pengaturan->judul_situs }}</b></li>
                        <li class="list-group-item">Deskripsi Situs : <b class="d-block">{{ $pengaturan->deskripsi_situs }}</b></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ url('dasbor/pengaturan/edit/informasi-situs') }}" class="btn btn-lg btn-outline-primary border-0">
                            <i class="fe-edit"></i> Ubah
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-md-4">
            <div class="card">
                {{-- <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap"> --}}
                <div class="card-body">
                    <h5 class="card-title">Kontak</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Alamat Email : <b class="d-block">{{ $pengaturan->alamat_email }}</b></li>
                        <li class="list-group-item">Nomor Telepon : <b class="d-block">{{ $pengaturan->nomor_telepon }}</b></li>
                        <li class="list-group-item">Alamat Kantor : <b class="d-block">{{ $pengaturan->alamat_kantor }}</b></li>
                        <li class="list-group-item">Alamat Google Map : <b class="d-block">{{ $pengaturan->alamat_google_map }}</b></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ url('dasbor/pengaturan/edit/informasi-kontak') }}" class="btn btn-lg btn-outline-primary border-0">
                            <i class="fe-edit"></i> Ubah
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-md-4">
            <div class="card">
                {{-- <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap"> --}}
                <div class="card-body">
                    <h5 class="card-title">Logo</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Logo : 
                            <span class="d-block pt-2">
                                <img src="{{ asset($pengaturan->logo ?? '') }}" alt="gambar logo" class="img-fluid">
                            </span>
                        </li>
                        <li class="list-group-item">
                            Logo Loader : 
                            <span class="d-block pt-2">
                                <img src="{{ asset($pengaturan->logo_loader ?? '') }}" alt="gambar logo loader" class="img-fluid">
                            </span>
                        </li>
                        <li class="list-group-item">
                            Favicon : 
                            <span class="d-block pt-2">
                                <img src="{{ asset($pengaturan->favicon ?? '') }}" alt="gambar favicon" class="img-fluid">
                            </span>
                        </li>                        
                    </ul>
                </div>
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ url('dasbor/pengaturan/edit/logo') }}" class="btn btn-lg btn-outline-primary border-0">
                            <i class="fe-edit"></i> Ubah
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-md-4">
            <div class="card">
                {{-- <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap"> --}}
                <div class="card-body">
                    <h5 class="card-title">Media Sosial</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Instagram : <b class="d-block"><a href="{{ $pengaturan->instagram }}" target="_blank">{{ $pengaturan->instagram }}</a></b></li>
                        <li class="list-group-item">Nomor Telepon : <b class="d-block"><a href="{{ $pengaturan->instagram }}" target="_blank">{{ $pengaturan->facebook }}</a></b></li>
                        <li class="list-group-item">Twitter : <b class="d-block"><a href="{{ $pengaturan->instagram }}" target="_blank">{{ $pengaturan->twitter }}</a></b></li>
                        <li class="list-group-item">Tiktok : <b class="d-block"><a href="{{ $pengaturan->instagram }}" target="_blank">{{ $pengaturan->tiktok }}</a></b></li>
                        <li class="list-group-item">Linkedin : <b class="d-block"><a href="{{ $pengaturan->instagram }}" target="_blank">{{ $pengaturan->linkedin }}</a></b></li>
                        <li class="list-group-item">Youtube : <b class="d-block"><a href="{{ $pengaturan->instagram }}" target="_blank">{{ $pengaturan->youtube }}</a></b></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="text-right">
                        <a href="{{ url('dasbor/pengaturan/edit/media-sosial') }}" class="btn btn-lg btn-outline-primary border-0">
                            <i class="fe-edit"></i> Ubah
                        </a>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

    </div>

@stop
