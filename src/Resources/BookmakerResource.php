<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class BookmakerResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'odds/bookmakers'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "odds/bookmakers/{$id}"
        );
    }

    public function search(string $name): array|Collection|Response
    {
        return $this->get(
            url: "odds/bookmakers/search/{$name}"
        );
    }

    public function byFixtureId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "odds/bookmakers/fixtures/{$id}"
        );
    }
}
