<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;
use Meema\LaravelMeema\Models\Media;

class MeemaMedia extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Media::class;
    }
}
