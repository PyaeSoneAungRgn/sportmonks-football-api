<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class FixtureResource extends BaseResource
{
    public function all(): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: 'fixtures',
        );

        return $this->sanitizeResponse(response: $response);
    }

    public function byId(int|string $id): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: "fixtures/{$id}",
        );

        return $this->sanitizeResponse(response: $response);
    }

    public function byMultipleIds(array|string $ids): array
    {
        $ids = $this->toString(val: $ids);
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: "fixtures/multi/{$ids}",
        );

        return $this->sanitizeResponse(response: $response);
    }

    public function byDate(string $date): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: "fixtures/date/{$date}",
        );

        return $this->sanitizeResponse(response: $response);
    }

    public function byDateRange(string $startDate, string $endDate): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: "fixtures/between/{$startDate}/{$endDate}",
        );

        return $this->sanitizeResponse(response: $response);
    }

    public function byDateRangeForTeam(string $startDate, string $endDate, int|string $teamId): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: "fixtures/between/{$startDate}/{$endDate}/{$teamId}",
        );

        return $this->sanitizeResponse(response: $response);
    }

    public function byHeadToHead(int|string $teamA, int|string $teamB): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: "fixtures/head-to-head/{$teamA}/{$teamB}",
        );

        return $this->sanitizeResponse(response: $response);
    }

    public function bySearchByName(string $search): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: "fixtures/search/{$search}",
        );

        return $this->sanitizeResponse(response: $response);
    }

    public function upcomingByMarketId(int|string $marketId): array
    {
        $response = $this->service->get(
            client: $this->service->buildClient(),
            url: "fixtures/upcoming/markets/{$marketId}",
        );

        return $this->sanitizeResponse(response: $response);
    }
}
