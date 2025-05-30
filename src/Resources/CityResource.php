<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class CityResource extends BaseResource
{
    public function all(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'core/cities'
        );
    }

    public function byId(int|string $id): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "core/cities/{$id}"
        );
    }

    public function search(string $name): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: "core/cities/search/{$name}"
        );
    }
}
