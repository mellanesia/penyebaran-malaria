<?php

namespace App\Providers;

// MODELS
use App\Models\Pengaturan;
use App\Models\User;
use App\Models\Rw;
use App\Models\Kelurahan;
use App\Models\Distrik;

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

        // pagination
        Paginator::useBootstrap();
        
        if(config('app.env') === 'production') {
            URL::forceScheme('https');
        }        

        view()->share([

            'rw' => Rw::get()->count(),
            'kelurahan' => Kelurahan::get()->count(),
            'distrik' => Distrik::get()->count(),

        ]);

    }

}
