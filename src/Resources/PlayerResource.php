<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class PlayerResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'players'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "players/{$id}"
        );
    }

    public function byCountryId(int|string $id): array
    {
        return $this->get(
            url: "players/countries/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "players/search/{$search}"
        );
    }

    public function lastUpdated(): array
    {
        return $this->get(
            url: 'players/latest/'
        );
    }
}
