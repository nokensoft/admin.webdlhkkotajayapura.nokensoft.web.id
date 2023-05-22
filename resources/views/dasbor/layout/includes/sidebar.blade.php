

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    <!-- User box -->
                    <div class="user-box text-center">
                        <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                            class="rounded-circle avatar-md">
                        <div class="dropdown">
                            <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                                data-toggle="dropdown">Geneva Kennedy</a>
                            <div class="dropdown-menu user-pro-dropdown">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user mr-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings mr-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-lock mr-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out mr-1"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </div>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    @if (Auth::user()->hasRole('administrator'))
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                
                            <li>
                                <a href="#sidebarDashboards" data-toggle="collapse">
                                    <i data-feather="airplay"></i>
                                    <span class="badge badge-success badge-pill float-right">4</span>
                                    <span> Dashboards </span>
                                </a>
                                <div class="collapse" id="sidebarDashboards">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="index.html">Dashboard 1</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-2.html">Dashboard 2</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-3.html">Dashboard 3</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-4.html">Dashboard 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title mt-2">Apps</li>

                            <li>
                                <a href="{{ url('dasbor') }}">
                                    <i data-feather="airplay"></i>
                                    <span> Dasbor </span>
                                </a>
                            </li>

                            <li>
                                <a href="#berita" data-toggle="collapse">
                                    <i class="mdi mdi-cellphone-link"></i>
                                    <span> Berita </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="berita">
                                    <ul class="nav-second-level">
                                        <li>
                                            
                                            <a href="{{ url('dasbor/berita') }}">
                                                <span class="badge badge-success badge-pill float-right">0</span>
                                                Berita
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('dasbor/berita/kategori') }}">
                                                <span class="badge badge-success badge-pill float-right">0</span>
                                                Kategori
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/informasi-lingkungan') }}">
                                    <i class="mdi mdi-folder-information"></i>
                                    <span class="badge badge-success badge-pill float-right">0</span>
                                    <span> Info Lingkungan </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/layanan-online') }}">
                                    <i class="mdi mdi-cursor-default-click"></i>
                                    <span class="badge badge-success badge-pill float-right">0</span>
                                    <span> Layanan Online </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/link-terkait') }}">
                                    <i class="mdi mdi-link"></i>
                                    <span class="badge badge-success badge-pill float-right">0</span>
                                    <span> Link Terkait </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/pesan') }}">
                                    <i class="mdi mdi-forum-outline"></i>
                                    <span class="badge badge-success badge-pill float-right">0</span>
                                    <span> Pesan </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('dasbor/halaman') }}">
                                    <i class="mdi mdi-text-box-multiple-outline"></i>
                                    <span class="badge badge-success badge-pill float-right">0</span>
                                    <span> Halaman </span>
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