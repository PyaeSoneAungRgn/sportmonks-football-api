<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class PredictionResource extends BaseResource
{
    public function probabilities(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/predictions/probabilities'
        );
    }

    public function probabilitiesByLeagueId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/predictions/predictability/leagues/{$id}"
        );
    }

    public function probabilitiesByFixtureId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/predictions/probabilities/fixtures/{$id}"
        );
    }

    public function valueBets(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/predictions/value-bets'
        );
    }

    public function valueBetsByFixtureId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/predictions/value-bets/fixtures/{$id}"
        );
    }

    public function liveProbabilities(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/predictions/live/probabilities'
        );
    }

    public function liveProbabilitiesByFixtureId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/predictions/live/probabilities/fixtures/{$id}"
        );
    }
}
