<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AdminServices;
use App\Services\Imp\ImplAdmin;

class AdminProvider extends ServiceProvider
{
    // public array $singletons = [AdminServices::class => ImplAdmin::class];

    public function provides():array
    {
        return [AdminServices::class];
    }

    public function register()
    {
        $this->app->singleton(AdminServices::class,ImplAdmin::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
