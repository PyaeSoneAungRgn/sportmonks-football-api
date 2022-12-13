<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;

trait CanSetInclude
{
    public function setInclude(string $include): SportmonksFootballApi
    {
        $this->query['include'] = $include;

        return $this;
    }
}
