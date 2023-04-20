@extends('layouts.base_panel')
@section('content')
<!-- start page content wrapper-->
<!-- start page title -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item">Manage New</li>
                                <li class="breadcrumb-item"><a href="{{ route('berita.index') }}"></a>Berita</li>
                                <li class="breadcrumb-item active">Detail</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Detaill Berita </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="card">
                   <div class="col-lg-12">
                        <div class="card-body">
                            <h1></h1>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Judul</label>
                                            {!! Form::text('title',$berita->title,['readonly','class'=>'form-control']) !!}
                                        </div>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Konten</label>
                                            <textarea name="body" class="form-control" rows="8" readonly>{{ $berita->body }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label for="role_id" class="form-label">Kategori </label>
                                            {!! Form::text('categori',$berita->kategori->name,['readonly','class'=>'form-control']) !!}
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            {!! Form::text('status',$berita->status,['readonly','class'=>'form-control']) !!}
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-4">
                                        <div class="card-box">
                                            <div class="mb-3">
                                                <label for="pic">Gambar</label>
                                                <div class="d-block mb-3">
                                                    @if(!$berita->image)
                                                    <img src="{{asset('assets/admin/assets/images/upload.png')}}" id="preview-image"
                                                    alt="Profile Picture" class="img-thumbnail w-100">
                                                    @else
                                                    <img src="{{asset('file/berita')}}/{{ $berita->image  }}" id="preview-image"
                                                    alt="Profile Picture" class="img-thumbnail w-100">
                                                    @endif
                                                </div>
                                            </div>
                                        </div> <!-- end card group -->
                                    </div>

                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col">
                                        <div class="card-box">
                                            <a href="{{ route('berita.edit',['berita' => $berita->slug]) }}" class="btn btn-warning">
                                                <i class="mdi mdi-pencil mr-1"></i>Sunting
                                            </a>
                                            <a href="{{ route('berita.index') }}" class="btn btn-light">
                                                <i class="mdi mdi-arrow-left mr-1"></i>Kembali
                                            </a>
                                        </div>
                                    </div> <!-- end col -->
                                </div>

                            </form> <!-- end form -->
                        </div>
                   </div>
                </div>
            </div>

    </div> <!-- end card -->

</div> <!-- end col -->


</div>
        </div>
    </div>
<!-- end row -->
<!--end wrapper-->



  @stop


