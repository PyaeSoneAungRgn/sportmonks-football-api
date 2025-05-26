<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class FixtureResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/fixtures'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/fixtures/{$id}"
        );
    }

    public function byMultipleIds(array $ids): array|Collection|Response
    {
        $ids = implode(',', $ids);

        return $this->get(
            url: "football/fixtures/multi/{$ids}"
        );
    }

    public function byDate(string $date): array|Collection|Response
    {
        return $this->get(
            url: "football/fixtures/date/{$date}"
        );
    }

    public function byDateRange(string $startDate, string $endDate): array|Collection|Response
    {
        return $this->get(
            url: "football/fixtures/between/{$startDate}/{$endDate}"
        );
    }

    public function byDateRangeForTeam(string $startDate, string $endDate, int|string $teamId): array|Collection|Response
    {
        return $this->get(
            url: "football/fixtures/between/{$startDate}/{$endDate}/{$teamId}"
        );
    }

    public function byHeadToHead(int|string $teamA, int|string $teamB): array|Collection|Response
    {
        return $this->get(
            url: "football/fixtures/head-to-head/{$teamA}/{$teamB}"
        );
    }

    public function searchByName(string $search): array|Collection|Response
    {
        return $this->get(
            url: "football/fixtures/search/{$search}"
        );
    }

    public function upcomingByMarketId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/fixtures/upcoming/markets/{$id}"
        );
    }

    public function lastUpdated(): array|Collection|Response
    {
        return $this->get(
            url: 'football/fixtures/latest'
        );
    }
}
