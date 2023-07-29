<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TransferResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/transfers'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/transfers/{$id}"
        );
    }

    public function latestTransfers(): array
    {
        return $this->get(
            url: 'football/transfers/latest'
        );
    }

    public function betweenDateRange(string $startDate, string $endDate): array
    {
        return $this->get(
            url: "football/transfers/between/{$startDate}/{$endDate}"
        );
    }

    public function byTeamId(int|string $id): array
    {
        return $this->get(
            url: "football/transfers/teams/{$id}"
        );
    }

    public function byPlayerId(int|string $id): array
    {
        return $this->get(
            url: "football/transfers/players/{$id}"
        );
    }
}
