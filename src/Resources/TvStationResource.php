<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TvStationResource extends BaseResource
{
    // need test all endpoint
    public function all(): \stdClass
    {
        return $this->get(
            url: 'tv-stations'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "tv-stations/{$id}"
        );
    }

    public function byFixtureId(int|string $id): \stdClass
    {
        return $this->get(
            url: "tv-stations/fixtures/{$id}"
        );
    }
}
