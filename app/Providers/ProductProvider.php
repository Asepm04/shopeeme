<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AdminServices;
use App\Services\Imp\ImplAdmin;
use App\Services\ProductServices;
use App\Services\Imp\ImpProductServices;


class ProductProvider extends ServiceProvider
{
    // public array $singletons = [AdminServices::class => ImplAdmin::class];

    public function provides():array
    {
        return [ProductServices::class];
    }

    public function register()
    {
        $this->app->singleton(ProductServices::class,ImpProductServices::class);
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
