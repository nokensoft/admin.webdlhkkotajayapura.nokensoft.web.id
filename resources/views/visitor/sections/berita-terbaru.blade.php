<div id="berita" class="rs-blog main-home modify1 pb-100 pt-100 md-pt-70 md-pb-70">
    <div class="container">

        <!-- heading start -->
        <div class="sec-title4 text-center mb-50">
            <div class="sub-title">Berita Terbaru</div>
            <h2 class="title">Publikasi Kegiatan DLHK Kota Jayapura</h2>
        </div>
        <!-- heading end -->

        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30"
            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
            data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
            data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
            data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
            data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
            data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">

            @foreach ($beritas as $data )
            <div class="blog-item">
                <div class="image-part">
                    @if(empty($data->gambar))
                        <img src="{{ asset('gambar/berita/00.jpg') }}" alt="Gambar">
                    @else
                        <a href="{{ url('gambar/berita/' . $data->slug ?? '') }}">
                            <img src="{{ asset('gambar/berita/'.$data->gambar) }}" alt="Gambar">
                        </a>
                    @endif
                </div>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="date"><i class="fa fa-calendar-check-o"></i>{{ Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</span>
                        <span class="admin"><i class="fa fa-user"></i>{{ $data->author->name ?? '' }}</span>
                    </div>
                    <h3 class="title text-capitalize"><a href="{{ url('berita/' . $data->slug ?? '') }}"> {{ $data->judul ?? '' }} </a></h3>
                    <div class="btn-btm">
                        <div class="cat-list">
                            <ul class="post-categories">
                                <li><a href="{{ url('berita/kategori/' . $data->kategori->kategori_slug ) }}">{{ $data->kategori->name ?? '' }}</a></li>
                            </ul>
                        </div>
                        <div class="rs-view-btn">
                            <a href="{{ url('berita/' . $data->slug ?? '') }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .blog-item end -->
            @endforeach

        </div>

        <div class="text-center mt-5">
            <a href="{{ url('berita/') }}" class="readon green-btn">
                <i class="fa-solid fa-arrow-right me-2"></i> Tampilkan Berita Lainnya
            </a>
        </div>

    </div>
</div>
