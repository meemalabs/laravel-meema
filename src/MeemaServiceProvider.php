<?php

namespace Meema\LaravelMeema;

use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Meema\FlysystemMeema\MeemaAdapter;
use Storage;

class MeemaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Storage::extend('meema', function ($app, $config) {
            return new Filesystem(new MeemaAdapter($config));
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
