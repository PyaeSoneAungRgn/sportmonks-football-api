<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class ScheduleResource extends BaseResource
{
    public function bySeasonId(int|string $id): array
    {
        return $this->get(
            url: "schedules/seasons/{$id}"
        );
    }

    public function byTeamId(int|string $id): array
    {
        return $this->get(
            url: "schedules/teams/{$id}"
        );
    }

    public function bySeasonIdAndTeamId(int|string $seasonId, int|string $teamId): array
    {
        return $this->get(
            url: "schedules/seasons/{$seasonId}/teams/{$teamId}"
        );
    }
}
