@extends('dasbor.layout.app')
@section('content')
    <!-- start page content wrapper-->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            <a href="javascript: void(0);">Dasbor {{ implode('',Auth::user()->roles()->pluck('display_name')->toArray()) }}</a>
                            <li class="breadcrumb-item active">Akun Saya</li>
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">Profil {{ Auth::user()->name }} </h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card-box text-center">
                @if (!auth()->user()->picture)
                <img src="{{asset('gambar/pengguna/00.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                alt="profile-image" id="preview-picture">
                @else
                <img src="{{asset('gambar/pengguna')}}/{{auth()->user()->picture}}" alt="allal"
                class="rounded-circle avatar-lg img-thumbnail">
                @endif
                <h4 class="mb-0"> {{ auth()->user()->name }} </h4>
                <p class="text-muted">{{ auth()->user()->email }}</p>
            </div> <!-- end card-box -->



        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
            <div class="card-box">
                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#aboutme" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Pengaturan
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="aboutme">

                        <form action="{{ route('dasbor.akunsaya.update',['id' => auth()->user()->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-edit mr-1"></i>Edit Profil</h5>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name',auth()->user()->name) }}"
                                        placeholder="Masukan Nama Anda" required>
                                        @if ($errors->has('name'))
                                            <span class="text-danger" role="alert">
                                                <small>{{ $errors->first('name') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname">Email</label>
                                        <input type="email" class="form-control" name="email"  value="{{ old('email',auth()->user()->email) }}"
                                        placeholder="Masukan Email Anda" required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger" role="alert">
                                                <small>{{ $errors->first('email') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="pic">Foto Profil</label>
                                    @if ($errors->has('picture'))
                                        <span class="text-danger" role="alert">
                                            <small>{{ $errors->first('picture') }}</small>
                                        </span>
                                    @endif
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="picture" id="picture">
                                            <label class="custom-file-label" for="picture">Pilih Foto Profil</label>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->

                            <div class="text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2">
                                    <i class="mdi mdi-content-save"></i> Simpan
                                </button>
                            </div>
                        </form>

                    </div> <!-- end tab-pane -->

                    <div class="tab-pane" id="settings">
                        <form action="{{ route('dasbor.akunsaya.changePassword') }}" method="POST">
                            @csrf
                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-lock mr-1"></i>Ganti kata sandi</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password">Kata sandi lama</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="form-control" name="current_passsowrd" placeholder="Enter" required>
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                        @if ($errors->has('current_passsowrd'))
                                            <span class="text-danger" role="alert">
                                                <small>{{ $errors->first('current_passsowrd') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div> <!-- end row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userpassword">Kata sandi baru</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="form-control" name="password" placeholder="Enter" required>
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                            @if ($errors->has('password'))
                                                <span class="text-danger" role="alert">
                                                    <small>{{ $errors->first('password') }}</small>
                                                </span>
                                            @endif
                                        <span class="form-text text-muted"><small>Kata Sandi minimal 8 Karakter</small></span>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userpassword">Konfirmasi Kata sandi baru</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter" required>
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger" role="alert">
                                                <small>{{ $errors->first('password_confirmation') }}</small>
                                            </span>
                                        @endif
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- end settings content-->

                </div> <!-- end tab-content -->
            </div> <!-- end card-box-->

        </div> <!-- end col -->
    </div>
  <!--end wrapper-->

  @stop

  @push('script-footer')
  <script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function (e) {
       $('#picture').change(function(){
        let reader = new FileReader();
        reader.onload = (e) => {
          $('#preview-picture').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
       });

    });
</script>
 @endpush
