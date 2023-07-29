<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class RegionResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'core/regions'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "core/regions/{$id}"
        );
    }

    public function search(string $name): array
    {
        return $this->get(
            url: "core/regions/search/{$name}"
        );
    }
}
