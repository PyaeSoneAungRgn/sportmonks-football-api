<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class TeamOfTheWeekResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/team-of-the-week'
        );
    }

    public function byRoundId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/team-of-the-week/rounds/{$id}"
        );
    }

    public function latestByLeagueId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/team-of-the-week/leagues/{$id}/latest"
        );
    }
}
