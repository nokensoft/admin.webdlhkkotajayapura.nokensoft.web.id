<form  method="post" action="{{ route('visitor.pesan.store') }}">
    @csrf

    <div class="row">
        <div class="col-lg-6 mb-30 col-md-12">
            <input class="from-control" type="text"  name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" required>
            @error('nama') <p class="form-text text-warning text-xs mt-1"><small>{{$message}}</small></p> @enderror
        </div>
        <!-- input item end -->

        <div class="col-lg-6 mb-30 col-md-12">
            <input class="from-control" type="email" name="email" placeholder="Alamat Email" value="{{ old('email') }}"  required>
                @error('email') <p class="form-text text-warning text-xs mt-1"><small>{{$message}}</small></p> @enderror
        </div>
        <!-- input item end -->

        <div class="col-lg-6 mb-30 col-md-12">
            <input class="from-control" type="text" name="no_telf" placeholder="Nomor HP/WA" value="{{ old('no_telf') }}" required>
                @error('no_telf') <p class="form-text text-warning text-xs mt-1"><small>{{$message}}</small></p> @enderror
        </div>
        <!-- input item end -->

        <div class="col-lg-6 mb-30 col-md-12">
            <input class="from-control" type="text"  name="judul_topik" placeholder="Judul Pesan" value="{{ old('judul_topik') }}" required>
                @error('judul_topik') <p class="form-text text-warning text-xs mt-1"><small>{{$message}}</small></p> @enderror
        </div>
        <!-- input item end -->

        <div class="col-lg-12 mb-35">
            <textarea class="from-control"  name="keterangan" placeholder="Isi rincian pesan Anda di sini..." >{{ old('keterangan') }}</textarea>
                @error('keterangan') <p class="form-text text-warning text-xs mt-1"><small>{{$message}}</small></p> @enderror
        </div>
        <!-- input item end -->

        <div class="col-lg-6 mb-30 col-md-12">
            <div class="captcha">
                <span>{!! captcha_img('flat') !!}</span>
            </div>
        </div>

        <div class="col-lg-12 mb-30 col-md-12">
            <input class="from-control" type="text" id="captcha" name="captcha" placeholder="Masukan Captcha" required>
            @error('captcha') <p class="form-text text-warning text-xs mt-1"><small>{{$message}}</small></p> @enderror
        </div>
         <!-- input item end -->
    </div>
    <!-- row end -->

    <div class="form-btn">
        <button type="submit" class="readon submit-requset w-100 btn-lg py-4">
            <i class="fa-solid fa-paper-plane me-2"></i> Kirim Sekarang
        </button>
    </div>
    <!-- form btn end -->

</form>

@push('script-footer')

<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>

@endpush
