<div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70" style="background-image: url(assets/images/banner/home12/banner-home12.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 padding-0 col-md-12 md-mb-40">
                <div>
                    <img src="{{ asset('gambar/ilustrasi/3.png') }}" alt="gambar ilustrasi">
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