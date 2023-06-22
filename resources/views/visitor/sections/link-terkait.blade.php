<div class="rs-partner style1 pt-100 md-pt-70 pb-100">
    <div class="container">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30"
            data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
            data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
            data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false"
            data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false"
            data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false"
            data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">

            @foreach ($linkTerkaits as $linkTerkait)
            <div class="partner-item border py-4 my-4 bg-white shadow" data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);" role="button">
                <div data-tilt data-tilt-reverse="true" data-tilt-scale="1.1" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">

                <a href="{{ $linkTerkait->url }}" target="_blank">
                    @if(empty($linkTerkait->gambar))
                    <img src="{{ asset('gambar/link-terkait/00.jpg') }}" alt="Gambar">
                    @else
                    <img src="{{ asset('gambar/link-terkait/' . $linkTerkait->gambar ) }}" alt="Gambar">
                    @endif
                </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
