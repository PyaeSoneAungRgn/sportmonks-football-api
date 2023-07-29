<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class MarketResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'odds/markets'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "odds/markets/{$id}"
        );
    }

    public function search(string $name): array
    {
        return $this->get(
            url: "odds/markets/search/{$name}"
        );
    }
}
