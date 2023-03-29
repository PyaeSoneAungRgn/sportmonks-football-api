<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class StageResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'stages'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "stages/{$id}"
        );
    }

    public function bySeasonId(int|string $id): \stdClass
    {
        return $this->get(
            url: "stages/seasons/{$id}"
        );
    }

    public function searchByName(string $search): \stdClass
    {
        return $this->get(
            url: "stages/search/{$search}"
        );
    }
}
