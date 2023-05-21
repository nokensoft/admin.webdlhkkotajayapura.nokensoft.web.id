@extends('dasbor.layout.app')
@section('content')
<!-- start page content wrapper-->
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item active">Link Terkait</li>
                </ol>
            </div>
            <h4 class="page-title">Link Terkait</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- Left sidebar -->
                @include('dasbor.admin.pages.link-terkait.menu')
                <!-- End Left sidebar -->

                <div class="inbox-rightbar">
                    @if (request()->segment(3) == 'draft')
                    <form action="{{ url('dasbor/link-terkait/draft') }}" method="get">
                        @else
                        <form action="{{ url('dasbor/link-terkait') }}" method="get">
                            @endif
                            <div class="input-group mb-3">
                                <input type="search" name="s" class="form-control" placeholder="Search">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
                        <div class="mt-3">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Thumbnail</th>
                                    <th>Judul Link</th>
                                    <th>Sub Judul</th>
                                    <th>Author</th>
                                    <th>URL</th>
                                    <th class="text-center" width="210px">Opsi</th>
                                </tr>
                                @foreach ($datas as $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        @if(!$data->cover)
                                        <img src="{{ asset('gambar/link-terkait/cover-0.jpg') }}" class="img-thumbnail" alt="Picture">
                                        @else
                                        <a href="{{ asset('gambar/link-terkait')}}/{{($data->cover) }}" target="_blank">
                                            <img src="{{ asset('gambar/link-terkait')}}/{{($data->cover) }}" class="img-thumbnail" alt="Picture">
                                        </a>
                                        @endif
                                    </td>
                                    <td>{{Str::limit($data->judul_link-terkait, 20)}}</td>
                                    <td>{!! Str::limit($data->sub_judul, 20) !!}</td>
                                    <td>{{ $data->user->name ?? '' }}</td>
                                    <td>{{ $data->url }}</td>


                                    <td class="text-center">
                                        <form action="{{ url('dasbor/link-terkait',$data->id) }}" method="POST">
                                            <a class="btn btn-sm btn-dark"
                                                href="{{ url('dasbor/link-terkait/'.$data->slug.'/detail') }}">
                                                <i class="fe-eye"></i>
                                            </a>
                                            <a class="btn btn-sm btn-dark"
                                                href="{{ url('dasbor/link-terkait/'.$data->slug.'/edit') }}">
                                                <i class="fe-edit"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                        </div>
                        <!-- end .mt-4 -->

                        {!! $datas->links() !!}
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
