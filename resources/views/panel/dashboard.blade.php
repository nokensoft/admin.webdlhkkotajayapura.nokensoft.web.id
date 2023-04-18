@extends('layouts.base_panel')
@section('content')
    <!-- start page content wrapper-->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><a href="javascript: void(0);">Dashboard</a></li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard {{ implode('',Auth::user()->roles()->pluck('display_name')->toArray()) }}</h4>
            </div>
        </div>
    </div>
    @if (Auth::user()->hasRole('administrator'))

    @elseif (Auth::user()->hasRole('editor'))

    @elseif (Auth::user()->hasRole('author'))


    @endif
  <!--end wrapper-->

  @stop
