@extends('frontend.layout.app')
@section('content')      

<!-- Blog Section Start -->
 <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
     <div class="container">
        <div class="blog-deatails">
            <div class="blog-full">
             
                <ul class="list-group">
                    @foreach ($halamans as $halaman)
                    <li class="list-group-item px-0 border-0">
                        <a href="{{ url('halaman/' . $halaman->slug ) }}" target="_blank">{{ $halaman->judul }}</a>
                    </li>
                    @endforeach
                </ul>   

            </div>
        </div>
     </div>
 </div>
 <!-- Blog Section End -->  

@stop