<?php

namespace Kevinkoenen\NovaShopper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kevinkoenen\NovaShopper\Skeleton\SkeletonClass
 */
class NovaShopperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nova-shopper';
    }
}
