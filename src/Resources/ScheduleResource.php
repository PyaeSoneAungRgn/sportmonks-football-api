<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class ScheduleResource extends BaseResource
{
    public function bySeasonId(int|string $id): array
    {
        return $this->get(
            url: "football/schedules/seasons/{$id}"
        );
    }

    public function byTeamId(int|string $id): array
    {
        return $this->get(
            url: "football/schedules/teams/{$id}"
        );
    }

    public function bySeasonIdAndTeamId(int|string $seasonId, int|string $teamId): array
    {
        return $this->get(
            url: "football/schedules/seasons/{$seasonId}/teams/{$teamId}"
        );
    }
}
