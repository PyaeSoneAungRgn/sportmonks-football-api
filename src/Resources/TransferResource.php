<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TransferResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'transfers'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "transfers/{$id}"
        );
    }

    public function latestTransfers(): array
    {
        return $this->get(
            url: 'transfers/latest'
        );
    }

    public function betweenDateRange(string $startDate, string $endDate): array
    {
        return $this->get(
            url: "transfers/between/{$startDate}/{$endDate}"
        );
    }

    public function byTeamId(int|string $id): array
    {
        return $this->get(
            url: "transfers/teams/{$id}"
        );
    }

    public function byPlayerId(int|string $id): array
    {
        return $this->get(
            url: "transfers/players/{$id}"
        );
    }
}
