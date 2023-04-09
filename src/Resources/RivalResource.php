<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources;

class RivalResource extends BaseResource
{
    public function all(): array
    {
        return $this->get(
            url: 'rivals'
        );
    }
}
