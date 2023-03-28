<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TeamResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'teams'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "teams/{$id}"
        );
    }

    public function byCountryId(int|string $id): \stdClass
    {
        return $this->get(
            url: "teams/countries/{$id}"
        );
    }

    public function bySeasonId(int|string $id): \stdClass
    {
        return $this->get(
            url: "teams/seasons/{$id}"
        );
    }

    public function searchByName(string $search): \stdClass
    {
        return $this->get(
            url: "teams/search/{$search}"
        );
    }
}
