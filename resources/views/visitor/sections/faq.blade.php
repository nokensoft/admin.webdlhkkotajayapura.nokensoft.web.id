<div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 padding-0 col-md-12 md-mb-40">
                <div class="main-part new-style">
                    <div class="title mb-21">
                        <h2 class="text-part mb-0">FAQ</h2>
                        <p class="desc">Pertanyaan yang paling sering ditanyakan oleh masyarakat secara umum. Berikut ini kami sediakan pertanyaan-pertanyaan tersebut sekaligus dengan jawabannya.</p>
                    </div>
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            
                            @foreach ($faqs as $faq)
                            <div class="accordion-item card">
                                <div class="accordion-header card-header" id="heading{{ $faq->id }}">
                                    <button class="card-link accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false" aria-controls="collapse{{ $faq->id }}">
                                        {{ $faq->pertanyaan }}
                                    </button>
                                </div>
                                <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body card-body">
                                        {!! $faq->jawaban !!}
                                    </div>
                                </div>
                            </div>                        
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="rs-free-contact">
                    <div class="sec-title3">
                        <h2 class="title white-color">Kirim Pesan Anda</h2>
                        <p class="text-light">Silahkan masukan data diri Anda dengan baik dan benar. Di bagian kolom rincian, mohon agar merincikan pesan Anda dengan baik dan jelas.</p>
                    </div>
                    
                    @include('visitor.sections.form-kontak')
                    <!-- Link Form Kontak --> 

                </div>
            </div>
        </div>
    </div>
    
</div>