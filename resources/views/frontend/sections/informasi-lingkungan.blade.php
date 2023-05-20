<div id="informasi-lingkungan" class="rs-degree style1 modify mt-100 pb-70 md-pb-40">
    <div class="container">

        <!-- heading start -->
        <div class="sec-title4 text-center mb-45">
            <div class="sub-title">Informasi Lingkungan</div>
            <h2 class="title black-color">Publikasi Laporan dan Kinerja DLHK</h2>
        </div>
        <!-- heading end -->
    
        <div class="row y-middle">

            @foreach ($informasiLingkungans as $informasiLingkungan)
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ $informasiLingkungan->gambar }}" alt="">
                    <div class="title-part mt-0">
                        <h4 class="title">{{ $informasiLingkungan->judul }}</h4>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
    
                            <h2 class="title">
                                <a href="{{ $informasiLingkungan->url }}">
                                    <i class="fa-solid fa-file"></i> {{ $informasiLingkungan->judul }}
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
                
            @endforeach

            {{-- <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/informasi-lingkungan/2.jpg') }}" alt="">
                    <div class="title-part mt-0">
                        <h4 class="title">IKLH</h4>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
                            <h1 class="title"><a href="#"><i class="fa-solid fa-file"></i> IKLH</a></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->

            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/informasi-lingkungan/3.jpg') }}" alt="">
                    <div class="title-part mt-0">
                        <h4 class="title">HPSN</h4>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
                            <h1 class="title"><a href="#"><i class="fa-solid fa-file"></i> HPSN</a></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
            
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/informasi-lingkungan/4.jpg') }}" alt="">
                    <div class="title-part mt-0">
                        <h4 class="title">AMDAL</h4>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
                            <h1 class="title"><a href="#"><i class="fa-solid fa-file"></i> AMDAL</a></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
            
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/informasi-lingkungan/1.jpg') }}" alt="">
                    <div class="title-part mt-0">
                        <h4 class="title">KEHATI</h4>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
                            <h1 class="title"><a href="#"><i class="fa-solid fa-file"></i> KEHATI</a></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
            
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/informasi-lingkungan/2.jpg') }}" alt="">
                    <div class="title-part mt-0">
                        <h3 class="title">KONSERVASI ENERGI</h3>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
                            <h2 class="title"><a href="#"><i class="fa-solid fa-file"></i> KONSERVASI ENERGI</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
            
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/informasi-lingkungan/3.jpg') }}" alt="">
                    <div class="title-part mt-0">
                        <h4 class="title">MEKANISME PERIJINAN</h4>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
                            <h2 class="title"><a href="#"><i class="fa-solid fa-file"></i> MEKANISME PERIJINAN</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
            
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/informasi-lingkungan/4.jpg') }}" alt="">
                    <div class="title-part mt-0">
                        <h4 class="title">IZIN LINGKUNGAN</h4>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
                            <h2 class="title"><a href="#"><i class="fa-solid fa-file"></i> IZIN LINGKUNGAN</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
            
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="degree-wrap">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/informasi-lingkungan/1.jpg') }}" alt="">
                    <div class="title-part mt-0">
                        <h4 class="title">PENGELOLAAN B3</h4>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
                            <h2 class="title"><a href="#"><i class="fa-solid fa-file"></i> PENGELOLAAN B3</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
             --}}
        </div>
    </div>
    
</div>