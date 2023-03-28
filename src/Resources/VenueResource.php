<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class VenueResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'venues'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "venues/{$id}"
        );
    }

    public function bySeasonId(int|string $id): \stdClass
    {
        return $this->get(
            url: "venues/seasons/{$id}"
        );
    }

    public function searchByName(string $search): \stdClass
    {
        return $this->get(
            url: "venues/search/{$search}"
        );
    }
}
