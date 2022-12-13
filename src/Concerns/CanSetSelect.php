<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;

trait CanSetSelect
{
    public function setSelect(string $select): SportmonksFootballApi
    {
        $this->query['select'] = $select;

        return $this;
    }
}
