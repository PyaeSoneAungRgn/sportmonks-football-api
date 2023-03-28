<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class FixtureResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'fixtures'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "fixtures/{$id}"
        );
    }

    public function byMultipleIds(array $ids): \stdClass
    {
        $ids = implode(',', $ids);

        return $this->get(
            url: "fixtures/multi/{$ids}"
        );
    }

    public function byDate(string $date): \stdClass
    {
        return $this->get(
            url: "fixtures/date/{$date}"
        );
    }

    public function byDateRange(string $startDate, string $endDate): \stdClass
    {
        return $this->get(
            url: "fixtures/between/{$startDate}/{$endDate}"
        );
    }

    public function byDateRangeForTeam(string $startDate, string $endDate, int|string $teamId): \stdClass
    {
        return $this->get(
            url: "fixtures/between/{$startDate}/{$endDate}/{$teamId}"
        );
    }

    public function byHeadToHead(int|string $teamA, int|string $teamB): \stdClass
    {
        return $this->get(
            url: "fixtures/head-to-head/{$teamA}/{$teamB}"
        );
    }

    public function searchByName(string $search): \stdClass
    {
        return $this->get(
            url: "fixtures/search/{$search}"
        );
    }

    public function upcomingByMarketId(int|string $id): \stdClass
    {
        return $this->get(
            url: "fixtures/upcoming/markets/{$id}"
        );
    }

    public function lastUpdated(): \stdClass
    {
        return $this->get(
            url: 'fixtures/latest'
        );
    }
}
