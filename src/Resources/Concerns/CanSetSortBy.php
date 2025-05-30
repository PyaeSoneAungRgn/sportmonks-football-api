<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetSortBy
{
    public function setSortBy(string $sortBy): static
    {
        $this->query['sortBy'] = $sortBy;

        return $this;
    }
}
