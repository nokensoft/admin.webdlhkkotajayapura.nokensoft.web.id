@extends('frontend.layout.app')
@section('content')

 <!-- Banner Section Start -->
 <div id="rs-banner" class="rs-banner style10">
    @include('frontend.pages.banner')
</div>
<!-- Banner Section End -->

<!-- Sekilas DLHK Start -->
<div class="rs-services style1 pt-100 md-pt-70 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-40">
                <div class="img-part">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/banner/1.png') }}" alt="">

                </div>
            </div>
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="sec-title3 mb-30">
                    <div class="sub-title green-color">Profil DLHK</div>
                    <h2 class=" title new-title">Sekilas Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura
                    </h2>
                    <div class="new-desc">
                        <p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>
                        <p>Lorem ipsum dolor sit amet, ing elit, sed eius to mod tempors incididunt ut labore et dolore magna this aliqua sed eius to mod tempors incid idunt ut labore data management.</p>
                    </div>
                    <!-- button play -->
                    <a href="#" class="btn btn-lg btn-success mt-3">
                        <i class="fa-solid fa-play-circle me-2"></i>Play Video Profil DLHK
                    </a>
                    <!-- button youtube channel -->

                    <!-- button play -->
                    <a href="https://www.youtube.com/results?search_query=dinas+lingkungan+hidup+kota+jayapura" class="btn btn-lg btn-outline-success mt-3" target="_blank">
                        <i class="fa-solid fa-play-circle me-2"></i>Tampilkan Channel Youtube
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sekilas DLHK End -->

<!-- Layanan Online Start -->
<div id="layanan-online" class="rs-services home12-style">
    @include('frontend.pages.layanan-online')
</div>
<!-- Layanan Online End -->

<!-- Berita Terbaru Start -->
<div id="berita" class="rs-blog main-home modify1 pb-100 pt-100 md-pt-70 md-pb-70">
    @include('frontend.pages.berita',['berita' => $berita])
</div>
<!-- Berita Terbaru End -->

<!-- Layanan Online Start -->
<div id="layanan-online" class="rs-services home12-style" style="background-image: url('https://img.freepik.com/free-photo/sunrise-jungle_1385-1690.jpg?t=st=1678126075~exp=1678126675~hmac=a4e72b1f48a910b7151d3c8de56ee3873ce20b34330e858da671c62753c8824f');">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-2 text-white pt-100 fw-bold text-center">
                    "Sayangi Lingkungan Seperti Mereka Menyanyai Kita."
                </h1>
            </div>
            <div class="col-lg-4 mx-auto">
                <img src="{{ asset('/assets/frontend/assets/images/dlhk/banner/1.png') }}" alt="Logo Kota Jayapura Green">
            </div>
        </div>
    </div>
</div>
<!-- Layanan Online End -->

<!-- Informasi Lingkungan Start -->
<div id="informasi-lingkungan" class="rs-degree style1 modify mt-100 pb-70 md-pb-40">
    @include('frontend.pages.informasi-lingkungan')
</div>
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
<div class="rs-partner style1 pt-100 md-pt-70 pb-100">
    <div class="container">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"
            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
            data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
            data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false"
            data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false"
            data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
            data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            <div class="partner-item border py-4 bg-white">
                <a href="#"><img src="{{ asset('assets/frontend/assets/images/dlhk/link-terkait/05.png') }}" alt=""></a>
            </div>
            <div class="partner-item border py-4 bg-white">
                <a href="#"><img src="{{ asset('assets/frontend/assets/images/dlhk/link-terkait/04.png') }}" alt=""></a>
            </div>
            <div class="partner-item border py-4 bg-white">
                <a href="#"><img src="{{ asset('assets/frontend/assets/images/dlhk/link-terkait/03.png') }}" alt=""></a>
            </div>
            <div class="partner-item border py-4 bg-white">
                <a href="#"><img src="{{ asset('assets/frontend/assets/images/dlhk/link-terkait/01.png') }}" alt=""></a>
            </div>
            <div class="partner-item border py-4 bg-white">
                <a href="#"><img src="{{ asset('assets/frontend/assets/images/dlhk/link-terkait/02.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</div>
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
