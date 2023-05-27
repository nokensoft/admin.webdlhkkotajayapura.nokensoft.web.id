<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />

        <title> {{ $pengaturan->judul_situs }} </title>

        <!-- HTML METAS -->
        <meta property="og:locale" content="id_ID" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $pengaturan->judul_situs }}" />
        <meta property="og:description" content="{{ $pengaturan->deskripsi_situs }}" />
        <meta property="og:site_name" content="{{ $pengaturan->judul_situs }}" />
        <meta property="og:image" content="{{ asset($pengaturan->logo) }}" />
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <!-- FAVICON -->
        <link rel="apple-touch-icon" href="{{ asset($pengaturan->favicon) }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset($pengaturan->favicon) }}">

        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- HEAD LINKS AND SCRIPTS -->
        @include('dasbor.layout.includes.header')

    </head>

    <!-- body start -->
    <body  data-layout-mode="detached" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- WRAPPER START -->
        <div id="wrapper">

            <!-- HEADER NAVIGATION -->
            @include('dasbor.layout.includes.header-nav')

            <!-- SIDEBAR NAVIGATION -->
            @include('dasbor.layout.includes.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- start page title -->
                        @yield('content')
                        <!-- end page title -->
                    </div> <!-- container -->
                </div> <!-- content -->
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Power By <a href="">Nokensoft</a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- WRAPPER END -->

        <!-- FOOTER -->
        @include('dasbor.layout.includes.footer')

        <!-- SWET ALERT -->
        @include('sweetalert::alert')

    </body>
</html>
