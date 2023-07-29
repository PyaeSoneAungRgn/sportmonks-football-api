<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class LivescoreResource extends BaseResource
{
    public function inplay(): array
    {
        return $this->get(
            url: 'football/livescores/inplay'
        );
    }

    public function all(): array
    {
        return $this->get(
            url: 'football/livescores'
        );
    }

    public function lastUpdated(): array
    {
        return $this->get(
            url: 'football/livescores/latest'
        );
    }
}
