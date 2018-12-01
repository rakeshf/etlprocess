<?php

namespace Aspiration\Etlprocess;

use Illuminate\Support\ServiceProvider;
use Aspiration\Etlprocess\Console\Commands\FooBar as FooBar;
use Aspiration\Etlprocess\Console\Commands\datasync as Datasync;


class EtlprocessServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'etlprocess');
        if ($this->app->runningInConsole()) {
            $this->commands([
                FooBar::class,
                Datasync::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Aspiration\Etlprocess\EmployeeController');
    }
}
