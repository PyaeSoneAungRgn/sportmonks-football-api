<?php

namespace PyaeSoneAung\SportmonksFootballApi;

use PyaeSoneAung\SportmonksFootballApi\Concerns\BuildClient;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSendGetRequest;
use PyaeSoneAung\SportmonksFootballApi\Resources\FixtureResource;

class SportmonksFootballApi
{
    use BuildClient, CanSendGetRequest;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $apiToken,
        private readonly string $timezone,
    ) {
    }

    public function fixture(): FixtureResource
    {
        return new FixtureResource(
            service: $this,
        );
    }
}
