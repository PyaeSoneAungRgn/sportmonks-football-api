<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;
use PyaeSoneAung\SportmonksFootballApi\DTO\ResponseDto;

class MyResource extends BaseResource
{
    public function enrichments(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'my/enrichments'
        );
    }

    public function resources(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'my/resources'
        );
    }

    public function leagues(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'my/leagues'
        );
    }

    public function usage(): array|Collection|Response|ResponseDto
    {
        return $this->get(
            url: 'my/usage'
        );
    }
}
