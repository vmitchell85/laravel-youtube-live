<?php

namespace Vmitchell85\LaravelYoutubeLive;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vmitchell85\LaravelYoutubeLive\Skeleton\SkeletonClass
 */
class LaravelYoutubeLiveFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-youtube-live';
    }
}
