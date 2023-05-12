@extends('layouts.base_panel')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dasbor</a></li>
                    <li class="breadcrumb-item active">Mengelola Berita</li>
                </ol>
            </div>
            <h4 class="page-title">Berita</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <!-- Left sidebar -->
                @include('panel.admin.berita.menu')
                <!-- End Left sidebar -->


                <div class="inbox-rightbar">
                    <form action="{{ url('app/berita') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    <div class="mt-3">
                        <table class="table table-bordered">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Kategori</th>
                            <th>Pengarang</th>
                            <th class="text-center" width="210px">Opsi</th>
                        </tr>
                        @foreach ($data as  $berita)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <th>
                                @if ($berita->image)
                                <img src="{{asset('file/berita')}}/{{$berita->image}}" alt="allal"
                                class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                @else
                                <img src="{{asset('assets/admin/assets/images/image-not.png')}}" alt="allal"
                                class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                @endif
                            </th>
                            <td>
                                {{ Str::limit($berita->title, 10) }}
                            </td>
                            <td>
                                {{ Str::limit($berita->body, 10) }}
                            </td>
                            <th> {{ $berita->kategori->name }} </th>

                            <th> {{ $berita->author->name }} </th>
                            <td class="text-center">
                                <a class="btn btn-sm btn-light" href="{{ route('app.berita.show',['id'=> $berita->slug]) }}">
                                    <i class="mdi mdi-eye text-dark"></i>
                                </a>
                                <a class="btn btn-sm btn-light" href="{{ route('app.berita.edit',['id'=> $berita->slug]) }}">
                                    <i class="mdi mdi-pencil text-warning"></i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['app.berita.destroy', $berita->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-sm btn-danger']) !!}
                                 {!! Form::close() !!}



                                {{-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#modal_delete_{{$berita->id}}">
                                    <i class="mdi mdi-trash-can text-danger"></i>
                                </a> --}}

                            </td>
                        </tr>


                        @endforeach
                        </table>
                    </div>
                    <!-- end .mt-4 -->
                    {!! $data->render() !!}
                    <!-- end row-->
                </div>
                <!-- end inbox-rightbar-->

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

@stop
