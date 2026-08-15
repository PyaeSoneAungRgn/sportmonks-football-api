<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class PremiumExpectedLineupResource extends BaseResource
{
    public function byTeamId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/expected-lineups/teams/{$id}"
        );
    }

    public function byPlayerId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "football/expected-lineups/players/{$id}"
        );
    }
}
