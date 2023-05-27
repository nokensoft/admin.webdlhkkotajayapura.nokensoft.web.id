

<form  method="post" action="{{ route('app.pesan.store') }}">
    @csrf
    <div class="row">
        <div class="col-lg-6 mb-30 col-md-12">
            <input class="from-control" type="text"  name="nama" placeholder="Nama Lengkap">
                @error('nama')
                <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
            @enderror
        </div>
        <div class="col-lg-6 mb-30 col-md-12">
            <input class="from-control" type="email" name="email" placeholder="Alamat Email" >
                @error('email')
                    <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
                 @enderror
        </div>
        <div class="col-lg-6 mb-30 col-md-12">
            <input class="from-control" type="text" name="no_telf" placeholder="Nomor HP/WA" >
                @error('no_telf')
                    <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
                 @enderror
        </div>
        <div class="col-lg-6 mb-30 col-md-12">
            <input class="from-control" type="text"  name="judul_topik" placeholder="Judul Topik" >
                @error('judul_topik')
                    <p class="form-text text-white text-xs mt-1"><small>{{$message}}</small></p>
                 @enderror
        </div>

        <div class="col-lg-12 mb-35">
            <textarea class="from-control"  name="keterangan" placeholder="Isi rincian pertanyaan Anda di sini..." ></textarea>
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
