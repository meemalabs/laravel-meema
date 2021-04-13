<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;
use Meema\LaravelMeema\Contracts\FavoriteInterface;

class MeemaFavorite extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return FavoriteInterface::class;
    }
}
