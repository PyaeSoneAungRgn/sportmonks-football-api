<?php

namespace PyaeSoneAung\SportmonksFootballApi;

use PyaeSoneAung\SportmonksFootballApi\Concerns\BuildClient;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSendGetRequest;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSetFilter;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSetInclude;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSetPage;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSetSelect;
use PyaeSoneAung\SportmonksFootballApi\Resources\FixtureResource;

class SportmonksFootballApi
{
    use BuildClient,
        CanSendGetRequest,
        CanSetSelect,
        CanSetInclude,
        CanSetFilter,
        CanSetPage;

    private $query = [];

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $apiToken,
        private readonly string $timezone,
    ) {
        $this->query['api_token'] = $this->apiToken;
        $this->query['timezone'] = $this->timezone;
    }

    public function fixture(): FixtureResource
    {
        return new FixtureResource(
            service: $this,
        );
    }
}
