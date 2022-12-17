<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class FixtureResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'fixtures'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "fixtures/{$id}"
        );
    }

    public function byMultipleIds(array $ids): array
    {
        $ids = implode(',', $ids);

        return $this->get(
            url: "fixtures/multi/{$ids}"
        );
    }

    public function byDate(string $date): array
    {
        return $this->get(
            url: "fixtures/date/{$date}"
        );
    }

    public function byDateRange(string $startDate, string $endDate): array
    {
        return $this->get(
            url: "fixtures/between/{$startDate}/{$endDate}"
        );
    }

    public function byDateRangeForTeam(string $startDate, string $endDate, int|string $teamId): array
    {
        return $this->get(
            url: "fixtures/between/{$startDate}/{$endDate}/{$teamId}"
        );
    }

    public function byHeadToHead(int|string $teamA, int|string $teamB): array
    {
        return $this->get(
            url: "fixtures/head-to-head/{$teamA}/{$teamB}"
        );
    }

    public function bySearchByName(string $search): array
    {
        return $this->get(
            url: "fixtures/search/{$search}"
        );
    }

    public function upcomingByMarketId(int|string $marketId): array
    {
        return $this->get(
            url: "fixtures/upcoming/markets/{$marketId}"
        );
    }
}
