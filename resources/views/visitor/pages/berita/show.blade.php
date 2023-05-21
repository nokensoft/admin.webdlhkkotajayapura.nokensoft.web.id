@extends('visitor.layout.app')
@section('content')

            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('assets/images/dlhk/background/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title text-capitalize">{!! $data->judul !!}</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ url('/beranda') }}">Home</a>
                        </li>
                        <li>{!! $data->judul !!}</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

	       <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="blog-deatails">

                        <div class="bs-img">
                            <img src="{{ asset( $data->gambar ) }}" alt="Gambar" class="w-100">
                        </div>

                       <div class="blog-full">
                           <ul class="single-post-meta">
                               <li>
                                   <span class="p-date"> <i class="fa fa-calendar-check-o"></i> {{ Carbon\Carbon::parse($data->created_at)->format('d M Y') }} </span>
                               </li> 
                               <li>
                                   <span class="p-date"> <i class="fa fa-user-o"></i> {{ $data->author->name ?? '' }} </span>
                               </li> 
                               <li class="Post-cate">
                                   <div class="tag-line">
                                       <i class="fa fa-book"></i>
                                       <a href="{{ url('berita/kategori/' . $data->kategori->slug ) }}">{{ $data->kategori->name ?? '' }}</a>
                                   </div>
                               </li>
                           </ul>

                        {{ $data->kategori->name }}

                        {!! $data->isi !!}

                       </div>
                       <!-- end .blog-full -->

                   </div>
                </div>
            </div>
            <!-- Blog Section End -->  

@stop