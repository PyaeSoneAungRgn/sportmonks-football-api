<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class VenueResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/venues'
        );
    }

    public function byId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/venues/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/venues/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/venues/search/{$search}"
        );
    }
}
