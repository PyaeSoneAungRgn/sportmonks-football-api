<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class FixtureResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/fixtures'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/fixtures/{$id}"
        );
    }

    public function byMultipleIds(array $ids): array
    {
        $ids = implode(',', $ids);

        return $this->get(
            url: "football/fixtures/multi/{$ids}"
        );
    }

    public function byDate(string $date): array
    {
        return $this->get(
            url: "football/fixtures/date/{$date}"
        );
    }

    public function byDateRange(string $startDate, string $endDate): array
    {
        return $this->get(
            url: "football/fixtures/between/{$startDate}/{$endDate}"
        );
    }

    public function byDateRangeForTeam(string $startDate, string $endDate, int|string $teamId): array
    {
        return $this->get(
            url: "football/fixtures/between/{$startDate}/{$endDate}/{$teamId}"
        );
    }

    public function byHeadToHead(int|string $teamA, int|string $teamB): array
    {
        return $this->get(
            url: "football/fixtures/head-to-head/{$teamA}/{$teamB}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/fixtures/search/{$search}"
        );
    }

    public function upcomingByMarketId(int|string $id): array
    {
        return $this->get(
            url: "football/fixtures/upcoming/markets/{$id}"
        );
    }

    public function lastUpdated(): array
    {
        return $this->get(
            url: 'football/fixtures/latest'
        );
    }
}
