<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Faq;
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

        view()->share([
            'pengaturan'    => Pengaturan::first(),
            'faq'           => Faq::where('status','Publish')->get(),
            'banner'        => Banner::where('status','Publish')->first(),
        ]);
    }
    
}
