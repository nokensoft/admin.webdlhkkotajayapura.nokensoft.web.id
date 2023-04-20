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

                <li class="menu-title">Navigation</li>
                <li>
                    <a href="{{route('dashboard')}}">
                        <i data-feather="calendar"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i data-feather="shopping-cart"></i>
                        <span> Konten </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                        <li>
                                <a href="{{ url('/app/kategori')}}">Kategori</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/artikel')}}">Artikel</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/halaman')}}">Halaman</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/slider')}}">Slider</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/video')}}">Video</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/album')}}">Galery</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/banner')}}">Banner</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/person')}}">SDM</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> SDM </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('/app/person')}}">Data SDM</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/person/draft')}}">Draft</a>
                            </li>
                            <li>
                                <a href="{{ url('/app/person/trash')}}">trash</a>
                            </li>
                            <li>
                                <a href="crm-leads.html">Leads</a>
                            </li>
                            <li>
                                <a href="crm-customers.html">Customers</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{route('users.index')}}">
                        <span class="badge bg-pink float-end">New</span>
                        <i data-feather="users"></i>
                        <span> Manage Users </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i data-feather="coffee"></i>
                        <span> Manage News </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Categories</a>
                            </li>
                            <li>
                                <a href="#">News</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->
        @elseif (Auth::user()->hasRole('editor'))
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('dashboard')}}">
                        <i data-feather="calendar"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i data-feather="coffee"></i>
                        <span> News </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Categories</a>
                            </li>
                            <li>
                                <a href="#">Posts</a>
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

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{route('dashboard')}}">
                        <i data-feather="calendar"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i data-feather="coffee"></i>
                        <span> News </span>
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
