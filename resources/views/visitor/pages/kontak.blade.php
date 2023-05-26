@extends('visitor.layout.app')
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('gambar/halaman/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Kontak</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/beranda') }}">Beranda</a>
                </li>
                <li>Kontak</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End --> 
    
    <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70" style="background-image: url(assets/images/banner/home12/banner-home12.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 padding-0 col-md-12 md-mb-40">
                    <div>
                        <img src="{{ asset('gambar/ilustrasi/3.png') }}" alt="gambar ilustrasi">
                    </div>
                </div>
                <div class="col-lg-6 padding-0 col-md-12">
                    <div class="rs-free-contact">
                        <div class="sec-title3">
                            <h2 class="title white-color">Ajukan Pertanyaan Anda</h2>
                        </div>

                        @include('visitor.sections.form-kontak')
                        <!-- Link Form Kontak --> 

                    </div>
                </div>
            </div>
        </div>
        
    </div>

    

    @include('visitor.sections.link-terkait')
    <!-- Link Terkait --> 

    @include('visitor.sections.banner-3')
    <!-- Newsletter -->       

@stop
