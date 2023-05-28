@extends('visitor.layout.app')
@section('content')

@if (!$halaman)    

    @include('visitor.sections.halaman-404') 

@else

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('gambar/halaman/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">{!! $halaman->judul_halaman !!}</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/beranda') }}">Beranda</a>
                </li>
                <li>{!! $halaman->judul_halaman !!}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Blog Section Start -->
    <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
        <div class="blog-deatails">

            @if($halaman->gambar)
            <div class="bs-img">
                <img src="{{ asset( 'gambar/halaman/' . $halaman->gambar ) }}" alt="Gambar">
            </div>
            @endif

            <div class="blog-full">
                {!! $halaman->konten !!}
            </div>
        </div>
        </div>
    </div>
    <!-- Blog Section End -->  

@endif    

@include('visitor.sections.link-terkait')
<!-- Link Terkait --> 

@include('visitor.sections.banner-3')
<!-- Newsletter -->        

@stop
