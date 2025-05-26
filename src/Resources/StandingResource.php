<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class StandingResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/standings'
        );
    }

    public function bySeasonId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/standings/seasons/{$id}"
        );
    }

    public function byRoundId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/standings/rounds/{$id}"
        );
    }

    public function standingCorrectionBySeasonId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/standings/corrections/seasons/{$id}"
        );
    }

    public function liveStandingsByLeagueId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/standings/live/leagues/{$id}"
        );
    }
}
