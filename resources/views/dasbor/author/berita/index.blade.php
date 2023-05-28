@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item active">Kelola Berita</li>
                </ol>
            </div>
            <h4 class="page-title">Berita</h4>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- Left sidebar -->
                @include('dasbor.author.berita.menu')
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">

                    <form action="{{ route('dasbor.berita') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <!-- form end -->

                    <div class="mt-3">
                        <table class="table table-bordered">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Konten Singkat</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th class="text-center" width="210px">Opsi</th>
                        </tr>
                        @foreach ($data as  $berita)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <th>
                                @if (empty($berita->gambar))
                                <img src="{{asset('assets/admin/assets/gambars/gambar-not.png')}}" class="img-fluid img-thumbnail" alt="Gambar" width="200px">
                                @else
                                <a href="{{ asset($berita->gambar) }}" target="_blank">
                                    <img src="{{ asset($berita->gambar) }}" class="img-fluid img-thumbnail" alt="Gambar" width="200px">
                                </a>
                                @endif
                            </th>
                            <td>
                                <a href="{{ url('berita/' . $berita->slug) }}" target="_blank">
                                    {{ $berita->judul }}
                                </a>
                            </td>
                            <td> {{ Str::limit($berita->konten_singkat, 100) }} </td>
                            <td> <a href="{{ url('berita/kategori', $berita->kategori->kategori_slug) }}" target="_blank">{{ $berita->kategori->name }}</a> </td>
                            <td> {{ $berita->author->name }} </td>
                            <td class="text-center">
                                <form action="{{ url('dasbor/berita', $berita->id) }}" method="POST">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opsi <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('dasbor/berita/' . $berita->slug.'/detail') }}"><i class="fe-eye"></i> Detail</a>
                                            <a class="dropdown-item" href="{{ url('dasbor/berita/' . $berita->slug.'/edit') }}"><i class="fe-edit"></i> Ubah</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item bg-danger text-light"><i class="fe-trash"></i> Hapus</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    <!-- end .mt-4 -->
                    {!! $data->render() !!}
                    <!-- end row-->
                </div>
                <!-- End inbox-rightbar-->

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@stop
