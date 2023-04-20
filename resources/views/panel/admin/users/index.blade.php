@extends('layouts.base_panel')
@section('content')
    <!-- start page content wrapper-->
      <!-- start page title -->
	  <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dasbor</a></li>
                                            <li class="breadcrumb-item active">Mengelola Pengguna</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Pengguna</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inbox-leftbar">
                                            <a href="{{ route('pengguna.create') }}" class="btn btn-danger w-100 waves-effect waves-light mb-2">
                                                <i class="mdi mdi-plus-circle me-2"></i> Tambah Pengguna</a>
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
                                                    <th>Avatar</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Peran</th>
                                                    <th class="text-center">Opsi</th>
                                                </tr>
                                                @foreach ($data as $key => $user)
                                                <tr>
                                                    <td class="text-center">{{ ++$i }}</td>
                                                    <td class="align-middle">
                                                        @if ($user->picture)
                                                        <img src="{{asset('file/users')}}/{{$user->picture}}" alt="allal"
                                                        class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                                        @else
                                                        <img src="{{asset('assets/admin/assets/images/image-not.png')}}" alt="allal"
                                                        class="img img-circle rounded mr-1" style="height: 75px;width:75px;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ implode('',$user->roles()->pluck('display_name')->toArray()) }}</td>
                                                    <td class="text-center">
                                                        <a class="btn btn-light" href="{{ route('pengguna.show',$user->slug) }}">
                                                            <i class="mdi mdi-account-details mr-1"></i>
                                                        </a>
                                                        @if (Auth::id() == $user->id)
                                                        <a class="btn btn-light" href="{{ route('pengguna.edit',$user->slug) }}">
                                                            <i class="mdi mdi-account-edit text-warning"></i>
                                                        </a>
                                                        @else
                                                        <a class="btn btn-light" href="{{ route('pengguna.edit',$user->slug) }}">
                                                            <i class="mdi mdi-account-edit text-warning"></i>
                                                        </a>
                                                        {!! Form::open(['method' => 'DELETE','route' => ['pengguna.destroy', $user->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                                                         {!! Form::close() !!}
                                                        @endif


                                                        {{-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#modal_delete_{{$user->id}}">
                                                            <i class="mdi mdi-trash-can text-danger"></i>
                                                        </a> --}}

                                                    </td>
                                                </tr>

                                                 <!-- MODAL TRANSH -->
                                                    <div class="modal fade" id="modal_delete_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="mySmallModalLabel">Are You sure want to Delete?</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <form action="{{route('pengguna.destroy',$user->id)}}" method="POST">
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
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            </div>
                        </div>

                        <!-- end row -->

  <!--end wrapper-->

  @stop
