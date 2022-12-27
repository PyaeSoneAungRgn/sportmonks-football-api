<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class PreMatchOddResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'odds/pre-match'
        );
    }

    public function byFixtureId(int|string $id): array
    {
        return $this->get(
            url: "odds/pre-match/fixtures/{$id}"
        );
    }

    public function byFixtureIdAndBookmakerId(int|string $fixtureId, int|string $bookmakerId): array
    {
        return $this->get(
            url: "odds/pre-match/fixtures/{$fixtureId}/bookmakers/{$bookmakerId}"
        );
    }

    public function byFixtureIdAndMarketId(int|string $fixtureId, int|string $marketId): array
    {
        return $this->get(
            url: "odds/pre-match/fixtures/{$fixtureId}/markets/{$marketId}"
        );
    }

    public function lastUpdated(): array
    {
        return $this->get(
            url: 'odds/pre-match/latest'
        );
    }
}
