<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class TeamResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/teams'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/teams/{$id}"
        );
    }

    public function byCountryId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/teams/countries/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/teams/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response
    {
        return $this->get(
            url: "football/teams/search/{$search}"
        );
    }
}
