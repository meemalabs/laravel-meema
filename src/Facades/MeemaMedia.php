<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;
use Meema\LaravelMeema\Contracts\MediaInterface;

class MeemaMedia extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return MediaInterface::class;
    }
}
