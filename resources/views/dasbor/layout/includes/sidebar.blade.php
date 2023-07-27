

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">

                        @if (!Auth::user()->picture)
                        <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="user-img" class="rounded-circle avatar-md">
                        @else
                        <img src="{{ asset('gambar/pengguna/' . Auth::user()->picture) }}" alt="user-img" title="{{ Auth::user()->name }}" class="rounded-circle avatar-md">
                        @endif

                        <div class="text-dark h5 mt-2 mb-1">
                            {{ Auth::user()->name }}
                        </div>
                        <small class="text-muted d-block" role="button" data-toggle="tooltip" data-placement="bottom" title="{{ Auth::user()->description ?? '' }}">
                            <i class="fa-solid fa-user"></i> {{ implode('', Auth::user()->roles()->pluck('display_name')->toArray()) }}
                        </small>
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
                                                        {{ $dasbor_jml_berita  }}
                                                    </span>
                                                    Berita
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dasbor/berita/kategori') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_kategori ?? '' }}
                                                    </span>
                                                    Kategori
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/halaman') }}">
                                        <i class="mdi mdi-text-box-multiple-outline"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_halaman ?? '' }}
                                        </span>
                                        <span> Halaman </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/slider') }}">
                                        <i class="mdi mdi-image-area"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_slider ?? '' }}
                                        </span>
                                        <span> Slider </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/informasi-lingkungan') }}">
                                        <i class="mdi mdi-leaf"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_informasi_lingkungan ?? '' }}
                                        </span>
                                        <span> Info Lingkungan </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/layanan-online') }}">
                                        <i class="mdi mdi-cursor-default-click"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_layanan_online ?? '' }}
                                        </span>
                                        <span> Layanan Online </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/link-terkait') }}">
                                        <i class="mdi mdi-link"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_link_terkait ?? '' }}
                                        </span>
                                        <span> Link Terkait </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/pesan') }}">
                                        <i class="mdi mdi-forum-outline"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_pesan ?? '' }}
                                        </span>
                                        <span> Pesan </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ url('dasbor/pengguna') }}">
                                        <i class="mdi mdi-account-group"></i>
                                        <span class="badge badge-success badge-pill float-right">
                                            {{ $dasbor_jml_pengguna ?? '' }}
                                        </span>
                                        <span> Pengguna </span>
                                    </a>
                                </li>

                            </ul>

                        </div>

                    @elseif (Auth::user()->hasRole('editor'))
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
                                                        {{ $dasbor_jml_link_terkait ?? '' }}
                                                    </span>
                                                    Berita
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dasbor/berita/kategori') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_kategori ?? '' }}
                                                    </span>
                                                    Kategori
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    @elseif (Auth::user()->hasRole('author'))
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
                                                        {{ $dasbor_jml_link_terkait ?? '' }}
                                                    </span>
                                                    Berita
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dasbor/berita/kategori') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_kategori ?? '' }}
                                                    </span>
                                                    Kategori
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    @elseif (Auth::user()->hasRole('supervisor'))
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
                                                        {{ $dasbor_jml_link_terkait ?? '' }}
                                                    </span>
                                                    Berita
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('dasbor/berita/kategori') }}">
                                                    <span class="badge badge-success badge-pill float-right">
                                                        {{ $dasbor_jml_kategori ?? '' }}
                                                    </span>
                                                    Kategori
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                            </ul>

                        </div>

                    @endif
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
