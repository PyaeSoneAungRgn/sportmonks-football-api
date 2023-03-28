<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TransferResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'transfers'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "transfers/{$id}"
        );
    }

    public function latestTransfers(): \stdClass
    {
        return $this->get(
            url: 'transfers/latest'
        );
    }

    public function betweenDateRange(string $startDate, string $endDate): \stdClass
    {
        return $this->get(
            url: "transfers/between/{$startDate}/{$endDate}"
        );
    }

    public function byTeamId(int|string $id): \stdClass
    {
        return $this->get(
            url: "transfers/teams/{$id}"
        );
    }

    public function byPlayerId(int|string $id): \stdClass
    {
        return $this->get(
            url: "transfers/players/{$id}"
        );
    }
}
