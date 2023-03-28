<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class PredictionResource extends BaseResource
{
    public function probabilities(): \stdClass
    {
        return $this->get(
            url: 'predictions/probabilities'
        );
    }

    public function probabilitiesByLeagueId(int|string $id): \stdClass
    {
        return $this->get(
            url: "predictions/predictability/leagues/{$id}"
        );
    }

    public function probabilitiesByFixtureId(int|string $id): \stdClass
    {
        return $this->get(
            url: "predictions/probabilities/fixtures/{$id}"
        );
    }

    public function valueBets(): \stdClass
    {
        return $this->get(
            url: 'predictions/value-bets'
        );
    }

    public function valueBetsByFixtureId(int|string $id): \stdClass
    {
        return $this->get(
            url: "predictions/value-bets/fixture/{$id}"
        );
    }
}
