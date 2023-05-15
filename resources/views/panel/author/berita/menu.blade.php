       <!-- Left sidebar -->
       <div class="inbox-leftbar">
        @if(Auth::user()->hasRole('author'))
        <a href="{{ route('app.berita.create') }}" class="btn btn-danger w-100 waves-effect waves-light mb-2">
            <i class="mdi mdi-plus-circle me-2"></i> Tambah Berita
        </a>
        @endif
        <div class="mail-list mt-4">
            <a href="{{ url('app/berita') }}"><i class="dripicons-star me-2"></i>Publish
                <span class="badge badge-soft-info float-end ms-2">{{$datapublish}}</span>
            </a>
            <a href="{{ url('/app/berita/draft') }}"><i class="dripicons-document me-2"></i>Draft
                <span class="badge badge-soft-info float-end ms-2">{{$jumlahdraft}}</span>
            </a>

            @if(Auth::user()->hasRole('author'))
            <a href="{{ url('/app/berita/revisi') }}"><i class="dripicons-document me-2"></i>Revisi
                <span class="badge badge-soft-info float-end ms-2">{{$jumlahrevisi}}</span>
            </a>
            <a href="{{ url('/app/berita/trash') }}"><i class="dripicons-trash me-2"></i>Trash
                <span class="badge badge-soft-info float-end ms-2">{{$jumlahtrash}}</span>
            </a>
            @endif
            @if(Auth::user()->hasRole('supervisor'))
            <a href="{{ url('/app/berita/revisi') }}"><i class="dripicons-document me-2"></i>Revisi
                <span class="badge badge-soft-info float-end ms-2">{{$jumlahrevisi}}</span>
            </a>
            @endif

        </div>
    </div>
    <!-- End Left sidebar -->
