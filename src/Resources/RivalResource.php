<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class RivalResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'rivals'
        );
    }

    public function byTeamId(int|string $id): \stdClass
    {
        return $this->get(
            url: "teams/rivals/{$id}"
        );
    }
}
