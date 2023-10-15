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
                                <h1 class="text-success h1 fw-bold">
                                    {!! $data->judul !!}
                                </h1>
                            </div>

                            <ul class="single-post-meta gap-2">
                                <li>
                                    <div class="text-success">
                                        <i class="fa-solid fa-book"></i>
                                        <a href="/berita/kategori/{{ $data->kategori->kategori_slug ?? '' }}" class="link-success">
                                            {{ $data->kategori->name ?? '' }}
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="text-success">
                                        <i class="fa-solid fa-calendar-check-o"></i>
                                        {{ Carbon\Carbon::parse($data->created_at)->format('d F Y') }}
                                    </div>
                                </li>
                            </ul>

                            <div class="d-block fs-5">
                                {!! $data->konten ?? '' !!}
                            </div>

                            <div class="mt-3">
                                <p class="mb-3 text-muted">Bagikan di media sosial :</p>
                                <div>
                                    <a class="facebook btn btn-outline-success">
                                        <i class="fa-brands fa-facebook"></i> Facebook
                                    </a>
                                    <a class="twitter btn btn-outline-success">
                                        <i class="fa-brands fa-twitter"></i> Twitter
                                    </a>
                                    <a class="linkedin btn btn-outline-success">
                                        <i class="fa-brands fa-linkedin"></i> LinkedIn
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

<script type="text/javascript">

    // Declare content variables
	// const link = 'https://dlhk.jayapurakota.go.id/berita/serah-terima-jabatan-dan-purna-tugas-penjabat-struktural'; // encodeURI(window.location.href);
	const link = '{{ Request::url() }}'; // encodeURI(window.location.href);
	const msg = encodeURIComponent('{!! $pengaturan->judul_situs . ": " !!} {!! $data->judul !!}');
	const title = encodeURIComponent(document.querySelector('title').textContent);

	console.log([link, msg, title]);

    // share to facebook
	const fb = document.querySelector('.facebook');
	fb.href = `https://www.facebook.com/share.php?u=${link}`;
    fb.target = `_blank`;

    // share to twitter
	const twitter = document.querySelector('.twitter');
	twitter.href = `https://www.twitter.com/share?&url=${link}&text=${msg}&hashtags=nokensoft,papuaitconsultant`;
    twitter.target = `_blank`;

    // share to linkedin
	const linkedin = document.querySelector('.linkedin');
	linkedin.href = `https://www.linkedin.com/sharing/share-offsite/?url=${link}`;
    linkedin.target = `_blank`;

</script>


@stop
