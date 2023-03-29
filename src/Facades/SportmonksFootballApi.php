<?php

namespace IgorLealAntunes\SportmonksFootballApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IgorLealAntunes\SportmonksFootballApi\SportmonksFootballApi
 */
class SportmonksFootballApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \IgorLealAntunes\SportmonksFootballApi\SportmonksFootballApi::class;
    }
}
