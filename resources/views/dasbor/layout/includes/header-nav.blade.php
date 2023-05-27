

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                @if (!Auth::user()->picture)
                                <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="Gambar profil pengguna" class="rounded-circle">
                                @else
                                <img src="{{ asset('gambar/pengguna') }}/{{ Auth::user()->picture }}" alt="Gambar" class="rounded-circle">
                                @endif
                                <span class="pro-user-name ml-1">
                                    {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <a href="{{ url('dasbor/akun-saya') }}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Akun Saya</span>
                                </a>

                                <a href="{{ url('pengaturan') }}" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Pengaturan</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <a href="#" class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fe-log-out"></i>
                                    <span> {{ __('Keluar') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="/" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{ asset($pengaturan->logo_dark_sm)}}" alt="Logo Situs" height="38">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset($pengaturan->logo_dark)}}" alt="Logo Situs" height="38">
                            </span>
                        </a>

                        <a href="/" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{ asset($pengaturan->logo_light_sm)}}" alt="" height="38">
                            </span>
                            <span class="logo-lg">
                                    <img src="{{ asset($pengaturan->logo_light)}}" alt="" height="38">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        @if (Auth::user()->hasRole('administrator'))
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Jalan Pintas
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">

                                <!-- item-->
                                <a href="{{ url('dasbor/berita/create') }}" class="dropdown-item">
                                    <i class="mdi mdi-newspaper"></i>
                                    <span>Berita Baru</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('dasbor/halaman/create') }}" class="dropdown-item">
                                    <i class="mdi mdi-text-box-multiple-outline"></i>
                                    <span>Halaman Baru</span>
                                </a>

                            </div>
                        </li>
                        @endif
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->
