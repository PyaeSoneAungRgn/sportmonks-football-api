<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanOrder;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetFilter;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetInclude;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetPage;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetSelect;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\WithQuery;
use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;

class BaseResource
{
    use CanOrder, CanSetFilter, CanSetInclude, CanSetPage, CanSetSelect, WithQuery;

    protected $query = [];

    public function __construct(
        protected readonly SportmonksFootballApi $service,
    ) {}

    protected function get(string $url): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: $url,
            query: $this->query
        );

        return json_decode((string) $response->getBody(), true);
    }
}
