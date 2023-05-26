<div id="layanan-online" class="rs-services home12-style" style="background-image: url({{ asset('assets/images/bg/home12/services-bg.jpg') }})">
    <div class="container">

        <!-- heading start -->
        <div class="sec-title4 mb-50">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('gambar/ilustrasi/4.png') }}" alt="gambar ilustrasi">
                </div>
                <div class="col-md-9">
                    <div class="sub-title">Layanan Online</div>
                    <h2 class="title purple-color col-md-8">Sistem Informasi dan Aplikasi Pendukung Pelayanan Secara Online</h2>
                    <p>Sistem Informasi atau Aplikasi Pendukung pelayanan secara online diadakan untuk menunjang pelayanan Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura kepada masyarakat lebih efisien dan terjangkau dari mana saja.</p>
                </div>
            </div>
        </div>
        <!-- heading end -->

        <div class="row">

            @foreach ($layananOnlines as $layananOnline)
            <div class="col-lg-6 mb-30">
                <div class="services-item">
                    <div class="services-image">
                        <div class="services-icons">
                            @if(empty($layananOnline->gambar))
                            <img src="{{ asset('gambar/layanan-online/-0.jpg') }}" alt="Gambar">
                            @else
                            <a href="{{ $layananOnline->url }}" target="_blank">
                                <img src="{{ asset( $layananOnline->gambar ) }}" alt="Gambar">
                            </a>
                            @endif
                        </div>
                        <div class="services-text">
                            <div class="services-title">
                                <h2 class="title">{{ $layananOnline->judul }}</h2>
                            </div>
                            <p class="text">
                                {{ $layananOnline->keterangan_singkat }}
                            </p>
                            <a href="{{ $layananOnline->url }}" target="_blank" class="readon green-btn"><i class="fa-solid fa-globe me-2"></i> Buka Aplikasi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->                
            @endforeach

        </div>
    </div>
</div>
