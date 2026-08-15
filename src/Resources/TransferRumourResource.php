<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class TransferRumourResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/transfer-rumours'
        );
    }

    public function byId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/transfer-rumours/{$id}"
        );
    }

    public function betweenDateRange(string $startDate, string $endDate): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/transfer-rumours/between/{$startDate}/{$endDate}"
        );
    }

    public function byTeamId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/transfer-rumours/teams/{$id}"
        );
    }

    public function byPlayerId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/transfer-rumours/players/{$id}"
        );
    }
}
