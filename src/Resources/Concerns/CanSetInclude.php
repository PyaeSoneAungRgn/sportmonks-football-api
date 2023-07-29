<?php

namespace PyaeSoneAung\SportmonksFootballApi\Resources\Concerns;

trait CanSetInclude
{
    public function setInclude(string $include): static
    {
        $this->query['include'] = $include;

        return $this;
    }
}
