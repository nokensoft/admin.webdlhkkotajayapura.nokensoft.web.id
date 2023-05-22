<?php

namespace App\Providers;

// MODELS
use App\Models\Banner;
use App\Models\Faq;
use App\Models\Halaman;
use App\Models\LayananOnline;
use App\Models\LinkTerkait;
use App\Models\Pengaturan;
// use App\Models\Pesan;
use App\Models\Berita\Berita;
use App\Models\Berita\KategoriBerita;
use App\Models\InformasiLingkungan;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (App::environment('production')) {
            URL::forceScheme('https');
        } elseif(App::environment('local')){
            URL::forceScheme('http');
        }

        // PAGINATORS
        Paginator::useBootstrap();
        // Paginator::useBootstrapFive();
        // Paginator::defaultView('view-name');

        view()->share([
            'pengaturan'                        => Pengaturan::first(),
            'faq'                               => Faq::where('status','Publish')->get(),
            'banner'                            => Banner::where('status','Publish')->first(),

            // Jumlah Data
            'dasbor_jml_berita'                 => Berita::where('status','Publish')->count(),
            'dasbor_jml_kategori'               => KategoriBerita::where('status','Publish')->count(),
            'dasbor_jml_layanan_online'         => LayananOnline::where('status','Publish')->count(),
            'dasbor_jml_informasi_lingkungan'   => InformasiLingkungan::where('status','Publish')->count(),
            'dasbor_jml_link_terkait'           => LinkTerkait::where('status','Publish')->count(),
            // 'dasbor_jml_pesan'               => Pesan::where('status','Publish')->count(),
            'dasbor_jml_halaman'                => Halaman::where('status','Publish')->count(),
        ]);
    }
    
}
