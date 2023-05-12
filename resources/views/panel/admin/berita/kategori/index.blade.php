@extends('layouts.base_panel')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item">Manage New</li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            </div>
            <h4 class="page-title">Kategori Berita</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                 <!-- Left sidebar -->
                 @include('panel.admin.berita.kategori.menu')
                 <!-- End Left sidebar -->


                <div class="inbox-rightbar">
                    <form action="{{ url('app/kategori') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    <div class="mt-3">
                        <table class="table table-bordered">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama Kategori</th>
                            <th>Slug</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                        @foreach ($datas as $kategori)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $kategori->name }}</td>
                            <td>{{ $kategori->slug }}</td>
                            <td class="text-center">
                                <a class="btn btn-light" href="{{ route('app.kategori.edit',$kategori->slug) }}">
                                    <i class="mdi mdi-pencil text-warning"></i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['app.kategori.destroy', $kategori->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                                 {!! Form::close() !!}
                                {{-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#modal_delete_{{$kategori->id}}">
                                    <i class="mdi mdi-trash-can text-danger"></i>
                                </a> --}}

                            </td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                    <!-- end .mt-4 -->
                    {!! $datas->render() !!}
                    <!-- end row-->
                </div>
                <!-- end inbox-rightbar-->

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

@stop
