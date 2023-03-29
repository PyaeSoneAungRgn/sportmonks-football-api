<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class SeasonResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'seasons'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "seasons/{$id}"
        );
    }

    public function searchByName(string $search): \stdClass
    {
        return $this->get(
            url: "seasons/search/{$search}"
        );
    }
}
