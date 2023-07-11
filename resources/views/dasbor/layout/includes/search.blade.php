<form action="{{ url('dasbor', Request::segment(2)) }}" method="get">
    <div class="input-group mb-3">
        <input type="search" name="s" value="{{ old('s') ?? request()->s }}" class="form-control" placeholder="Ketik kata kunci yang Anda inginkan di sini">
        <button type="submit" class="btn btn-primary waves-effect waves-light">
            <i class="fa-solid fa-search"></i>
            Cari
        </button>
    </div>
</form>