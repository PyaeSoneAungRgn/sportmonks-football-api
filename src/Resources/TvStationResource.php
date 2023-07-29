<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TvStationResource extends BaseResource
{
    // need test all endpoint
    public function all(): array
    {
        return $this->get(
            url: 'football/tv-stations'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/tv-stations/{$id}"
        );
    }

    public function byFixtureId(int|string $id): array
    {
        return $this->get(
            url: "football/tv-stations/fixtures/{$id}"
        );
    }
}
