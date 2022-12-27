<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class InplayOddResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'odds/inplay'
        );
    }

    public function byFixtureId(int|string $id): array
    {
        return $this->get(
            url: "odds/inplay/fixtures/{$id}"
        );
    }

    public function byFixtureIdAndBookmakerId(int|string $fixtureId, int|string $bookmakerId): array
    {
        return $this->get(
            url: "odds/inplay/fixtures/{$fixtureId}/bookmakers/{$bookmakerId}"
        );
    }

    public function byFixtureIdAndMarketId(int|string $fixtureId, int|string $marketId): array
    {
        return $this->get(
            url: "odds/inplay/fixtures/{$fixtureId}/markets/{$marketId}"
        );
    }

    public function lastUpdated(): array
    {
        return $this->get(
            url: 'odds/inplay/latest'
        );
    }
}
