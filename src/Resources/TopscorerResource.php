<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TopscorerResource extends BaseResource
{
    public function byStageId(int|string $id): \stdClass
    {
        return $this->get(
            url: "topscorers/stages/{$id}"
        );
    }

    public function bySeasonId(int|string $id): \stdClass
    {
        return $this->get(
            url: "topscorers/seasons/{$id}"
        );
    }
}
