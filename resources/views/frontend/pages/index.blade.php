@extends('frontend.layout.app')
@section('content')


            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('file/halaman/bg-header-1.jpg') }}" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">{!! $data->judul !!}</h1>
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
            <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="blog-deatails">

                        <div class="bs-img">
                            <a href="#"><img src="{{ asset('file/halaman/' . $data->cover ) }}" alt="{{ $data->cover }}"></a>
                        </div>
                       <div class="blog-full">
                        {!! $data->isi !!}
                       </div>
                   </div>
                </div>
            </div>
            <!-- Blog Section End -->  

@stop
