<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class ContinentResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'core/continents'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "core/continents/{$id}"
        );
    }
}
