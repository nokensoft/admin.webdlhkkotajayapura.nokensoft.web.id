<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('visitor.include.head')
</head>

<body class="defult-home">

    <!-- Preloader -->
    @include('visitor.sections.loader')

    <!-- Header -->
    @include('visitor.sections.header-nav')

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('visitor.include.footer')

    <!-- Scripts -->
    @include('visitor.include.scripts')

    <!-- Sweet Alert -->
    @include('sweetalert::alert')

</body>

</html>
