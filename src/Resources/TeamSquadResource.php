<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TeamSquadResource extends BaseResource
{
    public function byTeamId(int|string $id): array
    {
        return $this->get(
            url: "football/squads/teams/{$id}"
        );
    }

    public function byTeamIdAndSeasonId(int|string $teamId, int|string $seasonId): array
    {
        return $this->get(
            url: "football/squads/seasons/{$seasonId}/teams/{$teamId}"
        );
    }

    public function extendedByTeamId(int|string $teamId): array
    {
        return $this->get(
            url: "football/squads/teams/{$teamId}/extended"
        );
    }
}
