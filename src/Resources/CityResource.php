<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class CityResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'core/cities'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "core/cities/{$id}"
        );
    }

    public function search(string $name): array
    {
        return $this->get(
            url: "core/cities/search/{$name}"
        );
    }
}
