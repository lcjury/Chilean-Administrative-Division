<?php

namespace Lcjury\Administrative;

use Illuminate\Support\ServiceProvider;
#use Administrative\Console\MakeAdministrativeCommand;

class AdministrativeServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.make.administrative', function($app) {
            return new MakeAdministrativeCommand;
        });
    }

    /**
     * Get the services provided by the provider.
     * 
     * @return array
     */
    public function provides()
    {
        dd(2);
        return ['MakeAdministrative' => 'command.make.administrative'];
    }
}
