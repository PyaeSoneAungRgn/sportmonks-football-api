<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class StateResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'states'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "states/{$id}"
        );
    }
}
