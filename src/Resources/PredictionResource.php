<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class PredictionResource extends BaseResource
{
    public function probabilities(): array|Collection|Response
    {
        return $this->get(
            url: 'football/predictions/probabilities'
        );
    }

    public function probabilitiesByLeagueId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/predictions/predictability/leagues/{$id}"
        );
    }

    public function probabilitiesByFixtureId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/predictions/probabilities/fixtures/{$id}"
        );
    }

    public function valueBets(): array|Collection|Response
    {
        return $this->get(
            url: 'football/predictions/value-bets'
        );
    }
}
