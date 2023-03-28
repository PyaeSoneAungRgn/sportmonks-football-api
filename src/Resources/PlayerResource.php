<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class PlayerResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'players'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "players/{$id}"
        );
    }

    public function byCountryId(int|string $id): \stdClass
    {
        return $this->get(
            url: "players/countries/{$id}"
        );
    }

    public function searchByName(string $search): \stdClass
    {
        return $this->get(
            url: "players/search/{$search}"
        );
    }

    public function lastUpdated(): \stdClass
    {
        return $this->get(
            url: 'players/latest/'
        );
    }
}
