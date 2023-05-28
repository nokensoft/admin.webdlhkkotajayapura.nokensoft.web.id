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
                    @if(empty($informasiLingkungan->gambar))
                        <img src="{{ asset('gambar/berita/0.jpg') }}" alt="Gambar">
                    @else
                    <a href="{{ $informasiLingkungan->url }}">
                        <img src="{{ asset('gambar/informasi-lingkungan/' . $informasiLingkungan->gambar ) }}" alt="Gambar">
                    </a>
                    @endif

                    <div class="title-part mt-0">
                        <h2 class="title">{{ $informasiLingkungan->judul }}</h2>
                    </div>
                    <div class="content-part d-flex align-items-center">
                        <div class="mx-auto">
    
                            <h4 class="title">
                                <a href="{{ $informasiLingkungan->url }}">
                                    <i class="fa-solid fa-file"></i> {{ $informasiLingkungan->keterangan_singkat }}
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col end -->
                
            @endforeach
        </div>
    </div>
    
</div>