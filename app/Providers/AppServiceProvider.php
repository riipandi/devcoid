<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->loadHelpers();

        // Laravel Passport custom migration.
        Passport::ignoreMigrations();

        // Laravel Telescope local environemnt only.
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    // protected function loadHelpers()
    // {
    //     foreach (glob(__DIR__.'/../Helpers/*.php') as $filename) {
    //         require_once $filename;
    //     }
    // }
}
