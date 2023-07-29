<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class RefereeResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'football/referees'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "football/referees/{$id}"
        );
    }

    public function byCountryId(int|string $id): array
    {
        return $this->get(
            url: "football/referees/countries/{$id}"
        );
    }

    public function searchByName(string $search): array
    {
        return $this->get(
            url: "football/referees/search/{$search}"
        );
    }
}
