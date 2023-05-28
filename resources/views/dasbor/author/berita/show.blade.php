@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <h4 class="page-title">Detail Berita </h4>
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
                            <label for="" class="font-weight-bold">Judul</label>
                            <div class="border p-3">
                                {{ $data->judul ?? '' }}
                            </div>
                        </div>
                        <!-- item end -->

                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Slug</label>
                            <div class="border p-3">
                                {{ $data->slug ?? '' }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Kategori</label>
                            <div class="border p-3">
                                {{ $data->kategori->name }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Konten Singkat</label>
                            <div class="border p-3">
                                {!! $data->konten_singkat !!}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Konten</label>
                            <div class="border p-3">
                                {!! $data->konten !!}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Status</label>
                            <div class="border p-3">
                                {{ $data->status }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Penulis</label>
                            <div class="border p-3">
                                {{ $data->author->name }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Tanggal Terbit</label>
                            <div class="border p-3">
                                {{ $data->created_at }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Diubah Terbit</label>
                            <div class="border p-3">
                                {{ $data->updated_at }}
                            </div>
                        </div>
                        <!-- item end -->

                    </div>
                    <div class="col-md-4 order-sm-first order-md-last">
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Gambar</label>
                            <div class="border p-3">
                                @if(empty($data->gambar)) 
                                <img src="{{ asset('gambar/berita/00.jpg') }}" alt="Gambar" class="w-100">
                                @else 
                                <img src="{{ asset('gambar/berita/' . $data->gambar ) }}" alt="Gambar" class="w-100">
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
                <a href="{{ url('dasbor/berita/' . $data->slug.'/edit') }}" class="btn btn-lg btn-primary">
                    <i class="fe-edit"></i> Ubah
                </a>
                <a href="{{ route('dasbor.berita') }}" class="btn btn-lg btn-light">
                    <i class="fe-arrow-left mr-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@stop


