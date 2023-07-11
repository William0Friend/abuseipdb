<?php

namespace William0friend\AbuseipdbPhp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \William0friend\AbuseipdbPhp\Skeleton\SkeletonClass
 */
class AbuseipdbPhpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'abuseipdb-php';
    }
}
