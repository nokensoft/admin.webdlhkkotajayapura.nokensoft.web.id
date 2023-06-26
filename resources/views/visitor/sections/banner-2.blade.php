<div id="layanan-online" class="rs-services home12-style" style="background-image: url({{ asset($banner_2->gambar_latar_belakang) }});background-size:cover;">
    
    <!-- .row container -->
    <div class="container">
        
        <!-- .row start -->
        <div class="row">

            <!-- .col start -->
            <div class="col-lg-8 mx-auto">
                <h1 class="display-2 text-white pt-100 fw-bold text-center" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
                    {!! $banner_2->konten_text_1 !!}
                </h1>
            </div>
            <!-- .col end -->

            <!-- .col start -->
            <div class="col-lg-4 mx-auto">
                <img src="{{ asset($banner_2->gambar_ilustrasi) }}" alt="{{ $banner_2->gambar_ilustrasi }}" class="img-fluid up-down-new" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" data-tilt-glare data-tilt-max-glare="0.8" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
            </div>
            <!-- .col end -->

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->

</div>