<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;

trait CanSetFilter
{
    public function setFilter(string $filter): SportmonksFootballApi
    {
        $this->query['filter'] = $filter;

        return $this;
    }
}
