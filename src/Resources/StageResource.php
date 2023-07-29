<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class StageResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/stages'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/stages/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array
    {
        return $this->get(
            url: "football/stages/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/stages/search/{$search}"
        );
    }
}
