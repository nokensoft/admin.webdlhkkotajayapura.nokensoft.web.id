<div class="recent-posts mb-50 text-center">
    <h3>{{ $pengaturan->judul_situs }}</h3>
    <p>{{ $pengaturan->deskripsi_situs }}</p>
    <img src="{{ asset('gambar/ilustrasi/6.png') }}" alt="gambar ilustrasi" class="mb-3">
    <a href="{{ url('halaman/profil-dinas') }}" class="btn btn-lg btn-success w-100">
        <i class="fa-solid fa-arrow-right me-2"></i> Tampilkan Profil Dinas
    </a>
</div>
<!-- Banner Sidebar End -->