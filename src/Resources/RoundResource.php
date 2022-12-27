<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class RoundResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'rounds'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "rounds/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array
    {
        return $this->get(
            url: "rounds/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "rounds/search/{$search}"
        );
    }
}
