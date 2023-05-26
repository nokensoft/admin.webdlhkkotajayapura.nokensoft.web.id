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

    @include('visitor.sections.form-kontak')
    <!-- Link Form Kontak --> 

    @include('visitor.sections.link-terkait')
    <!-- Link Terkait --> 

    @include('visitor.sections.banner-3')
    <!-- Newsletter -->       

@stop
