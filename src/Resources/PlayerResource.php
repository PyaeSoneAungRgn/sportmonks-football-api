<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class PlayerResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/players'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/players/{$id}"
        );
    }

    public function byCountryId(int|string $id): array
    {
        return $this->get(
            url: "football/players/countries/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/players/search/{$search}"
        );
    }

    public function lastUpdated(): array
    {
        return $this->get(
            url: 'football/players/latest/'
        );
    }
}
