<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;
use Meema\LaravelMeema\Models\Folder;

class MeemaFolder extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Folder::class;
    }
}
