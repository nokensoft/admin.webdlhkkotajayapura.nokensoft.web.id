<?php

namespace App\Providers;

use App\Models\Halaman;
use App\Models\Pengaturan;
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


        Paginator::useBootstrap();

        $data = Pengaturan::first();
        $halaman = Halaman::get();
        view()->share([
            'pengaturan' => $data,
            'halaman' => $halaman
        ]);
    }
}
