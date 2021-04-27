<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static function w($value)
 * @method static function h($value)
 * @method static function q($value)
 * @method static function blur($value)
 * @method static function nsfw($value)
 * @method static function bg($value)
 * @method static function ar($value)
 * @method static function br($value)
 * @method static function hue($value)
 * @method static function sat($value)
 * @method static function sharp($value)
 * @method static function pad($value)
 * @method static function greyscale($value)
 * @method static function trim($value)
 * @method static function faceindex($value)
 * @method static function fillColor($value)
 * @method static function fill($value)
 * @method static function cs($value)
 * @method static function dpr($value)
 * @method static function extend($value)
 * @method static function extract($value)
 * @method static function crop($value)
 * @method static function maxH($value)
 * @method static function minH($value)
 * @method static function maxW($value)
 * @method static function minW($value)
 * @method static function fit($value)
 * @method static function px($value)
 *
 * @see \Meema\MeemaClient\Functions\Image
 */
class Image extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'meema-image';
    }
}
