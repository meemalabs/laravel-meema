<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static function all()
 * @method static function get($ids = null)
 * @method static function find($id)
 * @method static function update($id, $name)
 * @method static function delete($ids)
 * @method static media($id = null)
 * @method static folders($id = null)
 * @method static function getId()
 *
 * @see \Meema\MeemaApi\Models\Tag
 */
class Tag extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'meema-tag';
    }
}
