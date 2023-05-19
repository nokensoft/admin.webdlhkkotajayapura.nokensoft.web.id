@extends('frontend.layout.app')
@section('content')

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/dlhk/background/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Blog</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Blog</li>
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
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class=" flaticon-search"></i></button>
                                    </div>
                                </div>
                                <div class="recent-posts mb-50">
                                    <h3 class="widget-title">Recent Posts</h3>
                                    <ul>
                                        <li><a href="#">University while the lovely valley team work</a></li>
                                        <li><a href="#">High school program starting soon 2021</a></li>
                                        <li><a href="#">Modern School the lovely valley team work</a></li>
                                        <li><a href="#">While the lovely valley team work</a></li>
                                        <li><a href="#">This is a great source of content for anyone…</a></li>
                                    </ul>
                                </div>
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Archives</h3>
                                    <ul>
                                        <li><a href="#">September 2020</a></li>
                                        <li><a href="#">September 2020</a></li>
                                    </ul>
                                </div>   
                                <div class="widget-archives mb-50">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul>
                                        <li><a href="#">College</a></li>
                                        <li><a href="#">High School</a></li>
                                        <li><a href="#">Primary</a></li>
                                        <li><a href="#">School</a></li>
                                        <li><a href="#">University</a></li>
                                    </ul>
                                </div>
                                  <div class="recent-posts mb-50">
                                      <h3 class="widget-title">Meta</h3>
                                      <ul>
                                          <li><a href="#">Log in</a></li>
                                          <li><a href="#">Entries feed</a></li>
                                          <li><a href="#">Comments feed</a></li>
                                          <li><a href="#">WordPress.org</a></li>
                                      </ul>
                                  </div>
                            </div>
                        </div>
                        <!-- .col Sidebar End -->

                        <div class="col-lg-8 pr-50">
                            <div class="row">

                                @foreach ($beritas as $data )
                                <div class="col-lg-12 mb-70">
                                    <div class="blog-item">
                                        <div class="blog-img">
                                            

                                            @if(empty($data->cover))
                                            <a href="#"><img src="{{ asset('file/berita/cover-0.jpg') }}" alt=""></a>
                                            @else
                                            <a href="#"><img src="{{ asset( $data->cover ) }}" alt=""></a>
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
                </div>
            </div>
          <!-- Blog Section End -->  



@stop
