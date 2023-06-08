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
            <div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70" id="paginate">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-12 order-last">
                            <div class="widget-area">                                

                                @include('visitor.widgets.pencarian-berita')
                                @include('visitor.widgets.kategori-berita')
                                @include('visitor.widgets.profil')

                            </div>
                        </div>
                        <!-- .col Sidebar End -->

                        <div class="col-lg-8 pr-50">
                            <div class="row">

                                <!-- MENAMPILKAN BERITA -->
                                <div id="berita"></div>

                            </div>
                        </div>
                        <!-- .col End -->

                    </div>
                    <!-- .row end -->

                    <div class="row">
                        <div class="col-12">

                            <!-- PENOMORAN HALAMAN -->
                            <div id="penomoranHalaman"></div>

                        </div>
                        <!-- .col End -->
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
