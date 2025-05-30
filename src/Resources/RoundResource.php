<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class RoundResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/rounds'
        );
    }

    public function byId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/rounds/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/rounds/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/rounds/search/{$search}"
        );
    }
}
