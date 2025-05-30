<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class SeasonResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/seasons'
        );
    }

    public function byId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/seasons/search/{$search}"
        );
    }
}
