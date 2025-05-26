<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class LeagueResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/leagues'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/leagues/{$id}"
        );
    }

    public function byLive(): array|Collection|Response
    {
        return $this->get(
            url: 'football/leagues/live'
        );
    }

    public function byFixtureDate(string $date): array|Collection|Response
    {
        return $this->get(
            url: "football/leagues/date/{$date}"
        );
    }

    public function byCountryId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/leagues/countries/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response
    {
        return $this->get(
            url: "football/leagues/search/{$search}"
        );
    }

    public function allLeaguesByTeamId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/leagues/teams/{$id}"
        );
    }

    public function currentLeaguesByTeamId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/leagues/teams/{$id}/current"
        );
    }
}
