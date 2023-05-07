@extends('layouts.base_panel')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">App</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Pengaturan</li>
                </ol>
            </div>
            <h4 class="page-title">Ubah</h4>
        </div>
    </div>
</div>
<!-- end page title -->
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                {!!
                Form::model($data,array('url'=>'app/pengaturan/update/'.$data->id,'method'=>'post','files'=>'true'))!!}
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Judul Situs <span class="text-danger">*</span></label>
                            {!! Form::text('judul_situs',null,['required','id'=>'judul_situs','class'=>'form-control','placeholder'=>'Type...']) !!}
                        </div>

                        <div class="mb-3">
                            <label for="product-name" class="form-label">Desckripsi Situs <span class="text-danger">*</span></label>
                            <textarea name="deskripsi_situs" class="form-control" rows="3" required
                                placeholder="Type..">{{ old('deskripsi_situs',$data->deskripsi_situs) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="product-name" class="form-label">Alamat Kantor <span class="text-danger">*</span></label>
                            <textarea name="alamat_kantor" class="form-control" rows="2" required
                                placeholder="Type..">{{ old('alamat_kantor',$data->alamat_kantor) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Alamat Maps Kantor <span class="text-danger">*</span></label>
                            <textarea name="alamat_google_map" class="form-control" rows="3" required
                                placeholder="Embed HTML link maps..">{{ old('alamat_google_map',$data->alamat_google_map) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="product-name" class="form-label">Copy Right<span class="text-danger">*</span></label>
                            {!! Form::text('copyright',null,['required','id'=>'copyright','class'=>'form-control','placeholder'=>'Misa:2020 All Rights Reserved. Developed By Nokensoft'])!!}
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Alamat Email <span class="text-danger">*</span></label>
                            {!! Form::text('alamat_email',null,['id'=>'alamat_email','class'=>'form-control','placeholder'=>'email kantor'])!!}
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                            {!! Form::text('nomor_telepon',null,['id'=>'nomor_telepon','class'=>'form-control','placeholder'=>'Nomor Telfon Kantor'])!!}
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Facobook</label>
                            {!! Form::text('facebook',null,['id'=>'facebook','class'=>'form-control','placeholder'=>'username'])!!}
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Instagram</label>
                            {!! Form::text('instagram',null,['id'=>'instagram','class'=>'form-control','placeholder'=>'username'])!!}
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Twitter</label>
                            {!! Form::text('twitter',null,['id'=>'twitter','class'=>'form-control','placeholder'=>'username'])!!}
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Linkedin</label>
                            {!! Form::text('linkedin',null,['id'=>'linkedin','class'=>'form-control','placeholder'=>'username'])!!}
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Youtube</label>
                            {!! Form::text('youtube',null,['id'=>'youtube','class'=>'form-control','placeholder'=>'username'])!!}
                        </div>
                    </div>

                    <div class="col-md-6 shadow p-3 mb-5 bg-white rounded">
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Favicon <span class="text-danger">*</span></label>
                            <div class="d-block mb-3">
                                @if(!$data->favicon)
                                <img src="{{asset('assets/admin/assets/images/upload.png')}}" id="preview-favicon"
                                    alt="Profile Picture" class="img-thumbnail w-50">
                                @else
                                <img src="{{asset('file/cms/image/favicon')}}/{{ $data->favicon }}" id="preview-favicon"
                                    alt="Profile Picture" class="img-thumbnail w-50">
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="favicon" id="favicon">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Logo <span class="text-danger">*</span></label>
                            <div class="d-block mb-3">

                                @if(!$data->logo)
                                <img src="{{asset('assets/admin/assets/images/upload.png')}}" id="preview-logo"
                                    alt="Profile Picture" class="img-thumbnail w-50">
                                @else

                                <img src="{{asset('file/cms/image/logo')}}/{{ $data->logo_situs }}" id="preview-logo"
                                    alt="Profile Picture" class="img-thumbnail w-50">
                                @endif

                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="logo_situs" id="logo">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col">
                        <div class="card-box">
                            <button type="submit"
                                class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
                            <a href="{{ route('app.pengaturan') }}" class="btn btn-light">
                                <i class="mdi mdi-arrow-left mr-1"></i>Kembali
                            </a>
                        </div>
                    </div> <!-- end col -->
                </div>
                {!! Form::close() !!}
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->
<!--end wrapper-->




@stop

@push('script-footer')

<script type="text/javascript">
    $(document).ready(function (e) {
            $('#logo').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                $('#preview-logo').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

            $('#favicon').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => {
                $('#preview-favicon').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

         });
</script>

@endpush
