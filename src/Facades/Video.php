<?php

namespace Meema\LaravelMeema\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static function thumbnails($value)
 * @method static function hls($value)
 * @method static function dash($value)
 * @method static function poster($value)
 * @method static function webvtt($value)
 * @method static function format($value)
 * @method static function webOptimized($value)
 *
 * @see \Meema\MeemaClient\Functions\Video
 */
class Video extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'meema-video';
    }
}
