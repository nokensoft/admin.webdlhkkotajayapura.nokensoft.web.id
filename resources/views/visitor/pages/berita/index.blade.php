@extends('visitor.layout.app')
@section('content')

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/dlhk/background/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
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
                                        <input type="search" placeholder="Cari judul berita..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
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
                                        <i class="fa-solid fa-arrow-right me-2"></i>
                                        Tampilkan Profil Dinas
                                    </a>
                                </div>
                                <!-- Banner Sidebar End -->

                            </div>
                        </div>
                        <!-- .col Sidebar End -->

                        <div class="col-lg-8 pr-50">
                            <div class="row">

                                @foreach ($datas as $data )
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            

                                            @if(empty($data->gambar))
                                            <a href="{{ url('berita/' . $data->slug ?? '') }}"><img src="{{ asset('file/berita/gambar-0.jpg') }}" alt="Gambar" class="img-fluid"></a>
                                            @else
                                            <img src="{{ asset( $data->gambar ) }}" alt="Gambar" class="img-fluid w-100">
                                            @endif

                                        </div>
                                        <div class="blog-content">
                                            <h3 class="blog-title text-capitalize"><a href="{{ url('berita/' . $data->slug ?? '') }}">{{ $data->judul }}</a></h3>
                                            <div class="blog-meta">
                                                <ul class="btm-cate">
                                                    <li>
                                                        <div class="blog-date">
                                                            <i class="fa fa-calendar-check-o"></i> {{ Carbon\Carbon::parse($data->created_at)->format('d M Y') }}                                                       
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="author">
                                                            <i class="fa fa-user-o"></i> {{ $data->author->name ?? '' }}  
                                                        </div>
                                                    </li>   
                                                    <li>
                                                        <div class="tag-line">
                                                            <i class="fa fa-book"></i>
                                                            <a href="{{ url('berita/kategori/' . $data->kategori->kategori_slug ) }}">{{ $data->kategori->name ?? '' }}</a> 
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-desc">   
                                                {!! $data->isi_singkat !!}                                     
                                            </div>
                                            <div class="blog-button">
                                                <a class="blog-btn" href="{{ url('berita/' . $data->slug ?? '') }}">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <!-- .col End -->
                    </div> 
                    <!-- .row end -->

                    <div class="row">
                        <div class="col-12">
                            {{ $datas->links() }}
                        </div>
                    </div>
                    <!-- .row end -->

                </div>
            </div>
          <!-- Blog Section End -->  

@include('visitor.sections.link-terkait')
<!-- Link Terkait -->

@include('visitor.sections.banner-3')
<!-- Newsletter -->

@stop
