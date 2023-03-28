<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class LivescoreResource extends BaseResource
{
    public function inplay(): \stdClass
    {
        return $this->get(
            url: 'livescores/inplay'
        );
    }

    public function all(): \stdClass
    {
        return $this->get(
            url: 'livescores'
        );
    }

    public function lastUpdated(): \stdClass
    {
        return $this->get(
            url: 'livescores/latest'
        );
    }
}
