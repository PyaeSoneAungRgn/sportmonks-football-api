<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class RegionResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'core/regions'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "core/regions/{$id}"
        );
    }

    public function search(string $name): array|Collection|Response
    {
        return $this->get(
            url: "core/regions/search/{$name}"
        );
    }
}
