<!-- Left sidebar -->
<div class="inbox-leftbar">
    <a href="{{ url('dasbor/berita/create') }}" class="btn btn-primary shadow d-block mb-2">
            <i class="mdi mdi-plus-box me-2"></i> Tambah
    </a>

<ul class="list-group">
    <a href="{{ url('dasbor/berita') }}" class="list-group-item list-group-item-action">
            <i class="dripicons-star mr-1"></i> Publish <span class="badge badge-soft-info float-right ms-2">{{$datapublish}}</span>
    </a>
    <a href="{{ url('dasbor/berita/draft') }}" class="list-group-item list-group-item-action">
            <i class="dripicons-document mr-1"></i> Draft<span class="badge badge-soft-info float-right ms-2">{{$jumlahdraft}}</span>
    </a>
    <a href="{{ url('dasbor/berita/trash') }}" class="list-group-item list-group-item-action">
            <i class="dripicons-trash mr-1"></i> Trash <span class="badge badge-soft-info float-right ms-2">{{$jumlahtrash}}</span>
    </a>
</ul>

</div>
<!-- End Left sidebar -->
