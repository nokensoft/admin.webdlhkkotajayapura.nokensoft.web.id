@extends('frontend.layout.app')
@section('content')

<!-- Banner Section Start -->
@include('frontend.pages.banner')
<!-- Banner Section End -->

<!-- Sekilas DLHK Start -->
<div class="rs-services style1 pt-100 md-pt-70 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-40">
                <div class="img-part">
                    <img src="{{ asset('assets/images/dlhk/banner/1.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="sec-title3 mb-30">
                    <div class="sub-title green-color">Profil DLHK</div>
                    <h2 class=" title new-title">Sekilas Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura
                    </h2>
                    <div class="new-desc">
                        <p>
                            {{ $pengaturan->deskripsi_situs }}
                        </p>
                    </div>
                    <!-- button play -->
                    <a href="#" class="btn btn-lg btn-success mt-3">
                        <i class="fa-solid fa-play-circle me-2"></i>Play Video Profil DLHK
                    </a>
                    <!-- button youtube channel -->

                    <!-- button play -->
                    <a href="{{ $pengaturan->youtube }}"
                    class="btn btn-lg btn-outline-success mt-3" target="_blank">
                        <i class="fa-solid fa-play-circle me-2"></i>Tampilkan Channel Youtube
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sekilas DLHK End -->

<!-- Layanan Online Start -->
@include('frontend.sections.layanan-online')
<!-- Layanan Online End -->

<!-- Berita Terbaru Start -->
@include('frontend.sections.berita-terbaru')
<!-- Berita Terbaru End -->

<!-- Banner Himbauan 1 Start -->
<div id="layanan-online" class="rs-services home12-style" style="background-image: url({{ asset('assets/images/dlhk/gambar/img-4.jpg') }});background-size:cover;">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-2 text-white pt-100 fw-bold text-center">
                    "Sayangi Lingkungan Seperti Mereka Menyanyai Kita."
                </h1>
            </div>
            <div class="col-lg-4 mx-auto">
                <img src="{{ asset('/assets/images/dlhk/banner/1.png') }}" alt="Logo Kota Jayapura Green">
            </div>
        </div>
    </div>
</div>
<!-- Banner Himbauan 1 End -->

<!-- Informasi Lingkungan Start -->
@include('frontend.sections.informasi-lingkungan')
<!-- Informasi Lingkungan End -->

<!-- Permohonan Data Start -->
<div class="why-choose-us style3">
    @include('frontend.pages.why-choose-us')
</div>
<!-- Permohonan Data End -->

<!-- Faq Section Start -->
<div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
    @include('frontend.pages.faq')
</div>
<!-- faq Section Start -->

<!-- Link Terkait Start -->
@include('frontend.sections.link-terkait')
<!-- Link Terkait End -->

<!-- Newsletter section start -->
<div class="rs-newsletter style1 green-color mb--90 sm-mb-0 sm-pb-70">
    <div class="container">
        <div class="newsletter-wrap shadow" style="background-image: url('assets/images/dlhk/background/bg1.jpg');">
            <div class="row y-middle text-white pt-50">
                <div class="col-lg-8 mx-auto text-center">

                    <img src="{{ asset('assets/frontend/assets/images/dlhk/banner/1.png') }}" alt="Logo Kota Jayapura Green" width="300px">

                    <h1 class="title text-white h1 fw-bold">Menjaga lingkungan bukan hanya <br> angan-angan, tapi tindakan.</h1>
                    <p class="pt-20">
                        <a href="https://www.dlhk.jayapurakota.go.id" class="link-success bg-white px-3 py-2 rounded shadow">www.dlhk.jayapurakota.go.id</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter section end -->
@stop
