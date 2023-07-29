<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class BookmakerResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'odds/bookmakers'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "odds/bookmakers/{$id}"
        );
    }

    public function search(string $name): array
    {
        return $this->get(
            url: "odds/bookmakers/search/{$name}"
        );
    }

    public function byFixtureId(int|string $id): array
    {
        return $this->get(
            url: "odds/bookmakers/fixtures/{$id}"
        );
    }
}
