<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class PredictionResource extends BaseResource
{
    public function probabilities(): array
    {
        return $this->get(
            url: 'predictions/probabilities'
        );
    }

    public function probabilitiesByLeagueId(int|string $id): array
    {
        return $this->get(
            url: "predictions/predictability/leagues/{$id}"
        );
    }

    public function probabilitiesByFixtureId(int|string $id): array
    {
        return $this->get(
            url: "predictions/probabilities/fixtures/{$id}"
        );
    }

    public function valueBets(): array
    {
        return $this->get(
            url: 'predictions/value-bets'
        );
    }
}
