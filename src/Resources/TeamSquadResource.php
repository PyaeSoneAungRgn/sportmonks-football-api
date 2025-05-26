<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class TeamSquadResource extends BaseResource
{
    public function byTeamId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/squads/teams/{$id}"
        );
    }

    public function byTeamIdAndSeasonId(int|string $teamId, int|string $seasonId): array|Collection|Response
    {
        return $this->get(
            url: "football/squads/seasons/{$seasonId}/teams/{$teamId}"
        );
    }

    public function extendedByTeamId(int|string $teamId): array|Collection|Response
    {
        return $this->get(
            url: "football/squads/teams/{$teamId}/extended"
        );
    }
}
