<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class StateResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/states'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/states/{$id}"
        );
    }
}
