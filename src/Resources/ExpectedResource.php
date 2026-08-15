<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class ExpectedResource extends BaseResource
{
    public function byTeam(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/expected/fixtures'
        );
    }

    public function byPlayer(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/expected/lineups'
        );
    }
}
