<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class LivescoreResource extends BaseResource
{
    public function inplay(): array|Collection|Response
    {
        return $this->get(
            url: 'football/livescores/inplay'
        );
    }

    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/livescores'
        );
    }

    public function lastUpdated(): array|Collection|Response
    {
        return $this->get(
            url: 'football/livescores/latest'
        );
    }
}
