<div id="layanan-online" class="rs-services home12-style" style="background-image: url({{ asset($banner_2->gambar_latar_belakang) }});background-size:cover;">
    
    <!-- .row container -->
    <div class="container">
        
        <!-- .row start -->
        <div class="row">

            <!-- .col start -->
            <div class="col-lg-8 mx-auto">
                <h1 class="display-2 text-white pt-100 fw-bold text-center">
                    {!! $banner_2->konten_text_1 !!}
                </h1>
            </div>
            <!-- .col end -->

            <!-- .col start -->
            <div class="col-lg-4 mx-auto">
                <img src="{{ asset($banner_2->gambar_ilustrasi) }}" alt="{{ $banner_2->gambar_ilustrasi }}" class="img-fluid">
            </div>
            <!-- .col end -->

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->

</div>