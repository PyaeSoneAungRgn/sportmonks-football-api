<?php

use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;
use PyaeSoneAung\SportmonksFootballApi\Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

function football()
{
    \Illuminate\Support\Facades\Http::fake();

    return new SportmonksFootballApi(
        'https://api.sportmonks.com/v3/',
        'api-key',
        'UTC',
    );
}
