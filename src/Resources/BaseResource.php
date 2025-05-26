<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
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

    protected function get(string $url): array|Collection|Response
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: $url,
            query: $this->query
        );

        if (config('sportmonks-football-api.return_type') == 'collection') {
            return $response->collect();
        }

        if (config('sportmonks-football-api.return_type') == 'response') {
            return $response;
        }

        return $response->json();
    }
}
