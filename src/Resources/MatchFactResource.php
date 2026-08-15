<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class MatchFactResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/match-facts'
        );
    }

    public function byFixtureId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/match-facts/{$id}"
        );
    }

    public function byDateRange(string $startDate, string $endDate): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/match-facts/fixtures/between/{$startDate}/{$endDate}"
        );
    }

    public function byLeagueId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/match-facts/leagues/{$id}"
        );
    }
}
