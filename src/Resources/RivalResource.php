<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class RivalResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'football/rivals'
        );
    }
}
