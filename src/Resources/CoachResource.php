<?php

namespace IgorLealAntunes\SportmonksFootballApi\Resources;

class CoachResource extends BaseResource
{
    public function all(): \stdClass
    {
        return $this->get(
            url: 'coaches'
        );
    }

    public function byId(int|string $id): \stdClass
    {
        return $this->get(
            url: "coaches/{$id}"
        );
    }

    public function byCountryId(int|string $id): \stdClass
    {
        return $this->get(
            url: "coaches/countries/{$id}"
        );
    }

    public function searchByName(string $search): \stdClass
    {
        return $this->get(
            url: "coaches/search/{$search}"
        );
    }

    public function lastUpdated(): \stdClass
    {
        return $this->get(
            url: 'coaches/latest'
        );
    }
}
