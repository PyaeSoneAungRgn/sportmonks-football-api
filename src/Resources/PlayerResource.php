<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class PlayerResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/players'
        );
    }

    public function byId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/players/{$id}"
        );
    }

    public function byCountryId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/players/countries/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/players/search/{$search}"
        );
    }

    public function lastUpdated(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/players/latest/'
        );
    }
}
