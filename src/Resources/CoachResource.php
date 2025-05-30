<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class CoachResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/coaches'
        );
    }

    public function byId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/coaches/{$id}"
        );
    }

    public function byCountryId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/coaches/countries/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/coaches/search/{$search}"
        );
    }

    public function lastUpdated(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/coaches/latest'
        );
    }
}
