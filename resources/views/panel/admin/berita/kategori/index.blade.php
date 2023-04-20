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
                <div class="inbox-leftbar">
                    <a href="{{ route('kategori-berita.create') }}" class="btn btn-danger w-100 waves-effect waves-light mb-2">
                        <i class="mdi mdi-plus-circle me-2"></i> Tambah Kategori</a>
                    </div>
                <div class="inbox-rightbar">
                    <form action="{{ url('app/users') }}" method="get">
                        <div class="input-group mb-3">
                            <input type="search" name="s" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                    <div class="mt-3">
                        <table class="table table-bordered">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Judul</th>
                            <th>Slug</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                        @foreach ($data as $key => $kategori)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $kategori->name }}</td>
                            <td>{{ $kategori->slug }}</td>
                            <td class="text-center">
                                <a class="btn btn-light" href="{{ route('kategori-berita.edit',$kategori->slug) }}">
                                    <i class="mdi mdi-pencil text-warning"></i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['kategori-berita.destroy', $kategori->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                                 {!! Form::close() !!}
                                {{-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#modal_delete_{{$kategori->id}}">
                                    <i class="mdi mdi-trash-can text-danger"></i>
                                </a> --}}

                            </td>
                        </tr>

                         <!-- MODAL TRANSH -->
                            <div class="modal fade" id="modal_delete_{{$kategori->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="mySmallModalLabel">Are You sure want to Delete?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <form action="{{route('kategori-berita.destroy',$kategori->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="status" value="trash">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                    Trash
                                                </button>
                                                <button type="submit" class="btn btn-light" data-dismiss="modal" aria-hidden="true">
                                                    <i class="fas fa-arrow-left"></i>
                                                    Cancel
                                                </button>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- END MODAL TRANSH -->

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
