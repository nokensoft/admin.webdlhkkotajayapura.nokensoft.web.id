<div class="rs-newsletter style1 green-color mb--90 sm-mb-0 sm-pb-70">
    <div class="container shadow p-4">
        <div class="newsletter-wrap shadow" style="background-image: url({{ asset($banner_3->gambar_latar_belakang) }});background-size:cover;">
            <div class="row y-middle text-white pt-50">
                <div class="col">

                    <img src="{{ asset($banner_3->gambar_ilustrasi) }}" alt="Gambar ilustrasi" class="col-md-6">

                    <h1 class="title text-white h1 fw-bold">{!! $banner_3->konten_text_1 !!}</h1>
                    <p class="pt-20">
                        <a href="{{ $banner_3->link_1 }}" class="link-success bg-white px-3 py-2 rounded shadow fs-1">{{ $banner_3->link_1_label }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>