<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
    <div class="breadcrumbs-img">
        <img src="{{ asset('gambar/halaman/bg-header-1.jpg') }}" alt="gambar latar belakang">
    </div>
    <div class="breadcrumbs-text white-color">
        <h1 class="page-title">404</h1>
        <ul>
            <li>
                <a class="active" href="{{ url('/beranda') }}">Beranda</a>
            </li>
            <li>404</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->            

<!-- Blog Section Start -->
<div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
    <div class="blog-deatails">

        <div class="blog-full text-center">

            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('gambar/ilustrasi/3.png') }}" alt="gambar ilustrasi">
                </div>
                <div class="col-md-8">
                    <h1 class="display-1 fw-bold mt-5">404</h1>
                    <p>Maaf, halaman yang anda cari tidak ditemukan. Mungkin halaman yang Anda cari masi dalam tahap pengembangan atau sudah dihapus.</p>
                    <p>Jika ada informasi penting yang sedang Anda cari di website ini, silahkan hubungi admin website dengan mengirim pesan pada halaman <a href="{{ url('/kontak') }}" class="btn btn-sm btn-success"><i class="fa-solid fa-arrow-right me-1"></i> Kontak</a>, ataupun juga dengan memanfaatkan informasi kontak yang tersedia pada halaman tersebut.</p>
                    <p>Kembali ke <a href="{{ url('beranda') }}" class="btn btn-success"><i class="fa-solid fa-home"></i> Beranda</a></p>                    
                </div>
            </div>

            
        </div>
    </div>
    </div>
</div>
<!-- Blog Section End --> 