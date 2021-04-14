<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static function request($method, $path, $data = null)
 * @method static function getAccessKey()
 * @method static function folders()
 * @method static function media()
 * @method static function tags()
 * @method static function favorites()
 *
 * @see \Meema\MeemaApi\Client
 */
class Meema extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'meema';
    }
}
