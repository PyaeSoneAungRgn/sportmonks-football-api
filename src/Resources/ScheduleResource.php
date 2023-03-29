<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class ScheduleResource extends BaseResource
{
    public function bySeasonId(int|string $id): \stdClass
    {
        return $this->get(
            url: "schedules/seasons/{$id}"
        );
    }

    public function byTeamId(int|string $id): \stdClass
    {
        return $this->get(
            url: "schedules/teams/{$id}"
        );
    }

    public function bySeasonIdAndTeamId(int|string $seasonId, int|string $teamId): \stdClass
    {
        return $this->get(
            url: "schedules/seasons/{$seasonId}/teams/{$teamId}"
        );
    }
}
