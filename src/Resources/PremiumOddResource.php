<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class PremiumOddResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/odds/premium'
        );
    }

    public function byFixtureId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/odds/premium/fixtures/{$id}"
        );
    }

    public function byFixtureIdAndBookmakerId(int|string $fixtureId, int|string $bookmakerId): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/odds/premium/fixtures/{$fixtureId}/bookmakers/{$bookmakerId}"
        );
    }

    public function byFixtureIdAndMarketId(int|string $fixtureId, int|string $marketId): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/odds/premium/fixtures/{$fixtureId}/markets/{$marketId}"
        );
    }

    public function updatedBetweenTimeRange(int|string $from, int|string $to): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/odds/premium/updated/between/{$from}/{$to}"
        );
    }

    public function historicalUpdatedBetweenTimeRange(int|string $from, int|string $to): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/odds/premium/history/updated/between/{$from}/{$to}"
        );
    }

    public function allHistorical(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/odds/premium/history'
        );
    }
}
