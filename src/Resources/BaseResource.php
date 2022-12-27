<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSetFilter;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSetInclude;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSetPage;
use PyaeSoneAung\SportmonksFootballApi\Concerns\CanSetSelect;
use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;

class BaseResource
{
    use CanSetSelect, CanSetInclude, CanSetFilter, CanSetPage;

    protected $query = [];

    public function __construct(
        protected readonly SportmonksFootballApi $service,
    ) {
    }

    protected function get(string $url): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: $url,
            query: $this->query
        );

        return json_decode($response->getBody()->getContents(), true);
    }
}
