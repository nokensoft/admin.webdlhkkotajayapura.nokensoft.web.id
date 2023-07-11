@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item active">Berita</li>
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

                @include('dasbor.layout.includes.leftbar-menu')

                <div class="inbox-rightbar">

                    @include('dasbor.layout.includes.search')

                    <div class="mt-3">
                        <table class="table table-bordered">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Status</th>
                            @if(Auth::user()->hasRole(['administrator','author']))
                            <th>Keterangan</th>
                            @endif
                            <th class="text-center"></th>
                        </tr>
                        @foreach ($datas as  $data)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <th>
                                @if (empty($data->gambar))
                                <img src="{{ asset('gambar/berita/00.jpg') }}" class="img-fluid img-thumbnail" alt="Gambar" width="200px">
                                @else
                                <a href="{{ asset('gambar/berita/' . $data->gambar) }}" target="_blank">
                                    <img src="{{ asset('gambar/berita/' . $data->gambar) }}" class="img-fluid img-thumbnail" alt="Gambar" width="200px">
                                </a>
                                @endif
                            </th>
                            <td>{{ $data->judul ?? ''}}</td>
                            <td> 
                                <i class="fa-solid fa-info-circle" role="button" data-toggle="tooltip" data-placement="bottom" title="{{ $data->kategori->deskripsi ?? '' }}"></i>
                                {{ $data->kategori->name ?? ''}}
                            </td>
                            <td>{{ $data->author->name ?? '' }}</td>
                            <td>
                                @if($data->status == "Verifikasi")
                                    <a href="{{ route('dasbor.berita.verifikasi') }}"> Terverifikasi </a>
                                @elseif($data->status == "Revisi")
                                <a href="{{ route('dasbor.berita.revisi') }}"> Revisi </a>
                                @else
                                {{ $data->status }}
                                @endif

                            </td>
                            @if(Auth::user()->hasRole(['administrator','author']))
                            <td> {{ $data->ket  }} </td>
                            @endif
                            <td class="text-center">
                                <form action="{{ url('dasbor/berita', $data->id) }}" method="POST">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opsi <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            @if (Auth::id() == $data->user_id or Auth::user()->hasRole('administrator'))
                                            <a class="dropdown-item" href="{{ url('dasbor/berita/' . $data->slug.'/detail') }}">
                                                <i class="fe-eye"></i> Detail
                                            </a>
                                            <a class="dropdown-item" href="{{ url('dasbor/berita/' . $data->slug.'/edit') }}">
                                                <i class="fe-edit"></i> Ubah
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item bg-danger text-light">
                                                <i class="fe-trash"></i> Hapus
                                            </button>
                                            
                                            @else
                                            <a class="dropdown-item" href="{{ url('dasbor/berita/' . $data->slug.'/detail') }}">
                                                <i class="fe-eye"></i> Detail
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    <!-- end .mt-4 -->
                    {!! $datas->render() !!}
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
