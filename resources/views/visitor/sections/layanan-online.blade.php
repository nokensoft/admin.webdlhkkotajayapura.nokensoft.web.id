<div id="layanan-online" class="rs-services home12-style" style="background-color: azure;">
    <div class="container">

        <!-- heading start -->
        <div class="sec-title4 mb-50">
            <div class="row">
                <div class="col-md-9 text-center">
                    <div class="sub-title">Layanan Online</div>
                    <h2 class="title purple-color col-md-8 mx-auto">Sistem Informasi dan Aplikasi Pendukung Pelayanan Secara Online</h2>
                    <p>Sistem Informasi atau Aplikasi Pendukung pelayanan secara online diadakan untuk menunjang pelayanan Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura kepada masyarakat lebih efisien dan terjangkau dari mana saja.</p>
                </div>
                <div class="col-md-3" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <img src="{{ asset('gambar/ilustrasi/6.png') }}" alt="gambar ilustrasi">
                </div>
            </div>
        </div>
        <!-- heading end -->

        <div class="row">

            @foreach ($layananOnlines as $layananOnline)
            <div class="col-lg-6 mx-auto mb-30">
                <div class="services-item">
                    <div class="services-image">
                        <div class="services-icons">
                            @if(empty($layananOnline->gambar))
                            <img src="{{ asset('gambar/layanan-online/0.jpg') }}" alt="Gambar" width="300px">
                            @else
                            <a href="{{ $layananOnline->url }}" target="_blank">
                                <img src="{{ asset( $layananOnline->gambar ) }}" alt="Gambar" width="300px">
                            </a>
                            @endif
                        </div>
                        <div class="services-text">
                            <div class="services-title">
                                <h2 class="title">{{ $layananOnline->judul }}</h2>
                            </div>
                            <p class="text col-md-8 mx-auto">
                                {{ $layananOnline->keterangan_singkat }}
                            </p>
                            <a href="{{ $layananOnline->url }}" target="_blank" class="readon green-btn" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);"><i class="fa-solid fa-globe me-2"></i> Buka Aplikasi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->                
            @endforeach

        </div>
    </div>
</div>
