<?php

namespace Khalid\CrudPackage;

use Illuminate\Support\ServiceProvider;

class CrudPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/crudpackage.php', 'crudpackage');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'crudpackage');
    }
}