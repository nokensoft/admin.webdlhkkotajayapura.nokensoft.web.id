  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">

    <div class="h-100" data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
            @if (Auth::user()->picture)
            <img src="{{asset('file/users')}}/{{Auth::user()->picture}}" alt="allal"
            class="rounded-circle avatar-md">
            @else
            <img src="{{ asset('assets/admin/assets/images/users/user-6.jpg')}}"
            alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            @endif

            <div class="dropdown">
                <a href="javascript: void(0);" class="text-black dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown"> {{ Auth::user()->name }}</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">{{ implode('',Auth::user()->roles()->pluck('display_name')->toArray()) }}</p>
        </div>

        @if (Auth::user()->hasRole('administrator'))
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <li>
                    <a href="{{url('dasbor')}}">
                        <i data-feather="home"></i>
                        <span> Dasbor </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i data-feather="book"></i>
                        <span>Berita</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('dasbor/kategori') }}">Kategori</a>
                            </li>
                            <li>
                                <a href="{{ url('dasbor/berita') }}">Berita</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ url('dasbor/halaman') }}">
                        <i data-feather="layout"></i>
                        <span> Halaman</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('dasbor/link') }}">
                        <i data-feather="link"></i>
                        <span> Link Terkait</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('dasbor/banner') }}">
                        <i data-feather="image"></i>
                        <span> Banner</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('dasbor/pengguna') }}">
                        <i data-feather="users"></i>
                        <span> Pengguna</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('dasbor/pengaturan') }}">
                        <i data-feather="settings"></i>
                        <span> Pengaturan</span>
                    </a>
                </li>  

            </ul>

        </div>
        <!-- End Sidebar -->
        @elseif (Auth::user()->hasRole('editor'))
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <li>
                    <a href="{{url('dasbor')}}">
                        <i data-feather="calendar"></i>
                        <span> Dasbor </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i data-feather="coffee"></i>
                        <span> Berita </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('kategori-berita.index') }}">Kategori</a>
                            </li>
                            <li>
                                <a href="{{ url('dasbor/berita') }}">Berita</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->
        @elseif (Auth::user()->hasRole('author'))
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <li>
                    <a href="{{url('dasbor')}}">
                        <i data-feather="calendar"></i>
                        <span> Dasbor </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('dasbor/berita') }}">
                        <i data-feather="coffee"></i>
                        <span> Berita </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('dasbor/kategori') }}">
                        <i data-feather="coffee"></i>
                        <span> Kategori </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->
        @elseif (Auth::user()->hasRole('supervisor'))
         <!--- Sidemenu -->
         <div id="sidebar-menu">
            <ul id="side-menu">
                <li>
                    <a href="{{url('dasbor')}}">
                        <i data-feather="calendar"></i>
                        <span> Dasbor </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('dasbor/berita') }}">
                        <i data-feather="coffee"></i>
                        <span> Berita </span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Sidebar -->
        @endif

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
