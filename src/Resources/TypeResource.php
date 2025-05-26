<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Collection;

class TypeResource extends BaseResource
{
    public function all(): array|Collection|Response
    {
        return $this->get(
            url: 'core/types'
        );
    }

    public function byId(int|string $id): array|Collection|Response
    {
        return $this->get(
            url: "core/types/{$id}"
        );
    }

    public function byEntity(): array|Collection|Response
    {
        return $this->get(
            url: 'core/types/entities'
        );
    }
}
