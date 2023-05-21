<div id="layanan-online" class="rs-services home12-style" style="background-image: url({{ asset('assets/images/bg/home12/services-bg.jpg') }})">
    <div class="container">

        <!-- heading start -->
        <div class="sec-title4 text-center mb-50">
            <div class="sub-title">Layanan Online</div>
            <h2 class="title purple-color">Sistem Informasi Pendukung Pelayanan Secara Online</h2>
        </div>
        <!-- heading end -->

        <div class="row">

            @foreach ($layananOnlines as $layananOnline)
            <div class="col-lg-4 mb-30">
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
