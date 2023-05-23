<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> {{ $pengaturan->judul_situs }} </title>
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

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="{{ asset('assets/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="{{ asset('assets/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="{{ asset('assets/admin/assets/js/head.js')}}"></script>

    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">

                        <!-- Logo -->
                        <div class="auth-brand text-lg-start">
                            <div class="auth-logo">
                                <a href="{{ url('dasbor') }}" class="logo logo-dark">
                                    <img src="{{ asset($pengaturan->logo_dark) }}" alt="logo_situs" height="55px">
                                    <span class="logo-lg-text-dark d-block my-4">
                                        {!! $pengaturan->deskripsi_situs !!}
                                    </span>
                                </a>

                                <a href="{{ url('dasbor') }}" class="logo logo-light">
                                    <img src="{{ asset( $pengaturan->logo_light) }}" alt="" height="55px">
                                    <span class="logo-lg-text-dark d-block my-4">
                                        {!! $pengaturan->deskripsi_situs !!}
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-5 font-weight-bold display-2">Masuk</h4>
                        <p class="text-muted mb-4">Masukkan alamat email dan kata sandi Anda untuk mengakses Dasbor.</p>

                        <!-- FORM START -->
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div class="mb-3">
                                <label for="alamatEmail" class="form-label">Alamat Email</label>
                                <input type="email" id="alamatEmail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukan alamat email" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <!-- group item end -->

                            <div class="mb-3">
                                <label for="kataSandi" class="form-label">Kata Sandi</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="kataSandi" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan kata sandi" required autocomplete="current-password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <a href="" class="text-muted float-end"><small>Lupa Kata Sandi?</small></a>
                            </div>
                            <!-- group item end -->

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Ingat saya') }}
                                    </label>
                                </div>
                            </div>
                            <!-- group item end -->

                            <div class="d-block">
                                <button class="btn btn-primary w-100" type="submit">Masuk </button>
                            </div>

                        </form>
                        <!-- FORM END -->

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <img src="{!! $pengaturan->logo_loader !!}" alt="Logo loader" width="450px">
                    <h2 class="mb-3 text-white text-uppercase display-3 font-weight-bold">{!! $pengaturan->judul_situs !!}</h2>
                    <p class="text-uppercase h2 text-light mb-5">{!! $pengaturan->deskripsi_situs !!}</p>
                    <h5 class="text-white">
                        {!! $pengaturan->copyright !!}
                    </h5>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- Vendor js -->
        <script src="{{ asset('assets/admin/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/admin/assets/js/app.min.js')}}"></script>

    </body>
</html>
