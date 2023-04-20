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
                <div class="inbox-leftbar">
                    <a href="{{ route('berita.create') }}" class="btn btn-danger w-100 waves-effect waves-light mb-2">
                        <i class="mdi mdi-plus-circle me-2"></i> Tambah Berita</a>
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
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Pengarang</th>
                            <th class="text-center" width="280px">Opsi</th>
                        </tr>
                        @foreach ($data as $key => $berita)
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
                            <th> {{ $berita->status }} </th>
                            <th> {{ $berita->author->name }} </th>
                            <td class="text-center">
                                <a class="btn btn-light" href="{{ route('berita.show',$berita->slug) }}">
                                    <i class="mdi mdi-eye text-dark"></i>
                                </a>
                                <a class="btn btn-light" href="{{ route('berita.edit',$berita->slug) }}">
                                    <i class="mdi mdi-pencil text-warning"></i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['berita.destroy', $berita->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                                 {!! Form::close() !!}



                                {{-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#modal_delete_{{$berita->id}}">
                                    <i class="mdi mdi-trash-can text-danger"></i>
                                </a> --}}

                            </td>
                        </tr>

                         <!-- MODAL TRANSH -->
                            <div class="modal fade" id="modal_delete_{{$berita->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="mySmallModalLabel">Are You sure want to Delete?</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <form action="{{route('berita.destroy',$berita->id)}}" method="POST">
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
