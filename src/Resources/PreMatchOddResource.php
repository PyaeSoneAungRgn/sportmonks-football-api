<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class PreMatchOddResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/odds/pre-match'
        );
    }

    public function byFixtureId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/odds/pre-match/fixtures/{$id}"
        );
    }

    public function byFixtureIdAndBookmakerId(int|string $fixtureId, int|string $bookmakerId): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/odds/pre-match/fixtures/{$fixtureId}/bookmakers/{$bookmakerId}"
        );
    }

    public function byFixtureIdAndMarketId(int|string $fixtureId, int|string $marketId): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/odds/pre-match/fixtures/{$fixtureId}/markets/{$marketId}"
        );
    }

    public function lastUpdated(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/odds/pre-match/latest'
        );
    }
}
