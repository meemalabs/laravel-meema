<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static function all()
 * @method static function get($ids = null)
 * @method static function search($query)
 * @method static function find($id)
 * @method static function create($name)
 * @method static function update($id, $name)
 * @method static function delete($ids)
 * @method static function archive($ids)
 * @method static function unarchive($ids)
 * @method static function makePublic($ids)
 * @method static function duplicate($ids)
 * @method static function getId()
 * @method static media($id = null)
 * @method static tags($id = null)
 *
 * @see \Meema\MeemaApi\Models\Folder
 */
class Folder extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'meema-folder';
    }
}
