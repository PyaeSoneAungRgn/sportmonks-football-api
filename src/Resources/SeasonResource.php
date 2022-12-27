<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class SeasonResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'seasons'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "seasons/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "seasons/search/{$search}"
        );
    }
}
