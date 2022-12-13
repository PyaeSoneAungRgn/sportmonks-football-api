<?php

namespace PyaeSoneAung\SportmonksFootballApi\Concerns;

use PyaeSoneAung\SportmonksFootballApi\SportmonksFootballApi;

trait CanSetPage
{
    public function setPage(int $page): SportmonksFootballApi
    {
        $this->query['page'] = $page;

        return $this;
    }
}
