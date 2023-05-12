@extends('frontend.layout.app')
@section('content')



<!-- Sekilas DLHK Start -->
<div class="rs-services style1 pt-100 md-pt-70 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 md-mb-40">
                <div class="img-part">
                    <img src="{{ asset('assets/frontend/assets/images/dlhk/banner/1.png') }}" alt="">

                </div>
            </div>
            @if(!empty($name))
            <div class="col-lg-6 pl-60 md-pl-15">
                <div class="sec-title3 mb-30">
                    <div class="sub-title green-color">{{$name}}  DLHK</div>
                    {{-- <h2 class=" title new-title"> {{$name}} Dinas Lingkungan Hidup dan Kebersihan Kota Jayapura
                    </h2> --}}
                    <div class="new-desc">
                        <p>
                            {!! $data->konten !!}
                        </p>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- Sekilas DLHK End -->


@stop
