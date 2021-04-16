<?php

namespace Meema\LaravelMeema\Tests;

use Illuminate\Support\Facades\Config;
use Meema\LaravelMeema\Providers\MeemaServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelMeemaTestCase extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [MeemaServiceProvider::class];
    }

    public function initializeDotEnv()
    {
        if (! file_exists(__DIR__.'/../.env')) {
            return;
        }

        $dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
    }

    public function initializeSettings()
    {
        // let's make sure these config values are set
        Config::set('meema.api_key', env('MEEMA_API_KEY'));
        Config::set('meema.meema_test_url', env('BASE_URL_TEST'));
    }
}
