<?php

namespace IgorLealAntunes\SportmonksFootballApi\Concerns;

trait CanSetFilter
{
    public function setFilter(string ...$filter): static
    {
        $this->query['filters'] = implode(';', $filter);

        return $this;
    }
}
