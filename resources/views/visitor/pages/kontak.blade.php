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
    
    <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 md-mb-40">
                    <img src="{{ asset('gambar/ilustrasi/6.png') }}" class="up-down-new" alt="gambar ilustrasi" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <p class="">Fitur kirim pesan ini dibuat untuk memberikan cara bagi pengunjung situs web DLHK Kota Jayapura untuk menghubungi Admin web kami secara langsung.</p>
                    <p class="">Melalui fitur ini, masyarakat atau pengunjung website kami juga dapat mengajukan permintaan informasi tertentu dengan cara memasukan rincian permintaan dengan sejelas-jelasnya. Admin website akan memprosesnya dan menghubungi Anda melalui nomor hp/wa dan juga email yang dikirimkan.</p>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="rs-free-contact">
                        <div class="sec-title3">
                            <h2 class="title white-color">Kirim Pesan Anda</h2>
                            <p class="text-light">Silahkan masukan data diri Anda dengan baik dan benar. Di bagian kolom rincian, mohon agar merincikan pesan Anda dengan baik dan jelas.</p>
                        </div>

                        @include('visitor.sections.form-kontak')
                        <!-- Link Form Kontak --> 

                    </div>
                </div>
            </div>
        </div>
        
    </div>

     

@stop
