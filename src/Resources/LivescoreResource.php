<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class LivescoreResource extends BaseResource
{
    public function inplay(): array
    {
        return $this->get(
            url: 'livescores/inplay'
        );
    }

    public function all(): array
    {
        return $this->get(
            url: 'livescores'
        );
    }

    public function lastUpdated(): array
    {
        return $this->get(
            url: 'livescores/latest'
        );
    }
}
