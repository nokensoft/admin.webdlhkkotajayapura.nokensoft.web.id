@extends('dasbor.layout.app')
@section('content')
    <!-- start page content wrapper-->
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

    @endif
  <!--end wrapper-->

  @stop
