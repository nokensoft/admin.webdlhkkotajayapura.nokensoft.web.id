<!-- SLIDER TENGAH Start -->
<div id="testimoni" class="rs-testimonial style6 md-pt-70 bg3">
    <div class="">
        <div class="rs-carousel owl-carousel nav" data-loop="true" data-items="1" data-margin="30"
            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="400"
            data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false"
            data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
            data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
            data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
            data-md-device="1" data-md-device-nav="false" data-md-device-dots="false">
            
            @foreach ($sliderTengah as $sliderTengahItem)

            <div class="testimonial-item">
                <div class="row">
                    <div class="col-12 offset-lg-1 mx-auto">
                        <div class="img-part">
                            @if (empty($sliderTengah))
                            <img src="{{ asset('gambar/slider/0.png') }}" class="w-100" alt="slider 1">
                            @else
                            <img src="{{ asset('gambar/slider/'. $sliderTengahItem->gambar ?? '') }}" class="w-100" alt="slider 1">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-item end -->
                
            @endforeach
            
            {{-- <div class="testimonial-item">
                <div class="row">
                    <div class="col-12 offset-lg-1 mx-auto">
                        <div class="img-part">
                            <img src="{{ asset('gambar/slider/2.png') }}" class="w-100" alt="slider 2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-item end -->
            
            <div class="testimonial-item">
                <div class="row">
                    <div class="col-12 offset-lg-1 mx-auto">
                        <div class="img-part">
                            <img src="{{ asset('gambar/slider/3.png') }}" class="w-100" alt="slider 2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-item end -->
            
            <div class="testimonial-item">
                <div class="row">
                    <div class="col-12 offset-lg-1 mx-auto">
                        <div class="img-part">
                            <img src="{{ asset('gambar/slider/4.png') }}" class="w-100" alt="slider 2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-item end --> --}}

        </div>
    </div>
</div>
<!-- SLIDER TENGAH End --> 

