<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class StageResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/stages'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/stages/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/stages/seasons/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response
    {
        return $this->get(
            url: "football/stages/search/{$search}"
        );
    }
}
