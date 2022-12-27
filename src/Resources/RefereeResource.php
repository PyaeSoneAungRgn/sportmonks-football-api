<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class RefereeResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'referees'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "referees/{$id}"
        );
    }

    public function byCountryId(int|string $id): array
    {
        return $this->get(
            url: "referees/countries/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "referees/search/{$search}"
        );
    }
}
