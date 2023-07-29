<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TeamResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/teams'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/teams/{$id}"
        );
    }

    public function byCountryId(int|string $id): array
    {
        return $this->get(
            url: "football/teams/countries/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array
    {
        return $this->get(
            url: "football/teams/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/teams/search/{$search}"
        );
    }
}
