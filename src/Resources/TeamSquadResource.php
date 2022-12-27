<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TeamSquadResource extends BaseResource
{
    public function byTeamId(int|string $id): array
    {
        return $this->get(
            url: "squads/teams/{$id}"
        );
    }

    public function byTeamIdAndSeasonId(int|string $teamId, int|string $seasonId): array
    {
        return $this->get(
            url: "squads/seasons/{$seasonId}/teams/{$teamId}"
        );
    }
}
