@extends('visitor.layout.app')
@section('content')

@if (!$halaman)    

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('file/halaman/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">404</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/beranda') }}">Beranda</a>
                </li>
                <li>404</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Blog Section Start -->
    <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
        <div class="blog-deatails">

            <div class="blog-full text-center">
                <h1>404</h1>
                <p>Maaf, halaman yang anda cari tidak ditemukan. Tampilkan <a href="{{ url('beranda') }}">Beranda</a></p>
            </div>
        </div>
        </div>
    </div>
    <!-- Blog Section End -->  

@else

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('file/halaman/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">{!! $halaman->judul !!}</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/beranda') }}">Beranda</a>
                </li>
                <li>{!! $halaman->judul !!}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Blog Section Start -->
    <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
        <div class="blog-deatails">

                <div class="bs-img">
                    <a href="#"><img src="{{ asset('file/halaman/' . $halaman->cover ) }}" alt="{{ $halaman->cover }}"></a>
                </div>
            <div class="blog-full">
                {!! $halaman->isi !!}
            </div>
        </div>
        </div>
    </div>
    <!-- Blog Section End -->  

@endif         

@stop
