<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class StandingResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'standings'
        );
    }

    public function bySeasonId(int|string $id): \stdClass
    {
        return $this->get(
            url: "standings/seasons/{$id}"
        );
    }

    public function byRoundId(int|string $id): \stdClass
    {
        return $this->get(
            url: "standings/rounds/{$id}"
        );
    }

    public function standingCorrectionBySeasonId(int|string $id): \stdClass
    {
        return $this->get(
            url: "standings/corrections/seasons/{$id}"
        );
    }

    public function liveStandingsByLeagueId(int|string $id): \stdClass
    {
        return $this->get(
            url: "standings/live/leagues/{$id}"
        );
    }
}
