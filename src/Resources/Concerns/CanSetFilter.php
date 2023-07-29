<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetFilter
{
    public function setFilter(string $filter): static
    {
        $this->query['filters'] = $filter;

        return $this;
    }
}
