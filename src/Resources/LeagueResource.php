<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class LeagueResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'leagues'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "leagues/{$id}"
        );
    }

    public function byLive(): \stdClass
    {
        return $this->get(
            url: 'leagues/live'
        );
    }

    public function byFixtureDate(string $date): \stdClass
    {
        return $this->get(
            url: "leagues/fixtures/date/{$date}"
        );
    }

    public function byCountryId(int|string $id): \stdClass
    {
        return $this->get(
            url: "leagues/countries/{$id}"
        );
    }

    public function searchByName(string $search): \stdClass
    {
        return $this->get(
            url: "leagues/search/{$search}"
        );
    }

    public function allLeaguesByTeamId(int|string $id): \stdClass
    {
        return $this->get(
            url: "leagues/teams/{$id}"
        );
    }

    public function currentLeaguesByTeamId(int|string $id): \stdClass
    {
        return $this->get(
            url: "leagues/teams/{$id}/current"
        );
    }
}
