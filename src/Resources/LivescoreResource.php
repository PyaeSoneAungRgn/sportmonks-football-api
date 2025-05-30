<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class LivescoreResource extends BaseResource
{
    public function inplay(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/livescores/inplay'
        );
    }

    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/livescores'
        );
    }

    public function lastUpdated(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'football/livescores/latest'
        );
    }
}
