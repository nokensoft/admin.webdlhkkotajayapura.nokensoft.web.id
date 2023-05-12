<footer id="rs-footer" class="rs-footer home9-style home12-style">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <div class="footer-logo mb-30">
                        <a href="/"><img src="assets/images/dlhk/logo-website-dlhk-dark.png" alt=""></a>
                    </div>
                    <div class="textwidget pr-60 md-pr-15">
                        <p>{{ $pengaturan->deskripsi_situs }}</p>
                    </div>
                    <ul class="footer_social">
                        <li>
                            <a href="# " target="_blank"><span><i class="fa-brands fa-instagram"></i></span></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><span><i class="fa-brands fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><span><i class="fa-brands fa-twitter"></i></span></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><span><i class="fa-brands fa-linkedin"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa-brands fa-youtube"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Alamat</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc"> {{ $pengaturan->alamat_kantor }}
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:{{ $pengaturan->nomor_telepon }}">{{ $pengaturan->nomor_telepon }}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:{{ $pengaturan->alamat_email }}"> {{ $pengaturan->alamat_email }} </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                    <!-- map -->
                    <iframe src="{{ $pengaturan->alamat_google_map }}"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-20">
                    <div class="copyright">
                        <p>&copy; {{ $pengaturan->copyright }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 text-end md-text-start">
                    <ul class="copy-right-menu">
                        <li><a href="#">Agenda Kegiatan</a></li>
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="{{ route('login') }}">Masuk</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
