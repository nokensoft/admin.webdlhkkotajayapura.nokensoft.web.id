@extends('dasbor.layout.app')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            <li>Dasbor</li>
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">Dasbor</h4>
            </div>
        </div>
    </div>
    <!-- row end -->

    @if (Auth::user()->hasRole('administrator'))

    <div class="row">
        <div class="col-md-6 col-xl-3">
           <div class="card">
                <div class="widget-rounded-circle card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-success border-success border">
                                <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_berita ?? '' }}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Berita</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
           </div>
        </div> <!-- end col-->
        <div class="col-md-6 col-xl-3">
           <div class="card">
                <div class="widget-rounded-circle card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-success border-success border">
                                <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_kategori ?? '' }}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Kategori Berita</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
           </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
           <div class="card">
            <div class="widget-rounded-circle card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded bg-soft-success border-success border">
                            <i class="mdi mdi-leaf display-4 avatar-title text-success"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_informasi_lingkungan ?? '' }}</span></h3>
                            <p class="text-muted mb-1 text-truncate">Total Info Lingkungan</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div> <!-- end widget-rounded-circle-->
           </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
             <div class="widget-rounded-circle card-body">
                 <div class="row">
                     <div class="col-6">
                         <div class="avatar-lg rounded bg-soft-success border-success border">
                             <i class="mdi mdi-cursor-default-click display-4 avatar-title text-success"></i>
                         </div>
                     </div>
                     <div class="col-6">
                         <div class="text-right">
                             <h3 class="text-dark mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_layanan_online ?? '' }}</span></h3>
                             <p class="text-muted mb-1 text-truncate">Total Layanan Online</p>
                         </div>
                     </div>
                 </div> <!-- end row-->
             </div> <!-- end widget-rounded-circle-->
            </div>
         </div> <!-- end col-->

         <div class="col-md-6 col-xl-3">
             <div class="card">
              <div class="widget-rounded-circle card-body">
                  <div class="row">
                      <div class="col-6">
                          <div class="avatar-lg rounded bg-soft-success border-success border">
                              <i class="mdi mdi-link display-4 avatar-title text-success"></i>
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="text-right">
                              <h3 class="text-dark mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_link_terkait ?? '' }}</span></h3>
                              <p class="text-muted mb-1 text-truncate">Total Link Terkait</p>
                          </div>
                      </div>
                  </div> <!-- end row-->
              </div> <!-- end widget-rounded-circle-->
             </div>
          </div> <!-- end col-->

          <div class="col-md-6 col-xl-3">
              <div class="card">
               <div class="widget-rounded-circle card-body">
                   <div class="row">
                       <div class="col-6">
                           <div class="avatar-lg rounded bg-soft-success border-success border">
                               <i class="mdi mdi-text-box-multiple-outline display-4 avatar-title text-success"></i>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="text-right">
                               <h3 class="text-dark mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_halaman ?? '' }}</span></h3>
                               <p class="text-muted mb-1 text-truncate">Total Halaman</p>
                           </div>
                       </div>
                   </div> <!-- end row-->
               </div> <!-- end widget-rounded-circle-->
              </div>
           </div> <!-- end col-->

          <div class="col-md-6 col-xl-3">
              <div class="card">
               <div class="widget-rounded-circle card-body">
                   <div class="row">
                       <div class="col-6">
                           <div class="avatar-lg rounded bg-soft-success border-success border">
                               <i class="mdi mdi-forum-outline display-4 avatar-title text-success"></i>
                           </div>
                       </div>
                       <div class="col-6">
                           <div class="text-right">
                               <h3 class="text-dark mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_pesan ?? '' }}</span></h3>
                               <p class="text-muted mb-1 text-truncate">Total Pesan</p>
                           </div>
                       </div>
                   </div> <!-- end row-->
               </div> <!-- end widget-rounded-circle-->
              </div>
           </div> <!-- end col-->

           <div class="col-md-6 col-xl-3">
               <div class="card">
                <div class="widget-rounded-circle card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-success border-success border">
                                <i class="mdi mdi-account-group display-4 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_pengguna ?? '' }}</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Pengguna</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
               </div>
            </div> <!-- end col-->
    </div>
    <!-- row end -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-0"> Berita <i class="mdi mdi-newspaper "></i> </h4>
                    <div id="cardCollpase5" class="collapse pt-3 show" dir="ltr">
                        <div id="chartBerita"></div>
                            {{-- Data Visitor --}}
                            <input type="hidden" value="{{$dasbor_jml_berita}}" name="dasbor_jml_berita" id="dasbor_jml_berita">
                            <input type="hidden" value="{{$dasbor_jml_berita_semua}}" name="dasbor_jml_berita_semua" id="dasbor_jml_berita_semua">
                            <input type="hidden" value="{{$dasbor_jml_berita_draft}}" name="dasbor_jml_berita_draft" id="dasbor_jml_berita_draft">
                    </div> <!-- collapsed end -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-0"> Halaman <i class="mdi mdi-text-box-multiple-outline "></i> </h4>
                    <div id="cardCollpase5" class="collapse pt-3 show" dir="ltr">
                        <div id="chartHalaman"></div>
                            {{-- Data Visitor --}}
                            <input type="hidden" value="{{$dasbor_jml_halaman}}" name="dasbor_jml_halaman" id="dasbor_jml_halaman">
                            <input type="hidden" value="{{$dasbor_jml_halaman_semua}}" name="dasbor_jml_halaman_semua" id="dasbor_jml_halaman_semua">
                            <input type="hidden" value="{{$dasbor_jml_halaman_draft}}" name="dasbor_jml_halaman_draft" id="dasbor_jml_halaman_draft">
                    </div> <!-- collapsed end -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-0"> Total Pengunjung Website <i class="mdi mdi-account-group "></i> </h4>
                    <div id="cardCollpase5" class="collapse pt-3 show" dir="ltr">
                        <div id="chartVisitor"></div>
                            {{-- Data Visitor --}}
                            <input type="hidden" value="{{$totalVisitor}}" name="totalVisitor" id="totalVisitor">
                            <input type="hidden" value="{{$visitorHariIni}}" name="visitorHariIni" id="visitorHariIni">
                            <input type="hidden" value="{{$visitorMingguIni}}" name="visitorMingguIni" id="visitorMingguIni">
                            <input type="hidden" value="{{$visitorBulanIni}}" name="visitorBulanIni" id="visitorBulanIni">
                            <input type="hidden" value="{{$visitorTahunIni}}" name="visitorTahunIni" id="visitorTahunIni">
                    </div> <!-- collapsed end -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <script src="{{ asset('assets/js/grafik.js')}}"></script>

    @elseif (Auth::user()->hasRole('editor'))

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-6">
                             <div class="avatar-lg rounded bg-soft-success border-success border">
                                 <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="text-right">
                                 <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_berita ?? '' }}</span></h3>
                                 <p class="text-muted mb-1 text-truncate">Total Berita</p>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-6">
                             <div class="avatar-lg rounded bg-soft-success border-success border">
                                 <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="text-right">
                                 <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_kategori ?? '' }}</span></h3>
                                 <p class="text-muted mb-1 text-truncate">Total Kategori Berita</p>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
         </div> <!-- end col-->
    </div>
    <!-- row end -->

    @elseif (Auth::user()->hasRole('author'))

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-6">
                             <div class="avatar-lg rounded bg-soft-success border-success border">
                                 <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="text-right">
                                 <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_berita ?? '' }}</span></h3>
                                 <p class="text-muted mb-1 text-truncate">Total Berita</p>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-6">
                             <div class="avatar-lg rounded bg-soft-success border-success border">
                                 <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="text-right">
                                 <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_kategori ?? '' }}</span></h3>
                                 <p class="text-muted mb-1 text-truncate">Total Kategori Berita</p>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
         </div> <!-- end col-->
    </div>
    <!-- row end -->

    @elseif (Auth::user()->hasRole('supervisor'))

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-6">
                             <div class="avatar-lg rounded bg-soft-success border-success border">
                                 <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="text-right">
                                 <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_berita ?? '' }}</span></h3>
                                 <p class="text-muted mb-1 text-truncate">Total Berita</p>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
         </div> <!-- end col-->
         <div class="col-md-6 col-xl-3">
            <div class="card">
                 <div class="widget-rounded-circle card-body">
                     <div class="row">
                         <div class="col-6">
                             <div class="avatar-lg rounded bg-soft-success border-success border">
                                 <i class="mdi mdi-newspaper display-4 avatar-title text-success"></i>
                             </div>
                         </div>
                         <div class="col-6">
                             <div class="text-right">
                                 <h3 class="mt-1 h1"><span data-plugin="counterup">{{ $dasbor_jml_kategori ?? '' }}</span></h3>
                                 <p class="text-muted mb-1 text-truncate">Total Kategori Berita</p>
                             </div>
                         </div>
                     </div> <!-- end row-->
                 </div> <!-- end widget-rounded-circle-->
            </div>
         </div> <!-- end col-->
    </div>
    <!-- row end -->

    @endif

  @stop
