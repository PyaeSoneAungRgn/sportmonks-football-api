<?php

namespace PyaeSoneAung\SportmonksFootballApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi
 */
class SportmonksFootballApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi::class;
    }
}
