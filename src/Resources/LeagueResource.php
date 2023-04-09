<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class LeagueResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'leagues'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "leagues/{$id}"
        );
    }

    public function byLive(): array
    {
        return $this->get(
            url: 'leagues/live'
        );
    }

    public function byFixtureDate(string $date): array
    {
        return $this->get(
            url: "leagues/date/{$date}"
        );
    }

    public function byCountryId(int|string $id): array
    {
        return $this->get(
            url: "leagues/countries/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "leagues/search/{$search}"
        );
    }

    public function allLeaguesByTeamId(int|string $id): array
    {
        return $this->get(
            url: "leagues/teams/{$id}"
        );
    }

    public function currentLeaguesByTeamId(int|string $id): array
    {
        return $this->get(
            url: "leagues/teams/{$id}/current"
        );
    }
}
