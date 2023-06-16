<div class="rs-newsletter style1 green-color mb--90 sm-mb-0 sm-pb-70">
    <div class="container shadow p-4" data-tilt data-tilt-reverse="true">
        <div class="newsletter-wrap shadow" style="background-image: url({{ asset($banner_3->gambar_latar_belakang) }});background-size:cover;">
            <div class="row y-middle text-white pt-50">
                <div class="col">

                    <img src="{{ asset($banner_3->gambar_ilustrasi) }}" alt="Gambar ilustrasi" class="col-md-6" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" data-tilt-glare data-tilt-max-glare="0.8" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">

                    <h1 class="title text-white h1 fw-bold" data-tilt data-tilt-reverse="true">{!! $banner_3->konten_text_1 !!}</h1>
                    <p class="pt-20" data-tilt data-tilt-reverse="true">
                        <a href="{{ $banner_3->link_1 }}" class="link-success bg-white px-3 py-2 rounded shadow fs-1">{{ $banner_3->link_1_label }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>