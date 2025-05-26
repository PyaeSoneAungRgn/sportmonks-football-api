<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class TopscorerResource extends BaseResource
{
    public function byStageId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/topscorers/stages/{$id}"
        );
    }

    public function bySeasonId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/topscorers/seasons/{$id}"
        );
    }
}
