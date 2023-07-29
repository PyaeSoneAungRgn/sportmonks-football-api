<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class ContinentResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'core/continents'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "core/continents/{$id}"
        );
    }
}
