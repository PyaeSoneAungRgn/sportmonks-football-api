<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetSelect
{
    public function setSelect(string $select): static
    {
        $this->query['select'] = $select;

        return $this;
    }
}
