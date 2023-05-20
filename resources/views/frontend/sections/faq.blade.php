<div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 padding-0 col-md-12 md-mb-40">
                <div class="main-part new-style">
                    <div class="title mb-21">
                        <h2 class="text-part mb-0">FAQ</h2>
                        <p class="desc">Pertanyaan yang paling sering ditanyakan</p>
                    </div>
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            {{-- <div class="accordion-item card">
                                <div class="accordion-header card-header" id="headingOne">
                                    <button class="accordion-button card-link" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">What are the
                                        requirements ?</button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body card-body">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                                        mattis, pulvinar dapibus leo ducimus qui blanditiis praesentium ducimus
                                        qui.</div>
                                </div>
                            </div> --}}
    
                            @foreach ($faq as $f )
                            <div class="accordion-item card">
                                <div class="accordion-header card-header" id="headingTwo">
                                    <button class="card-link accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo"> {{ $f->pertanyaan }} </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body card-body">
                                       {!! $f->jawaban !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
    
                            {{-- <div class="accordion-item card">
                                <div class="accordion-header card-header" id="headingThree">
                                    <button class="card-link accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">What is the transfer
                                        application process?</button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body card-body">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                                        mattis, pulvinar dapibus leo ducimus qui blanditiis praesentium ducimus
                                        qui.</div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 padding-0 col-md-12">
                <div class="rs-free-contact">
                    <div class="sec-title3">
                        <h2 class="title white-color">Ajukan Pertanyaan Anda</h2>
                    </div>
                    <form  method="post" action="{{ route('app.pengajuan.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 mb-30 col-md-12">
                                <input class="from-control" type="text" required  name="nama" placeholder="Nama Lengkap">
                                    @error('nama')
                                    <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-30 col-md-12">
                                <input class="from-control" type="email" name="email" required
                                    placeholder="Alamat Email" >
                                    @error('email')
                                        <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
                                     @enderror
                            </div>
                            <div class="col-lg-6 mb-30 col-md-12">
                                <input class="from-control" type="text" name="no_telf" required
                                    placeholder="Phone" >
                                    @error('no_telf')
                                        <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
                                     @enderror
                            </div>
                            <div class="col-lg-6 mb-30 col-md-12">
                                <input class="from-control" type="text"  name="judul_topik" required
                                    placeholder="Judul Topik" >
                                    @error('judul_topik')
                                        <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
                                     @enderror
                            </div>
    
                            <div class="col-lg-12 mb-35">
                                <textarea class="from-control"  name="keterangan"
                                    placeholder="Isi rincian pertanyaan Anda di sini..." required ></textarea>
                                    @error('keterangan')
                                        <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
                                     @enderror
                            </div>
                        </div>
                        <div class="form-btn">
                            <button type="submit" class="readon submit-requset w-100 btn-lg">
                                <i class="fa-solid fa-paper-plane me-2"></i> Kirim Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>