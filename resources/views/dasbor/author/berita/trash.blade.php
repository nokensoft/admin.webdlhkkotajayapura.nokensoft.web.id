@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/berita') }}">Berita</a></li>
                    <li class="breadcrumb-item active">Trash</li>
                </ol>
            </div>
            <h4 class="page-title">Trash</h4>
        </div>
    </div>
</div>
<!-- row end -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <a href="{{ url('dasbor/berita') }}" class="btn btn-primary mb-2 waves-effect waves-light">
                            <i class="mdi mdi-arrow-left me-2"></i> Kembali
                        </a>
                    </div>

                </div>

                <div class="table-responsive">

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Diterbitkan</th>
                            <th>Diubah</th>
                            <th class="text-center" width="210px">Opsi</th>
                        </tr>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                @if (empty($data->gambar))
                                <img src="{{asset('gambar/berita/00.jpg')}}" class="img-fluid img-thumbnail" alt="Gambar" width="200px">
                                @else
                                <a href="{{ asset('gambar/berita/' . $data->gambar ?? '') }}" target="_blank">
                                    <img src="{{ asset('gambar/berita/' . $data->gambar ?? '') }}" class="img-fluid img-thumbnail" alt="Gambar" width="200px">
                                </a>
                                @endif
                            </td>
                            <td>{{ $data->judul ?? '' }}</td>
                            <td>{{ $data->author->name ?? '' }} </td>
                            <td>{{ $data->created_at ?? '' }}</td>
                            <td>{{ $data->updated_at ?? '' }}</td>

                            <td class="text-center">
                                @if (Auth::id() == $data->user_id or Auth::user()->hasRole('administrator'))
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opsi <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">

                                            <!-- form restore -->                                            
                                            <form action="{{ url('dasbor/berita/restore',$data->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item bg-success text-light">
                                                    <i class="fe-arrow-left"></i> Kembalikan
                                                </button>
                                            </form>

                                            <!-- form delete -->
                                            <form action="{{ url('dasbor/berita/delete',$data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item bg-danger text-light show_confirm" data-toggle="tooltip" title='Delete'>
                                                    <i class="fe-trash"></i> Hapus
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                
                                @endif
                            </td>

                        </tr>
                        @endforeach

                    </table>

                </div>
                {!! $datas->links() !!}
            </div> <!-- end card-body-->

        </div> <!-- end card-->
    </div> <!-- end col -->

</div>
<!-- row end -->

@stop

@push('script-footer')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          event.preventDefault();
          swal.fire({
            title: 'Anda Yakin?',
            text: "data akan terhapus permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Bersihkan!'
          })
          .then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                'Deleted!',
                'Your data has been deleted.',
                'success'
                )
            }
        });
      });

</script>

@endpush
