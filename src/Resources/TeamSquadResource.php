<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class TeamSquadResource extends BaseResource
{
    public function byTeamId(int|string $id): \stdClass
    {
        return $this->get(
            url: "squads/teams/{$id}"
        );
    }

    public function byTeamIdAndSeasonId(int|string $teamId, int|string $seasonId): \stdClass
    {
        return $this->get(
            url: "squads/seasons/{$seasonId}/teams/{$teamId}"
        );
    }
}
