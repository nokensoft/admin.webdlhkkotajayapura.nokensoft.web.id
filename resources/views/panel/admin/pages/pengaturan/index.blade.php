@extends('layouts.base_panel')
@section('content')
    <!-- start page content wrapper-->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"> <a href="{{ route('dashboard') }}">Dashboard </a></li>
                        <li class="breadcrumb-item active"> Pengaturan </li>
                    </ol>
                </div>
                <h4 class="page-title">Pengaturan </h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="fw-bold mb-4">Pengaturan</h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <table class="table table-bordered fs-4">
                                <tbody>
                                    <tr>
                                        <td class="fw-bold" width="130px">Judul Situs</td>
                                        <td>{!! $data->judul_situs !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Logo</td>
                                        <td>
                                            @if(!$pengaturan->logo_situs)
                                            <img src="{{ asset('assets/admin/assets/images/logo-sm.png') }}"
                                                class="img-thumbnail" width="90px" alt="Picture">
                                            @else
                                            <img src="{{ asset('file/cms/image/logo')}}/{{($pengaturan->logo_situs) }}"
                                                class="img-thumbnail" width="90px" alt="Picture">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Favicon</td>
                                        <td>
                                            @if(!$pengaturan->favicon)
                                            <img src="{{ asset('assets/admin/assets/images/favicon.ico') }}"
                                                class="img-thumbnail" width="40px" alt="Picture">
                                            @else
                                            <img src="{{ asset('file/cms/image/favicon')}}/{{($pengaturan->favicon) }}"
                                                class="img-thumbnail" width="40px" alt="Picture">
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Desktripsi</td>
                                        <td>{!! $data->deskripsi_situs !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Copy Right</td>
                                        <td>{!! $data->copyright !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" width="180px">Alamat Kantor</td>
                                        <td>{!! Str::limit($data->alamat_kantor,80) !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" width="150px">Alamat Email</td>
                                        <td>{!! Str::limit($data->alamat_email,80) !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold" width="150px">Alamat MAP</td>
                                        <td>{!! Str::limit($data->alamat_google_map,80) !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Nomor Telfom</td>
                                        <td>{{ $data->nomor_telepon ?? '#' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Instagram</td>
                                        <td>{{ $data->instagram ?? '#' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Facebook</td>
                                        <td>{{ $data->facebook ?? '#' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Twitter</td>
                                        <td>{{  $data->twitter ?? '#' }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Youtube</td>
                                        <td>{{ $data->youtube ?? '#' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mb-3">
                                <a href="{{ url('app/pengaturan/'.$pengaturan->slug.'/detail') }}"
                                    class="btn btn-dark border-0 waves-effect waves-light fs-4">
                                    <i class="fas fa-eye me-1"></i> Detail
                                </a>
                                <a href="{{ url('app/pengaturan/'.$pengaturan->slug.'/ubah') }}"
                                    class="btn btn-outline-dark border-0 waves-effect waves-light fs-4">
                                    <i class="fas fa-edit me-1"></i> Ubah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
