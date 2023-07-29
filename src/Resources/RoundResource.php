<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class RoundResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/rounds'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/rounds/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array
    {
        return $this->get(
            url: "football/rounds/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/rounds/search/{$search}"
        );
    }
}
