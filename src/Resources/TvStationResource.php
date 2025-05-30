<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class TvStationResource extends BaseResource
{
    // need test all endpoint
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/tv-stations'
        );
    }

    public function byId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/tv-stations/{$id}"
        );
    }

    public function byFixtureId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/tv-stations/fixtures/{$id}"
        );
    }
}
