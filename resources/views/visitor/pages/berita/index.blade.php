@extends('visitor.layout.app')
@section('content')

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/dlhk/background/bg-header-1.jpg') }}" alt="gambar latar belakang">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">{{ $pageTitle }}</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ url('beranda') }}">Beranda</a>
                        </li>
                        <li>{{ $pageTitle }}</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">

                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Cari judul berita..." name="keyword" id="keyword" class="search-input" oninput="myFunction()" value="">
                                    </div>
                                </div>
                                <!-- Pencarian End -->

                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Kategori Berita</h3>
                                    <ul>
                                        @foreach($kategoris as $kategori)
                                        <li><a href="{{ url('berita/kategori/' . $kategori->kategori_slug) }}">{{ $kategori->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Kategori End -->

                                <div class="recent-posts mb-50 text-center">
                                    <h3>{{ $pengaturan->judul_situs }}</h3>
                                    <p>{{ $pengaturan->deskripsi_situs }}</p>
                                    <img src="{{ asset('gambar/ilustrasi/3.png') }}" alt="gambar ilustrasi" class="mb-3">
                                    <a href="{{ url('halaman/profil-dinas') }}" class="btn btn-lg btn-success w-100">
                                        <i class="fa-solid fa-arrow-right me-2"></i> Tampilkan Profil Dinas
                                    </a>
                                </div>
                                <!-- Banner Sidebar End -->

                            </div>
                        </div>
                        <!-- .col Sidebar End -->

                        <div class="col-lg-8 pr-50">
                            <div class="row" id="baca">
                                <div id="berita"></div>

                            </div>
                        </div>
                        <!-- .col End -->
                    </div>
                    <!-- .row end -->

                    <div class="row">
                        <div class="col-12">

                            <div class="" id="halaman"></div>

                        </div>
                    </div>
                    <!-- .row end -->

                </div>
            </div>
          <!-- Blog Section End -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/pencarian.berita.js')}}"></script>


@include('visitor.sections.link-terkait')
<!-- Link Terkait -->

@include('visitor.sections.banner-3')
<!-- Newsletter -->

@stop
