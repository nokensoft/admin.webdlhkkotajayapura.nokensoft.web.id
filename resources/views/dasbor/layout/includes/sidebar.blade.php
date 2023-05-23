

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="text-center">

                        @if (Auth::user()->picture)
                        <img src="{{ asset( Auth::user()->picture) }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                        @else
                        <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
                        @endif

                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-toggle="dropdown">{{ Auth::user()->name }}</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="{{ url('pengguna/akun') }}" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>Akun Saya</span>
                                </a>

                                <!-- item-->
                                <a href="{{ url('pengaturan') }}" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Pengaturan</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">
                            {{ implode('', Auth::user()->roles()->pluck('display_name')->toArray()) }}
                        </p>
                    </div>

                    <!--- Sidemenu -->
                    @if (Auth::user()->hasRole('administrator'))
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title mt-2">Menu Utama</li>

                            <li>
                                <a href="{{ url('dasbor') }}">
                                    <i data-feather="airplay"></i>
                                    <span> Dasbor </span>
                                </a>
                            </li>

                            <li>
                                <a href="#berita" data-toggle="collapse">
                                    <i class="mdi mdi-newspaper"></i>
                                    <span> Berita </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="berita">
                                    <ul class="nav-second-level">
                                        <li>
                                            
                                            <a href="{{ url('dasbor/berita') }}">
                                                <span class="badge badge-success badge-pill float-right">
                                                    {{ $dasbor_jml_link_terkait ?? '0' }}
                                                </span>
                                                Berita
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('dasbor/berita/kategori') }}">
                                                <span class="badge badge-success badge-pill float-right">
                                                    {{ $dasbor_jml_kategori ?? '0' }}
                                                </span>
                                                Kategori
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/informasi-lingkungan') }}">
                                    <i class="mdi mdi-leaf"></i>
                                    <span class="badge badge-success badge-pill float-right">
                                        {{ $dasbor_jml_informasi_lingkungan ?? '0' }}
                                    </span>
                                    <span> Info Lingkungan </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/layanan-online') }}">
                                    <i class="mdi mdi-cursor-default-click"></i>
                                    <span class="badge badge-success badge-pill float-right">
                                        {{ $dasbor_jml_layanan_online ?? '0' }}
                                    </span>
                                    <span> Layanan Online </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/link-terkait') }}">
                                    <i class="mdi mdi-link"></i>
                                    <span class="badge badge-success badge-pill float-right">
                                        {{ $dasbor_jml_link_terkait ?? '0' }}
                                    </span>
                                    <span> Link Terkait </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/pesan') }}">
                                    <i class="mdi mdi-forum-outline"></i>
                                    <span class="badge badge-success badge-pill float-right">
                                        {{ $dasbor_jml_pesan ?? '0' }}
                                    </span>
                                    <span> Pesan </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/halaman') }}">
                                    <i class="mdi mdi-text-box-multiple-outline"></i>
                                    <span class="badge badge-success badge-pill float-right">
                                        {{ $dasbor_jml_halaman ?? '0' }}
                                    </span>
                                    <span> Halaman </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/pengguna') }}">
                                    <i class="mdi mdi-account-group"></i>
                                    <span class="badge badge-success badge-pill float-right">
                                        {{ $dasbor_jml_pengguna ?? '0' }}
                                    </span>
                                    <span> Pengguna </span>
                                </a>
                            </li>
                            
                        </ul>

                    </div>
                    @elseif (Auth::user()->hasRole('editor'))
                    
                    @elseif (Auth::user()->hasRole('author'))
                    
                    @elseif (Auth::user()->hasRole('supervisor'))
                    
                    @endif
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->