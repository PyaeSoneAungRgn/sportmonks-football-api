<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class TypeResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'core/regions'
        );
    }

    public function byId(int|string $id): array
    {
        return $this->get(
            url: "core/regions/{$id}"
        );
    }

    public function byEntity(): array
    {
        return $this->get(
            url: 'core/types/entities'
        );
    }
}
