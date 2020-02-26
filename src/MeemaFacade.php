<?php

namespace Meema\LaravelMeema;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Meema\LaravelMeema\MeemaClass
 */
class MeemaFacade extends Facade
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
