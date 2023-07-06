<div id="rs-banner" class="rs-banner style10" style="background-image: url(assets/images/banner/home12/banner-home12.jpg);">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6 pl-60 order-last">
                <div class="img-part" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    <img class="up-down-new" src="{{ asset($banner_1->gambar_ilustrasi) }}" alt="{{ $banner_1->judul }}">
                </div>
            </div>
            <!-- end col -->

            <div class="col-lg-6 pr-0">
                <div class="banner-content">
                    <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">
                        {!! $banner_1->konten_text_1 !!}
                    </div>
                    <h1 class="sl-title wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="3000ms" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                        {!! $banner_1->konten_text_2 !!}
                    </h1>
                    <p class="fs-4">{!! $banner_1->konten_text_3 !!}</p>
                    <div class="banner-btn wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="2000ms">
                        <a class="readon green-banner" href="{!! $banner_1->link_1 !!}" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" data-tilt-glare data-tilt-max-glare="0.8" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                            <div class="fa-solid fa-arrow-right me-2"></div> {!! $banner_1->link_1_label !!}
                        </a>
                    </div>
                </div>
            </div>
            <!-- end col -->

        </div>
    </div>
    <div class="banner-intro-box">
        <div class="shape-img">
            <img class="up-down-new" src="{{ asset('assets/visitor/assets/images/banner/home12/dotted-shape.png') }}" alt="">
        </div>
        {{-- <div class="intro-img">
            <img class="up-down-new" src="{{ asset('assets/visitor/assets/images/banner/home12/intro-box.png') }}" alt="">
        </div> --}}
    </div>    
</div>