<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class CountryResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'core/countries'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "core/countries/{$id}"
        );
    }

    public function search(string $name): array|Collection|Response
    {
        return $this->get(
            url: "core/countries/search/{$name}"
        );
    }
}
