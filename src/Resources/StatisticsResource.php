<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class StatisticsResource extends BaseResource
{
    public function seasonStatisticsByParticipant(string $participant, int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/statistics/seasons/{$participant}/{$id}"
        );
    }

    public function stageStatisticsById(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/statistics/stages/{$id}"
        );
    }

    public function roundStatisticsById(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/statistics/rounds/{$id}"
        );
    }
}
