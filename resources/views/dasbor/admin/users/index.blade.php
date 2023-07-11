@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item active">Pengguna</li>
                </ol>
            </div>
            <h4 class="page-title">Pengguna</h4>
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
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Keterangan</th>
                                <th>Peran</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            @foreach ($datas as $data)
                            <tr>
                                <td class="text-center">{{ ++$i }}</td>
                                <td class="align-middle">
                                    @if ($data->picture)
                                    <img src="{{ asset('gambar/pengguna/' . $data->picture) }}" alt="Gambar" class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                    @else
                                    <img src="{{ asset('gambar/pengguna/00.jpg') }}" alt="Gambar" class="img img-circle rounded mr-1" style="height: 75px;width:75px;">

                                    @endif

                                </td>
                                <td>{{ $data->name ?? '' }}</td>
                                <td>{{ $data->email ?? '' }}</td>
                                <td>{{ $data->description ?? '' }}</td>
                                <td>
                                    <i class="fa-solid fa-info-circle" role="button" data-toggle="tooltip" data-placement="bottom" title="{{ $data->description ?? '' }}"></i>
                                    {{ implode('', $data->roles()->pluck('display_name')->toArray()) }}
                                </td>
                                <td>{{ $data->status ?? '' }}</td>

                                <td class="text-center">
                                    <form action="{{ url('dasbor/pengguna', $data->id) }}" method="POST">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Opsi <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                @if (Auth::id() == $data->user_id or Auth::user()->hasRole('administrator'))
                                                <a class="dropdown-item" href="{{ url('dasbor/pengguna/' . $data->slug.'/detail') }}">
                                                    <i class="fe-eye"></i> Detail
                                                </a>
                                                <a class="dropdown-item" href="{{ url('dasbor/pengguna/' . $data->slug.'/edit') }}">
                                                    <i class="fe-edit"></i> Ubah
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item bg-danger text-light">
                                                    <i class="fe-trash"></i> Hapus
                                                </button>
                                                
                                                @else
                                                <a class="dropdown-item" href="{{ url('dasbor/pengguna/' . $data->slug.'/detail') }}">
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

                </div>
                <!-- end inbox-rightbar-->

                <div class="clearfix"></div>
            </div>
        </div> <!-- end card-->
    </div> <!-- end col -->

</div>
<!-- end row -->

@stop
