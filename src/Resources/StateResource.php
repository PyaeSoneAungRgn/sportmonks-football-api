<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class StateResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'states'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "states/{$id}"
        );
    }
}
