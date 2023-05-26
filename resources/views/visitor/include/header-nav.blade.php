<header id="rs-header" class="rs-header">

    <!-- Topbar Area Start -->
    <div class="topbar-area home11-topbar">
        <div class="container">
            <div class="row y-middle">
                <div class="col-md-5">
                    <ul class="topbar-contact">
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="mailto:support@rstheme.com">
                                {{ $pengaturan->alamat_email }}
                            </a>
                        </li>
                        <li>
                            <i class="fa flaticon-call"></i>
                            <a href="tel:{{ $pengaturan->nomor_telepon }}"> {{ $pengaturan->nomor_telepon }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 text-end">
                    <ul class="toolbar-sl-share">
                        <li class="opening">
                            <i class="flaticon-location"></i>
                            {{ $pengaturan->alamat_kantor }}
                        </li>
                        <li>
                            <a href="{{ $pengaturan->facebook }}" target="_blank">
                                 <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $pengaturan->twitter }}" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $pengaturan->linkedin }}" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $pengaturan->instagram }}" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->

    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-2">
                    <div class="logo-cat-wrap">
                        <div class="logo-part">
                            <a href="/">
                                <img src="{{ asset('assets/images/dlhk/logo-website-dlhk-green.png') }}" alt="Gambar">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 text-end">
                    <div class="rs-menu-area">
                        <div class="main-menu">
                            <div class="mobile-menu">
                                <a class="rs-menu-toggle">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </div>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <li class="rs-mega-menu mega-rs">
                                        <a href="/">Beranda</a>
                                    </li>
                                    <li class="rs-mega-menu mega-rs menu-item-has-children">
                                        <a href="#profil">Profil</a>


                                        <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu last-sub-menu">
                                                            <li><a href="{{ url('halaman/visi-misi') }}">Visi-Misi</a></li>
                                                            <li><a href="{{ url('halaman/struktur-organisasi') }}">Struktur Organisasi</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu last-sub-menu">
                                                            <li><a href="{{ url('halaman/bidang-layanan') }}">Bidang Layanan</a> </li>
                                                            <li><a href="{{ url('halaman/tugas-pokok') }}">Tugas Pokok & Fungsi</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-megamenu">
                                                        <ul class="sub-menu last-sub-menu">
                                                            <li><a href="{{ url('halaman/profil-pimpinan') }}">Profil Pimpinan</a> </li>
                                                            <li><a href="{{ url('halaman/profil-pejabat') }}">Profil Pejabat</a> </li>
                                                            <li><a href="{{ url('halaman/galeri-kegiatan') }}">Galeri Kegiatan</a> </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </li>
                                        </ul> <!-- //.mega-menu -->
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Layanan Online</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children right">
                                                <a href="#">Sistem Informasi</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="#">SIPAKOT</a></li>
                                                    <li><a href="#">Pengaduan</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">AMDAL</a> </li>
                                            <li><a href="#">Bank Sampah</a> </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Sub Menu</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="#">Sub Sub Menu</a></li>
                                                    <li><a href="#">Sub Sub Menu</a></li>
                                                    <li><a href="#">Sub Sub Menu</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">Sub Menu</a>
                                                <ul class="sub-menu right">
                                                    <li><a href="#">Sub Sub Menu</a></li>
                                                    <li><a href="#">Sub Sub Menu</a></li>
                                                    <li><a href="#">Sub Sub Menu</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Informasi Lingkungan</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">RPPLH</a></li>
                                            <li><a href="#">IKLH</a></li>
                                            <li><a href="#">HPSN</a></li>
                                            <li><a href="#">AMDAL</a></li>
                                            <li><a href="#">KEHATI</a></li>
                                            <li><a href="#">Konservasi Energi</a></li>
                                            <li><a href="#">Mekanisme Perizinan</a></li>
                                            <li><a href="#">Izin Lingkungan</a></li>
                                            <li><a href="#">Pengolaan B3</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Lainnya</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Sub Menu</a></li>
                                            <li><a href="#">Sub Menu</a></li>
                                            <li><a href="#">Sub Menu</a></li>
                                            <li><a href="#">Sub Menu</a></li>
                                        </ul>
                                    </li>

                                    <li class="rs-mega-menu mega-rs">
                                        <a href="#kontak">Kontak</a>
                                    </li>

                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Canvas Menu start -->
    <nav class="right_menu_togle hidden-md">
        <div class="close-btn">
            <div id="nav-close">
                <div class="line">
                    <span class="line1"></span><span class="line2"></span>
                </div>
            </div>
        </div>
        <div class="canvas-logo">
            <a href="index.html"><img src="assets/images/logo-dark.png" alt="logo"></a>
        </div>
        <div class="offcanvas-text">
            <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo by the
                charms of pleasure of the moment data com so blinded by desire.</p>
        </div>
        <div class="offcanvas-gallery">
            <div class="gallery-img">
                <a class="image-popup" href="assets/images/gallery/1.jpg"><img src="assets/images/gallery/1.jpg"
                        alt=""></a>
            </div>
            <div class="gallery-img">
                <a class="image-popup" href="assets/images/gallery/2.jpg"><img src="assets/images/gallery/2.jpg"
                        alt=""></a>
            </div>
            <div class="gallery-img">
                <a class="image-popup" href="assets/images/gallery/3.jpg"><img src="assets/images/gallery/3.jpg"
                        alt=""></a>
            </div>
            <div class="gallery-img">
                <a class="image-popup" href="assets/images/gallery/4.jpg"><img src="assets/images/gallery/4.jpg"
                        alt=""></a>
            </div>
            <div class="gallery-img">
                <a class="image-popup" href="assets/images/gallery/5.jpg"><img src="assets/images/gallery/5.jpg"
                        alt=""></a>
            </div>
            <div class="gallery-img">
                <a class="image-popup" href="assets/images/gallery/6.jpg"><img src="assets/images/gallery/6.jpg"
                        alt=""></a>
            </div>
        </div>
        <div class="map-img">
            <img src="assets/images/map.jpg" alt="">
        </div>
        <div class="canvas-contact">
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Canvas Menu end -->
</header>
