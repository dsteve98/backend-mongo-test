<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\services\MobilService;
use App\repositories\MobilRepository;
use App\Models\Mobil;
use App\services\MotorService;
use App\repositories\MotorRepository;
use App\Models\Motor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\repositories\MobilRepository',function($app){
            return new MobilRepository(new Mobil());
        });
        $this->app->bind('App\repositories\MotorRepository',function($app){
            return new MotorRepository(new Motor());
        });

        $this->app->bind('App\services\MobilService',function ($app){
            return new MobilService($app->make('App\repositories\MobilRepository'));
        });
        $this->app->bind('App\services\MotorService',function ($app){
            return new MotorService($app->make('App\repositories\MotorRepository'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
