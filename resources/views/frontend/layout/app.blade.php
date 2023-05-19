<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.include.header')
</head>

<body class="defult-home">

    <!--Preloader area start here-->
    <div id="loader" class="loader green-color">
        <div class="loader-container">
            <div class='loader-icon'>
                <img src="{{ asset($pengaturan->logo_loader) }}" alt="Loader">
            </div>
        </div>
    </div>
    <!--Preloader area End here-->

    <!--Full width header Start-->
    <div class="full-width-header header-style1 home1-modifiy home12-modifiy">
        <!--Header Start-->
            @include('frontend.include.header-nav')
        <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Main content Start -->
    <div class="main-content">
        @yield('content')
    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
        @include('frontend.include.footer')
    <!-- Footer End -->


    <!-- start scrollUp  -->
    <div id="scrollUp" class="green-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->


    <!-- Search Modal Start -->
    <div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
        aria-hidden="true">
        <button type="button" class="close" data-bs-dismiss="modal">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="{{ asset('assets/frontend/assets/js/modernizr-2.8.3.min.js') }}"></script>
    <!-- jquery latest version -->
    <script src="{{ asset('assets/frontend/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap v5.0.2 js -->
    <script src="{{ asset('assets/frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Menu js -->
    <script src="{{ asset('assets/frontend/assets/js/rsmenu-main.js') }}"></script>
    <!-- op nav js -->
    <script src="{{ asset('assets/frontend/assets/js/jquery.nav.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('assets/frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/frontend/assets/js/slick.min.js') }}"></script>
    <!-- isotope.pkgd.min js -->
    <script src="{{ ('assets/frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- imagesloadeassetd.pkgd.min js -->
    <script src="{{ asset('assets/frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/frontend/assets/js/wow.min.js') }}"></script>
    <!-- Skill bar js -->
    <script src="{{ asset('assets/frontend/assets/js/skill.bars.jquery.js') }}"></script>
    <script src="{{ asset('assets/frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- counter top js -->
    <script src="{{ asset('assets/frontend/assets/js/waypoints.min.js') }}"></script>
    <!-- video js -->
    <script src="{{ asset('assets/frontend/assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- tilt js -->
    <script src="{{ asset('assets/frontend/assets/js/tilt.jquery.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('assets/frontend/assets/js/plugins.js') }}"></script>
    <!-- contact form js -->
    <script src="{{ asset('assets/frontend/assets/js/contact.form.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/frontend/assets/js/main.js') }}"></script>

    @include('sweetalert::alert')
</body>

</html>
