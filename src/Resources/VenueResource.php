<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class VenueResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/venues'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/venues/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array
    {
        return $this->get(
            url: "football/venues/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/venues/search/{$search}"
        );
    }
}
