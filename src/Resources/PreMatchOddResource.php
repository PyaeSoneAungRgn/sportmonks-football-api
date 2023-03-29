<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class PreMatchOddResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'odds/pre-match'
        );
    }

    public function byFixtureId(int|string $id): \stdClass
    {
        return $this->get(
            url: "odds/pre-match/fixtures/{$id}"
        );
    }

    public function byFixtureIdAndBookmakerId(int|string $fixtureId, int|string $bookmakerId): \stdClass
    {
        return $this->get(
            url: "odds/pre-match/fixtures/{$fixtureId}/bookmakers/{$bookmakerId}"
        );
    }

    public function byFixtureIdAndMarketId(int|string $fixtureId, int|string $marketId): \stdClass
    {
        return $this->get(
            url: "odds/pre-match/fixtures/{$fixtureId}/markets/{$marketId}"
        );
    }

    public function lastUpdated(): \stdClass
    {
        return $this->get(
            url: 'odds/pre-match/latest'
        );
    }
}
