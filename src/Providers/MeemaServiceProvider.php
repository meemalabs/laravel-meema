<?php

namespace Meema\LaravelMeema\Providers;

use Illuminate\Support\ServiceProvider;
use Meema\MeemaApi\Client;

class MeemaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('meema.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->registerMeemaClient();

        $this->app->bind('meema-media', function ($app) {
            return $app['meema']->media();
        });

        $this->app->bind('meema-folder', function ($app) {
            return $app['meema']->folders();
        });

        $this->app->bind('meema-tag', function ($app) {
            return $app['meema']->tags();
        });

        $this->app->bind('meema-favorite', function ($app) {
            return $app['meema']->favorites();
        });

        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'meema');
    }

    /**
     * Registers the Meema SDK Client.
     *
     * @return void
     */
    protected function registerMeemaClient()
    {
        $this->app->singleton('meema', function ($app) {
            $config = ['base_url' => config('meema.meema_test_url')];

            return new Client(config('meema.api_key'), $config);
        });
    }
}
