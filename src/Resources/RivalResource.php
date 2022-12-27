<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class RivalResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'rivals'
        );
    }

    public function byTeamId(int|string $id): array
    {
        return $this->get(
            url: "teams/rivals/{$id}"
        );
    }
}
