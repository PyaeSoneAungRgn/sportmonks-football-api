<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

trait CanSetSelect
{
    public function setSelect(string $select): static
    {
        $this->query['select'] = $select;

        return $this;
    }
}
