<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanOrder;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetFilter;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetInclude;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetPage;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetPerPage;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetSelect;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\CanSetSortBy;
use PyaeSoneAung\SportmonksFootballApi\Resources\Concerns\WithQuery;
use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;

class BaseResource
{
    use CanOrder, CanSetFilter, CanSetInclude, CanSetPage, CanSetPerPage, CanSetSelect, CanSetSortBy, WithQuery;

    protected $query = [];

    public function __construct(
        protected readonly SportmonksFootballApi $service,
    ) {}

    protected function get(string $url): array|Collection|Response|ResponseDto
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

        if (config('sportmonks-football-api.return_type') == 'dto') {
            return new ResponseDto($response);
        }

        return $response->json();
    }
}
