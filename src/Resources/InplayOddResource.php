<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class InplayOddResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'odds/inplay'
        );
    }

    public function byFixtureId(int|string $id): \stdClass
    {
        return $this->get(
            url: "odds/inplay/fixtures/{$id}"
        );
    }

    public function byFixtureIdAndBookmakerId(int|string $fixtureId, int|string $bookmakerId): \stdClass
    {
        return $this->get(
            url: "odds/inplay/fixtures/{$fixtureId}/bookmakers/{$bookmakerId}"
        );
    }

    public function byFixtureIdAndMarketId(int|string $fixtureId, int|string $marketId): \stdClass
    {
        return $this->get(
            url: "odds/inplay/fixtures/{$fixtureId}/markets/{$marketId}"
        );
    }

    public function lastUpdated(): \stdClass
    {
        return $this->get(
            url: 'odds/inplay/latest'
        );
    }
}
