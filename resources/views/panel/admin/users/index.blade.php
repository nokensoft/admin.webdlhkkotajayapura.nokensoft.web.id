@extends('layouts.base_panel')
@section('content')
    <!-- start page content wrapper-->
      <!-- start page title -->
	  <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                            <li class="breadcrumb-item active">users</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">users</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inbox-leftbar">
                                            <a href="{{ route('users.create') }}" class="btn btn-danger w-100 waves-effect waves-light mb-2">
                                                <i class="mdi mdi-plus-circle me-2"></i> Tambah data</a>
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
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Roles</th>
                                                    <th width="280px">Action</th>
                                                </tr>
                                                @foreach ($data as $key => $user)
                                                <tr>
                                                    <td class="text-center">{{ ++$i }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ implode('',$user->roles()->pluck('display_name')->toArray()) }}</td>
                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                                         {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                                             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                         {!! Form::close() !!}
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
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            </div>
                        </div>

                        <!-- end row -->

  <!--end wrapper-->

  @stop
