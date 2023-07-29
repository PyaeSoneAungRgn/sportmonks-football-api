<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class CountryResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'core/countries'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "core/countries/{$id}"
        );
    }

    public function search(string $name): array
    {
        return $this->get(
            url: "core/countries/search/{$name}"
        );
    }
}
