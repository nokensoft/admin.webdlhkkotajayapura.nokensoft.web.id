@extends('dasbor.layout.app')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('dasbor') }}">Dasbor</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('dasbor/link-terkait') }}">Link Terkait</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </div>
            <h4 class="page-title">Detail</h4>
        </div>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    
                    <div class="col-md-8">

                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Judul</label>
                            <div class="border-bottom py-1">
                                {{ $data->judul_link ?? ''}}
                            </div>
                        </div>
                        <!-- item end -->

                        <div class="mb-3">
                            <label for="" class="font-weight-bold">
                                URL <i class="fa-solid fa-info-circle" data-toggle="tooltip" data-placement="right" title='URL merupakan link atau alamat sebuah halaman web secara internal (dari web ini) atau secara eksternal  (dari web lainnya)' role="button"></i>
                            </label>
                            <div class="border-bottom py-1">
                                <a href="{{ $data->url ?? '' }}" target="_blank">{{ $data->url ?? '' }}</a>
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Status</label>
                            <div class="border-bottom py-1">
                                {{ $data->status }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Tanggal Terbit</label>
                            <div class="border-bottom py-1">
                                {{ $data->created_at }}
                            </div>
                        </div>
                        <!-- item end -->
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Tanggal Diubah</label>
                            <div class="border-bottom py-1">
                                {{ $data->updated_at }}
                            </div>
                        </div>
                        <!-- item end -->

                    </div>
                    <div class="col-md-4 order-sm-first order-md-last">
                        
                        <div class="mb-3">
                            <label for="" class="font-weight-bold">Gambar</label>
                            <div class="border-bottom py-1">
                                @if(empty($data->gambar)) 
                                <img src="{{ asset('gambar/link-terkait/00.jpg') }}" alt="Gambar" class="w-100">
                                @else 
                                <img src="{{ asset('gambar/link-terkait/' . $data->gambar ) }}" alt="Gambar" class="w-100">
                                @endif
                            </div>
                            <div>

                            </div>
                        </div>
                        <!-- item end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('dasbor/link-terkait/' . $data->slug.'/edit') }}" class="btn btn-lg btn-primary waves-effect waves-light border">
                    <i class="fe-edit"></i> Ubah
                </a>
                <a href="{{ route('dasbor.link-terkait') }}" class="btn btn-lg btn-light waves-effect waves-light border">
                    <i class="fe-arrow-left mr-1"></i>Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@stop

@push('script-header')
<!-- Plugins css-->
<link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush

@push('script-footer')
<!-- Select2 js-->
<script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
<!-- Quill js -->
<script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>
<!-- Init js -->
<script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
<!-- Init js-->
<script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>
<script src="{{ asset('assets/admin/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endpush
