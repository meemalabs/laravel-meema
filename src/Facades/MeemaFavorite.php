<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;
use Meema\LaravelMeema\Models\Favorite;

class MeemaFavorite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Favorite::class;
    }
}
