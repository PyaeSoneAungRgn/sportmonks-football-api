<?php

namespace IgorLealAntunes\SportmonksFootballApi\Concerns;

trait CanSetFilter
{
    public function setFilter(string $filter): static
    {
        $this->query['filters'] = $filter;

        return $this;
    }
}
