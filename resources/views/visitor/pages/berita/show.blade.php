@extends('visitor.layout.app')
@section('content')

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/dlhk/background/bg-header-1.jpg') }}" alt="gambar latar belakang">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title text-capitalize">Berita</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ url('/beranda') }}">Beranda</a>
                        </li>
                        <li>
                            <a class="active" href="{{ url('/berita') }}">Berita</a>
                        </li>
                        <li>{!! $data->judul ?? '' !!}</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

	       <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="blog-deatails">

                        @if(!$data->gambar)
                        <div class="bs-img">
                            <img src="{{ asset('gambar/berita/00.jpg') }}" alt="Gambar" class="w-100">
                        </div>
                        @else
                        <div class="bs-img">
                            <img src="{{ asset('gambar/berita/'.$data->gambar ?? '') }}" alt="Gambar" class="w-100">
                        </div>
                        @endif

                       <div class="blog-full">

                            <div class="d-block">
                                <h1>
                                    {!! $data->judul !!}
                                </h1>
                            </div>

                            <ul class="single-post-meta">
                                <li class="Post-cate">
                                    <div class="tag-line">
                                        <i class="fa fa-book"></i>
                                        <a href="{{ url('berita/kategori/'), $data->kategori->kategori_slug ?? ''   }}">{{ $data->kategori->name ?? '' }}</a>
                                    </div>
                                </li>
                                <li>
                                    <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{ $data->created_at }} </span>
                                </li>
                            </ul>

                            <div class="d-block fs-5">
                                {!! $data->konten !!}
                            </div>

                            <div class="mt-3">
                                <p class="mb-3 text-muted">Bagikan di media sosial :</p>
                                <div>
                                    <a href="#" class="btn btn-outline-success">
                                        <i class="fa-brands fa-facebook"></i> Facebook
                                    </a>
                                    <a href="#" class="btn btn-outline-success">
                                        <i class="fa-brands fa-twitter"></i> Twitter
                                    </a>
                                    <a href="#" class="btn btn-outline-success">
                                        <i class="fa-brands fa-linkedin"></i> LinkedIn
                                    </a>
                                    <a href="#" class="btn btn-outline-success">
                                        <i class="fa-brands fa-whatsapp"></i> Whatsapp
                                    </a>
                                </div>
                            </div>

                       </div>
                       <!-- end .blog-full -->

                   </div>
                </div>
            </div>
            <!-- Blog Section End -->

@include('visitor.sections.link-terkait')
<!-- Link Terkait -->

@include('visitor.sections.banner-3')
<!-- Newsletter -->

@stop
