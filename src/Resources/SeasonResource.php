<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class SeasonResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/seasons'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/seasons/search/{$search}"
        );
    }
}
