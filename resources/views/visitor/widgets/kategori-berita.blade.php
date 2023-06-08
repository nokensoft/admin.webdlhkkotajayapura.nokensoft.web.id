<div class="widget-archives mb-50">
    <h3 class="widget-title">Kategori Berita</h3>
    <ul>
        @foreach($kategoris as $kategori)
        <li><a href="{{ url('berita/kategori/' . $kategori->kategori_slug) }}">{{ $kategori->name }}</a></li>
        @endforeach
    </ul>
</div>
<!-- Kategori End -->