<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class CoachResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/coaches'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/coaches/{$id}"
        );
    }

    public function byCountryId(int|string $id): array
    {
        return $this->get(
            url: "football/coaches/countries/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/coaches/search/{$search}"
        );
    }

    public function lastUpdated(): array
    {
        return $this->get(
            url: 'football/coaches/latest'
        );
    }
}
