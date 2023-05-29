@extends('visitor.layout.app')
@section('content')

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs breadcrumbs-overlay">
        <div class="breadcrumbs-img">
            <img src="{{ asset('gambar/halaman/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
        </div>
        <div class="breadcrumbs-text white-color">
            <h1 class="page-title">Pesan</h1>
            <ul>
                <li>
                    <a class="active" href="{{ url('/beranda') }}">Beranda</a>
                </li>
                <li>Pesan</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->            

    <!-- Blog Section Start -->
    <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
        <div class="blog-deatails">

            <div class="bs-img">
                
            </div>

            <div class="blog-full">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset( 'gambar/ilustrasi/2.png' ) }}" alt="gambar ilustrasi">
                    </div>
                    <div class="col-md-8">
                        <h1 class="display-1 fw-bold mt-5">Terkirim!</h1>
                        <p>Terima kasih telah memanfaatkan kolom pesan pada website kami untuk berinteraksi. Pesan Anda telah terkirim ke sistem kami dan Admin website akan  mengecek dan menanggapinya.</p>
                        <p>Kembali ke <a href="{{ url('beranda') }}" class="btn btn-success"><i class="fa-solid fa-home"></i> Beranda</a></p>  
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Blog Section End -->    

@stop
