<?php

namespace App\Providers;

// MODELS
use App\Models\Pengaturan;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Program;

use App\Models\Banner;
use App\Models\Faq;
use App\Models\Halaman;
use App\Models\LayananOnline;
use App\Models\LinkTerkait;
use App\Models\Berita\Berita;
use App\Models\Berita\KategoriBerita;
use App\Models\InformasiLingkungan;
use App\Models\Pesan;
use App\Models\VisitorCounter;
// use App\Models\Pesan;


use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

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
        // if (App::environment('production')) {
        //     URL::forceScheme('https');
        // } elseif(App::environment('local')){
        //     URL::forceScheme('http');
        // }

        if(config('app.env') === 'production') {
            URL::forceScheme('https');
        }
        

        view()->share([

            // pengaturan
            // 'pengaturan'                        => Pengaturan::first(),

        ]);

    }

}
