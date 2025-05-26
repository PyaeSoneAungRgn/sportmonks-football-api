<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class RefereeResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/referees'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/referees/{$id}"
        );
    }

    public function byCountryId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "football/referees/countries/{$id}"
        );
    }

    public function searchByName(string $search): array|Collection|Response
    {
        return $this->get(
            url: "football/referees/search/{$search}"
        );
    }
}
