<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class MarketResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'odds/markets'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "odds/markets/{$id}"
        );
    }

    public function search(string $name): array|Collection|Response
    {
        return $this->get(
            url: "odds/markets/search/{$name}"
        );
    }
}
