<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

trait CanSetFilter
{
    public function setFilter(string $filter): static
    {
        $this->query['filter'] = $filter;

        return $this;
    }
}
